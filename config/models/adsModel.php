<?php

 /*
 |--------------------------------------------------------------------------
 | adsModel
 |--------------------------------------------------------------------------
 |
 | All ads system functions are loaded from here.
 |
 */
 
  class loadingads{
  
  var $balance = "0.00000"; // default balance
  var $interval = "1 MONTH"; // default interval
  var $host = HOST; // URL
  var $referer = REFERER; // REFERER URL
  var $pfx = PFX; // DB perfix

 public function do_install(){

 if(!endsWith(ACCESS, INSTALL_FILE) && !endsWith(ACCESS, LICENSE_FILE) && !endsWith(ACCESS, DATABASE_FILE) && !endsWith(ACCESS, BUILD_FILE) && !endsWith(ACCESS, ADMIN_FILE)):

   header('location: installer/index');
 
  endif;

 }
 public function do_user($u){

 global $query;
 
  $user = $query->addquery('select','user','*','i', $u,'user_id=?');
  return $user;
 }
 public function do_lang($l){
     if(isset($_GET['locale'])){
         setcookie('locale', $_GET['locale'], time() + (86400 * 30), "/"); // 86400 = 1 day
         header('Location: '.$this->referer);
     }
     if(isset($_COOKIE['locale']) && !empty(trim($_COOKIE['locale']))){
         require_once(LOCALE.$_COOKIE['locale'].DS.'labels.php');
         require_once(LOCALE.$_COOKIE['locale'].DS.'messages.php');
         require_once(LOCALE.$_COOKIE['locale'].DS.'meta.php');
         require_once(LOCALE.$_COOKIE['locale'].DS.'label-php.php');
     } else {
         require_once(LOCALE.$l.DS.'labels.php');
         require_once(LOCALE.$l.DS.'messages.php');
         require_once(LOCALE.$l.DS.'meta.php');
         require_once(LOCALE.$l.DS.'label-php.php');
     }
 }
 public function do_host(){

 global $sr,$HOST,$info;

 if(DB_ERR && $info->install == 'on'):
  errorAndDie('Missing Database Parameter');
 endif;

 if (empty(trim(HOST))):
  $HOST = $sr->site_url();
 else:
  $HOST = HOST;
 endif;
 
 }
 public function limit_text($text, $limit) {
   //short text
      if (str_word_count($text, 0) > $limit) {
          $words = str_word_count($text, 2);
          $pos = array_keys($words);
          $text = substr($text, 0, $pos[$limit]) . '...';
      }
      return $text;
    }
 public function do_404(){
 global $smarty;
 
 $this->do_winfo('PAGE_NOT_FOUND');
 require_once (WWW_ROOT.'pages/404.php');
 exit;
}
 public function do_blocked_ip(){
     global $query;
     
     $ip_address = get_ip();
     $data = $query->addquery('select','banlist','*','si', "$ip_address,1",'ip_address=?,status=?');
	 if($data) {
	     return true;
	 }
 }
 public function do_username($id){
 
 global $query;
 
 $do = $query->addquery('select','user','username','i', $id,'user_id=?');
 return $do->username;
 
 }
 public function do_userinfo($id){
 
 global $query;
 
 $do = $query->addquery('select','user','*','i', $id,'user_id=?');
 
 return $do;
 
 }
 public function do_token($num){

 $tk = bin2hex(openssl_random_pseudo_bytes($num));
 return $tk;

}
 public function do_website($id,$clm){
     global $query;
     
   $data = $query->addquery('select','link',$clm,'i',$id,'id=?');
   return $data->$clm;
 }
 public function do_preview_ads($r=false){
 global $smarty,$query,$result,$user;

 if (!isset($_GET['type']) || !isset($_GET['size'])){
     echo '<b style="color:#FF0000;">SOMETHING WRONG.</b>';
     exit;
 }
 
 //preview banner

 $type = $_GET['type'];
 $size = $_GET['size'];
 $smarty->assign('size',$size);
 $smarty->assign('ad_type',$type);
 
 //default url
 if($type == 'img_banner'){
     if($r){
         //uploaded image
         $smarty->assign('url',do_config(61));
         $smarty->assign('image',base64_decode($_GET['image']));
     }else{
     //default image
     $smarty->assign('url',do_config(61));
     switch($size){
         case '728x90':
             $smarty->assign('image',do_config(67));
             break;
         case '468x60':
             $smarty->assign('image',do_config(68));
             break;
         case '300x250':
             $smarty->assign('image',do_config(69));
             break;
         case '300x600':
             $smarty->assign('image',do_config(70));
             break;
         case '120x600':
             $smarty->assign('image',do_config(71));
             break;
         case '200x200':
             $smarty->assign('image',do_config(72));
             break;
         case '125x125':
             $smarty->assign('image',do_config(73));
             break;
         case '690x500':
             $smarty->assign('image',do_config(74));
             break;
         }
     }
 }elseif($type == 'text_banner'){
     $smarty->assign('title',do_config(63));
     $smarty->assign('description',do_config(64));
     $smarty->assign('url',do_config(62));
     $smarty->assign('url_host',parse_url(do_config(62))['host']);
 }
 
 show('Banner/index');
 }
 public function do_banner_ads(){
 global $smarty,$query,$result,$user;
 if (isproxy(get_ip())){
     echo '<b style="color:#FF0000;">PROXY DETECTION.</b>';
     exit;
 }
 if (!isset($_GET['id'])){
     echo '<b style="color:#FF0000;">NOT ALLOWED.</b>';
     exit;
 }
 $created = date(('d'));
 $country = ip_visitor_country();
 $ip = get_ip();
 $dvc = detectDevice();
 $br = detectBrowser();
 
 //count ip(s)
 $un_clicks = $query->normal("select count(ip) as ipclicks from ".$this->pfx."stats where ip='$ip' AND clicks='1' AND ago > NOW() - INTERVAL 1 DAY");
 $ipclicks = $un_clicks->fetch_assoc();
     
 $un_views = $query->normal("select count(ip) as ipviews from ".$this->pfx."stats where ip='$ip' AND views='1' AND ago > NOW() - INTERVAL 1 DAY");
 $ipviews = $un_views->fetch_assoc();
     
 //view banner
 if(!isset($_GET['clicked'])){
     $zone = $query->addquery('select','zones','*','i',$_GET['id'],'id=?');
     if (!$zone){
         echo '<b style="color:#FF0000;">ZONE NOT FOUND.</b>';
         exit;
     }
     if ($zone->status != 1){
         echo '<b style="color:#FF0000;">INACTIVE ZONE.</b>';
         exit;
     }
/*
     $allowed_domains = array($this->do_website($zone->site_id,'url'));
     $allowed = false;
     foreach ($allowed_domains as $a) {
         if (preg_match("@https?://www.$a/.*@", $this->referer) || empty($this->referer)) {
             $allowed = true;
         } 
     }
     if (!$allowed) {
         echo '<b style="color:#FF0000;">ZONE NOT LINKED TO WEBSITE.</b>';
         exit;
     }
*/
    
     $ref = $query->addquery('select','user','parent_id','i',$zone->user_id,'user_id=?');
     $allowed = implode("','", json_decode($zone->filter));
     $fraud = $query->addquery('select','user','login_ip,register_ip','i',$zone->user_id,'user_id=?');
     
     //fetch a random campaign
     $campaign = $query->normal("select * from ".$this->pfx."campaigns where camp_type='$zone->ad_type' AND camp_size='$zone->size' AND status='1' AND filter IN ('$allowed') AND (camp_country LIKE '%$country->name%') AND (camp_device LIKE '%$dvc%') AND (camp_browser LIKE '%$br->name%') AND (camp_platform LIKE '%$br->platform%') ORDER BY RAND() LIMIT 1");
     $res = $campaign->fetch_assoc();
     if(!$res || $res == NULL){

         //No active campaign, Let's show the default campaign
         $smarty->assign('size',$zone->size);
         $smarty->assign('ad_type',$zone->ad_type);
         
         //default url
         if($zone->ad_type == 'img_banner'){
             $smarty->assign('url',do_config(61));
             //default image
             switch($zone->size){
             case '728x90':
                 $smarty->assign('image',do_config(67));
                 break;
             case '468x60':
                 $smarty->assign('image',do_config(68));
                 break;
             case '300x250':
                 $smarty->assign('image',do_config(69));
                 break;
             case '300x600':
                 $smarty->assign('image',do_config(70));
                 break;
             case '120x600':
                 $smarty->assign('image',do_config(71));
                 break;
             case '200x200':
                 $smarty->assign('image',do_config(72));
                 break;
             case '125x125':
                 $smarty->assign('image',do_config(73));
                 break;
             case '690x500':
                 $smarty->assign('image',do_config(74));
                 break;
         }
         }elseif($zone->ad_type == 'text_banner'){
             $smarty->assign('title',do_config(63));
             $smarty->assign('description',do_config(64));
             $smarty->assign('url',do_config(62));
             $smarty->assign('url_host',parse_url(do_config(62))['host']);
         }
     }else{
         $smarty->assign('id',$res['id']);
         $smarty->assign('site_id',$zone->site_id);
         $smarty->assign('size',$zone->size);
         $smarty->assign('ad_type',$zone->ad_type);
         $smarty->assign('url_host',parse_url($res['url'])['host']);
         $smarty->assign('title',$res['title']);
         $smarty->assign('image',HOST.UPD.$res['image']);
         $smarty->assign('description',$res['description']);
         $smarty->assign('url',HOST.'zones/banner/'.$res['id'].DS.$zone->token.DS);
     }
     if($res['camp_views'] == $res['views'] && $res['method'] == 'views'){
         //turn campaign status to completed
         $query->addquery('update','campaigns','status=?','ii',['3',$res['id']],'id=?');
         
         show('Banner/index');
         exit;
     }
     if($ipviews['ipviews'] < do_config(87)){
         $price_per_view = do_amount($res['camp_price'] / $res['camp_views'], false);
         $adm_earn = do_amount((do_config(40) / 100) * $price_per_view, false);
         $pub_earn = do_amount($price_per_view - $adm_earn, false);
         $ref_earn = do_amount((do_config(1) / 100) * $pub_earn, false);
      if($fraud->login_ip == $ip || $fraud->register_ip == $ip || isset($user->user_id) == $zone->user_id){
         $query->addquery('insert','stats','zone_id,pub_id,adv_id,url,ad_type,camp_id,ip,country,referer_domain,views,status,created','iiississsiis',[$zone->id,$zone->user_id,$res['user_id'],$res['url'],$res['camp_type'],$res['id'],$ip,$country->name,$this->do_website($zone->site_id,'url'),'1','4',$created]);
      }else{
         if($res['method'] == 'views'){
             $stat = $query->addquery('insert','stats','zone_id,pub_id,adv_id,url,ad_type,camp_id,ip,country,referer_domain,adm_earn,pub_earn,adv_spend,views,status,created','iiississssssiis',[$zone->id,$zone->user_id,$res['user_id'],$res['url'],$res['camp_type'],$res['id'],$ip,$country->name,$this->do_website($zone->site_id,'url'),$adm_earn,$pub_earn,$price_per_view,'1','1',$created]);
             $query->addquery('update','campaigns','price=price+?,views=views+?','siis',[$pub_earn,'1',$res['id'],'views'],'id=?,method=?');
             $query->addquery('update','zones','balance=balance+?,views=views+?','siii',[$pub_earn,'1',$res['id'],$zone->id,'1'],'id=?,status=?');
             $query->addquery('update','user','pub_earnings=pub_earnings+?','si',[$pub_earn,$zone->user_id],'user_id=?');
             if(do_config(39) == 1 && !empty(trim($ref->parent_id))){
                 $query->addquery('update','user','pub_earnings=pub_earnings+?,referral_earnings=referral_earnings+?','ssi',[$ref_earn,$ref_earn,$ref->parent_id],'user_id=?');
                 $query->addquery('update','stats','ref_earn=?','si',[$ref_earn,$stat],'id=?');
             }
         }else{
             $stat = $query->addquery('insert','stats','zone_id,pub_id,adv_id,url,ad_type,camp_id,ip,country,referer_domain,views,status,created','iiississsiis',[$zone->id,$zone->user_id,$res['user_id'],$res['url'],$res['camp_type'],$res['id'],$ip,$country->name,$this->do_website($zone->site_id,'url'),'1','1',$created]);
             $query->addquery('update','campaigns','views=views+?','ii',['1',$res['id']],'id=?');
             $query->addquery('update','zones','views=views+?','ii',['1',$zone->id],'id=?');
             }
      }
     }
     show('Banner/index');
 }
 
 //clicked banner
 if(isset($_GET['clicked'])){
     $zone = $query->addquery('select','zones','*','s',$_GET['clicked'],'token=?');
     if (!$zone){
         echo '<b style="color:#FF0000;">ZONE NOT FOUND.</b>';
         exit;
     }
     if ($zone->status != 1){
         echo '<b style="color:#FF0000;">INACTIVE ZONE.</b>';
         exit;
     }
     
     //campaign info
     $campaign = $query->addquery('select','campaigns','*','i',$_GET['id'],'id=?');
     if(!$campaign){

         //No active campaign, Let's redirect to the default campaign
         if($zone->ad_type == 'img_banner'){
             header('Location:'.do_config(61));
         }elseif($zone->ad_type == 'text_banner'){
             header('Location:'.do_config(62));
         }
         exit;
     }
     $ref = $query->addquery('select','user','parent_id','i',$zone->user_id,'user_id=?');
     $allowed = implode("','", json_decode($zone->filter));
     $fraud = $query->addquery('select','user','login_ip,register_ip','i',$zone->user_id,'user_id=?');
     
     if($campaign->camp_clicks == $campaign->clicks && $campaign->method == 'clicks'){
         //turn campaign status to completed
         $query->addquery('update','campaigns','status=?','ii',['3',$campaign->id],'id=?');
         
         //redirect to campaign url
         header('Location:'.$campaign->url);
         exit;
     }
     
     if($ipclicks['ipclicks'] < do_config(86)){
         $price_per_click = do_amount($campaign->camp_price / $campaign->camp_clicks, false);
         $adm_earn = do_amount((do_config(40) / 100) * $price_per_click, false);
         $pub_earn = do_amount($price_per_click - $adm_earn, false);
         $ref_earn = do_amount((do_config(1) / 100) * $pub_earn, false);
         
        //check fraud
      if($fraud->login_ip == $ip || $fraud->register_ip == $ip || $user->user_id == $zone->user_id){
         $query->addquery('insert','stats','zone_id,pub_id,adv_id,url,ad_type,camp_id,ip,country,referer_domain,clicks,status,created','iiississssis',[$zone->id,$zone->user_id,$campaign->user_id,$campaign->url,$campaign->camp_type,$campaign->id,$ip,$country->name,$this->do_website($zone->site_id,'url'),'1','4',$created]);
      }else{
         if($campaign->method == 'clicks'){
             $stat = $query->addquery('insert','stats','zone_id,pub_id,adv_id,url,ad_type,camp_id,ip,country,referer_domain,adm_earn,pub_earn,adv_spend,clicks,status,created','iiississssssiis',[$zone->id,$zone->user_id,$campaign->user_id,$campaign->url,$campaign->camp_type,$campaign->id,$ip,$country->name,$this->do_website($zone->site_id,'url'),$adm_earn,$pub_earn,$price_per_click,'1','1',$created]);
             $query->addquery('update','campaigns','price=price+?,clicks=clicks+?','sii',[$pub_earn,'1',$campaign->id],'id=?');
             $query->addquery('update','zones','balance=balance+?,clicks=clicks+?','sii',[$pub_earn,'1',$zone->id],'id=?');
             $query->addquery('update','user','pub_earnings=pub_earnings+?','si',[$pub_earn,$zone->user_id],'user_id=?');
             if(do_config(39) == 1 && !empty(trim($ref->parent_id))){
                 $query->addquery('update','user','pub_earnings=pub_earnings+?,referral_earnings=referral_earnings+?','ssi',[$ref_earn,$ref_earn,$ref->parent_id],'user_id=?');
                 $query->addquery('update','stats','ref_earn=?','si',[$ref_earn,$stat],'id=?');
             }
         }else{
                 $stat = $query->addquery('insert','stats','zone_id,pub_id,adv_id,url,ad_type,camp_id,ip,country,referer_domain,clicks,status,created','iiississsiis',[$zone->id,$zone->user_id,$campaign->user_id,$campaign->url,$campaign->camp_type,$campaign->id,$ip,$country->name,$this->do_website($zone->site_id,'url'),'1','1',$created]);
                 $query->addquery('update','campaigns','clicks=clicks+?','ii',['1',$campaign->id],'id=?');
                 $query->addquery('update','zones','clicks=clicks+?','ii',['1',$zone->id],'id=?');
         }
      }
     }
     
     //redirect to campaign url
     header('Location:'.$campaign->url);
     exit;
 }

 }
 public function do_direct_ads(){
 global $smarty,$query,$result,$user;
 if (isproxy(get_ip())){
     echo '<b style="color:#FF0000;">PROXY DETECTION.</b>';
     exit;
 }
 if (!isset($_GET['id'])){
     echo '<b style="color:#FF0000;">NOT ALLOWED.</b>';
     exit;
 }
 
 $created = date(('d'));
 $country = ip_visitor_country();
 $ip = get_ip();
 $dvc = detectDevice();
 $br = detectBrowser();
 
 //count ip(s)
 $un_clicks = $query->normal("select count(ip) as ipclicks from ".$this->pfx."stats where ip='$ip' AND clicks='1' AND ago > NOW() - INTERVAL 1 DAY");
 $ipclicks = $un_clicks->fetch_assoc();
 
 //view banner
 $zone = $query->addquery('select','zones','*','i',$_GET['id'],'id=?');
 if (!$zone){
         echo '<b style="color:#FF0000;">ZONE NOT FOUND.</b>';
         exit;
 }
 if ($zone->status != 1){
         echo '<b style="color:#FF0000;">INACTIVE ZONE.</b>';
         exit;
 }
 $ref = $query->addquery('select','user','parent_id','i',$zone->user_id,'user_id=?');
 $allowed = implode("','", json_decode($zone->filter));
 $fraud = $query->addquery('select','user','login_ip,register_ip','i',$zone->user_id,'user_id=?');
     
 //fetch a random campaign
 $campaign = $query->normal("select * from ".$this->pfx."campaigns where camp_type='$zone->ad_type' and status='1' and filter IN ('$allowed') AND (camp_country LIKE '%$country->name%') AND (camp_device LIKE '%$dvc%') AND (camp_browser LIKE '%$br->name%') AND (camp_platform LIKE '%$br->platform%') ORDER BY RAND() LIMIT 1");
 $res = $campaign->fetch_assoc();
 if(!$res || $res == NULL){
     
     //No active campaign, Let's redirect to the default campaign
     header('Location: '.do_config(66));
     exit;
 }
 if($res['camp_clicks'] == $res['clicks']){
     
     //turn campaign status to completed
     $query->addquery('update','campaigns','status=?','ii',['3',$res['id']],'id=?');
     
     header('Location: '.$res['url']);
     exit;
 }
 if($ipclicks['ipclicks'] < do_config(86)){
     $price_per_click = do_amount($res['camp_price'] / $res['camp_clicks'], false);
     $adm_earn = do_amount((do_config(40) / 100) * $price_per_click, false);
     $pub_earn = do_amount($price_per_click - $adm_earn, false);
     $ref_earn = do_amount((do_config(1) / 100) * $pub_earn, false);
     if($fraud->login_ip == $ip || $fraud->register_ip == $ip || $user->user_id == $zone->user_id){
         $query->addquery('insert','stats','zone_id,pub_id,adv_id,url,ad_type,camp_id,ip,country,referer_domain,clicks,status,created','iiississsiis',[$zone->id,$zone->user_id,$res['user_id'],$res['url'],$res['camp_type'],$res['id'],$ip,$country->name,$this->do_website($zone->site_id,'url'),'1','4',$created]);
     }else{
         $stat = $query->addquery('insert','stats','zone_id,pub_id,adv_id,url,ad_type,camp_id,ip,country,referer_domain,adm_earn,pub_earn,adv_spend,clicks,status,created','iiississssssiis',[$zone->id,$zone->user_id,$res['user_id'],$res['url'],$res['camp_type'],$res['id'],$ip,$country->name,$this->do_website($zone->site_id,'url'),$adm_earn,$pub_earn,$price_per_click,'1','1',$created]);
         $query->addquery('update','campaigns','price=price+?,clicks=clicks+?','sii',[$pub_earn,'1',$res['id']],'id=?');
         $query->addquery('update','zones','balance=balance+?,clicks=clicks+?','sii',[$pub_earn,'1',$zone->id],'id=?');
         $query->addquery('update','user','pub_earnings=pub_earnings+?','si',[$pub_earn,$zone->user_id],'user_id=?');
         if(do_config(39) == 1 && !empty(trim($ref->parent_id))){
             $query->addquery('update','user','pub_earnings=pub_earnings+?,referral_earnings=referral_earnings+?','ssi',[$ref_earn,$ref_earn,$ref->parent_id],'user_id=?');
             $query->addquery('update','stats','ref_earn=?','si',[$ref_earn,$stat],'id=?');
         }
     }
 }
 
 //redirect to campaign url
 header('Location:'.$res['url']);
 exit;

 }
 public function do_popup_ads(){
 global $smarty,$query,$result,$user;
 if (isproxy(get_ip())){
     echo '<b style="color:#FF0000;">PROXY DETECTION.</b>';
     exit;
 }
 if (!isset($_GET['id'])){
     echo '<b style="color:#FF0000;">NOT ALLOWED.</b>';
     exit;
 }

 $created = date(('d'));
 $country = ip_visitor_country();
 $ip = get_ip();
 $dvc = detectDevice();
 $br = detectBrowser();
 
 //count ip(s)
 $un_clicks = $query->normal("select count(ip) as ipclicks from ".$this->pfx."stats where ip='$ip' AND clicks='1' AND ago > NOW() - INTERVAL 1 DAY");
 $ipclicks = $un_clicks->fetch_assoc();
 
 //view
 if(!isset($_GET['clicked'])){
     //fetch zone
     $zone = $query->addquery('select','zones','*','i',$_GET['id'],'id=?');
     if (!$zone){
         echo '<b style="color:#FF0000;">ZONE NOT FOUND.</b>';
         exit;
     }
     if ($zone->status != 1){
         echo '<b style="color:#FF0000;">INACTIVE ZONE.</b>';
         exit;
     }
     $ref = $query->addquery('select','user','parent_id','i',$zone->user_id,'user_id=?');
     $allowed = implode("','", json_decode($zone->filter));
     $fraud = $query->addquery('select','user','login_ip,register_ip','i',$zone->user_id,'user_id=?');
     
     //fetch a random campaign
     $campaign = $query->normal("select * from ".$this->pfx."campaigns where camp_type='$zone->ad_type' and status='1' and filter IN ('$allowed') AND (camp_country LIKE '%$country->name%') AND (camp_device LIKE '%$dvc%') AND (camp_browser LIKE '%$br->name%') AND (camp_platform LIKE '%$br->platform%') ORDER BY RAND() LIMIT 1");
     $res = $campaign->fetch_assoc();
     $url = $this->host.'zones/popup/'.$res['id'].DS.$zone->token.DS;

     if(!$res || $res == NULL){
         //No active campaign, Let's show the default campaign
         if ( !isset($_COOKIE['pop_seen'])){
             header("Content-Type: application/javascript");
         
             echo 'var homepage = document.querySelector("body");';
             echo 'var popUp = function(e) {
             window.open ("'.do_config(65).'", "Window","status=1,toolbar=1,width='.do_config(75).',height='.do_config(76).',top=300,left=250,resizable=yes");
             homepage.removeEventListener("click", popUp, false);
             }';
             echo 'homepage.addEventListener("click", popUp, false);';
         }
         exit;
     }
     
     //show popup if visitor doesn't seen it yet 
     if ( !isset($_COOKIE['pop_seen'])){
         header("Content-Type: application/javascript");
     
         echo 'var homepage = document.querySelector("body");

         var popUp = function(e) {
         window.open ("'.$url.'", "Window","status=1,toolbar=1,width='.do_config(75).',height='.do_config(76).',top=300,left=250,resizable=yes");
         homepage.removeEventListener("click", popUp, false);
         }
         homepage.addEventListener("click", popUp, false);';
         exit;
     }
 }
 
 //clicked
 if(isset($_GET['clicked'])){
     $zone = $query->addquery('select','zones','*','s',$_GET['clicked'],'token=?');
     if (!$zone){
         echo '<b style="color:#FF0000;">ZONE NOT FOUND.</b>';
         exit;
     }
     if ($zone->status != 1){
         echo '<b style="color:#FF0000;">INACTIVE ZONE.</b>';
         exit;
     }
    
     //set cookie
     setcookie('pop_seen', 1, time()+ 60*do_config(77), '/', $_SERVER['HTTP_HOST']);
 
     //campaign info
     $campaign = $query->addquery('select','campaigns','*','i',$_GET['id'],'id=?');
     if(!$campaign){

         //No active campaign, Let's redirect to the default campaign
         header('Location:'.do_config(65));
         exit;
     }
     $ref = $query->addquery('select','user','parent_id','i',$zone->user_id,'user_id=?');
     $allowed = implode("','", json_decode($zone->filter));
     $fraud = $query->addquery('select','user','login_ip,register_ip','i',$zone->user_id,'user_id=?');

    if($campaign->camp_clicks == $campaign->clicks){
        //turn campaign status to completed
        $query->addquery('update','campaigns','status=?','ii',['3',$campaign->id],'id=?');
        header('location:'. $campaign->url);
        exit;
    }
    if($ipclicks['ipclicks'] < do_config(86)){
        $price_per_click = do_amount($campaign->camp_price / $campaign->camp_clicks, false);
        $adm_earn = do_amount((do_config(40) / 100) * $price_per_click, false);
        $pub_earn = do_amount($price_per_click - $adm_earn, false);
        $ref_earn = do_amount((do_config(1) / 100) * $pub_earn, false);
        
        if($fraud->login_ip == $ip || $fraud->register_ip == $ip || isset($user->user_id) == $zone->user_id){
            $query->addquery('insert','stats','zone_id,pub_id,adv_id,url,ad_type,camp_id,ip,country,referer_domain,clicks,status','iiississsii',[$zone->id,$zone->user_id,$campaign->user_id,$campaign->url,$campaign->camp_type,$campaign->id,$ip,$country->name,$this->do_website($zone->site_id,'url'),'1','4']);
        }else{
            $stat = $query->addquery('insert','stats','zone_id,pub_id,adv_id,url,ad_type,camp_id,ip,country,referer_domain,adm_earn,pub_earn,adv_spend,clicks,status','iiississssssii',[$zone->id,$zone->user_id,$campaign->user_id,$campaign->url,$campaign->camp_type,$campaign->id,$ip,$country->name,$this->do_website($zone->site_id,'url'),$adm_earn,$pub_earn,$price_per_click,'1','1']);
            $query->addquery('update','campaigns','price=price+?,clicks=clicks+?','sii',[$pub_earn,'1',$campaign->id],'id=?');
            $query->addquery('update','zones','balance=balance+?,clicks=clicks+?','sii',[$pub_earn,'1',$zone->id],'id=?');
            $query->addquery('update','user','pub_earnings=pub_earnings+?','si',[$pub_earn,$zone->user_id],'user_id=?');
            if(do_config(39) == 1 && !empty(trim($ref->parent_id))){
                $query->addquery('update','user','pub_earnings=pub_earnings+?,referral_earnings=referral_earnings+?','ssi',[$ref_earn,$ref_earn,$ref->parent_id],'user_id=?');
                $query->addquery('update','stats','ref_earn=?','si',[$ref_earn,$stat],'id=?');
            }
        }
    }
    
    header('location:'. $campaign->url);
    exit;
 }

 }
}
 
  $ads = new loadingads;