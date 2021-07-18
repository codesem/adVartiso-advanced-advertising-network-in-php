<?php

  class functionModel{
  
  var $balance = "0.00000"; // default balance
  var $interval = "1 MONTH"; // default interval
  var $host = HOST; // URL
  var $referer = REFERER ?: HOST; // REFERER URL
  var $pfx = PFX; // DB perfix
  var $allowed =  ["jpeg" => "image/jpeg", "png" => "image/png", "jpg" => "image/jpg"]; // allowed extension
  var $imglink; // image link
  var $maxsize = 50 * 1024 * 1024; // max size
      
 public function do_install(){

 if(!endsWith(ACCESS, INSTALL_FILE) && !endsWith(ACCESS, LICENSE_FILE) && !endsWith(ACCESS, DATABASE_FILE) && !endsWith(ACCESS, BUILD_FILE) && !endsWith(ACCESS, ADMIN_FILE)):

   header('location: installer/index');
 
  endif;

 }
 public function do_complete_update(){
 global $query,$dateForm;

  if ($this->do_post($this->do_arrp('complete','csrf'),'*','complete')){
    echo '<center><h3>Update Completed! Redirecting you in 3 sec....</h3></center>';
        
    header('refresh:3;url='.$this->host.'admin/dashboard');
    exit;
  }
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
  $HOST = sitePRCL().$_SERVER['HTTP_HOST'].DS;
 else:
  $HOST = HOST;
 endif;
 
 }
 public function ago($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
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
 public function do_required($n){

    if( empty(trim($_POST[$n]))):
       session_acv('req_'.$n,'re_'.$n);
       quick();
    endif;
}
 public function do_arrp($n,$arr){
 
 if(isset($_POST[$n])):
 
  $arr = explode(',',$arr);
  $array = array();
 
  for($i=0; $i < count($arr); $i++):
   $build =  $_POST[$arr[$i]];
   array_push($array, $build);
  endfor;
  
    return $array;
    
 endif;
 
}
 public function do_alexa_rank($url){
     return 'https://www.alexa.com/siteinfo/'.$url;
 }
 public function do_username_availability(){
     global $query;
     
     if(isset($_POST['username']) && !empty(trim($_POST['username']))){
         $protected = explode(',',do_config(11));
         
         if(strlen($_POST['username']) < 4){
             //username smaller
             echo '<b class="red-color"> '.$this->do_label('USERNAME_MUST_BE_LONGER').'</b>';
             exit;
         }
         if(preg_match('/\s/',$_POST['username'])){
             //username contain whitespace
             echo '<b class="red-color"> '.$this->do_label('USERNAME_MUST_NOT_CONTAIN_WHITESPACE').'</b>';
             exit;
         }
         if(in_array($_POST['username'], $protected)){
             //username protected
             echo '<b class="red-color"> '.$this->do_label('USERNAME_NOT_AVAILABLE').'</b>';
             exit;
         }
         $data = $query->num_rows('user','*','s',check_request('username'),'username=?');
         if($data > 0) {
             //username taken
             echo '<b class="red-color"> '.$this->do_label('USERNAME_NOT_AVAILABLE').'</b>';
         }else{
             //username available
             echo '<b class="green-color"> '.$this->do_label('USERNAME_AVAILABLE').'</b>';
         }
         
    }
 }
 public function do_grabe_template(){
     global $query;
     if(isset($_POST['id'])){
         $id = $_POST['id'];
         $data = $query->addquery('select','templates','*','i',$id,'id=?');
         if($data){
             echo '<div class="form-group">
                     <div class="col-md-10">
                          <input type="text" name="title" class="form-control" value="'.$data->title.'" readonly>
                     </div>
                   </div>';
             echo '<div class="form-group">
                    <div class="col-md-10">
                          <textarea type="text" name="description" class="form-control" readonly>'.$data->description.'</textarea>
                    </div>
                   </div>';
             echo '<div class="form-group">
                     <div class="col-md-10">
                          <input type="url" name="url" class="form-control" value="'.$data->link.'" readonly>
                     </div>
                   </div>';
         }
     }
 }
 public function do_grabe_preview(){
     global $query;
     if(isset($_POST['size']) && !empty(trim($_POST['size']))){
             $size = $_POST['size'];
             $type = $_POST['type'];
             echo '<iframe src="'.$this->host.ZN.'preview/'.$type.DS.$size.DS.'" scrolling="no" style="'.do_size($size,'iframe').'border:0px;padding:0px;overflow:hidden;" allowtransparency="true"></iframe>';
     }
 }
 public function do_grabe_sizes(){
     global $query;
     if(isset($_POST['type']) && !empty(trim($_POST['type']))){
             $type = $_POST['type'];
             switch($type){
                 default:
                 echo '<div class="form-group">
                          <div class="col-sm-10">
                              <select name="size" class="form-control">';
                              /* availble sizes */
                              foreach (explode(',',do_config(20)) as $size) {
                                  echo '<option value="'.$size.'">'.$size.'</option>';
                              }
                 
                 echo '</select>
                       </div></div>';
                     break;
                 case 'popup':
                     echo '</br>';
                     break;
                 case 'direct':
                     echo '</br>';
                     break;
             }
         }
 }
 public function do_grabe_countries(){
     global $query;
     if(isset($_POST['country-type']) && !empty(trim($_POST['country-type']))){
             $type = $_POST['country-type'];
             switch($type){
                 default:
                 echo '<h5 class="font-13">'.$this->do_label('MULTIPLE_SELECT').'</h5>
                              <select name="countries[]" multiple="" class="form-control">';
                              /* availble countries */
                              foreach (explode(',',do_config(22)) as $country) {
                                  echo '<option value="'.trim($country).'">'.trim($country).'</option>';
                              }
                 
                 echo '</select>';
                     break;
                 case 'all':
                     echo '</br>';
                     break;
             }
         }
 }
 public function do_grabe_browsers(){
     global $query;
     if(isset($_POST['browser-type']) && !empty(trim($_POST['browser-type']))){
             $type = $_POST['browser-type'];
             switch($type){
                 default:
                 echo '<h5 class="font-13">'.$this->do_label('MULTIPLE_SELECT').'</h5>
                              <select name="browsers[]" multiple="" class="form-control">';
                              /* availble browser */
                              foreach (explode(',',do_config(84)) as $browser) {
                                  echo '<option value="'.trim($browser).'">'.trim($browser).'</option>';
                              }
                 
                 echo '</select>';
                     break;
                 case 'all':
                     echo '</br>';
                     break;
             }
         }
 }
 public function do_grabe_platforms(){
     global $query;
     if(isset($_POST['platform-type']) && !empty(trim($_POST['platform-type']))){
             $type = $_POST['platform-type'];
             switch($type){
                 default:
                 echo '<h5 class="font-13">'.$this->do_label('MULTIPLE_SELECT').'</h5>
                              <select name="platforms[]" multiple="" class="form-control">';
                              /* availble browser */
                              foreach (explode(',',do_config(85)) as $platform) {
                                  echo '<option value="'.trim($platform).'">'.trim($platform).'</option>';
                              }
                 
                 echo '</select>';
                     break;
                 case 'all':
                     echo '</br>';
                     break;
             }
         }
 }
 public function do_price_data(){
     global $query;
     
     if(isset($_POST['order'])){
         
         $order = $_POST['order'];
         switch($_POST['type']){
             case 'img_banner':
                 if($_POST['method'] == 'views'){
                     if($order < do_config(37)){
                         //order less then 
                         echo '<i class="fa fa-warning"></i> '.$this->do_label('ORDER_LESS_THEN_MUNIMUM');
                         exit;
                     }
                     //cost per mile
                     $price = do_amount((do_config(48) * $order) / 1000,false);
                 }elseif($_POST['method'] == 'clicks'){
                     if($order < do_config(37)){
                         //order less then 
                         echo '<i class="fa fa-warning"></i> '.$this->do_label('ORDER_LESS_THEN_MUNIMUM');
                         exit;
                     }
                     //cost per click
                     $price = do_amount((do_config(49) * $order),false);
                 }
                 break;
             case 'text_banner':
                 
                 if($_POST['method'] == 'views'){
                     if($order < do_config(37)){
                         //order less then 
                         echo '<i class="fa fa-warning"></i> '.$this->do_label('ORDER_LESS_THEN_MUNIMUM');
                         exit;
                     }
                     //cost per mile
                     $price = do_amount((do_config(45) * $order) / 1000,false);
                 }elseif($_POST['method'] == 'clicks'){
                     if($order < do_config(37)){
                         //order less then 
                         echo '<i class="fa fa-warning"></i> '.$this->do_label('ORDER_LESS_THEN_MUNIMUM');
                         exit;
                     }
                     //cost per click
                     $price = do_amount((do_config(46) * $order),false);
                 }
                 break;
             case 'popup':
                 if($order < do_config(37)){
                     //order less then 
                     echo '<i class="fa fa-warning"></i> '.$this->do_label('ORDER_LESS_THEN_MUNIMUM');
                     exit;
                 }
                 
                 //cost per click
                 $price = do_amount((do_config(47) * $order),false);
                 break;
             case 'direct':
                 if($order < do_config(37)){
                     //order less then 
                     echo '<i class="fa fa-warning"></i> '.$this->do_label('ORDER_LESS_THEN_MUNIMUM');
                     exit;
                 }
                 //cost per click
                 $price = do_amount((do_config(44) * $order),false);
                 break;
         }
         
         echo do_amount($price);
         exit;
    }
 }
 public function do_camp_method(){
     global $query;
     
     if(isset($_POST['method'])){
         
         $method = $_POST['method'];
         switch($_POST['type']){
             case 'img_banner':
                 if($method == 'CPM'){
                     echo '<input type="number" name="views" class="form-control" placeholder="Order Views" min="'.do_config(36).'" step="10" value="'.do_config(36).'"  id="order" onkeyup="priceData('."'img_banner','views'".')" onBlur="priceData('."'img_banner','views'".')" required>
                     <span class="badge badge-danger">'.$this->do_label('CPM').': '.do_amount(do_config(48)).'</span>';
                 }elseif($_POST['method'] == 'CPC'){
                     echo '<input type="number" name="clicks" class="form-control" placeholder="Order Clicks" min="'.do_config(37).'" step="10" value="'.do_config(37).'"  id="order" onkeyup="priceData('."'img_banner','clicks'".')" onBlur="priceData('."'img_banner','clicks'".')" required>
                     <span class="badge badge-danger">'.$this->do_label('CPC').': '.do_amount(do_config(49)).'</span>';
                 }
                 break;
             case 'text_banner':
                 if($method == 'CPM'){
                     echo '<input type="number" name="views" class="form-control" placeholder="Order Views" min="'.do_config(36).'" step="10" value="'.do_config(36).'"  id="order" onkeyup="priceData('."'text_banner','views'".')" onBlur="priceData('."'text_banner','views'".')" required>
                     <span class="badge badge-danger">'.$this->do_label('CPM').': '.do_amount(do_config(45)).'</span>';
                 }elseif($_POST['method'] == 'CPC'){
                     echo '<input type="number" name="clicks" class="form-control" placeholder="Order Clicks" min="'.do_config(37).'" step="10" value="'.do_config(37).'"  id="order" onkeyup="priceData('."'text_banner','clicks'".')" onBlur="priceData('."'text_banner','clicks'".')" required>
                     <span class="badge badge-danger">'.$this->do_label('CPC').': '.do_amount(do_config(46)).'</span>';
                 }
                 break;
         }
    }
 }
 public function do_read_notifications(){
     global $query,$user;
     if(isset($_POST['read']) && !empty(trim($_POST['read']))){
         if($_POST['read'] == 'all'){
            $query->normal("update ".$this->pfx."notifications set isread='1' WHERE (user_id='$user->user_id') OR (user_id='0')");
            //output
            echo 0;
            exit;
         }
    }
 }
 public function do_blocked_ip(){
     global $query;
     
     $ip_address = get_ip();
     $data = $query->addquery('select','banlist','*','si', "$ip_address,2",'ip_address=?,status=?');
	 if($data) {
	     return true;
	 }
 }
 public function do_banlist(){

 global $smarty,$query,$result;

  $data = $query->limit('banlist','*','id','desc',$result['start'].','.$result['perpage']);
  paging($result['screen']+1,ceil($query->num_rows('banlist','*')/$result['perpage'])+1,'?p=');
 
 $with = array();
 
 while($res=$data->fetch_assoc()):
    $ar=array('id'=>$res['id'],'ip_address'=>$res['ip_address'],'reason'=>$res['reason'],'status'=>$res['status'],'created'=>$res['created']);
    array_push($with,$ar);
 endwhile;
 $smarty->assign('banlist',$with);
 alerts('ip','added');

 }
 public function do_notifications(){

 global $smarty,$query,$result,$user;
 
  if(contains(ACCESS, '/member/')) {
      $data = $query->normal("SELECT * FROM ".$this->pfx."notifications WHERE user_id='$user->user_id' AND status='1' AND role='publisher' ORDER BY id desc LIMIT 8");
      $number = $query->normal("SELECT * FROM ".$this->pfx."notifications WHERE user_id='$user->user_id' AND status='1' AND role='publisher' AND isread='2' ORDER BY id desc LIMIT 8");
  }elseif(contains(ACCESS, '/advertiser/')){
      $data = $query->normal("SELECT * FROM ".$this->pfx."notifications WHERE user_id='$user->user_id' AND status='1' AND role='advertiser' ORDER BY id desc LIMIT 8");
      $number = $query->normal("SELECT * FROM ".$this->pfx."notifications WHERE user_id='$user->user_id' AND status='1' AND role='advertiser' AND isread='2' ORDER BY id desc LIMIT 8");
  }else{
      $data = $query->normal("SELECT * FROM ".$this->pfx."notifications WHERE user_id='$user->user_id' AND status='1' ORDER BY id desc LIMIT 8");
      $number = $query->normal("SELECT * FROM ".$this->pfx."notifications WHERE user_id='$user->user_id' AND status='1' AND isread='2' ORDER BY id desc LIMIT 8");
  }
 $with = array();
 
 while($res=$data->fetch_assoc()):
 $ar=array('id'=>$res['id'],'title'=>$res['title'],'type'=>$res['type'],'amount'=>$res['amount'],'status'=>$res['status']);
 array_push($with,$ar);
 endwhile;
 
  $smarty->assign('notifications',$with);
  $smarty->assign('notifications_num',$number->num_rows);
}
 public function do_fetch_withdraw_methods(){

 global $smarty,$query,$result;
 
 $data = $query->limit('withdraw_methods','*','id','asc',$result['start'].',100','i',1,'status=?');
 $with = array();
 while($res=$data->fetch_assoc()){
       $ar=array('id'=>$res['id'],'name'=>$res['name'],'minimum'=>$res['minimum']);
       array_push($with,$ar);
 }
 $smarty->assign('withdraw_methods',$with);
 }
 public function do_alluser_templates(){
 global $smarty,$query,$result,$user;
 
  $data = $query->limit('templates','*','id','asc',$result['start'].',100','ii',"$user->user_id,1",'user_id=?,status=?');
  paging($result['screen']+1,ceil($query->num_rows('templates','*','ii',"$user->user_id,1",'user_id=?,status=?')/$result['perpage'])+1,'?p=');
 
 $with = array();
 while($res=$data->fetch_assoc()){
       $ar=array('id'=>$res['id'],'name'=>$res['name']);
       array_push($with,$ar);
 }
 $smarty->assign('templates',$with);
 }
 public function do_fetch_categories(){

 global $smarty,$query,$result;
 
  $data = $query->limit('categories','*','id','asc',$result['start'].',100','i',1,'status=?');
  paging($result['screen']+1,ceil($query->num_rows('categories','*','i',1,'status=?')/$result['perpage'])+1,'?p=');
 
 $with = array();
 while($res=$data->fetch_assoc()){
       $ar=array('id'=>$res['id'],'name'=>$res['name'],'status'=>$res['status'],'created'=>$res['created']);
       array_push($with,$ar);
 }
 $smarty->assign('categories',$with);
 }
 public function do_alluser_websites(){


 global $smarty,$query,$result,$user;
 
  $data = $query->limit('link','*','id','asc',$result['start'].',100','i',$user->user_id,'user_id=?');
  paging($result['screen']+1,ceil($query->num_rows('link','*','i',$user->user_id,'user_id=?')/$result['perpage'])+1,'?p=');
 
 $with = array();
 while($res=$data->fetch_assoc()){
       $ar=array('id'=>$res['id'],'url'=>$res['url'],'status'=>$res['status']);
       array_push($with,$ar);
 }
 $smarty->assign('websites',$with);
 }
 public function do_alluser_campaigns(){
 global $smarty,$query,$result,$user;
 
  $data = $query->limit('campaigns','*','id','desc',$result['start'].',100','i',$user->user_id,'user_id=?');
  paging($result['screen']+1,ceil($query->num_rows('campaigns','*','i',$user->user_id,'user_id=?')/$result['perpage'])+1,'?p=');
 
 $with = array();
 while($res=$data->fetch_assoc()){
       $ar=array('id'=>$res['id'],'title'=>$res['title'],'camp_type'=>$res['camp_type'],'status'=>$res['status']);
       array_push($with,$ar);
 }
 $smarty->assign('campaigns',$with);
 }
 public function do_alluser_zones(){
 global $smarty,$query,$result,$user;
 
  $data = $query->limit('zones','*','id','desc',$result['start'].',100','i',$user->user_id,'user_id=?');
  paging($result['screen']+1,ceil($query->num_rows('zones','*','i',$user->user_id,'user_id=?')/$result['perpage'])+1,'?p=');
 
 $with = array();
 while($res=$data->fetch_assoc()){
       $ar=array('id'=>$res['id'],'name'=>$res['name'],'type'=>$res['ad_type'],'status'=>$res['status']);
       array_push($with,$ar);
 }
 $smarty->assign('zones',$with);
 }
 public function do_all_campaigns(){
 global $smarty,$query,$result;
 
 $data = $query->limit('campaigns','*','id','desc',$result['start'].',1000');
 $with = array();
 while($res=$data->fetch_assoc()){
       $ar=array('id'=>$res['id'],'title'=>$res['title'],'camp_type'=>$res['camp_type'],'status'=>$res['status']);
       array_push($with,$ar);
 }
 $smarty->assign('campaigns',$with);
 }
 public function do_fetch_referrals(){

 global $smarty,$query,$result,$user;
 
  $data = $query->limit('user','*','user_id','desc',$result['start'].','.$result['perpage'],'i',$user->user_id,'parent_id=?');
  paging($result['screen']+1,ceil($query->num_rows('user','*','i',$user->user_id,'parent_id=?')/$result['perpage'])+1,'?p=');
 
 $with = array();
 while($res=$data->fetch_assoc()){
       $ar=array('id'=>$res['user_id'],'username'=>$res['username'],'status'=>$res['status'],'created'=>$res['created']);
       array_push($with,$ar);
 }
 $smarty->assign('referrals',$with);
 }
 public function do_websites(){

 global $smarty,$query,$result;
 
 if(isset($_GET['search'])){
     $search = trim($_GET['search']);
     $input = trim($_GET['data']);
     $smarty->assign('data',$input);
     $smarty->assign('search',$search);
     $data = $query->limit('link','*','id','desc',$result['start'].','.$result['perpage'],'s',$input,$search.'=?');
     paging($result['screen']+1,ceil($query->num_rows('link','*','s',$input,$search.'=?')/$result['perpage'])+1,'?search='.$search.'&data='.$input.'&p=');
 } else {
     $data = $query->limit('link','*','id','desc',$result['start'].','.$result['perpage']);
     paging($result['screen']+1,ceil($query->num_rows('link','*')/$result['perpage'])+1,'?p=');
 }
 
 $with = array();
 while($res=$data->fetch_assoc()){
       $ar=array('id'=>$res['id'],'user_id'=>$res['user_id'],'url'=>$res['url'],'rank'=>$this->do_alexa_rank($res['url']),'category'=>$this->do_category($res['cat_id']),'status'=>$res['status'],'created'=>$res['created']);
       array_push($with,$ar);
 }
 $smarty->assign('websites',$with);
 }
 public function do_fetch_websites(){

 global $smarty,$query,$result,$user;
 
 if(isset($_GET['search'])){
     $search = trim($_GET['search']);
     $input = trim($_GET['data']);
     $smarty->assign('data',$input);
     $smarty->assign('search',$search);
     $data = $query->limit('link','*','id','desc',$result['start'].','.$result['perpage'],'si',"$input,$user->user_id",$search.'=?,user_id=?');
     paging($result['screen']+1,ceil($query->num_rows('link','*','si',"$input,$user->user_id",$search.'=?,user_id=?')/$result['perpage'])+1,'?search='.$search.'&data='.$input.'&p=');
 } else {
     $data = $query->limit('link','*','id','desc',$result['start'].','.$result['perpage'],'i',$user->user_id,'user_id=?');
     paging($result['screen']+1,ceil($query->num_rows('link','*','i',$user->user_id,'user_id=?')/$result['perpage'])+1,'?p=');
 }
 
 $with = array();
 while($res=$data->fetch_assoc()){
       $ar=array('id'=>$res['id'],'user_id'=>$res['user_id'],'url'=>$res['url'],'category'=>$this->do_category($res['cat_id']),'status'=>$res['status'],'created'=>$res['created']);
       array_push($with,$ar);
 }
 $smarty->assign('websites',$with);
 }
 public function do_withdraw_history(){

 global $smarty,$query,$result,$user;
 
  $smarty->assign('history',true);
  $data = $query->limit('withdrawal','*','id','desc',$result['start'].','.$result['perpage'],'i',$user->user_id,'user_id=?');
  paging($result['screen']+1,ceil($query->num_rows('withdrawal','*','i',$user->user_id,'user_id=?')/$result['perpage'])+1,'?p=');
 
 $with = array();
 while($res=$data->fetch_assoc()){
       $ar=array('id'=>$res['id'],'user_id'=>$res['user_id'],'amount'=>$res['amount'],'account'=>$res['account'],'fee'=>$res['fee'],'method'=>$this->do_with_method($res['method_id'],'name'),'status'=>$res['status'],'created'=>$res['created']);
       array_push($with,$ar);
 }
 $smarty->assign('withdraws',$with);
 alerts('withdraw','scheduled');
 }
 public function do_withdraws(){

 global $smarty,$query,$result;
 
 if(isset($_GET['search'])){
     $search = trim($_GET['search']);
     $input = trim($_GET['data']);
     $smarty->assign('data',$input);
     $smarty->assign('search',$search);
     $data = $query->limit('withdrawal','*','id','desc',$result['start'].','.$result['perpage'],'s',$input,$search.'=?');
     paging($result['screen']+1,ceil($query->num_rows('withdrawal','*','s',$input,$search.'=?')/$result['perpage'])+1,'?search='.$search.'&data='.$input.'&p=');
 } else {
     $data = $query->limit('withdrawal','*','id','desc',$result['start'].','.$result['perpage']);
     paging($result['screen']+1,ceil($query->num_rows('withdrawal','*')/$result['perpage'])+1,'?p=');
 }
 
 $with = array();
 while($res=$data->fetch_assoc()){
       $ar=array('id'=>$res['id'],'user_id'=>$res['user_id'],'amount'=>$res['amount'],'account'=>$res['account'],'tx'=>$res['tx'],'fee'=>$res['fee'],'method'=>$this->do_with_method($res['method_id'],'name'),'status'=>$res['status'],'created'=>$res['created']);
       array_push($with,$ar);
 }
 $smarty->assign('withdraws',$with);
 }
 public function do_add_website(){

 global $query,$dateForm,$user;

 /* fetch categories*/
 
 $this->do_fetch_categories();
 
 /* add website */
 
 if ($this->do_post($this->do_arrp('add-website','url,category'),'*','add-website')){
     
     $data = $query->addquery('select','link','*','s', trim(check_request('url')),'url=?');
     if($data){
         session_acv('add-website','do_exist');
         redirect(['action' => 'member/websites/add']);
     }
     //check url
     if(startsWith(check_request('url'), 'www.') || startsWith(check_request('url'), 'http://')){
         session_acv('add-website','do_error');
         redirect(['action' => 'member/websites/add']);
     }
     if(startsWith(check_request('url'), 'https://') || endsWith(check_request('url'), '/')){
         session_acv('add-website','do_error');
         redirect(['action' => 'member/websites/add']);
     }
     $data = $query->addquery('insert','link','user_id,cat_id,url,created','iiss',[$user->user_id,check_request('category'),check_request('url'),$dateForm]);

  if(!$data):
   session_acv('add-website','do_error');
   redirect(['action' => 'member/websites/add']);
  endif;

   session_acv('users','added');
   redirect(['action' => 'member/websites/index']);
 }
 
 else{
     alerts('add-website','do_error');
     alerts('add-website','do_exist');
     alerts('add-website','required');
  }
 }
 public function do_withdraw(){
 
  global $smarty,$query,$user,$dateForm;
  $smarty->assign('withdraw',true);

  //pending
  $data = $query->normal("SELECT sum(amount) FROM ".$this->pfx."withdrawal as pending WHERE user_id='$user->user_id' AND status='2'");
  $data = $data->fetch_assoc();
  $smarty->assign('pending',do_amount($data['sum(amount)'],false));
 
  //withdrawn
  $data = $query->normal("SELECT sum(amount) FROM ".$this->pfx."withdrawal as withdrawn WHERE user_id='$user->user_id' AND status='3'");
  $data = $data->fetch_assoc();
  $smarty->assign('withdrawn',do_amount($data['sum(amount)'],false));
 
  /* fetch withdrawals */
  $this->do_fetch_withdraw_methods();
  
  /* withdraw earnings */
  if ($this->do_post($this->do_arrp('withdraw','account','method_id'),'*','withdraw')){
      $account = check_request('account');
      $method_id = check_request('method_id');
      $fee = $this->do_with_method($method_id,'fee');

      if($user->pub_earnings < $this->do_with_method($method_id,'minimum')){
          session_acv('withdraw','minimum');
          redirect(['controller' => 'member','action' => 'withdraws/index']);
      }
      $query->addquery('insert','withdrawal','user_id,method_id,amount,fee,account,created','iissss',[$user->user_id,$method_id,$user->pub_earnings,$fee,$account,$dateForm]);
      $query->addquery('update','user','pub_earnings=pub_earnings-?','si',[$user->pub_earnings,$user->user_id],'user_id=?');
      session_acv('withdraw','scheduled');
      redirect(['controller' => 'member','action' => 'withdraws/history']);
  }else{
    alerts('withdraw','minimum');
    alerts('withdraw','required');
  }
 }
 public function do_deposit(){

 global $query,$dateForm,$user,$smarty;

 $smarty->assign('deposit',true);
 
 //advertiser balance
 $smarty->assign('ad_balance',$user->ad_balance);
 
 //invoices
 $data = $query->num_rows('invoice','*','ii',"1,$user->user_id",'status=?,user_id=?');
 $smarty->assign('invoices',$data);

 //spending
 $data = $query->normal("SELECT sum(camp_price) FROM ".$this->pfx."campaigns as spending WHERE user_id='$user->user_id' AND status='3'");
 $data = $data->fetch_assoc();
 $smarty->assign('spending',do_amount($data['sum(camp_price)'],false));
  
  
 /* deposit */
 if(isset($_SESSION['checkout']['msg'])){
     $smarty->assign('checkout_msg',$_SESSION['checkout']['msg']);
 }
 if ($this->do_post($this->do_arrp('deposit','amount,csrf'),'*','deposit')){
     
     if(check_request('amount') < do_config(2)):
          session_acv('deposit','small');
          redirect(['controller' => 'advertiser','action' => 'deposit/index']);
     endif;
     $token = strtoupper($this->genToken(8));
     $id = $query->addquery('insert','invoice','user_id,amount,token,created','isss',[$user->user_id,check_request('amount'),$token,$dateForm]);
     if($id){
         redirect(['controller' => 'advertiser','action' => 'deposit/invoice/'.$id.DS]);
     }else{
         session_acv('deposit','do_error');
         redirect(['controller' => 'advertiser','action' => 'deposit/index']);
     }
 }
 else{
     alerts('checkout','error');
     alerts('deposit','small');
     alerts('deposit','do_error');
     alerts('deposit','required');
  }
 }
 public function do_checkout(){
 global $query,$dateForm,$user,$smarty;
  
 /* deposit */
 
 if(!isset($_GET['id'])){
     $this->do_404();
 }
 if(!isset($_GET['method'])){
     $this->do_404();
 }
 
 if (!empty(trim($_GET['id']))){
     
     $data = $query->addquery('select','invoice','*','i', $_GET['id'],'id=?');
     if(!$data){
         session_acv('deposit','do_error');
         redirect(['controller' => 'advertiser','action' => 'deposit/index']);
     }
     $methods = $query->addquery('select','deposite_methods','tax_percent','s',$_GET['method'],'methods=?');
     $tax = get_percentage($data->amount,$methods->tax_percent);
     $total = do_amount($data->amount+$tax, false);

     require(MODELS.'checkoutModel.php');
     $ckt = new checkouts();

     //redirect to checkout
     switch($_GET['method']){
         case 'paypal':
                  $ppl = $query->addquery('select','deposite_methods','id','s','paypal','methods=?');
                  $query->addquery('update','invoice','total=?,method_id=?','sii',[$total,$ppl->id,$_GET['id']],'id=?');
	              $ckt->paypal('Invoice ['.$_GET['id'].']',$_GET['id'],do_amount($total,false),do_config(17));
             break;
         case 'coinbase':
                  $cbs = $query->addquery('select','deposite_methods','id','s','coinbase','methods=?');
                  $query->addquery('update','invoice','total=?,method_id=?','sii',[$total,$cbs->id,$_GET['id']],'id=?');
	              $ckt->coinbase('Invoice ['.$_GET['id'].']',$_GET['id'],do_amount($total,false),do_config(17));
             break;
         case 'bank':
                  $bnk = $query->addquery('select','deposite_methods','id','s','bank','methods=?');
                  $query->addquery('update','invoice','total=?,method_id=?','sii',[$total,$bnk->id,$_GET['id']],'id=?');
	              $ckt->bank('Invoice ['.$_GET['id'].']',$_GET['id'],do_amount($total,false),do_config(17));
             break;
         case 'stripe':
                  $stp = $query->addquery('select','deposite_methods','id','s','stripe','methods=?');
                  $query->addquery('update','invoice','total=?,method_id=?','sii',[$total,$stp->id,$_GET['id']],'id=?');
                  redirect(['controller' => 'advertiser','action' => 'deposit/stripe/'.$_GET['id'].DS]);
             break;
         case 'paytm':
                  $ptm = $query->addquery('select','deposite_methods','id','s','paytm','methods=?');
                  $query->addquery('update','invoice','total=?,method_id=?','sii',[$total,$ptm->id,$_GET['id']],'id=?');
                      $ckt->paytm('Invoice ['.$_GET['id'].']',$_GET['id'],do_amount($total,false),do_config(17));
                  //redirect(['controller' => 'advertiser','action' => 'deposit/paytm/'.$_GET['id'].DS]);
             break;
     }
 } else{
     session_acv('deposit','do_error');
     redirect(['controller' => 'advertiser','action' => 'deposit/index']);
  }
 }
 public function do_bank_info(){
 global $query,$dateForm,$user,$smarty;
  
 /* deposit */
 
 if(!isset($_GET['id'])){
     $this->do_404();
 }
 
 if (!empty(trim($_GET['id']))){
     
     $data = $query->addquery('select','invoice','*','i', $_GET['id'],'id=?');
     if(!$data){
         session_acv('deposit','do_error');
         redirect(['controller' => 'advertiser','action' => 'deposit/index']);
     }

     //show bank informations
     $bnk = $query->addquery('select','deposite_methods','*','s','bank','methods=?');
     $smarty->assign('informations',$bnk->account);

 }
 else{
     session_acv('deposit','do_error');
     redirect(['controller' => 'advertiser','action' => 'deposit/index']);
  }
 }
 public function do_stripe(){
 global $query,$user,$smarty;
  
 /* deposit */
 
 if(!isset($_GET['id'])){
     $this->do_404();
 }
 if (!empty(trim($_GET['id']))){
     
     $data = $query->addquery('select','invoice','*','i', $_GET['id'],'id=?');
     if(!$data){
         session_acv('deposit','do_error');
         redirect(['controller' => 'advertiser','action' => 'deposit/index']);
     }
     //show billing form
     $stp = $query->addquery('select','deposite_methods','*','s','stripe','methods=?');
     $smarty->assign('st_public_key',$stp->public_key);
 }else{
     session_acv('deposit','do_error');
     redirect(['controller' => 'advertiser','action' => 'deposit/index']);
  }
  
 if ($this->do_post($this->do_arrp('stripe','first_name,last_name'),'*','stripe')){
   
     require(MODELS.'checkoutModel.php');
     $ckt = new checkouts();
     $ckt->stripe('Deposit ['.$_GET['id'].']',$_GET['id'],do_amount($data->total,false),do_config(17));
 }
 else{
     alerts('stripe','required');
  }
 }
 public function do_redirect_to_checkout(){
 global $query,$dateForm,$result,$smarty;
  
  /* deposit */
  if(!isset($_GET['id'])){
     $this->do_404();
  }
  $smarty->assign('invoice_id',$_GET['id']);
 
  $data = $query->limit('deposite_methods','*','id','desc',$result['start'].','.$result['perpage'],'i','1','status=?');
  $with = array();
  
  while($res=$data->fetch_assoc()){
        $arr=array('id'=>$res['id'],'name'=>$res['name'],'methods'=>$res['methods'],'status'=>$res['status']);
        array_push($with,$arr);
  }
  $smarty->assign('dmethods',$with);
 }
 public function do_invoices(){

 global $smarty,$query,$result;

  if(isset($_GET['search'])){
      $search = trim($_GET['search']);
      $input = trim($_GET['data']);
      $smarty->assign('data',$input);
      $smarty->assign('search',$search);
      $data=$query->limit('invoice','*','id','desc',$result['start'].','.$result['perpage'],'s',$input,$search.'=?');
      paging($result['screen']+1,ceil($query->num_rows('invoice','*','s',$input,$search.'=?')/$result['perpage'])+1,'?search='.$search.'&data='.$input.'&p=');
  } else {
    $data = $query->limit('invoice','*','id','desc',$result['start'].','.$result['perpage']);
    paging($result['screen']+1,ceil($query->num_rows('invoice','*')/$result['perpage'])+1,'?p=');
  }
 
 $with = array();
 while($res=$data->fetch_assoc()):
    $ar=array('id'=>$res['id'],'user_id'=>$res['user_id'],'status_text'=>$res['status_text'],'username'=>$this->do_username($res['user_id']),'amount'=>do_amount($res['amount']),'method'=>$this->do_dep_method($res['method_id'],'name'),'status'=>$res['status'],'created'=>$res['created']);
    array_push($with,$ar);
 endwhile;
 $smarty->assign('invoices',$with);

 }
 public function do_fetch_invoices(){

 global $smarty,$query,$result,$user;
 
  $smarty->assign('invoice',true);
 if(isset($_GET['search'])){
     $search = trim($_GET['search']);
     $input = trim($_GET['data']);
     $smarty->assign('data',$input);
     $smarty->assign('search',$search);
     $data = $query->limit('invoice','*','id','desc',$result['start'].','.$result['perpage'],'si',"$input,$user->user_id",$search.'=?,user_id=?');
     paging($result['screen']+1,ceil($query->num_rows('invoice','*','si',"$input,$user->user_id",$search.'=?,user_id=?')/$result['perpage'])+1,'?search='.$search.'&data='.$input.'&p=');
 } else {
     $data = $query->limit('invoice','*','id','desc',$result['start'].','.$result['perpage'],'i',$user->user_id,'user_id=?');
     paging($result['screen']+1,ceil($query->num_rows('invoice','*','i',$user->user_id,'user_id=?')/$result['perpage'])+1,'?p=');
 }
 
 $with = array();
 while($res=$data->fetch_assoc()):
     $ar=array('id'=>$res['id'],'user_id'=>$res['user_id'],'username'=>$this->do_username($res['user_id']),'status_text'=>$res['status_text'],'amount'=>do_amount($res['amount']),'method'=>$this->do_dep_method($res['method_id'],'name'),'status'=>$res['status'],'created'=>$res['created']);
     array_push($with,$ar);
 endwhile;
 $smarty->assign('invoices',$with);
 }
 public function do_fetch_announcements(){

 global $smarty,$query,$result,$user;
 
  if(contains(ACCESS, '/member/')) {
      $data = $query->limit('announcements','*','id','desc',$result['start'].','.$result['perpage'],'si','publisher,1','role=?,status=?');
      paging($result['screen']+1,ceil($query->num_rows('announcements','*','si','publisher,1','role=?,status=?')/$result['perpage'])+1,'?p=');
  }elseif(contains(ACCESS, '/advertiser/')){
      $data = $query->limit('announcements','*','id','desc',$result['start'].','.$result['perpage'],'si','advertiser,1','role=?,status=?');
      paging($result['screen']+1,ceil($query->num_rows('announcements','*','si','advertiser,1','role=?,status=?')/$result['perpage'])+1,'?p=');
  }

 $with = array();
 while($res=$data->fetch_assoc()):
     $ar=array('id'=>$res['id'],'title'=>$res['title'],'content'=>$res['content'],'created'=>$res['created']);
     array_push($with,$ar);
 endwhile;
 $smarty->assign('announcements',$with);
 }
 public function do_categories(){

 global $smarty,$query,$result;
 
  $data = $query->limit('categories','*','id','desc',$result['start'].','.$result['perpage']);
  paging($result['screen']+1,ceil($query->num_rows('categories','*')/$result['perpage'])+1,'?p=');
 
 $with = array();
 while($res=$data->fetch_assoc()){
       $ar=array('id'=>$res['id'],'name'=>$res['name'],'description'=>$res['description'],'status'=>$res['status'],'created'=>$res['created']);
       array_push($with,$ar);
 }
 $smarty->assign('categories',$with);
 }
 public function do_zones(){

 global $smarty,$query,$result;
 
 if(isset($_GET['search'])){
     $search = trim($_GET['search']);
     $input = trim($_GET['data']);
     $smarty->assign('data',$input);
     $smarty->assign('search',$search);
     $data = $query->limit('zones','*','id','desc',$result['start'].','.$result['perpage'],'s',$input,$search.'=?');
     paging($result['screen']+1,ceil($query->num_rows('zones','*','s',$input,$search.'=?')/$result['perpage'])+1,'?search='.$search.'&data='.$input.'&p=');
 } else {
     $data = $query->limit('zones','*','id','desc',$result['start'].','.$result['perpage']);
     paging($result['screen']+1,ceil($query->num_rows('zones','*')/$result['perpage'])+1,'?p=');
 }
 
 $with = array();
 while($res=$data->fetch_assoc()){
       $ar=array('id'=>$res['id'],'name'=>$res['name'],'user_id'=>$res['user_id'],'ad_type'=>$res['ad_type'],'site'=>$this->do_website($res['site_id'],'url'),'balance'=>$res['balance'],'views'=>$res['views'],'clicks'=>$res['clicks'],'status'=>$res['status'],'created'=>$res['created']);
       array_push($with,$ar);
 }
 $smarty->assign('zones',$with);
 }
 public function do_fetch_zones(){

 global $smarty,$query,$result,$user;
 
 if(isset($_GET['search'])){
     $search = trim($_GET['search']);
     $input = trim($_GET['data']);
     $smarty->assign('data',$input);
     $smarty->assign('search',$search);
     $data = $query->limit('zones','*','id','desc',$result['start'].','.$result['perpage'],'si',"$input,$user->user_id",$search.'=?,user_id=?');
     paging($result['screen']+1,ceil($query->num_rows('zones','*','si',"$input,$user->user_id",$search.'=?,user_id=?')/$result['perpage'])+1,'?search='.$search.'&data='.$input.'&p=');
 } else {
     $data = $query->limit('zones','*','id','desc',$result['start'].','.$result['perpage'],'i',$user->user_id,'user_id=?');
     paging($result['screen']+1,ceil($query->num_rows('zones','*','i',$user->user_id,'user_id=?')/$result['perpage'])+1,'?p=');
 }

 $with = array();
 while($res=$data->fetch_assoc()){
       $ar=array('id'=>$res['id'],'name'=>$res['name'],'user_id'=>$res['user_id'],'ad_type'=>$res['ad_type'],'type'=>$res['type'],'site'=>$this->do_website($res['site_id'],'url'),'balance'=>$res['balance'],'views'=>$res['views'],'clicks'=>$res['clicks'],'type'=>$res['type'],'size'=>$res['size'],'status'=>$res['status'],'created'=>$res['created']);
       array_push($with,$ar);
 }
 $smarty->assign('zones',$with);
 }
 public function do_add_zone(){
 global $query,$dateForm,$user,$smarty;
 
 /* availble sizes */
 $smarty->assign('sizes',explode(',',do_config(20)));

 /* user websites */
 $this->do_alluser_websites();
 
 /* create zone */
 
 if ($this->do_post($this->do_arrp('add-zone','name,site_id,type'),'*','add-zone')){
     
     if($this->do_website(trim(check_request('site_id')),'status') != 1){
         session_acv('add-zone','do_inactive');
         redirect(['action' => 'member/zones/add']);
     }
     
     $size = check_request('size') ? : 'N/A';
     $token = $this->genToken(8);
     $allowed = 'clean'.','.check_request('nsfw').','.check_request('gamble').','.check_request('shady').','.check_request('risky');
     $allowed = explode(',',$allowed);
     $json = json_encode($allowed);
     
     /* type */
     switch(check_request('type')){
         default:
             $type = 'banner';
             break;
         case 'popup':
             $type = check_request('type');
             break;
         case 'direct':
             $type = check_request('type');
             break;
     }
     $data = $query->addquery('insert','zones','user_id,site_id,type,ad_type,name,size,filter,token,created','iisssssss',[$user->user_id,check_request('site_id'),$type,check_request('type'),check_request('name'),$size,$json,$token,$dateForm]);
  if(!$data):
   session_acv('add-zone','do_error');
   redirect(['action' => 'member/zones/add']);
  endif;

   session_acv('zones','added');
   redirect(['action' => 'member/zones/code/'.$data.DS]);
 }
 else{
     alerts('add-zone','do_error');
     alerts('add-zone','do_inactive');
     alerts('add-website','required');
  }
 }
 public function do_zone_code(){
 global $query,$dateForm,$user,$smarty;
 
 /* show zone code */
 
 $data = $query->addquery('select','zones','*','i', $_GET['id'],'id=?');
 
 $smarty->assign('id',$data->id);
 $smarty->assign('ad_type',$data->ad_type);
 $smarty->assign('type',$data->type);
 $smarty->assign('size',$data->size);
 $smarty->assign('site_id',$data->site_id);
 }
 public function do_mark_campaign(){
 global $smarty,$query;
      
 if( isset($_POST['mark'])){
     $data = $query->addquery('update','campaigns','filter=?','si',[check_request('filter'),check_request('id')],'id=?');
     if($data){
         $_SESSION['mark']['marked']=true;
     }elseif(!$data){
         $_SESSION['mark']['do_error']=true;
     }
     header('Location:'.$this->referer);
     exit;
 }
 }
 public function do_imgbanners(){

 global $smarty,$query,$result;
 
  $data = $query->limit('campaigns','*','id','desc',$result['start'].','.$result['perpage'],'s','img_banner','camp_type=?');
  paging($result['screen']+1,ceil($query->num_rows('campaigns','*','s','img_banner','camp_type=?')/$result['perpage'])+1,'?p=');
 
 $with = array();
 while($res=$data->fetch_assoc()){
       $ar=array('id'=>$res['id'],'filter'=>$res['filter'],'user_id'=>$res['user_id'],'url'=>$res['url'],'image'=>$res['image'],'title'=>$res['title'],'views'=>$res['views'],'clicks'=>$res['clicks'],'price'=>do_amount($res['price']),'camp_price'=>do_amount($res['camp_price']),'camp_size'=>$res['camp_size'],'camp_views'=>$res['camp_views'],'camp_clicks'=>$res['camp_clicks'],'method'=>$res['method'],'status'=>$res['status'],'created'=>$res['created']);
       array_push($with,$ar);
 }
 $smarty->assign('imgbanners',$with);
 alerts('mark','marked');
 }
 public function do_fetch_imgbanners(){

 global $smarty,$query,$result,$user;
 
  $data = $query->limit('campaigns','*','id','desc',$result['start'].','.$result['perpage'],'si',"img_banner,$user->user_id",'camp_type=?,user_id=?');
  paging($result['screen']+1,ceil($query->num_rows('campaigns','*','si',"img_banner,$user->user_id",'camp_type=?,user_id=?')/$result['perpage'])+1,'?p=');
 
 $with = array();
 while($res=$data->fetch_assoc()){
       $ar=array('id'=>$res['id'],'user_id'=>$res['user_id'],'url'=>$res['url'],'image'=>$res['image'],'title'=>$res['title'],'views'=>$res['views'],'clicks'=>$res['clicks'],'price'=>do_amount($res['price']),'camp_price'=>do_amount($res['camp_price']),'camp_size'=>$res['camp_size'],'camp_views'=>$res['camp_views'],'camp_clicks'=>$res['camp_clicks'],'method'=>$res['method'],'status'=>$res['status'],'created'=>$res['created']);
       array_push($with,$ar);
 }
 $smarty->assign('imgbanners',$with);
 }
 public function do_textbanners(){

 global $smarty,$query,$result;
 
  $data = $query->limit('campaigns','*','id','desc',$result['start'].','.$result['perpage'],'s','text_banner','camp_type=?');
  paging($result['screen']+1,ceil($query->num_rows('campaigns','*','s','text_banner','camp_type=?')/$result['perpage'])+1,'?p=');
 
 $with = array();
 while($res=$data->fetch_assoc()){
       $ar=array('id'=>$res['id'],'user_id'=>$res['user_id'],'filter'=>$res['filter'],'url'=>$res['url'],'title'=>$res['title'],'views'=>$res['views'],'clicks'=>$res['clicks'],'price'=>$res['price'],'status'=>$res['status'],'price'=>do_amount($res['price']),'camp_price'=>do_amount($res['camp_price']),'camp_size'=>$res['camp_size'],'camp_views'=>$res['camp_views'],'camp_clicks'=>$res['camp_clicks'],'method'=>$res['method']);
       array_push($with,$ar);
 }
 $smarty->assign('textbanners',$with);
 alerts('mark','marked');
 }
 public function do_fetch_textbanners(){
 global $smarty,$query,$result,$user;
 
  $data = $query->limit('campaigns','*','id','desc',$result['start'].','.$result['perpage'],'si',"text_banner,$user->user_id",'camp_type=?,user_id=?');
  paging($result['screen']+1,ceil($query->num_rows('campaigns','*','si',"text_banner,$user->user_id",'camp_type=?,user_id=?')/$result['perpage'])+1,'?p=');
 
 $with = array();
 while($res=$data->fetch_assoc()){
       $ar=array('id'=>$res['id'],'camp_size'=>$res['camp_size'],'method'=>$res['method'],'camp_price'=>do_amount($res['camp_price']),'camp_clicks'=>$res['camp_clicks'],'camp_views'=>$res['camp_views'],'user_id'=>$res['user_id'],'url'=>$res['url'],'title'=>$res['title'],'views'=>$res['views'],'clicks'=>$res['clicks'],'price'=>do_amount($res['price']),'status'=>$res['status']);
       array_push($with,$ar);
 }
 $smarty->assign('textbanners',$with);
 }
 public function do_popups(){

 global $smarty,$query,$result;
 
  $data = $query->limit('campaigns','*','id','desc',$result['start'].','.$result['perpage'],'s','popup','camp_type=?');
  paging($result['screen']+1,ceil($query->num_rows('campaigns','*','s','popup','camp_type=?')/$result['perpage'])+1,'?p=');
 
 $with = array();
 while($res=$data->fetch_assoc()){
       $ar=array('id'=>$res['id'],'user_id'=>$res['user_id'],'filter'=>$res['filter'],'url'=>$res['url'],'camp_price'=>do_amount($res['camp_price']),'camp_clicks'=>$res['camp_clicks'],'title'=>$res['title'],'clicks'=>$res['clicks'],'price'=>do_amount($res['price']),'status'=>$res['status']);
       array_push($with,$ar);
 }
 $smarty->assign('popups',$with);
 alerts('mark','marked');
 }
 public function do_fetch_popups(){

 global $smarty,$query,$result,$user;
 
  $data = $query->limit('campaigns','*','id','desc',$result['start'].','.$result['perpage'],'si',"popup,$user->user_id",'camp_type=?,user_id=?');
  paging($result['screen']+1,ceil($query->num_rows('campaigns','*','si',"popup,$user->user_id",'camp_type=?,user_id=?')/$result['perpage'])+1,'?p=');
 
 $with = array();
 while($res=$data->fetch_assoc()){
       $ar=array('id'=>$res['id'],'user_id'=>$res['user_id'],'url'=>$res['url'],'title'=>$res['title'],'camp_price'=>do_amount($res['camp_price']),'camp_clicks'=>$res['camp_clicks'],'clicks'=>$res['clicks'],'price'=>do_amount($res['price']),'status'=>$res['status'],'created'=>$res['created']);
       array_push($with,$ar);
 }
 $smarty->assign('popups',$with);
 }
 public function do_directs(){

 global $smarty,$query,$result;
 
  $data = $query->limit('campaigns','*','id','desc',$result['start'].','.$result['perpage'],'s','direct','camp_type=?');
  paging($result['screen']+1,ceil($query->num_rows('campaigns','*','s','direct','camp_type=?')/$result['perpage'])+1,'?p=');
 
 $with = array();
 while($res=$data->fetch_assoc()){
       $ar=array('id'=>$res['id'],'user_id'=>$res['user_id'],'filter'=>$res['filter'],'camp_price'=>do_amount($res['camp_price']),'camp_clicks'=>$res['camp_clicks'],'url'=>$res['url'],'title'=>$res['title'],'views'=>$res['views'],'clicks'=>$res['clicks'],'price'=>do_amount($res['price']),'status'=>$res['status'],'created'=>$res['created']);
       array_push($with,$ar);
 }
 $smarty->assign('directs',$with);
 alerts('mark','marked');
 }
 public function do_fetch_directs(){

 global $smarty,$query,$result,$user;
 
  $data = $query->limit('campaigns','*','id','desc',$result['start'].','.$result['perpage'],'si',"direct,$user->user_id",'camp_type=?,user_id=?');
  paging($result['screen']+1,ceil($query->num_rows('campaigns','*','si',"direct,$user->user_id",'camp_type=?,user_id=?')/$result['perpage'])+1,'?p=');
 
 $with = array();
 while($res=$data->fetch_assoc()){
       $ar=array('id'=>$res['id'],'user_id'=>$res['user_id'],'camp_price'=>do_amount($res['camp_price']),'camp_clicks'=>$res['camp_clicks'],'url'=>$res['url'],'title'=>$res['title'],'views'=>$res['views'],'clicks'=>$res['clicks'],'price'=>do_amount($res['price']),'status'=>$res['status'],'created'=>$res['created']);
       array_push($with,$ar);
 }
 $smarty->assign('directs',$with);
 }
 public function do_pause_campaign($a){
 
 global $smarty,$query;
      
 if( isset($_POST['pause'])){
     $data = $query->addquery('update','campaigns','status=?','ii',['4',check_request('id')],'id=?');
     if($data){
         $_SESSION['pause']['paused']=true;
     }elseif(!$data){
         $_SESSION['pause']['do_error']=true;
     }
      redirect(['controller' => 'advertiser', 'action' => $a]);
 }else{
      alerts('pause','paused');
      alerts('pause','do_error');
 }
 }
 public function do_file($id,$clm){
     global $query;
     
   $data = $query->addquery('select','uploads',$clm,'i',$id,'id=?');
   return $data->$clm;
 }
 public function do_order_popup(){
 global $query,$user,$smarty;

 /* order popup */
 
 if ($this->do_post($this->do_arrp('order-popup','title,url,clicks,device-type,country-type,browser-type,platform-type'),'*','order-popup')){
    
     //cost per click
     $camp_price = do_amount((do_config(47) * check_request('clicks')),false);
     
    if($user->ad_balance < $camp_price){
        //balance not enought
         session_acv('order-popup','do_minimum');
         redirect(['action' => 'advertiser/purchase/popup']);
    }
    if(check_request('clicks') < do_config(37)){
        //order less then min
         session_acv('order-popup','do_less');
         redirect(['action' => 'advertiser/purchase/popup']);
    }
     $device = 'PC, MOBILE';
     $countries = do_config(22);
     $browsers = do_config(84);
     $platforms = do_config(85);

     /* device type */
     if(check_request('device-type') != 'ALL'){
         $device = check_request('device-type');
     }
     /* country type */
     if(check_request('country-type') == 'multiple'){
         $countries = implode(',',$_POST['countries']);
     }
     /* browser type */
     if(check_request('browser-type') == 'multiple'){
         $browsers = implode(',',$_POST['browsers']);
     }
     /* platform type */
     if(check_request('platform-type') == 'multiple'){
         $platforms = implode(',',$_POST['platforms']);
     }

     $data = $query->addquery('update','user','ad_balance=ad_balance-?','si',[$camp_price,$user->user_id],'user_id=?');
     $data = $query->addquery('insert','campaigns','user_id,url,method,camp_type,title,camp_clicks,camp_price,camp_country,camp_device,camp_browser,camp_platform','issssisssss',[$user->user_id,check_request('url'),'clicks','popup',check_request('title'),check_request('clicks'),$camp_price,$countries,$device,$browsers,$platforms]);

  if(!$data){
     session_acv('order-popup','do_error');
     redirect(['action' => 'advertiser/purchase/popup']);
  }

   session_acv('order-popup','added');
   redirect(['action' => 'advertiser/campaigns/popups']);
 }
 else{
     alerts('order-popup','do_error');
     alerts('order-popup','do_less');
     alerts('order-popup','do_minimum');
     alerts('order-popup','required');
  }
 }
 public function do_order_direct(){
 global $query,$user,$smarty;

 /* order direct */
 
 if ($this->do_post($this->do_arrp('order-direct','title,url,clicks,device-type,country-type,browser-type,platform-type'),'*','order-direct')){
    
     //cost per click
     $camp_price = do_amount((do_config(44) * check_request('clicks')),false);
     
    if($user->ad_balance < $camp_price){
        //balance not enought
         session_acv('order-direct','do_minimum');
         redirect(['action' => 'advertiser/purchase/direct']);
    }
    if(check_request('clicks') < do_config(37)){
        //order less then min
         session_acv('order-direct','do_less');
         redirect(['action' => 'advertiser/purchase/direct']);
    }
     $device = 'PC, MOBILE';
     $countries = do_config(22);
     $browsers = do_config(84);
     $platforms = do_config(85);

     /* device type */
     if(check_request('device-type') != 'ALL'){
         $device = check_request('device-type');
     }
     /* country type */
     if(check_request('country-type') == 'multiple'){
         $countries = implode(',',$_POST['countries']);
     }
     /* browser type */
     if(check_request('browser-type') == 'multiple'){
         $browsers = implode(',',$_POST['browsers']);
     }
     /* platform type */
     if(check_request('platform-type') == 'multiple'){
         $platforms = implode(',',$_POST['platforms']);
     }
     
     $data = $query->addquery('update','user','ad_balance=ad_balance-?','si',[$camp_price,$user->user_id],'user_id=?');
     $data = $query->addquery('insert','campaigns','user_id,url,method,camp_type,title,camp_clicks,camp_price,camp_country,camp_device,camp_browser,camp_platform','issssisssss',[$user->user_id,check_request('url'),'clicks','direct',check_request('title'),check_request('clicks'),$camp_price,$countries,$device,$browsers,$platforms]);

  if(!$data){
     session_acv('order-direct','do_error');
     redirect(['action' => 'advertiser/purchase/direct']);
  }

   session_acv('order-direct','added');
   redirect(['action' => 'advertiser/campaigns/directs']);
 }
 else{
     alerts('order-direct','do_error');
     alerts('order-direct','do_less');
     alerts('order-direct','do_minimum');
     alerts('order-direct','required');
  }
 }
 public function do_order_imgbanner(){
 global $query,$user,$smarty;

 /* availble sizes */
 $smarty->assign('sizes',explode(',',do_config(20)));

 /* order image banner */
 
 if ($this->do_post($this->do_arrp('order-imgbanner','method,size,title,url,device-type,country-type,browser-type,file,platform-type'),'*','order-imgbanner')){
    
    
    if(check_request('method') == 'CPM'){
        //cost per mile
        $camp_price = do_amount((do_config(48) * check_request('views')) / 1000,false);
        $method = 'views';
        $order = check_request('views');
        if(check_request('views') < do_config(36)){
            //order less then min
            session_acv('order-imgbanner','do_less');
            redirect(['action' => 'advertiser/purchase/image-banner']);
        }
    }elseif(check_request('method') == 'CPC'){
        //cost per click
        $camp_price = do_amount((do_config(49) * check_request('clicks')),false);
        $method = 'clicks';
        $order = check_request('clicks');
        if(check_request('clicks') < do_config(37)){
            //order less then min
            session_acv('order-imgbanner','do_less');
            redirect(['action' => 'advertiser/purchase/image-banner']);
        }
    }
    if($user->ad_balance < $camp_price){
        //balance not enought
         session_acv('order-imgbanner','do_minimum');
         redirect(['action' => 'advertiser/purchase/image-banner']);
    }
    
     $device = 'PC, MOBILE';
     $countries = do_config(22);
     $browsers = do_config(84);
     $platforms = do_config(85);
     $size = check_request('size');

     /* device type */
     if(check_request('device-type') != 'ALL'){
         $device = check_request('device-type');
     }
     /* country type */
     if(check_request('country-type') == 'multiple'){
         $countries = implode(',',$_POST['countries']);
     }
     /* browser type */
     if(check_request('browser-type') == 'multiple'){
         $browsers = implode(',',$_POST['browsers']);
     }
     /* platform type */
     if(check_request('platform-type') == 'multiple'){
         $platforms = implode(',',$_POST['platforms']);
     }
     
     /* move banner */
     $target_image = $this->do_file(check_request('file'),'path');  // change this to the correct site path
     $move_to = WWW_ROOT.UPD.'banners'.DS;  // change this to the correct site path
     $newroundfile = round(microtime(true));
     rename($target_image, $move_to.'ad-'.$newroundfile.'.'.$this->do_file(check_request('file'),'type'));
     $imageLink = 'banners/ad-'.$newroundfile.'.'.$this->do_file(check_request('file'),'type');
     $query->normal("DELETE FROM ".$this->pfx."uploads WHERE user_id='$user->user_id'"); //remove files from db

     $data = $query->addquery('update','user','ad_balance=ad_balance-?','si',[$camp_price,$user->user_id],'user_id=?');
     $data = $query->addquery('insert','campaigns','user_id,url,method,camp_type,title,camp_'.$method.',camp_price,camp_country,camp_device,camp_browser,camp_platform,camp_size,image','issssssssssss',[$user->user_id,check_request('url'),$method,'img_banner',check_request('title'),$order,$camp_price,$countries,$device,$browsers,$platforms,$size,$imageLink]);

     if(!$data){
         session_acv('order-imgbanner','do_error');
         redirect(['action' => 'advertiser/purchase/image-banner']);
     }
     session_acv('order-imgbanner','added');
     redirect(['action' => 'advertiser/campaigns/image-banners']);
 } else{
     alerts('order-imgbanner','do_error');
     alerts('order-imgbanner','do_less');
     alerts('order-imgbanner','do_minimum');
     alerts('order-imgbanner','required');
  }
 }
 public function do_order_txtbanner(){
 global $query,$user,$smarty;

 /* availble sizes */
 $smarty->assign('sizes',explode(',',do_config(20)));

 /* advertiser templates */
 $this->do_alluser_templates();

 /* order direct */
 
 if ($this->do_post($this->do_arrp('order-txtbanner','title,description,url,device-type,country-type,browser-type,platform-type'),'*','order-txtbanner')){
    
    if(check_request('method') == 'CPM'){
        //cost per mile
        $camp_price = do_amount((do_config(45) * check_request('views')) / 1000,false);
        $method = 'views';
        $order = check_request('views');
        if(check_request('views') < do_config(36)){
            //order less then min
            session_acv('order-txtbanner','do_less');
            redirect(['action' => 'advertiser/purchase/text-banner']);
        }
    }elseif(check_request('method') == 'CPC'){
        //cost per click
        $camp_price = do_amount((do_config(46) * check_request('clicks')),false);
        $method = 'clicks';
        $order = check_request('clicks');
        if(check_request('clicks') < do_config(37)){
            //order less then min
            session_acv('order-txtbanner','do_less');
            redirect(['action' => 'advertiser/purchase/text-banner']);
        }
    }
    if($user->ad_balance < $camp_price){
        //balance not enought
         session_acv('order-txtbanner','do_minimum');
         redirect(['action' => 'advertiser/purchase/text-banner']);
    }
     $device = 'PC, MOBILE';
     $countries = do_config(22);
     $browsers = do_config(84);
     $platforms = do_config(85);
     $size = check_request('size');

     /* device type */
     if(check_request('device-type') != 'ALL'){
         $device = check_request('device-type');
     }
     /* country type */
     if(check_request('country-type') == 'multiple'){
         $countries = implode(',',$_POST['countries']);
     }
     /* browser type */
     if(check_request('browser-type') == 'multiple'){
         $browsers = implode(',',$_POST['browsers']);
     }
     /* platform type */
     if(check_request('platform-type') == 'multiple'){
         $platforms = implode(',',$_POST['platforms']);
     }

     $data = $query->addquery('update','user','ad_balance=ad_balance-?','si',[$camp_price,$user->user_id],'user_id=?');
     $data = $query->addquery('insert','campaigns','user_id,url,method,camp_type,title,description,camp_'.$method.',camp_price,camp_country,camp_device,camp_browser,camp_platform,camp_size','isssssissssss',[$user->user_id,check_request('url'),$method,'text_banner',check_request('title'),check_request('description'),$order,$camp_price,$countries,$device,$browsers,$platforms,$size]);

  if(!$data){
     session_acv('order-txtbanner','do_error');
     redirect(['action' => 'advertiser/purchase/text-banner']);
  }

   session_acv('order-txtbanner','added');
   redirect(['action' => 'advertiser/campaigns/text-banners']);
 }
 else{
     alerts('order-txtbanner','do_error');
     alerts('order-txtbanner','do_less');
     alerts('order-txtbanner','do_minimum');
     alerts('order-txtbanner','required');
  }
 }
 public function do_dep_method($id,$clm){
     global $query;
     
   $data = $query->addquery('select','deposite_methods',$clm,'i',$id,'id=?');
   return $data->$clm;
 }
 public function do_with_method($id,$clm){
     global $query;
     
   $data = $query->addquery('select','withdraw_methods',$clm,'i',$id,'id=?');
   return $data->$clm;
 }
 public function do_website($id,$clm){
     global $query;
     
   $data = $query->addquery('select','link',$clm,'i',$id,'id=?');
   return $data->$clm;
 }
 public function do_category($id){
     global $query;
     
   $data = $query->addquery('select','categories','name','i',$id,'id=?');
   return $data->name;
 }
 public function do_members(){

 global $smarty,$query,$result;

 if(isset($_GET['search'])){
  $search = trim($_GET['search']);
  $input = trim($_GET['data']);
  $smarty->assign('data',$input);
  $smarty->assign('search',$search);
  $data = $query->limit('user','*','user_id','desc',$result['start'].','.$result['perpage'],'s',$input,$search.'=?');
  paging($result['screen']+1,ceil($query->num_rows('user','*','s',$input,$search.'=?')/$result['perpage'])+1,'?search='.$search.'&data='.$input.'&p=');
 } else {
    $data = $query->limit('user','*','user_id','desc',$result['start'].','.$result['perpage']);
    paging($result['screen']+1,ceil($query->num_rows('user','*')/$result['perpage'])+1,'?p=');
 }
 
 $with = array();
 
 while($res=$data->fetch_assoc()):
    
 $ar=array('id'=>$res['user_id'],'role'=>$res['role'],'status'=>$res['status'],'username'=>$res['username'],'email'=>$res['email'],'login_ip'=>$res['login_ip'],'register_ip'=>$res['register_ip'],'created'=>$res['created']);
 
 array_push($with,$ar);

 endwhile;

 $smarty->assign('members',$with);
 alerts('users','updated');
 alerts('users','added');
}
 public function do_topusers(){

 global $smarty,$query,$result;

  $data = $query->limit('user','*','pub_earnings','desc',$result['start'].','.$result['perpage'],'s',$this->balance,'pub_earnings<>?');
  paging($result['screen']+1,ceil($query->num_rows('user','*','s',$this->balance,'pub_earnings<>?')/$result['perpage'])+1,'?p=');
 
 $with = array();
 
 while($res=$data->fetch_assoc()):
    $ar=array('id'=>$res['user_id'],'status'=>$res['status'],'username'=>$res['username'],'pub_earnings'=>$res['pub_earnings'],'created'=>$res['created']);
    array_push($with,$ar);
 endwhile;
 $smarty->assign('topusers',$with);
 }
 public function do_banner_upload(){
 global $query,$info,$user;

  /* start updating */
  if(!empty($_FILES["banner-file"]["name"])){
                // File path config 
                $location = UPD.'files'.DS;
                $fileName = basename($_FILES["banner-file"]["name"]); 
                $targetFilePath = $location . $fileName; 
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 

                // Allow certain file formats 
                $allowTypes = array('png','jpeg','gif','jpg'); 
                list($width, $height) = getimagesize($_FILES["banner-file"]['tmp_name']);
                $sizes = explode("x", strtolower($_POST["size"]));
                
                if(in_array($fileType, $allowTypes)){ 
                    if($width != $sizes[0] || $height != $sizes[1]){
                        echo '<p class="badge badge-danger">'.$this->do_label('SIZE_ARE_NOT_CORRECT').'</p>';
                        exit;
                    }
                    // Upload file to the server 
                    if(move_uploaded_file($_FILES["banner-file"]["tmp_name"], WWW_ROOT.$targetFilePath)){ 
                        $newroundfile = round(microtime(true));
                        rename(WWW_ROOT.$targetFilePath,WWW_ROOT.$location.'ad-'.$newroundfile.'.'.$fileType);
                        $preview = base64_encode(HOST.UPD.'files/ad-'.$newroundfile.'.'.$fileType);
                        $fileName = 'ad-'.$newroundfile.'.'.$fileType;
                        $source = WWW_ROOT.$targetFilePath;
                        $newfile = $query->addquery('insert','uploads','user_id,path,name,type','isss',[$user->user_id,$source,$fileName,$fileType]);
                        echo '<div class="form-group">
                              <div class="col-md-10">
                              <select name="file" class="form-control">';
                        echo '<option value="'.$newfile.'">'.$fileName.'</option>
                              </select>
                              <span class="badge badge-success"><i class="fa fa-check-circle"></i> '.$this->do_label('IMAGE_UPLOADED_SUCCESSFULLY').'</span>
                              </div>
                              </div>';
                        echo '<div class="col-md-10">
                                 <div class="text-center">';
                        echo '<p><i class="fa fa-image"></i> Preview Banner</p>';
                        echo '<iframe src="'.HOST.ZN.'preview-up/img_banner/'.strtolower($_POST["size"]).DS.$preview.'/" width="100%" height="100%" scrolling="no" style="border:0px;padding:0px;overflow:hidden;" allowtransparency="true"></iframe>';
                        echo '</div>
                              </div>';
                    }else{ 
                        echo '<p class="badge badge-danger">'.$this->do_label('THERE_WAS_ERROR_UPLOADING_YOUR_FILE').'</p>';
                    } 
                }else{ 
                    echo '<p class="badge badge-danger">'.$this->do_label('ONLY_TYPES_ARE_ALLOWED').'</p>';
                } 
      }
      else{
          echo 'empty file';
      }
           
 }
 public function do_upload_plugin(){
 global $query,$info,$user,$dateForm;

  /* start updating */
  if(!empty($_FILES["plugin-file"]["name"])){
      if(do_config(43) == 1){
         echo "<p class='badge badge-danger'>Error: You can't do this action on demo mode.</p>";
         exit;
      }
                // File path config 
                $location = UPD.'files'.DS;
                $fileName = basename($_FILES["plugin-file"]["name"]); 
                $targetFilePath = $location . $fileName; 
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 

                // Allow certain file formats 
                $allowTypes = array('zip'); 
                if(in_array($fileType, $allowTypes)){ 

                    // Upload file to the server 
                    if(move_uploaded_file($_FILES["plugin-file"]["tmp_name"], WWW_ROOT.$targetFilePath)){ 
                        $uploadedFile = $fileName;
                        $source = WWW_ROOT.$targetFilePath;
                        
                        //extract
                        $extract_to = ROOT.DS;  // change this to the correct site path
                        $file_info = ROOT.DS.'index.txt';  // text file
                        $zip = new ZipArchive();
                        $x = $zip->open($source);
                        
                        if ($x === true){
                            $zip->extractTo($extract_to);
                            
                            // read file info
                            $contents = file_get_contents($file_info);
                            $pluginfo = json_decode($contents ,TRUE);
                            
                            //insert new plugin
                            $query->addquery('insert','plugins','name,author,version,created','ssss',[$pluginfo['name'],$pluginfo['author'],$pluginfo['version'],$dateForm]);
                            echo '<p class="badge badge-success">'.
                                  $this->do_label('FILE_UPLOADED_SUCCESSFULLY').
                                 '</p>';
                            $zip->close();
                            unlink($source);
                            unlink($file_info);
                        }
                    }else{ 
                        echo '<p class="badge badge-danger">'.$this->do_label('THERE_WAS_ERROR_UPLOADING_YOUR_FILE').'</p>';
                    } 
                }else{ 
                    echo '<p class="badge badge-danger">'.$this->do_label('ONLY_ZIP_FILES_ARE_ALLOWED_TO_UPLOAD').'</p>';
                } 
      }
      else{
          echo 'empty file';
      }
           
 }
 public function do_upload_theme(){
 global $query,$info,$user,$dateForm;

  /* start updating */
  if(!empty($_FILES["theme-file"]["name"])){
      if(do_config(43) == 1){
         echo "<p class='badge badge-danger'>Error: You can't do this action on demo mode.</p>";
         exit;
      }
                // File path config 
                $location = UPD.'files'.DS;
                $fileName = basename($_FILES["theme-file"]["name"]); 
                $targetFilePath = $location . $fileName; 
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 

                // Allow certain file formats 
                $allowTypes = array('zip'); 
                if(in_array($fileType, $allowTypes)){ 

                    // Upload file to the server 
                    if(move_uploaded_file($_FILES["theme-file"]["tmp_name"], WWW_ROOT.$targetFilePath)){ 
                        $uploadedFile = $fileName;
                        $source = WWW_ROOT.$targetFilePath;
                        $zip = zip_open($source);
                        
                        if ($zip) {
                            while ($zip_entry = zip_read($zip)) {
                                // Open directory entry for reading
                                if (zip_entry_open($zip, $zip_entry)) {
                                    // Read open directory entry
                                    $contents = zip_entry_read($zip_entry);
                                    $pluginfo = json_decode($contents ,TRUE);
                                }
                            }
                                    //insert new plugin
                                    $query->addquery('insert','themes','name,author,version,screen,created','sssss',[$pluginfo['name'],$pluginfo['author'],$pluginfo['version'],'images/theme.png',$dateForm]);
                                    
                                    echo '<p class="badge badge-success">'.
                                         $this->do_label('IMAGE_UPLOADED_SUCCESSFULLY').
                                         '</p>';
                                    zip_entry_close($zip_entry);
                            zip_close($zip);
                        }
                        
                        //extract
                        
                        $extract_to = WWW_ROOT.'template'.DS;  // change this to the correct site path
                        $file_info = WWW_ROOT.'template'.DS.'index.txt.txt';  // text file
                        $zip = new ZipArchive();
                        $x = $zip->open($source);
                        
                        if ($x === true){
                            $zip->extractTo($extract_to);
                            $zip->close();
                            unlink($source);
                            unlink($file_info);
                        }
                    }else{ 
                        echo '<p class="badge badge-danger">'.$this->do_label('THERE_WAS_ERROR_UPLOADING_YOUR_FILE').'</p>';
                    } 
                }else{ 
                    echo '<p class="badge badge-danger">'.$this->do_label('ONLY_ZIP_FILES_ARE_ALLOWED_TO_UPLOAD').'</p>';
                } 
      }
      else{
          echo 'empty file';
      }
           
 }
 public function do_newversion(){
       $ch = curl_init();
       $array = array(
           CURLOPT_URL => 'https://projects.codsem.com/advartiso/updates/index.php',
           CURLOPT_RETURNTRANSFER => true
       );
       
       curl_setopt_array($ch, $array);
       $result = curl_exec($ch);
       curl_close($ch);
       
       $result = json_decode($result,true);
       return $result["name"];
 }
 public function do_check_update(){
  global $query,$info,$user;
 
   if(isset($_POST["version"])){
       
       $ch = curl_init();
       $array = array(
           CURLOPT_URL => 'https://projects.codsem.com/advartiso/updates/index.php',
           CURLOPT_RETURNTRANSFER => true
       );
       
       curl_setopt_array($ch, $array);
       $result = curl_exec($ch);
       curl_close($ch);
       
       $result = json_decode($result,true);
       if($info->version == $result["name"]){
           echo 'ok';
       }else{
           echo '<span class="badge badge-danger"><i class="fa fa-check-times"></i> Your version is out dated</span>';
       }
   }
 }
 public function do_update_script(){
 global $query,$info,$user;

  /* start updating */
  if(isset($_POST["update"])){
      if(do_config(42) == 1){
         echo "<p class='badge badge-danger'>Error: You can't do this action on demo mode.</p>";
         exit;
      }
      
      // File path config 
      $url = 'https://projects.codsem.com/advartiso/updates/cdm.zip';
      $newfname = WWW_ROOT.UPD.'files'.DS.'cdm.zip';
      $file = fopen ($url, 'rb');
      if(!$file){
          echo 'Error: No Update Exist.';
          exit;
      }
      if ($file) {
        $newf = fopen ($newfname, 'wb');
        if ($newf) {
            while(!feof($file)) {
                fwrite($newf, fread($file, 1024 * 8), 1024 * 8);
            }
        }
      }
      if ($file) {
           fclose($file);
       }
      if ($newf) {
           fclose($newf);
           $extract_to = ROOT.DS;  // change this to the correct site path
     
           //extract the update
           $zip = new ZipArchive();
           $x = $zip->open($newfname);
           
           if ($x === true){
               $zip->extractTo($extract_to);
               $zip->close();
               unlink($newfname);
               
               //change version
               $version = $this->do_newversion();
               $ap = get_app($this->host,Theme,$info->install,$version,$info->id,$info->app,$info->start,$info->update);
               write(CONFIG.'app.php',$ap,'w');
           }
      }
      
      echo '<a href="'.$this->host.'admin/updates/complete" class="btn btn-black waves-effect w-md m-b-5"><i class="fa fa-refresh"></i> Step 2</a>';
  }
 }
 public function do_extract_update(){
 global $query,$info;

  /* start extracting */
 
 if ($this->do_post($this->do_arrp('update','file,csrf'),'*','update')){
 
     $file = $query->addquery('select','uploads','*','i',check_request('file'),'id=?');
     if(!$file){
         session_acv('update','do_error');
         redirect(['action' => 'admin/updates/index?version='.$info->version]);
     }
     $extract_to = ROOT.DS;  // change this to the correct site path
     
     //extract the update
     $zip = new ZipArchive();
     $x = $zip->open($file->path);
    
     if ($x === true){
         $zip->extractTo($extract_to);
         $zip->close();
         unlink($file->path);
     }

   session_acv('update','updated');
   redirect(['action' => 'admin/updates/complete']);
 }
 
 else{
     alerts('update','do_error');
     alerts('update','required');
  }
 }
 public function do_addtemplate(){
 global $query,$dateForm,$user;
 
 /* create template */
 
 if ($this->do_post($this->do_arrp('add-template','name,title,description,link'),'*','add-template')){
     
     $data = $query->addquery('insert','templates','user_id,title,description,name,link,created','isssss',[$user->user_id,check_request('title'),check_request('description'),check_request('name'),check_request('link'),$dateForm]);
     if(!$data):
         session_acv('add-template','do_error');
         redirect(['action' => 'advertiser/templates/add']);
     endif;

   session_acv('templates','added');
   redirect(['action' => 'advertiser/templates/index']);
 }
 else{
     alerts('add-template','do_error');
     alerts('add-template','required');
  }
 }
 public function do_fetch_templates(){

 global $smarty,$query,$result,$user;
 
  $data = $query->limit('templates','*','id','desc',$result['start'].','.$result['perpage'],'i',$user->user_id,'user_id=?');
  paging($result['screen']+1,ceil($query->num_rows('templates','*','i',$user->user_id,'user_id=?')/$result['perpage'])+1,'?p=');
 
 $with = array();
 while($res=$data->fetch_assoc()){
       $ar=array('id'=>$res['id'],'name'=>$res['name'],'title'=>$res['title'],'link'=>$res['link'],'status'=>$res['status'],'created'=>$res['created']);
       array_push($with,$ar);
 }
 $smarty->assign('templates',$with);
 }
 public function do_addcat(){

 global $query,$dateForm;

 /* add cat */
 
 $arr = $this->do_arrp('add-category','name,description');
 
 if ($this->do_post($arr,'*','add-category')){
   
   $data = $query->addquery('insert','categories','name,description,created','sss',[check_request('name'),check_request('description'),$dateForm]);

  if(!$data):
   session_acv('add-category','do_error');
   redirect(['action' => 'admin/websites/addcat']);
  endif;

   session_acv('add-category','added');
   redirect(['action' => 'admin/websites/categories']);
 }
 
 else{
     alerts('add-category','do_error');
     alerts('add-category','required');
  }
 }
 public function do_adduser(){

 global $query,$dateForm;

 /* add user */
 
 if ($this->do_post($this->do_arrp('add-user','role,status,username,password,email'),'*','add-user')){
 
     $username = $query->addquery('select','user','username','s',check_request('username'),'username=?');
     $email = $query->addquery('select','user','email','s',check_request('email'),'email=?');
     if($username || $email){
         session_acv('add-user','do_exist');
         redirect(['action' => 'admin/users/add']);
     }
     $data = $query->addquery('insert','user','role,status,username,password,email,created','sissss',[check_request('role'),check_request('status'),check_request('username'),check_request('password','md5'),check_request('email'),$dateForm]);

  if(!$data):
   session_acv('add-user','do_error');
   redirect(['action' => 'admin/users/add']);
  endif;

   session_acv('users','added');
   redirect(['action' => 'admin/users/index']);
 }
 
 else{
     alerts('add-user','do_error');
     alerts('add-user','do_exist');
     alerts('add-user','required');
  }
 }
 public function do_addip(){
     global $query,$dateForm,$user;
     
  /* add ip */
  
  if ($this->do_post($this->do_arrp('add-ip','ip,reason,status'),'*','add-ip')){
      
      $data = $query->addquery('insert','banlist','ip_address,reason,status,created','ssis',[check_request('ip'),check_request('reason'),check_request('status'),$dateForm]);
      if(!$data){
          session_acv('add_ip','do_error');
          redirect(['action' => 'admin/banlist/add']);
      }
      session_acv('ip','added');
      redirect(['action' => 'admin/banlist/index']);
 }
 
 else{

 alerts('add_ip','do_error');
 alerts('add-ip','required');
 
  }
 }
 public function do_addannoce(){

 global $query,$dateForm;
 
  /* add announcement */
  if($this->do_post($this->do_arrp('add-announcement','title,content,role'),'*','add-announcement')){
  
    $data = $query->addquery('insert','announcements','role,title,content,created','ssss',[check_request('role'),check_request('title'),$_POST['content'],$dateForm]);
    if(!$data):
        session_acv('add_announcement','do_error');
        redirect(['action' => 'admin/announcements/add']);
    endif;
   session_acv('announcements','added');
   redirect(['action' => 'admin/announcements/index']);
  } else{
     alerts('add_announcement','do_error');
     alerts('add-announcement','required');
 
  }
 }
 public function do_addpage(){
 global $query,$dateForm;
 
 /* add page */
 if($this->do_post($this->do_arrp('add-page','title,content'),'*','add-page')){
     
    $link = $this->TitleBuild(check_request('title'));
    $data = $query->addquery('insert','pages','link,title,content,short,created','sssss',[$link,check_request('title'),$_POST['content'],$this->limit_text(check_request('content'),30),$dateForm]);

  if(!$data):
   session_acv('add-page','do_error');
   redirect(['action' => 'admin/pages/add']);
  endif;
   session_acv('pages','added');
   redirect(['action' => 'admin/pages/index']);

 }
 
 else{

 alerts('add-page','do_error');
 alerts('add-page','required');
 
  }
 }
 public function do_page_display(){

 global $query,$smarty;

 /* display page */
 
 if(!isset($_GET["id"]) || empty($_GET["id"])):
  $this->do_404();
 endif;
 
 $data = $query->addquery('select','pages','*','s',$_GET["id"],'link=?');
 
 if(!$data || $data->status == 2):
  $this->do_404();
 endif;
 
 $smarty->assign('title',$data->title);
 $smarty->assign('content',$data->content);
 $this->do_winfo($data->title,$data->short);

 }
 public function do_announce_display(){
     global $query,$smarty;

 /* display page */
 
 if(!isset($_GET["id"]) || empty($_GET["id"])):
     $this->do_404();
 endif;
 $data = $query->addquery('select','announcements','*','s',$_GET["id"],'link=?');
 
 if(!$data || $data->status == 'off'):
  $this->do_404();
 endif;
 
 $smarty->assign('title',$data->title);
 $smarty->assign('content',$data->content);
 $this->do_winfo($data->title);
 }
 public function do_complete($r,$a){
 
 global $smarty,$query,$info,$dateForm;
      
 if(isset($_POST['complete'])){
     
   $withdrawal = $query->addquery('select',$r,'*','i',check_request('id'),'id=?');
   $data = $query->addquery('update',$r,'status=?','ii',['3',check_request('id')],'id=?');
   $data = $query->addquery('insert','notifications','user_id,type,amount','iss',[$withdrawal->user_id,'withdrawal',$withdrawal->amount]);
   if($data){
      $_SESSION['complete']['completed']=true;
   }elseif(!$data){
      $_SESSION['complete']['do_error']=true;
   }
      if(contains($this->referer, '/admin/')){
          redirect(['controller' => 'admin', 'action' => $a]);
      }elseif(contains($this->referer, '/member/')){
          redirect(['controller' => 'member', 'action' => $a]);
      }else{
          redirect(['controller' => 'advertiser', 'action' => $a]);
      }
 }else{
      alerts('complete','completed');
      alerts('complete','do_error');
 }
   
 }
 public function do_reject($r,$a){
 
 global $smarty,$query,$dateForm;
      
 if(isset($_POST['reject'])){
     
   $url = $query->addquery('select',$r,'*','i',check_request('id'),'id=?');
   $data = $query->addquery('update',$r,'status=?','ii',['4',check_request('id')],'id=?');
   $data = $query->addquery('insert','notifications','user_id,role,type,title','isss',[$url->user_id,'publisher','website',$this->do_label('YOUR_WEBSITE_WAS_REJECTED')]);
   if($data){
      $_SESSION['reject']['rejected']=true;
   }elseif(!$data){
      $_SESSION['reject']['do_error']=true;
   }
      if(contains($this->referer, '/admin/')){
          redirect(['controller' => 'admin', 'action' => $a]);
      }elseif(contains($this->referer, '/member/')){
          redirect(['controller' => 'member', 'action' => $a]);
      }else{
          redirect(['controller' => 'advertiser', 'action' => $a]);
      }
 }else{
      alerts('reject','rejected');
      alerts('reject','do_error');
 }
   
 }
 public function do_activate($r,$a){
 
 global $smarty,$query,$info,$dateForm;
      
 if(isset($_POST['activate'])){

   if($r == 'invoice'){
       $invoice = $query->addquery('select',$r,'*','i',check_request('id'),'id=?');
       $data = $query->addquery('update',$r,'status=?','ii',['1',check_request('id')],'id=?');
       $data = $query->addquery('update','user','ad_balance=ad_balance+?','si',[$invoice->amount,$invoice->user_id],'user_id=?');
       $data = $query->addquery('insert','notifications','user_id,type,amount','iss',[$invoice->user_id,'deposit',$invoice->amount]);
   }elseif($r == 'campaigns'){
       $campaign = $query->addquery('select',$r,'*','i',check_request('id'),'id=?');
       $data = $query->addquery('update',$r,'status=?','ii',['1',check_request('id')],'id=?');
       $data = $query->addquery('insert','notifications','user_id,role,type','iss',[$campaign->user_id,'advertiser','campaign']);
   }elseif($r == 'themes'){
       if(do_config(43) == 1){
           session_acv('mode_demo','do_demo');
           redirect(['controller' => 'admin', 'action' => $a]);
       }
       $data = $query->addquery('update',$r,'status=?','ii',[1,check_request('id')],'id=?');
       write(CONFIG.'app.php',get_app($HOST,check_request('name'),$info->install,$info->version,$info->id,$info->app,$info->start,$info->update),'w');
   }elseif($r == 'link'){
       $url = $query->addquery('select',$r,'*','i',check_request('id'),'id=?');
       $data = $query->addquery('update',$r,'status=?','ii',[1,check_request('id')],'id=?');
       $data = $query->addquery('insert','notifications','user_id,role,type,title','isss',[$url->user_id,'publisher','website',$this->do_label('YOUR_WEBSITE_WAS_APPROVED')]);
   }elseif($r == 'user'){
       $data = $query->addquery('update',$r,'status=?','ii',[1,check_request('id')],'user_id=?');
   }else{
       $data = $query->addquery('update',$r,'status=?','ii',['1',check_request('id')],'id=?');
   }
   
   if($data){
      $_SESSION['activate']['activated']=true;
   }elseif(!$data){
      $_SESSION['activate']['do_error']=true;
   }
      if(contains($this->referer, '/admin/')){
          redirect(['controller' => 'admin', 'action' => $a]);
      }elseif(contains($this->referer, '/member/')){
          redirect(['controller' => 'member', 'action' => $a]);
      }else{
          redirect(['controller' => 'advertiser', 'action' => $a]);
      }
 }else{
      alerts('activate','activated');
      alerts('activate','do_error');
 }
   
 }
 public function do_deactivate($r,$a){
 
 global $smarty,$query,$user;
      
 if( isset($_POST['deactivate'])){
   if($r == 'user'){
       if(do_config(43) == 1){
           if($this->do_userinfo(check_request('id'))->role == 'admin'){
               session_acv('mode_demo','do_demo');
               redirect(['controller' => 'admin', 'action' => $a]);
           }
       }
       $data = $query->addquery('update',$r,'status=?','ii',[2,check_request('id')],'user_id=?');
   }elseif($r == 'themes'){
       if(do_config(43) == 1){
           session_acv('mode_demo','do_demo');
           redirect(['controller' => 'admin', 'action' => $a]);
       }
       $data = $query->addquery('update',$r,'status=?','ii',[2,check_request('id')],'id=?');
   }elseif($r == 'link'){
       $data = $query->addquery('update',$r,'status=?','ii',[3,check_request('id')],'id=?');
   }elseif($r == 'campaigns'){
       if($_POST['deactivate'] == 'reject'){
           $data = $query->addquery('update',$r,'status=?','ii',[5,check_request('id')],'id=?');
           $campaign = $query->addquery('select',$r,'*','i',check_request('id'),'id=?');
           $data = $query->addquery('update','user','ad_balance=ad_balance+?','si',[$campaign->camp_price,$campaign->user_id],'user_id=?');
       }else{
           $data = $query->addquery('update',$r,'status=?','ii',[5,check_request('id')],'id=?');
       }
   }else{
       $data = $query->addquery('update',$r,'status=?','ii',['2',check_request('id')],'id=?');
   }
   if($data):
      $_SESSION['deactivate']['deactivated']=true;
   elseif(!$data):
      $_SESSION['deactivate']['do_error']=true;
   endif;
      if(contains($this->referer, '/admin/')){
          redirect(['controller' => 'admin', 'action' => $a]);
      }elseif(contains($this->referer, '/member/')){
          redirect(['controller' => 'member', 'action' => $a]);
      }else{
          redirect(['controller' => 'advertiser', 'action' => $a]);
      }
 }else{
      alerts('mode_demo','do_demo');
      alerts('deactivate','deactivated');
      alerts('deactivate','do_error');
 }
   
 }
 public function do_delete($r,$a){
 
 global $smarty,$query;
      
 if(isset($_POST['delete'])):
     if(do_config(43) == 1 && $r == 'user' && contains($this->referer, '/admin/')){
         if($this->do_userinfo(check_request('id'))->role == 'admin'){
             session_acv('mode_demo','do_demo');
             redirect(['controller' => 'admin', 'action' => $a]);
         }
     }
     if($r == 'themes'){
         if(do_config(43) == 1){
             session_acv('mode_demo','do_demo');
             redirect(['controller' => 'admin', 'action' => $a]);
         }
         $data = $query->addquery('delete',$r,false,'i',check_request('id'),'id=?');
         delete_files(WWW_ROOT.'template'.DS.check_request('name'));
     }elseif($r == 'user'){
         $data = $query->addquery('delete',$r,false,'i',check_request('id'),'user_id=?');
     }else{
         $data = $query->addquery('delete',$r,false,'i',check_request('id'),'id=?');
     }
      $_SESSION['delete']['deleted']=true;
      if(contains($this->referer, '/admin/')){
          redirect(['controller' => 'admin', 'action' => $a]);
      }elseif(contains($this->referer, '/member/')){
          redirect(['controller' => 'member', 'action' => $a]);
      }else{
          redirect(['controller' => 'advertiser', 'action' => $a]);
      }
 else:
      alerts('delete','deleted');
 endif;
   
 }
 public function do_maildata($r,$arr=false){
 global $smarty,$dateForm;

 $smarty->assign('m_role',$r);
 $smarty->assign('m_name',$arr['m_name']);
 $smarty->assign('m_subject',$arr['m_subject']);
 $smarty->assign('m_created',$dateForm);
 switch($r):
  case 'message':
   $smarty->assign('m_email',$arr['m_email']);
   $smarty->assign('m_comment',$arr['m_comment']);
   $smarty->assign('m_username',$arr['m_username']);
  break;
  case 'activate':
   $smarty->assign('m_token',$arr['m_token']);
  break;
  case 'recover':
   $smarty->assign('m_token',$arr['m_token']);
  break;
  case 'support':
   $smarty->assign('m_comment',$arr['m_comment']);
  break;
 endswitch;
}
 public function do_updata($r){
 global $smarty,$query;
  
  if($r == 'user'){
      $data = $query->addquery('select',$r,'*','i',$_GET['id'],'user_id=?');
      $smarty->assign('r_id',$data->user_id);
  }else{
      $data = $query->addquery('select',$r,'*','i',$_GET['id'],'id=?');
      $smarty->assign('r_id',$data->id);
  }
 switch($r):
  case 'user':
     
   $smarty->assign('r_username',$data->username);
   $smarty->assign('r_role',$data->role);
   $smarty->assign('r_status',$data->status);
   $smarty->assign('r_email',$data->email);
   $smarty->assign('r_pub_earnings',$data->pub_earnings);
   $smarty->assign('r_ad_balance',$data->ad_balance);
   $smarty->assign('r_referral_earnings',$data->referral_earnings);

   /* view user */
   
   $smarty->assign('r_login_ip',$data->login_ip);
   $smarty->assign('r_register_ip',$data->register_ip);
   $smarty->assign('r_created',$data->created);

   /* billing */
   $smarty->assign('r_first_name',$data->first_name);
   $smarty->assign('r_last_name',$data->last_name);
   $smarty->assign('r_address',$data->address);
   $smarty->assign('r_country',$data->country);

  break;
  case 'prices':
     
   $smarty->assign('r_prod_id',$data->prod_id);
   $smarty->assign('r_amount',$data->amount);
   $smarty->assign('r_price',$data->price);
   $smarty->assign('r_status',$data->status);
  break;
  case 'announcements':
     
   $smarty->assign('r_title',$data->title);
   $smarty->assign('r_content',$data->content);
  break;
  case 'pages':
     
   $smarty->assign('r_title',$data->title);
   $smarty->assign('r_content',$data->content);
  break;
  case 'currencies':
   $smarty->assign('r_name',$data->name);
   $smarty->assign('r_symbol',$data->symbol);
   break;
 endswitch;
 
}
 public function do_settings(){
     
 global $smarty,$query,$user;
      
   $smarty->assign('profile',true);
   $this->do_winfo('SETTINGS');
   $smarty->assign('countries',explode(',',do_config(22)));
   $smarty->assign('first_name',$user->first_name);
   $smarty->assign('last_name',$user->last_name);
   $smarty->assign('country',$user->country);
   $smarty->assign('address',$user->address);

  if($this->do_post($this->do_arrp('settings','email,first_name,last_name,country,address'),'*','settings')):

    /* Update Personal Information */

    $emdata = $query->addquery('select','user','*','s',check_request('email'),'email=?');
    if($emdata && $user->user_id != $emdata->user_id){
      session_acv('settings','email_exist');
      //redirect
      if(contains(ACCESS, '/member/')) {
          redirect(['controller' => 'member', 'action' => 'settings/index']);
      }else{
          redirect(['controller' => 'advertiser', 'action' => 'settings/index']);
      }
    }
    $data = $query->addquery('update','user','email=?,first_name=?,last_name=?,country=?,address=?','sssssi',[check_request('email'),check_request('first_name'),check_request('last_name'),check_request('country'),check_request('address'),$user->user_id],'user_id=?');
    session_acv('settings','updated');
    //redirect
    if(contains(ACCESS, '/member/')) {
        redirect(['controller' => 'member', 'action' => 'settings/index']);
    }else{
        redirect(['controller' => 'advertiser', 'action' => 'settings/index']);
    }
  else:
   alerts('settings','updated');
   alerts('settings','required');
   alerts('settings','email_exist');
  endif;
 }
 public function do_password(){
 global $smarty,$query,$user;

  $smarty->assign('password',true);
  $this->do_winfo('CHANGE_YOUR_PASSWORD');
  if($this->do_post($this->do_arrp('change-password','new_password,confirm_new_password,current_password'),'*','change-password')):

    /* Update Password */
     $new_password = check_request('new_password','md5');
     $confirm_new_password = check_request('confirm_new_password','md5');
     $current_password = check_request('current_password','md5');

    if($user->password == $current_password && $new_password == $confirm_new_password):
      $query->addquery('update','user','password=?','si',[$new_password,$user->user_id],'user_id=?');
      session_acv('change-password','changed');
      //redirect
      if(contains(ACCESS, '/member/')) {
          redirect(['controller' => 'member', 'action' => 'settings/password']);
      }else{
          redirect(['controller' => 'advertiser', 'action' => 'settings/password']);
      }
    elseif($new_password != $confirm_new_password):
      session_acv('change-password','confirm');
      //redirect
      if(contains(ACCESS, '/member/')) {
          redirect(['controller' => 'member', 'action' => 'settings/password']);
      }else{
          redirect(['controller' => 'advertiser', 'action' => 'settings/password']);
      }	
	else:
      session_acv('change-password','do_error');
      //redirect
      if(contains(ACCESS, '/member/')) {
          redirect(['controller' => 'member', 'action' => 'settings/password']);
      }else{
          redirect(['controller' => 'advertiser', 'action' => 'settings/password']);
      }
    endif;
  else:
   alerts('change-password','changed');
   alerts('change-password','confirm');
   alerts('change-password','do_error');
   alerts('change-password','required');
  endif;

 }
 public function do_support(){
     global $user,$query,$dateForm,$uid,$smarty;
     //$c_uid = $user->user_id ? : 0;
     if ($this->do_post($this->do_arrp('support','email,name,subject,message'),'*','support')){
         
         /* send message to user */
         $array = ['m_name'=> check_request('name'),
                   'm_subject'=> check_request('subject'),
                   'm_comment'=>'<b>'.$this->do_label('YOUR_MESSAGE').' :</b><br> '.$_POST['message'].'<br>',
                  ];
                  $this->do_maildata('support',$array);
                  mailer(['from'=>do_config(31),'to'=>check_request('email'),'subject'=>$this->do_label('YOUR_MESSAGE_WAS_RECIEVED'),'msg'=>fetch('Admin/Mailer/index')]);
        
         /* send message to admin */
         $array = ['m_name'=> do_config(0).$this->do_label('ADMIN'),
                   'm_subject'=> check_request('subject'),
                   'm_comment'=>'<b>'.$this->do_label('MESSAGE').' :</b><br> '.$_POST['message'].'<br>',
                  ];
                  $this->do_maildata('support',$array);
                  
                  if(contains(ACCESS, '/member/')){
                      mailer(['from'=>do_config(31),'to'=>do_config('13'),'subject'=>$this->do_label('NEW_MESSAGE_FROM_PUBLISHER'),'msg'=>fetch('Admin/Mailer/index')]);
                      session_acv('support','sent');
                      redirect(['controller' => 'member','action' => 'support']);
                  }elseif(contains(ACCESS, '/advertiser/')){
                      mailer(['from'=>do_config(31),'to'=>do_config('13'),'subject'=>$this->do_label('NEW_MESSAGE_FROM_ADVERTISER'),'msg'=>fetch('Admin/Mailer/index')]);
                      session_acv('support','sent');
                      redirect(['controller' => 'advertiser','action' => 'support']);
                  }
     }else{
         alerts('support','sent');
         alerts('support','required');
     }
}
 public function do_upuser(){
     
 global $smarty,$query;

  if(isset($_POST['up-user'])):
     if(do_config(43) == 1){
         if($this->do_userinfo($_GET['id'])->role == 'admin'){
             session_acv('mode_demo','do_demo');
             redirect(['controller' => 'admin', 'action' => 'users/edit/'.$_GET['id'].DS]);
         }
     }
      switch($this->do_userinfo($_GET['id'])->role){
          default:
              $data = $query->addquery('update','user','role=?,status=?,username=?,email=?,pub_earnings=?,ad_balance=?','sissssi',[check_request('role'),check_request('status',false,'int'),check_request('username'),check_request('email'),check_request('pub_earnings'),check_request('ad_balance'),$_GET['id']],'user_id=?');
              break;
          case 'publisher':
              $data = $query->addquery('update','user','role=?,status=?,username=?,email=?,pub_earnings=?','sisssi',[check_request('role'),check_request('status',false,'int'),check_request('username'),check_request('email'),check_request('pub_earnings'),$_GET['id']],'user_id=?');
              break;
          case 'advertiser':
              $data = $query->addquery('update','user','role=?,status=?,username=?,email=?,ad_balance=?','sisssi',[check_request('role'),check_request('status',false,'int'),check_request('username'),check_request('email'),check_request('ad_balance'),$_GET['id']],'user_id=?');
              break;
      }
      
   if($data):
      $_SESSION['users']['updated']=true;
      redirect(['controller' => 'admin', 'action' => 'users/index']);
   elseif(!$data):
      $_SESSION['users']['do_error']=true;
      redirect(['controller' => 'admin', 'action' => 'users/edit/'.$_GET['id'].DS]);
   endif;
  else:
      alerts('mode_demo','do_demo');
      alerts('users','do_error');
      alerts('users','required');
  endif;
     
 }
 public function do_upannouncement(){
 global $smarty,$query;

  if(isset($_POST['up-announcement'])):

     $data = $query->addquery('update','announcements','title=?,content=?','ssi',[check_request('title'),$_POST['content'],$_GET['id']],'id=?');

   if($data):
      $_SESSION['announcements']['updated']=true;
      redirect(['controller' => 'admin', 'action' => 'announcements/index']);
   elseif(!$data):
      $_SESSION['announcements']['do_error']=true;
      redirect(['controller' => 'admin', 'action' => 'announcements/edit/'.$_GET['id'].DS]);
   endif;
  else:
      alerts('announcements','do_error');
      alerts('announcements','required');
  endif;
     
 }
 public function do_upage(){
     
 global $smarty,$query;

  if(isset($_POST['up-page'])):

     $data = $query->addquery('update','pages','title=?,content=?,short=?','sssi',[check_request('title'),$_POST['content'],$this->limit_text(check_request('content'),30),$_GET['id']],'id=?');

   if($data):
      $_SESSION['pages']['updated']=true;
      redirect(['controller' => 'admin', 'action' => 'pages/index']);
   elseif(!$data):
      $_SESSION['pages']['do_error']=true;
      redirect(['controller' => 'admin', 'action' => 'pages/edit/'.$_GET['id'].DS]);
   endif;
  else:
      alerts('pages','do_error');
      alerts('pages','required');
  endif;
     
 }
 public function do_upemail(){
     
 global $smarty,$query;
 
  $smarty->assign('emails',1);
  if(isset($_POST['up-email'])):
     if(do_config(43) == 1){
         session_acv('mode_demo','do_demo');
         redirect(['controller' => 'admin', 'action' => 'options/email']);
     }
     $query->addquery('update','config','value=?','ss',[check_request('support_email'),'support_email'],'header=?');
     $query->addquery('update','config','value=?','ss',[check_request('option'),'mailer_option'],'header=?');
     $query->addquery('update','config','value=?','ss',[check_request('host'),'mailer_host'],'header=?');
     $query->addquery('update','config','value=?','ss',[check_request('port'),'mailer_port'],'header=?');
     $query->addquery('update','config','value=?','ss',[check_request('ssl'),'mailer_use'],'header=?');
     $query->addquery('update','config','value=?','ss',[check_request('pass'),'mailer_pass'],'header=?');
     $query->addquery('update','config','value=?','ss',[check_request('username'),'mailer_username'],'header=?');
     $_SESSION['email']['mailer']=true;
     redirect(['controller' => 'admin', 'action' => 'options/email']);
  else:
      alerts('mode_demo','do_demo');
      alerts('email','do_error');
      alerts('email','mailer');
  endif;
     
 }
 public function do_currencies($r){
 
 global $smarty,$query;
 
 if($r==1):
    $data = $query->addquery('fetch','currencies','*','i',1,'status=?');
 elseif($r==2):
     $data = $query->addquery('fetch','currencies','*');
 endif;
 
 $with = array();
 while($res=$data->fetch_assoc()){
       $arr=array('id'=>$res['id'],'name'=>$res['name'],'symbol'=>$res['symbol'],'status'=>$res['status'],'created'=>$res['created']);
       array_push($with,$arr);
 }
 $smarty->assign('currencies',$with);
 }
 public function do_announcements(){
 global $smarty,$query,$result;
      
   $data = $query->limit('announcements','*','id','desc',$result['start'].','.$result['perpage']);
   paging($result['screen']+1,ceil($query->num_rows('announcements','*')/$result['perpage'])+1,'?p=');
   alerts('announcements','added');
   alerts('announcements','updated');
   
   $with = array();
   while($res=$data->fetch_assoc()){
         $arr=array('id'=>$res['id'],'role'=>$res['role'],'title'=>$res['title'],'status'=>$res['status'],'created'=>$res['created']);
         array_push($with,$arr);
   }
   if(!endsWith(ACCESS, 'announcements/add')){
       $smarty->assign('announcements',$with);
   }
}
 public function do_pages($role=false){
 global $smarty,$query,$result;
      
   if($role):
   $data = $query->limit('pages','*','id','desc',$result['start'].','.$result['perpage']);
   paging($result['screen']+1,ceil($query->num_rows('pages','*')/$result['perpage'])+1,'?p=');
   alerts('pages','added');
   alerts('pages','updated');
   else:
   $data = $query->limit('pages','*','id','desc','0,7','ii','2,1','protect=?,status=?');
   endif;
   
   $with = array();
   while($res=$data->fetch_assoc()){
         $arr=array('id'=>$res['id'],'title'=>$res['title'],'link'=>$this->host.'page'.DS.$res['link'].DS,'status'=>$res['status'],'protect'=>$res['protect'],'created'=>$res['created']);
         array_push($with,$arr);
   }
   if(!endsWith(ACCESS, 'pages/add')){
       $smarty->assign('pages',$with);
   }
}
 public function do_protected_pages(){
 
 global $smarty,$query,$result;
      
   $data = $query->limit('pages','*','id','desc','0,7','ii','1,1','protect=?,status=?');
   
 $with = array();
 while($res=$data->fetch_assoc()):
 $arr=array('id'=>$res['id'],'title'=>$res['title'],'status'=>$res['status'],'protect'=>$res['protect'],'created'=>$res['created']);
 array_push($with,$arr);
 endwhile;

 $smarty->assign('protected',$with);

}
 public function do_plugins(){
 global $smarty,$query,$result;
      
 $data = $query->limit('plugins','*','id','desc',$result['start'].','.$result['perpage']);
 paging($result['screen']+1,ceil($query->num_rows('plugins','*')/$result['perpage'])+1,'?p='); 
 
 $with = array();
 while($res=$data->fetch_assoc()){
       $arr=array('id'=>$res['id'],'name'=>$res['name'],'author'=>$res['author'],'version'=>$res['version'],'created'=>$res['created']);
       array_push($with,$arr);
 }
 $smarty->assign('plugins',$with);
 }
 public function do_themes(){
 global $smarty,$query;

 $data = $query->addquery('fetch','themes','*');
 
 $with = array();
 while($res=$data->fetch_assoc()){
       $arr=array('id'=>$res['id'],'name'=>$res['name'],'screen'=>$res['screen'],'status'=>$res['status']);
       array_push($with,$arr);
 }
 $smarty->assign('themes',$with);
 }
 public function do_upayments(){
     
 global $smarty,$query;
 
  /* payments configration */
  $data = $query->normal("select * from ".$this->pfx."deposite_methods ORDER BY id asc");
  $with = array();
  
  while($res=$data->fetch_assoc()){
        $arr=array('id'=>$res['id'],'name'=>$res['name'],'methods'=>$res['methods'],'account'=>$res['account'],'public_key'=>$res['public_key'],'secret_key'=>$res['secret_key'],'ipn_url'=>$res['ipn_url'],'tax_percent'=>$res['tax_percent'],'status'=>$res['status']);
        array_push($with,$arr);
  }
  $smarty->assign('dmethods',$with);
  
  /* activate/deactivate currencies 
  $this->do_activate('currencies','options/payment');
  $this->do_deactivate('currencies','options/payment');
  $this->do_delete('currencies','options/payment');
  */
  
  $smarty->assign('payments',true);
  $this->do_currencies(2); 
  
  /* update payments configration */
  if(isset($_POST['up-payments'])):
     if(do_config(43) == 1){
         session_acv('mode_demo','do_demo');
         redirect(['controller' => 'admin', 'action' => 'options/payment']);
     }
      //generale configration
      $query->addquery('update','config','value=?','ss',[check_request('currency'),'currency'],'header=?');
      $query->addquery('update','config','value=?','ss',[check_request('min_deposit'),'min_deposit'],'header=?');
      
      //gateway configration
      $array = ['paypal','coinbase','stripe','bank','paytm'];
      for($i=0; $i < count($array); $i++){
          $query->addquery('update','deposite_methods','account=?,public_key=?,secret_key=?,tax_percent=?,status=?','ssssis',[$_POST['account_'.$array[$i]],$_POST['public_key_'.$array[$i]],$_POST['secret_key_'.$array[$i]],$_POST['tax_percent_'.$array[$i]],$_POST['status_'.$array[$i]],$array[$i]],'methods=?');
      }
      $_SESSION['payments']['updated']=true;
      redirect(['controller' => 'admin', 'action' => 'options/payment']);
  else:
      alerts('mode_demo','do_demo');
      alerts('payments','do_error');
      alerts('payments','updated');
  endif;
     
 }
 public function do_upwithdraws(){
     
 global $smarty,$query;
 
  /* payments configration */
  $data = $query->normal("select * from ".$this->pfx."withdraw_methods ORDER BY id asc");
  $with = array();
  
  while($res=$data->fetch_assoc()){
        $arr=array('id'=>$res['id'],'name'=>$res['name'],'methods'=>$res['methods'],'minimum'=>$res['minimum'],'fee'=>$res['fee'],'status'=>$res['status']);
        array_push($with,$arr);
  }
  $smarty->assign('wmethods',$with);
  $smarty->assign('withdrawal',true);

  /* update withdrawal configration */
  if(isset($_POST['up-withdraws'])):
     if(do_config(43) == 1){
         session_acv('mode_demo','do_demo');
         redirect(['controller' => 'admin', 'action' => 'options/withdrawal']);
     }
      //gateway configration
      $data = $query->normal("select * from ".$this->pfx."withdraw_methods ORDER BY id asc");

      while($res=$data->fetch_assoc()){
          $query->addquery('update','withdraw_methods','minimum=?,fee=?,status=?','ssis',[$_POST['minimum_'.$res['methods']],$_POST['fee_'.$res['methods']],$_POST['status_'.$res['methods']],$res['methods']],'methods=?');
      }
      $_SESSION['withdraws']['updated']=true;
      redirect(['controller' => 'admin', 'action' => 'options/withdrawal']);
  else:
      alerts('mode_demo','do_demo');
      alerts('withdraws','do_error');
      alerts('withdraws','updated');
      alerts('add-withdrawal','added');
      alerts('withdraws','deleted');
  endif;
     
 if(isset($_GET['delete'])){
   
   $query->addquery('delete','withdraw_methods',false,'i',$_GET['delete'],'id=?');

   session_acv('withdraws','deleted');
   redirect(['action' => 'admin/options/withdrawal']);
 }
     
 }
 public function do_add_withdrawal(){

 global $query;

 /* add withdrawal */
 
 if ($this->do_post($this->do_arrp('add-withdrawal','name','minimum'),'*','add-withdrawal')){
   if(do_config(43) == 1){
       session_acv('mode_demo','do_demo');
       redirect(['controller' => 'admin', 'action' => 'options/add-withdrawal']);
   }
   $method = $this->titlebuild(check_request('name'));
   $data = $query->addquery('insert','withdraw_methods','name,fee,minimum,methods','ssss',[check_request('name'),check_request('fee'),check_request('minimum'),$method]);

  if(!$data):
   session_acv('add-withdrawal','do_error');
   redirect(['action' => 'admin/options/add-withdrawal']);
  endif;

   session_acv('add-withdrawal','added');
   redirect(['action' => 'admin/options/withdrawal']);
 }else{
     alerts('mode_demo','do_demo');
     alerts('add-withdrawal','do_error');
     alerts('add-withdrawal','required');
  }
 }
 public function do_options(){
     
 global $smarty,$query,$info;

  /* generale options */
  
  
  $smarty->assign('options',1);
  if(isset($_POST['up-generale'])):
     if(do_config(43) == 1){
         session_acv('mode_demo','do_demo');
         redirect(['controller' => 'admin', 'action' => 'options/index']);
     }
     $query->addquery('update','config','value=?','ss',[check_request('name'),'name'],'header=?');
     $query->addquery('update','config','value=?','ss',[check_request('site_title'),'site_title'],'header=?');
     $query->addquery('update','config','value=?','ss',[check_request('site_description'),'site_description'],'header=?');
     $query->addquery('update','config','value=?','ss',[check_request('account_activate_email'),'account_activate_email'],'header=?');
     $query->addquery('update','config','value=?','ss',[check_request('keywords'),'keywords'],'header=?');
     $query->addquery('update','config','value=?','ss',[check_request('home_sec_desc'),'home_sec_desc'],'header=?');
     $app_data = get_app(check_request('main_domain'),Theme,$info->install,$info->version,$info->id,$info->app,$info->start,$info->update);
      
     if(!empty(trim(check_request('main_domain')))):
       write(CONFIG.'app.php',$app_data,'w');
       $_SESSION['options']['generale']=true;
     else:
       $_SESSION['options']['do_error']=true;
     endif;
      redirect(['controller' => 'admin', 'action' => 'options/index']);

  else:
      alerts('options','generale');
      alerts('options','do_error');
      alerts('mode_demo','do_demo');
  endif;
  
  /* design options */

  if(isset($_POST['up-design'])):
   if(do_config(43) == 1){
         session_acv('mode_demo','do_demo');
         redirect(['controller' => 'admin', 'action' => 'options/index']);
   }
   if(!empty(trim(check_request('logo_url'))) && !empty(trim(check_request('icon_url')))):
       
     /*---- img stracture -----*/

     $data = $query->addquery('update','config','value=?','ss',[check_request('logo_url'),'logo_url'],'header=?');
     $data = $query->addquery('update','config','value=?','ss',[check_request('users_logo_url'),'users_logo_url'],'header=?');
     $data = $query->addquery('update','config','value=?','ss',[check_request('icon_url'),'icon_url'],'header=?');
     $data = $query->addquery('update','config','value=?','ss',[check_request('meta_img'),'meta_img'],'header=?');

      $_SESSION['options']['design']=true;
   else:
      $_SESSION['options']['do_error']=true;
   endif;
      redirect(['controller' => 'admin', 'action' => 'options/index']);
  else:
      alerts('options','design');
  endif;
  
  /* extra options */

  if(isset($_POST['up-extra'])):
     if(do_config(43) == 1){
         session_acv('mode_demo','do_demo');
         redirect(['controller' => 'admin', 'action' => 'options/index']);
     }
     $data = $query->addquery('update','config','value=?','ss',[$_POST['meta_perfix'],'meta_perfix'],'header=?');
     $data = $query->addquery('update','config','value=?','ss',[$_POST['enable_search_index'],'enable_search_index'],'header=?');
     $data = $query->addquery('update','config','value=?','ss',[$_POST['sumbole_position'],'sumbole_position'],'header=?');
     $data = $query->addquery('update','config','value=?','ss',[$_POST['amount_decimal'],'amount_decimal'],'header=?');
     $data = $query->addquery('update','config','value=?','ss',[$_POST['admin_percent'],'admin_percent'],'header=?');

     $_SESSION['options']['extra']=true;
     redirect(['controller' => 'admin', 'action' => 'options/index']);
  else:
      alerts('options','extra');
  endif;
  
  /* interg options */

  if(isset($_POST['up-interg'])):
     if(do_config(43) == 1){
         session_acv('mode_demo','do_demo');
         redirect(['controller' => 'admin', 'action' => 'options/index']);
     }
     $data = $query->addquery('update','config','value=?','ss',[$_POST['head_code'],'head_code'],'header=?');
     $data = $query->addquery('update','config','value=?','ss',[$_POST['body_code'],'body_code'],'header=?');
     $data = $query->addquery('update','config','value=?','ss',[$_POST['footer_code'],'footer_code'],'header=?');
     $_SESSION['options']['interg']=true;
     redirect(['controller' => 'admin', 'action' => 'options/index']);
  else:
      alerts('options','interg');
  endif;
     
  /* captcha options */

  if(isset($_POST['up-captcha'])):
     if(do_config(43) == 1){
         session_acv('mode_demo','do_demo');
         redirect(['controller' => 'admin', 'action' => 'options/index']);
     }
     $data = $query->addquery('update','config','value=?','ss',[check_request('reCAPTCHA_site_key'),'reCAPTCHA_site_key'],'header=?');
     $data = $query->addquery('update','config','value=?','ss',[check_request('reCAPTCHA_secret_key'),'reCAPTCHA_secret_key'],'header=?');
     $data = $query->addquery('update','config','value=?','ss',[check_request('captcha_signup'),'captcha_signup'],'header=?');
     $data = $query->addquery('update','config','value=?','ss',[check_request('captcha_login'),'captcha_login'],'header=?');
     $data = $query->addquery('update','config','value=?','ss',[check_request('captcha_forgot'),'captcha_forgot'],'header=?');
     $_SESSION['options']['captcha']=true;
     redirect(['controller' => 'admin', 'action' => 'options/index']);
     
  else:
      alerts('options','captcha');
  endif;
  
  /* system options */

  if(isset($_POST['up-system'])):
     if(do_config(43) == 1){
         session_acv('mode_demo','do_demo');
         redirect(['controller' => 'admin', 'action' => 'options/index']);
     }
     $data = $query->addquery('update','config','value=?','ss',[check_request('language'),'language'],'header=?');
     $data = $query->addquery('update','config','value=?','ss',[check_request('landing'),'landing'],'header=?');
     $data = $query->addquery('update','config','value=?','ss',[check_request('protected_usernames'),'protected_usernames'],'header=?');
     $data = $query->addquery('update','config','value=?','ss',[check_request('adv_support_email'),'adv_support_email'],'header=?');
     $data = $query->addquery('update','config','value=?','ss',[check_request('pub_support_email'),'pub_support_email'],'header=?');

      $_SESSION['options']['system']=true;
      redirect(['controller' => 'admin', 'action' => 'options/index']);
  else:
      alerts('options','system');
  endif;
  

  /* social options */
  
  if(isset($_POST['up-social'])):
     if(do_config(43) == 1){
         session_acv('mode_demo','do_demo');
         redirect(['controller' => 'admin', 'action' => 'options/index']);
     }
     $data = $query->addquery('update','config','value=?','ss',[check_request('fb_link'),'fb_link'],'header=?');
     $data = $query->addquery('update','config','value=?','ss',[check_request('tweet_link'),'tweet_link'],'header=?');
     $data = $query->addquery('update','config','value=?','ss',[check_request('insta_link'),'insta_link'],'header=?');
     $_SESSION['options']['social']=true;
     redirect(['controller' => 'admin', 'action' => 'options/index']);
  else:
      alerts('options','social');
  endif;
     
 }
 public function do_ads_config(){
     
 global $smarty,$query,$info;

  /* generale options */
  
  
  $smarty->assign('ads',1);
  if(isset($_POST['up-generale'])):
     if(do_config(43) == 1){
         session_acv('mode_demo','do_demo');
         redirect(['controller' => 'admin', 'action' => 'options/index']);
     }
     $query->addquery('update','config','value=?','ss',[check_request('max_ip_views'),'max_ip_views'],'header=?');
     $query->addquery('update','config','value=?','ss',[check_request('max_ip_clicks'),'max_ip_clicks'],'header=?');
     $query->addquery('update','config','value=?','ss',[check_request('min_views'),'min_views'],'header=?');
     $query->addquery('update','config','value=?','ss',[check_request('min_clicks'),'min_clicks'],'header=?');
     $query->addquery('update','config','value=?','ss',[check_request('adchoice_icon'),'adchoice_icon'],'header=?');
     $query->addquery('update','config','value=?','ss',[check_request('adchoice_link'),'adchoice_link'],'header=?');
     //$query->addquery('update','config','value=?','ss',[$_POST['sizes'],'sizes'],'header=?');

     $_SESSION['options']['generale']=true;
     redirect(['controller' => 'admin', 'action' => 'options/ads']);
  else:
      alerts('options','generale');
      alerts('options','do_error');
  endif;
  
  /* imgbanners options */

  if(isset($_POST['up-imgbanners'])):
     if(do_config(43) == 1){
         session_acv('mode_demo','do_demo');
         redirect(['controller' => 'admin', 'action' => 'options/index']);
     }
     $data = $query->addquery('update','config','value=?','ss',[check_request('enable_img_banner'),'enable_img_banner'],'header=?');
     $data = $query->addquery('update','config','value=?','ss',[check_request('default_link_banner'),'default_link_banner'],'header=?');
     $data = $query->addquery('update','config','value=?','ss',[check_request('cpm_img_banner'),'cpm_img_banner'],'header=?');
     $data = $query->addquery('update','config','value=?','ss',[check_request('cpc_img_banner'),'cpc_img_banner'],'header=?');
     
     /* images */
     $data = $query->addquery('update','config','value=?','ss',[$_POST['default_728x90_img_banner'],'default_728x90_img_banner'],'header=?');
     $data = $query->addquery('update','config','value=?','ss',[$_POST['default_468x60_img_banner'],'default_468x60_img_banner'],'header=?');
     $data = $query->addquery('update','config','value=?','ss',[$_POST['default_300x250_img_banner'],'default_300x250_img_banner'],'header=?');
     $data = $query->addquery('update','config','value=?','ss',[$_POST['default_300x600_img_banner'],'default_300x600_img_banner'],'header=?');
     $data = $query->addquery('update','config','value=?','ss',[$_POST['default_120x600_img_banner'],'default_120x600_img_banner'],'header=?');
     $data = $query->addquery('update','config','value=?','ss',[$_POST['default_200x200_img_banner'],'default_200x200_img_banner'],'header=?');
     $data = $query->addquery('update','config','value=?','ss',[$_POST['default_125x125_img_banner'],'default_125x125_img_banner'],'header=?');
     $data = $query->addquery('update','config','value=?','ss',[$_POST['default_690x500_img_banner'],'default_690x500_img_banner'],'header=?');
     
      $_SESSION['options']['imgbanners']=true;
      redirect(['controller' => 'admin', 'action' => 'options/ads']);
  else:
      alerts('options','imgbanners');
  endif;
  
  /* txtbanners options */

  if(isset($_POST['up-txtbanners'])):
     if(do_config(43) == 1){
         session_acv('mode_demo','do_demo');
         redirect(['controller' => 'admin', 'action' => 'options/index']);
     }
     $data = $query->addquery('update','config','value=?','ss',[check_request('enable_txt_banner'),'enable_txt_banner'],'header=?');
     $data = $query->addquery('update','config','value=?','ss',[check_request('default_link_text_banner'),'default_link_text_banner'],'header=?');
     $data = $query->addquery('update','config','value=?','ss',[check_request('default_title_text_banner'),'default_title_text_banner'],'header=?');
     $data = $query->addquery('update','config','value=?','ss',[check_request('default_description_text_banner'),'default_description_text_banner'],'header=?');
     $data = $query->addquery('update','config','value=?','ss',[check_request('cpm_text_banner'),'cpm_text_banner'],'header=?');
     $data = $query->addquery('update','config','value=?','ss',[check_request('cpc_text_banner'),'cpc_text_banner'],'header=?');

     $_SESSION['options']['txtbanners']=true;
      redirect(['controller' => 'admin', 'action' => 'options/ads']);
  else:
      alerts('options','txtbanners');
  endif;
  
  /* popups options */

  if(isset($_POST['up-popups'])):
     if(do_config(43) == 1){
         session_acv('mode_demo','do_demo');
         redirect(['controller' => 'admin', 'action' => 'options/index']);
     }
     $data = $query->addquery('update','config','value=?','ss',[check_request('enable_popup'),'enable_popup'],'header=?');
     $data = $query->addquery('update','config','value=?','ss',[$_POST['default_link_popup'],'default_link_popup'],'header=?');
     $data = $query->addquery('update','config','value=?','ss',[$_POST['cpc_popup'],'cpc_popup'],'header=?');
     $data = $query->addquery('update','config','value=?','ss',[$_POST['popup_width'],'popup_width'],'header=?');
     $data = $query->addquery('update','config','value=?','ss',[$_POST['popup_height'],'popup_height'],'header=?');
     $data = $query->addquery('update','config','value=?','ss',[$_POST['popup_seen_timer'],'popup_seen_timer'],'header=?');

     $_SESSION['options']['popups']=true;
      redirect(['controller' => 'admin', 'action' => 'options/ads']);
  else:
      alerts('options','popups');
  endif;
     
  /* directs options */

  if(isset($_POST['up-directs'])):
     if(do_config(43) == 1){
         session_acv('mode_demo','do_demo');
         redirect(['controller' => 'admin', 'action' => 'options/index']);
     }
     $data = $query->addquery('update','config','value=?','ss',[check_request('enable_direct'),'enable_direct'],'header=?');
     $data = $query->addquery('update','config','value=?','ss',[check_request('default_link_direct'),'default_link_direct'],'header=?');
     $data = $query->addquery('update','config','value=?','ss',[check_request('cpc_direct'),'cpc_direct'],'header=?');
     $_SESSION['options']['directs']=true;
      redirect(['controller' => 'admin', 'action' => 'options/ads']);

  else:
      alerts('options','directs');
  endif;
     
 }
 public function do_upcrn(){
     
 global $smarty,$query;

  if(isset($_POST['up-options'])):

      $query->addquery('update','currencies','name=?,symbol=?','ssi',[check_request('method'),check_request('symbol'),$_GET['id']],'id=?');
      $_SESSION['options']['updated']=true;
      redirect(['controller' => 'admin', 'action' => 'options/payment']);
  else:
      alerts('options','do_error');
      alerts('options','required');
  endif;
     
 }
 public function do_login(){
 global $query,$user,$smarty;

 /* check logged in users */
 if(islogged):
  $this->role($user->role);
 endif;

  if($this->do_post($this->do_arrp('login','username','password'),'*','login')){
   if(reCaptcha() == true || do_config(55) == '2'){
     $data = $query->addquery('select','user','*','s',check_request('username'),'username=?');

    /* check user status */
    if($data->status == 2){
       session_acv('sign','banned');
       redirect(['controller' => 'auth', 'action' => 'signin']);
    }
    if($this->do_blocked_ip()){
       session_acv('sign','blocked_ip');
       redirect(['controller' => 'auth', 'action' => 'signin']);
    }
    /* check correct fields */
    if($data->password == check_request('password','md5')):
       $this->forcelogged($data->user_id);
       $query->addquery('update','user','login_ip=?','si',[get_ip(),$data->user_id],'user_id=?');
       $this->role($data->role);
    else:
      session_acv('sign','invalid');
      redirect(['controller' => 'auth', 'action' => 'signin']);
    endif;

   }elseif(reCaptcha() == false && do_config(55) == '1'){
     session_acv('sign','recaptcha');
     redirect(['controller' => 'auth', 'action' => 'signin']);
   }
 
  }else {
     alerts('sign','express_login');
     alerts('sign','blocked_ip');
     alerts('sign','pending');
     alerts('sign','banned');
     alerts('sign','invalid');
     alerts('sign','recaptcha');
     alerts('login','required');
  }
 }
 public function do_signup(){
 global $smarty,$query,$dateForm;
 
 if ($this->do_post($this->do_arrp('register','role,username,password,passwordcheck,email'),'*','register')){
  
  if(reCaptcha() == true || do_config(54) == 2){
       
    if($this->do_blocked_ip()){
       session_acv('signup','blocked_ip');
       redirect(['controller' => 'auth', 'action' => 'signup']);
    }
    if(strlen(check_request('username')) < 4){
        redirect(['controller' => 'auth', 'action' => 'signup']);
     }
    if(preg_match('/\s/',check_request('username'))){
        session_acv('signup','whitespace');
        redirect(['controller' => 'auth', 'action' => 'signup']);
    }if($this->find((object)['word' => check_request('email',false,'email'),'role' => 'email'])){
        session_acv('signup','rep_email');
        redirect(['controller' => 'auth', 'action' => 'signup']);
    }if(check_request('password','md5') != check_request('passwordcheck','md5')){
        session_acv('signup','passwords');
        redirect(['controller' => 'auth', 'action' => 'signup']);
    }if($this->find((object)['word' => check_request('username'),'role' => 'username'])){
       session_acv('signup','rep_username');
       redirect(['controller' => 'auth', 'action' => 'signup']);
    }
    $role = check_request('role');
    $username = check_request('username');
    $pass = check_request('password','md5');
    $email = check_request('email',false,'email');
    
    /* register user */
    
 if(isset($_COOKIE['r'])){
   $data = $query->addquery('insert','user','role,username,password,email,parent_id,register_ip,created','ssssiss',[$role,$username,$pass,$email,$_COOKIE['r'],get_ip(),$dateForm]);
   $query->addquery('insert','notifications','user_id,role,type','iss',[$_COOKIE['r'],'publisher','referral']);
 }else{
   $data = $query->addquery('insert','user','role,username,password,email,register_ip,created','ssssss',[$role,$username,$pass,$email,get_ip(),$dateForm]);
 }
       
   if(!empty(trim(do_config(31))) && do_config(29) == 1){
     /* Send verification e-mail */
       $token = $this->genToken(10);
       $query->addquery('update','user','isactivated=?,token=?','isi',[2,$token,$data],'user_id=?');
       $array = ['m_name'=>$username,
                 'm_subject'=>$this->do_label('CONFIRM_YOUR_ACCOUNT_AT'),
                 'm_token'=>$token,
                ];
        $this->do_maildata('activate',$array);
        mailer(['from'=>do_config(31),'to'=>$email,'subject'=>$this->do_label('CONFIRM_YOUR_ACCOUNT_AT'),'msg'=>fetch('Admin/Mailer/index')]);
   }
   session_acv('sign','express_login');
   redirect(['controller' => 'auth', 'action' => 'signin']);
  }elseif(reCaptcha() == false && do_config(54) == '1'){
   session_acv('signup','recaptcha');
   redirect(['controller' => 'auth', 'action' => 'signup']);
  }
 }else{
     alerts('signup','whitespace');
     alerts('signup','blocked_ip');
     alerts('signup','rep_email');
     alerts('signup','passwords');
     alerts('signup','rep_username');
     alerts('signup','recaptcha');
     alerts('register','required');
 }
}
 public function do_ref(){
    
 global $query;
 
 if(!isset($_GET['id']) || empty(trim($_GET['id']))):
  $this->do_404();
 endif;

 $data = $query->addquery('select','user','*','i',$_GET['id'],'user_id=?');

  if($data):
    setcookie('r', trim($_GET['id']), time() + (86400 * 30), "/");
    redirect(['action' => 'auth/signup']);
  else:
    redirect(['action' => '']);
  endif;
 
 }
 public function do_verify_mail(){
    
 global $query;
 
 if(!isset($_GET['id']) || empty(trim($_GET['id']))):
  $this->do_404();
 endif;

 $data = $query->addquery('select','user','*','s',$_GET['id'],'token=?');

  if(!$data):
    redirect(['action' => 'auth/signin']);
  elseif($_GET['id'] == $data->token):
    $query->addquery('update','user','token=?,isactivated=?','sis',[NULL,1,$data->token],'token=?');
    redirect(['action' => 'auth/signin']);
  endif;
 }
 public function do_forgot_password(){
    
 global $query,$user,$smarty;
 
 /* check logged in users */
 if(islogged):
  $this->role($user->role,$user->username);
 endif;
 $this->do_winfo('FORGOT_YOUR_PASSWORD');

  if(isset($_GET['id'])){
     $token = $_GET['id'];
     $data = $query->addquery('select','user','*','s',$token,'token=?');
     if(!$data){
         $_SESSION['forgot']['do_error']=true;
         redirect(['action' => 'auth/forgot-password']);
     }
     if($token == $data->token){
         redirect(['action' => 'auth/reset-password/'.$token.DS]);
     }
  }else{
     alerts('forgot','do_error');
  }
  if($this->do_post($this->do_arrp('forgot','username'),'*','forgot')){
   
    if(reCaptcha() == true || do_config(56) == '2'){

     $data = $query->addquery('select','user','*','s',check_request('username'),'username=?');

    /* look for user */
     if(!$data):
       session_acv('forgot','notfound');
       redirect(['action' => 'auth/forgot-password']);
     endif;

    $token = $this->genToken(16);
    $query->addquery('update','user','token=?','ss',[$token,check_request('username')],'username=?');
    $array = ['m_name'=>$username,
              'm_subject'=>$this->do_label('CONFIRM_PASSWORD_RECOVER_AT'),
              'm_token'=>$token,
              ];
    $this->do_maildata('recover',$array);
    mailer(['from'=> do_config(31),'to'=>$data->email,'subject' =>$this->do_label('CONFIRM_PASSWORD_RECOVER_AT'),'msg'=>fetch('Admin/Mailer/index')]);
    session_acv('forgot','sent');
    redirect(['action' => 'auth/forgot-password']);

    }elseif(reCaptcha() == false && do_config(56) == '1'){
     session_acv('forgot','recaptcha');
     redirect(['action' => 'auth/forgot-password']);
    }
  }else{
      alerts('forgot','notfound');
      alerts('forgot','sent');
      alerts('forgot','recaptcha');
      alerts('forgot','required');
  }
 }
 public function do_reset_password(){
    
 global $query,$user,$smarty;
 
 /* check logged in users */
 if(islogged):
  $this->role($user->role,$user->username);
 endif;
 
 if(!isset($_GET['id'])){
     $this->do_404();
 }
 $token = $_GET['id'];
 $data = $query->addquery('select','user','*','s',$token,'token=?');
 
 /* incorrect token */
 if(!$data){
     $_SESSION['forgot']['do_error']=true;
     redirect(['action' => 'auth/forgot-password']);
 }
 $smarty->assign('reset_username',$data->username);
 
 if($this->do_post($this->do_arrp('reset','new_password','confirm_password'),'*','reset')){

    /* correct token */
     $new_password = check_request('new_password','md5');
     $confirm_password = check_request('confirm_password','md5');

     if($new_password != $confirm_password){
         session_acv('reset','confirm');
         redirect(['action' => 'auth/reset-password/'.$token.DS]);
     }
     $query->addquery('update','user','password=?,token=?','ssi',[$new_password,NULL,$data->user_id],'user_id=?');
     session_acv('sign','express_login');
     redirect(['action' => 'auth/signin']);
 }else{
     alerts('reset','confirm');
     alerts('reset','required');
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
 public function do_label($t){

 if(array_key_exists($t,label())){
     return label()[$t];
 }else{
     return $t;
 }
}
 public function do_winfo($t,$d=false,$k=false,$s=false){
 
 global $smarty;
 
 if(array_key_exists($t,metas())):
  $smarty->assign('site_title',metas()[$t]);
 else:
  $smarty->assign('site_title',$t);
 endif;
  $smarty->assign('canonical',sitePRCL().$_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);

 if(isset($d)):
  $smarty->assign('site_description',$d);
  $smarty->assign('keywords',$k);
 endif;

}
 public function do_check($s,$m){
 
 switch($m):
 
 case '!isset':
     
   if(!isset($_GET["$s"])):

     $this->do_404();
 
   endif; 
   
 break;
 
 case '!':
     
   if(!$s):

     $this->do_404();
 
   endif;
   
 break;
 
 case '!&':
     
   if(!$s || $s->status == '2'):

     $this->do_404();
 
   endif;
   
 break;
 
 endswitch;
 
 
}
 public function do_post($a,$p,$f){
 
 global $sr;
 

 if(isset($_POST["$f"])):
 
 if($_SERVER["REQUEST_METHOD"] == 'POST'){
 
 if($sr->csrf_token() == $this->do_wcheck('csrf')):
 
     $c = count($a);
 
        $array = array();

        for ($i = 0; $i < $c; $i++):
         if($p == '*'):
          if(empty(str_replace(' ', '', trim($a[$i])))):
             session_acv($f,'required');
             quick();
          endif;
         else:
          $this->do_required($a[$i]);
         endif;

        endfor;
 
     return true;
     
    else:
       redirect(['action' => 'pages/error']);
    endif;

/* if(count(array_filter($_POST))!=count($_POST)):
    session_acv($f,'required');
    quick();
 endif;*/


 }
 
 endif;
 
}
 public function do_wcheck($s,$m=false,$f=false){
    
  if(!$m):

    if($f):
      
      $result = filter_var($f($_POST[$s]), FILTER_SANITIZE_STRING);

       else:

      $result = filter_var($_POST[$s], FILTER_SANITIZE_STRING);
    
    endif;
   
         return $result;

  elseif($m):

    switch($m):
     
  case 'int':
      
   if ($f):
      
    $result = filter_var($f($_POST[$s]), FILTER_VALIDATE_INT);

   else:

    $result = filter_var($_POST[$s], FILTER_VALIDATE_INT);
    
   endif;

       return $result;
 
  break;
  
  case 'ip':
      
   if ($f):
      
    $result = filter_var($f($_POST[$s]), FILTER_VALIDATE_IP);

   else:

    $result = filter_var($_POST[$s], FILTER_VALIDATE_IP);
    
   endif;

       return $result;
 
  break;
  
  case 'url':
      
   if ($f):
      
    $result = filter_var($f($_POST[$s]), FILTER_VALIDATE_URL);

   else:

    $result = filter_var($_POST[$s], FILTER_VALIDATE_URL);
    
   endif;

       return $result;
 
  break;
 
  endswitch;
     
  endif;
  
 
 
}
 public function do_scheck($s,$m=false,$f=false){
    
  if(!$m):

    if($f):
      
      $result = filter_var($f($s), FILTER_SANITIZE_STRING);

       else:

      $result = filter_var($s, FILTER_SANITIZE_STRING);
    
    endif;
   
         return $result;

  elseif($m):

    switch($m):
     
  case 'int':
      
   if ($f):
      
    $result = filter_var($f($s), FILTER_VALIDATE_INT);

   else:

    $result = filter_var($s, FILTER_VALIDATE_INT);
    
   endif;

       return $result;
 
  break;
  
  case 'ip':
      
   if ($f):
      
    $result = filter_var($f($s), FILTER_VALIDATE_IP);

   else:

    $result = filter_var($s, FILTER_VALIDATE_IP);
    
   endif;

       return $result;
 
  break;
  
  case 'url':
      
   if ($f):
      
    $result = filter_var($f($s), FILTER_VALIDATE_URL);

   else:

    $result = filter_var($s, FILTER_VALIDATE_URL);
    
   endif;

       return $result;
 
  break;
 
  endswitch;
     
  endif;
  
 
 
}
 public function role($role){

	 if(isset($_GET['r'])){
	     header("Location: ".base64_decode($_GET['r']));
	     exit;
	 }else{
	   if(isset($this->referer) && !empty(trim($this->referer)) && $this->referer != $this->host.'auth/signin'){
	       header("Location: ".$this->referer);
	       exit;
	   } else {
	     if($role == 'admin'){
             redirect(['controller' => 'admin', 'action' => 'dashboard']);
	     }elseif($role == 'publisher'){
             redirect(['controller' => 'member', 'action' => 'dashboard']);
	     }elseif($role == 'advertiser'){
             redirect(['controller' => 'advertiser', 'action' => 'dashboard']);
	     }
	   }
	 }
 }
 public function forcelogged($id){

 $_SESSION['user']['logged'] = true;

 $_SESSION['user']['uid'] = $id;

}
 public function find($data){
 global $query;

 $find = $query->addquery('select','user','user_id','s',$data->word,$data->role.'=?');

 return $find;

}
 public function genToken($num){

 $tk = bin2hex(openssl_random_pseudo_bytes($num));

 return $tk;

}
 public function titleBuild($string){

 $rep = str_replace('-','',strtolower($string));
 $rep = str_replace('  ','-',$rep);
 $rep = str_replace('   ','-',$rep);
 $rep = str_replace(' ','-',$rep);
 $rep = str_replace('_','-',$rep);
 $rep = str_replace('>','',$rep);
 $rep = str_replace('<','',$rep);
 $rep = str_replace('|','',$rep);
 $rep = str_replace(',','',$rep);
 return $rep;
    
 }
 public function do_campaigns_stats(){
 global $smarty,$query,$user;

 //active campaigns
 $data = $query->num_rows('campaigns','*','ii',"1,$user->user_id",'status=?,user_id=?');
 $smarty->assign('active_campaigns',$data);

 //paused campaigns
 $data = $query->num_rows('campaigns','*','ii',"4,$user->user_id",'status=?,user_id=?');
 $smarty->assign('paused_campaigns',$data);
 
 //completed campaigns
 $data = $query->num_rows('campaigns','*','ii',"3,$user->user_id",'status=?,user_id=?');
 $smarty->assign('completed_campaigns',$data);
 
 //inactive campaigns
 $data = $query->num_rows('campaigns','*','ii',"5,$user->user_id",'status=?,user_id=?');
 $smarty->assign('inactive_campaigns',$data);
  
 //pending campaigns
 $data = $query->num_rows('campaigns','*','ii',"2,$user->user_id",'status=?,user_id=?');
 $smarty->assign('pending_campaigns',$data);
  
 }
 public function do_adv_chart(){
 global $smarty,$query,$user;

 $data = $query->normal("SELECT created,sum(views) as views,sum(clicks) as clicks,sum(adv_spend) as adv_spend FROM ".$this->pfx."stats WHERE adv_id='$user->user_id' AND status='1' AND ago > NOW() - INTERVAL 1 MONTH group by created");
 $with = array();
 while($res=$data->fetch_assoc()){
       $arr=array('views'=>$res['views'],'clicks'=>$res['clicks'],'adv_spend'=>$res['adv_spend'],'created'=>explode('/',$res['created'])[0]);
       array_push($with,$arr);
 }
 $d = array();
 for($i = 0; $i < 30; $i++) {
    $d[] = date("d", strtotime('-'. $i .' days'));
 }
 $smarty->assign('chdates',$d);
 $smarty->assign('chart',$with);
}
 public function do_pub_chart(){
 global $smarty,$query,$user;

 $data = $query->normal("SELECT created,sum(views) as views,sum(clicks) as clicks,sum(pub_earn) as pub_earn FROM ".$this->pfx."stats WHERE pub_id='$user->user_id' AND status='1' AND ago > NOW() - INTERVAL 1 MONTH group by created");
 $with = array();
 while($res=$data->fetch_assoc()){
       $arr=array('views'=>$res['views'],'clicks'=>$res['clicks'],'pub_earn'=>$res['pub_earn'],'created'=>explode('/',$res['created'])[0]);
       array_push($with,$arr);
 }
 $d = array();
 for($i = 0; $i < 30; $i++) {
    $d[] = date("d", strtotime('-'. $i .' days'));
 }
 $smarty->assign('chdates',$d);
 $smarty->assign('chart',$with);
}
 public function do_adm_chart(){
 global $smarty,$query;

 $data = $query->normal("SELECT created,sum(views) as views,sum(clicks) as clicks,sum(adm_earn) as adm_earn FROM ".$this->pfx."stats WHERE status='1' AND ago > NOW() - INTERVAL 1 MONTH group by created");
 $with = array();
 while($res=$data->fetch_assoc()){
       $arr=array('views'=>$res['views'],'clicks'=>$res['clicks'],'adm_earn'=>do_amount($res['adm_earn'],false),'created'=>explode('/',$res['created'])[0]);
       array_push($with,$arr);
 }
 $d = array();
 for($i = 0; $i < 30; $i++) {
    $d[] = date("d", strtotime('-'. $i .' days'));
 }
 $smarty->assign('chdates',$d);
 $smarty->assign('chart',$with);
}
 public function do_adm_statistics(){
     
 global $query,$smarty;

 //campaigns
 $data = $query->normal("SELECT sum(camp_price) FROM ".$this->pfx."campaigns as adm_earn WHERE status='3' AND ago > NOW() - INTERVAL 1 DAY");
 $data = $data->fetch_assoc();
 $smarty->assign('owner_earnings',do_amount($data['sum(camp_price)'],false));
 
 //publishers earnings
 $data = $query->normal("SELECT sum(pub_earn) FROM ".$this->pfx."stats as pub_earn WHERE status='1' AND ago > NOW() - INTERVAL 1 DAY");
 $data = $data->fetch_assoc();
 $smarty->assign('publishers_earnings',do_amount($data['sum(pub_earn)'],false));
 
 //owner earnings
 $data = $query->normal("SELECT sum(adm_earn) FROM ".$this->pfx."stats as adm_earn WHERE status='1' AND ago > NOW() - INTERVAL 1 DAY");
 $data = $data->fetch_assoc();
 $smarty->assign('owner_earnings',do_amount($data['sum(adm_earn)'],false));
 
 //clicks
 $data = $query->normal("SELECT sum(clicks) FROM ".$this->pfx."stats as clicks WHERE status='1' AND ago > NOW() - INTERVAL 1 DAY");
 $data = $data->fetch_assoc();
 $smarty->assign('today_clicks',number_format($data['sum(clicks)']));
 
 //views
 $data = $query->normal("SELECT sum(views) FROM ".$this->pfx."stats as views WHERE status='1' AND ago > NOW() - INTERVAL 1 DAY");
 $data = $data->fetch_assoc();
 $smarty->assign('today_views',number_format($data['sum(views)']));

 //users
 $data = $query->addquery('select','user','count(user_id) as users');
 $smarty->assign('users',number_format($data->users));
 
 //websites
 $data = $query->addquery('select','link','count(id) as websites');
 $smarty->assign('websites',number_format($data->websites));
 
 //campaigns
 $data = $query->normal("SELECT count(id) FROM ".$this->pfx."campaigns as campaigns WHERE status='3' AND ago > NOW() - INTERVAL 1 DAY");
 $data = $data->fetch_assoc();
 $smarty->assign('today_campaigns',number_format($data['count(id)']));
 
 //advertisers
 $data = $query->addquery('select','user','count(user_id) as advertisers','s','advertiser','role=?');
 $smarty->assign('advertisers',number_format($data->advertisers));
 
 //publishers
 $data = $query->addquery('select','user','count(user_id) as publishers','s','publisher','role=?');
 $smarty->assign('publishers',number_format($data->publishers));
 
 }
 public function do_pub_statistics(){
 global $smarty,$query,$user;

 //publisher earnings
 $smarty->assign('pub_earnings',$user->pub_earnings);

 //active websites
 $data = $query->num_rows('link','*','ii',"1,$user->user_id",'status=?,user_id=?');
 $smarty->assign('websites',$data);
 
 //active zones
 $data = $query->num_rows('zones','*','ii',"1,$user->user_id",'status=?,user_id=?');
 $smarty->assign('zones',$data);
 
 // referrals
 $data = $query->num_rows('user','*','i',$user->user_id,'parent_id=?');
 $smarty->assign('referrals',$data);
 
 //today clicks
 $data = $query->normal("SELECT sum(clicks) FROM ".$this->pfx."stats as clicks WHERE pub_id='$user->user_id' AND status='1' AND ago > NOW() - INTERVAL 1 DAY");
 $data = $data->fetch_assoc();
 $smarty->assign('today_clicks',number_format($data['sum(clicks)']));
  
 //today views
 $data = $query->normal("SELECT sum(views) FROM ".$this->pfx."stats as views WHERE pub_id='$user->user_id' AND status='1' AND ago > NOW() - INTERVAL 1 DAY");
 $data = $data->fetch_assoc();
 $smarty->assign('today_views',number_format($data['sum(views)']));
  
}
 public function do_adv_statistics(){
 global $smarty,$query,$user;

 //active campaigns
 $data = $query->num_rows('campaigns','*','ii',"1,$user->user_id",'status=?,user_id=?');
 $smarty->assign('active_campaigns',$data);

 //paused campaigns
 $data = $query->num_rows('campaigns','*','ii',"4,$user->user_id",'status=?,user_id=?');
 $smarty->assign('paused_campaigns',$data);
 
 //completed campaigns
 $data = $query->num_rows('campaigns','*','ii',"3,$user->user_id",'status=?,user_id=?');
 $smarty->assign('completed_campaigns',$data);
 
 //today clicks
 $data = $query->normal("SELECT sum(clicks) FROM ".$this->pfx."stats as clicks WHERE adv_id='$user->user_id' AND status='1' AND ago > NOW() - INTERVAL 1 DAY");
 $data = $data->fetch_assoc();
 $smarty->assign('today_clicks',number_format($data['sum(clicks)']));
  
 //today views
 $data = $query->normal("SELECT sum(views) FROM ".$this->pfx."stats as views WHERE adv_id='$user->user_id' AND status='1' AND ago > NOW() - INTERVAL 1 DAY");
 $data = $data->fetch_assoc();
 $smarty->assign('today_views',number_format($data['sum(views)']));
  
}
 public function do_home_statistics(){
     
 global $query,$smarty,$result;

 //number of users
 $data = $query->addquery('select','user','count(user_id) as users');
 $smarty->assign('users',number_format($data->users));
 
 //today clicks
 $data = $query->normal("SELECT sum(clicks) FROM ".$this->pfx."stats as clicks WHERE status='1' AND ago > NOW() - INTERVAL 1 DAY");
 $data = $data->fetch_assoc();
 $smarty->assign('today_clicks',number_format($data['sum(clicks)']));
  
 //today views
 $data = $query->normal("SELECT sum(views) FROM ".$this->pfx."stats as views WHERE status='1' AND ago > NOW() - INTERVAL 1 DAY");
 $data = $data->fetch_assoc();
 $smarty->assign('today_views',number_format($data['sum(views)']));
 
 //active campaigns
 $data = $query->num_rows('campaigns','*','i',1,'status=?');
 $smarty->assign('active_campaigns',$data);
 
 
  $data = $query->limit('deposite_methods','*','id','desc',$result['start'].','.$result['perpage'],'i','1','status=?');
  $with = array();
  
  while($res=$data->fetch_assoc()){
        $arr=array('id'=>$res['id'],'name'=>$res['name'],'methods'=>$res['methods'],'status'=>$res['status']);
        array_push($with,$arr);
  }
  $smarty->assign('dmethods',$with);
 }
 public function do_circle_stats(){
 global $query,$smarty;

  //pending withdraws number
  $data = $query->addquery('select','withdrawal','count(id) as npending','i','2','status=?');
  $smarty->assign('npending',number_format($data->npending));
  //pending websites number
  $data = $query->addquery('select','link','count(id) as nsites','i','2','status=?');
  $smarty->assign('nsites',number_format($data->nsites));
  
  //pending campaigns number
  $data = $query->addquery('select','campaigns','count(id) as ncampaigns','i','2','status=?');
  $smarty->assign('ncampaigns',number_format($data->ncampaigns));

  //pending campaigns number
  $data = $query->addquery('select','campaigns','count(id) as nimgbanners','is','2,img_banner','status=?,camp_type=?');
  $smarty->assign('nimgbanners',number_format($data->nimgbanners));
  
  //pending campaigns number
  $data = $query->addquery('select','campaigns','count(id) as ntxtbanners','is','2,text_banner','status=?,camp_type=?');
  $smarty->assign('ntxtbanners',number_format($data->ntxtbanners));
  
  //pending campaigns number
  $data = $query->addquery('select','campaigns','count(id) as npopups','is','2,popup','status=?,camp_type=?');
  $smarty->assign('npopups',number_format($data->npopups));
  
  //pending campaigns number
  $data = $query->addquery('select','campaigns','count(id) as ndirects','is','2,direct','status=?,camp_type=?');
  $smarty->assign('ndirects',number_format($data->ndirects));
  
 }
 public function do_adv_stats(){
 global $smarty,$query,$user;

 /* fetch campaigns */
 $this->do_alluser_campaigns();

 //monthly clicks
 $data = $query->normal("SELECT sum(clicks) FROM ".$this->pfx."stats as clicks WHERE adv_id='$user->user_id' AND status='1' AND ago > NOW() - INTERVAL 1 MONTH");
 $data = $data->fetch_assoc();
 $smarty->assign('monthly_clicks',number_format($data['sum(clicks)']));
  
 //monthly views
 $data = $query->normal("SELECT sum(views) FROM ".$this->pfx."stats as views WHERE adv_id='$user->user_id' AND status='1' AND ago > NOW() - INTERVAL 1 MONTH");
 $data = $data->fetch_assoc();
 $smarty->assign('monthly_views',number_format($data['sum(views)']));
  
 //monthly spending
 $data = $query->normal("SELECT sum(camp_price) FROM ".$this->pfx."campaigns as spend WHERE user_id='$user->user_id' AND status='3' AND ago > NOW() - INTERVAL 1 MONTH");
 $data = $data->fetch_assoc();
 $smarty->assign('monthly_spending',do_amount($data['sum(camp_price)'],false));
 
 //filter form
 
 if ($this->do_post($this->do_arrp('filter','camp_id,csrf'),'*','filter')){
     
     $smarty->assign('stats',true);
     $smarty->assign('id',check_request('camp_id'));
     
     //statistics
     $with=array();
     $data = $query->normal("SELECT status, sum(views) as views , sum(clicks) as clicks, SUM(adv_spend) as spend FROM ".$this->pfx."stats where adv_id='$user->user_id' and camp_id='".check_request('camp_id')."' AND ago > NOW() - INTERVAL 1 MONTH group by status ASC");
     if(!$data){
         session_acv('filter','do_nonfound');
         redirect(['action' => 'advertiser/stats/index']);
     }
     while($res=$data->fetch_assoc()){
         $ar=array('status'=>$res['status'],'views'=>number_format($res['views']),'clicks'=>number_format($res['clicks']),'spend'=>do_amount($res['spend']));
         array_push($with,$ar);
     }
     $smarty->assign('statistics',$with);
     
     //countries
     $with=array();
     $data = $query->normal("SELECT country, sum(clicks) as clicks,sum(views) as views, SUM(adv_spend) as spend FROM ".$this->pfx."stats where adv_id = '$user->user_id' and camp_id ='".check_request('camp_id')."' and country<>' ' AND ago > NOW() - INTERVAL 1 MONTH group by country ASC");

     if(!$data){
         session_acv('filter','do_nonfound');
         redirect(['action' => 'advertiser/stats/index']);
     }
     while($res=$data->fetch_assoc()){
         $ar=array('country'=>$res['country'],'views'=>number_format($res['views']),'clicks'=>number_format($res['clicks']),'spend'=>do_amount($res['spend']));
         array_push($with,$ar);
     }
     $smarty->assign('countries',$with);
     
     //referers
     $with=array();
     $data = $query->normal("SELECT referer_domain, sum(clicks) as clicks,sum(views) as views, SUM(adv_spend) as spend FROM ".$this->pfx."stats where adv_id = '$user->user_id' and camp_id ='".check_request('camp_id')."' AND ago > NOW() - INTERVAL 1 MONTH group by referer_domain ASC");

     if(!$data){
         session_acv('filter','do_nonfound');
         redirect(['action' => 'advertiser/stats/index']);
     }
     while($res=$data->fetch_assoc()){
         $ar=array('referer_domain'=>$res['referer_domain'],'views'=>number_format($res['views']),'clicks'=>number_format($res['clicks']),'spend'=>do_amount($res['spend']));
         array_push($with,$ar);
     }
     $smarty->assign('referers',$with);
 }
 
 else{
     alerts('filter','do_error');
     alerts('filter','do_nonfound');
     alerts('filter','required');
  }
 
}
 public function do_pub_stats(){
 global $smarty,$query,$user;

 /* fetch zones */
 $this->do_alluser_zones();

 //monthly clicks
 $data = $query->normal("SELECT sum(clicks) FROM ".$this->pfx."stats as clicks WHERE pub_id='$user->user_id' AND status='1' AND ago > NOW() - INTERVAL 1 MONTH");
 $data = $data->fetch_assoc();
 $smarty->assign('monthly_clicks',number_format($data['sum(clicks)']));
  
 //monthly views
 $data = $query->normal("SELECT sum(views) FROM ".$this->pfx."stats as views WHERE pub_id='$user->user_id' AND status='1' AND ago > NOW() - INTERVAL 1 MONTH");
 $data = $data->fetch_assoc();
 $smarty->assign('monthly_views',number_format($data['sum(views)']));
  
 //monthly earnings
 $data = $query->normal("SELECT sum(pub_earn) FROM ".$this->pfx."stats as earn WHERE pub_id='$user->user_id' AND status='1' AND ago > NOW() - INTERVAL 1 MONTH");
 $data = $data->fetch_assoc();
 $smarty->assign('monthly_earnings',do_amount($data['sum(pub_earn)'],false));
 
 //filter form
 
 if ($this->do_post($this->do_arrp('filter','zone_id,csrf'),'*','filter')){
     
     $smarty->assign('stats',true);
     $smarty->assign('id',check_request('zone_id'));
     
     //statistics
     $with=array();
     $data = $query->normal("SELECT status, sum(views) as views , sum(clicks) as clicks, SUM(pub_earn) as earn FROM ".$this->pfx."stats where pub_id='$user->user_id' and zone_id='".check_request('zone_id')."' AND ago > NOW() - INTERVAL 1 MONTH group by status ASC");
     if(!$data){
         session_acv('filter','do_nonfound');
         redirect(['action' => 'member/stats/index']);
     }
     while($res=$data->fetch_assoc()){
         $ar=array('status'=>$res['status'],'views'=>number_format($res['views']),'clicks'=>number_format($res['clicks']),'earn'=>do_amount($res['earn']));
         array_push($with,$ar);
     }
     $smarty->assign('statistics',$with);
     
     //countries
     $with=array();
     $data = $query->normal("SELECT country, sum(clicks) as clicks,sum(views) as views, SUM(pub_earn) as earn FROM ".$this->pfx."stats where pub_id = '$user->user_id' and zone_id ='".check_request('zone_id')."' and country<>' ' AND ago > NOW() - INTERVAL 1 MONTH group by country ASC");

     if(!$data){
         session_acv('filter','do_nonfound');
         redirect(['action' => 'member/stats/index']);
     }
     while($res=$data->fetch_assoc()){
         $ar=array('country'=>$res['country'],'views'=>number_format($res['views']),'clicks'=>number_format($res['clicks']),'earn'=>do_amount($res['earn']));
         array_push($with,$ar);
     }
     $smarty->assign('countries',$with);
     
     //referers
     $with=array();
     $data = $query->normal("SELECT referer_domain, sum(clicks) as clicks,sum(views) as views, SUM(pub_earn) as earn FROM ".$this->pfx."stats where pub_id = '$user->user_id' and zone_id ='".check_request('zone_id')."' AND ago > NOW() - INTERVAL 1 MONTH group by referer_domain ASC");

     if(!$data){
         session_acv('filter','do_nonfound');
         redirect(['action' => 'member/stats/index']);
     }
     while($res=$data->fetch_assoc()){
         $ar=array('referer_domain'=>$res['referer_domain'],'views'=>number_format($res['views']),'clicks'=>number_format($res['clicks']),'earn'=>do_amount($res['earn']));
         array_push($with,$ar);
     }
     $smarty->assign('referers',$with);
 }
 
 else{
     alerts('filter','do_error');
     alerts('filter','do_nonfound');
     alerts('filter','required');
  }
 
}
 public function do_adm_stats(){
 global $smarty,$query,$user;

 /* fetch campaigns */
 $this->do_all_campaigns();

 //monthly clicks
 $data = $query->normal("SELECT sum(clicks) FROM ".$this->pfx."stats as clicks WHERE status='1' AND ago > NOW() - INTERVAL 1 MONTH");
 $data = $data->fetch_assoc();
 $smarty->assign('monthly_clicks',number_format($data['sum(clicks)']));
  
 //monthly views
 $data = $query->normal("SELECT sum(views) FROM ".$this->pfx."stats as views WHERE status='1' AND ago > NOW() - INTERVAL 1 MONTH");
 $data = $data->fetch_assoc();
 $smarty->assign('monthly_views',number_format($data['sum(views)']));
  
 //monthly earnings
 $data = $query->normal("SELECT sum(adm_earn) FROM ".$this->pfx."stats as earn WHERE status='1' AND ago > NOW() - INTERVAL 1 MONTH");
 $data = $data->fetch_assoc();
 $smarty->assign('monthly_earnings',do_amount($data['sum(adm_earn)'],false));
 
 //filter form
 
 if ($this->do_post($this->do_arrp('filter','camp_id,csrf'),'*','filter')){
     
     $smarty->assign('stats',true);
     $smarty->assign('id',check_request('camp_id'));
     
     //statistics
     $with=array();
     $data = $query->normal("SELECT status, sum(views) as views , sum(clicks) as clicks, SUM(adm_earn) as earn FROM ".$this->pfx."stats where camp_id='".check_request('camp_id')."' AND ago > NOW() - INTERVAL 1 MONTH group by status ASC");
     if(!$data){
         session_acv('filter','do_nonfound');
         redirect(['action' => 'admin/stats/index']);
     }
     while($res=$data->fetch_assoc()){
         $ar=array('status'=>$res['status'],'views'=>number_format($res['views']),'clicks'=>number_format($res['clicks']),'earn'=>do_amount($res['earn']));
         array_push($with,$ar);
     }
     $smarty->assign('statistics',$with);
     
     //countries
     $with=array();
     $data = $query->normal("SELECT country, sum(clicks) as clicks,sum(views) as views, SUM(adm_earn) as earn FROM ".$this->pfx."stats where camp_id ='".check_request('camp_id')."' and country<>' ' AND ago > NOW() - INTERVAL 1 MONTH group by country ASC");

     if(!$data){
         session_acv('filter','do_nonfound');
         redirect(['action' => 'admin/stats/index']);
     }
     while($res=$data->fetch_assoc()){
         $ar=array('country'=>$res['country'],'views'=>number_format($res['views']),'clicks'=>number_format($res['clicks']),'earn'=>do_amount($res['earn']));
         array_push($with,$ar);
     }
     $smarty->assign('countries',$with);
     
     //referers
     $with=array();
     $data = $query->normal("SELECT referer_domain, sum(clicks) as clicks,sum(views) as views, SUM(adm_earn) as earn FROM ".$this->pfx."stats where camp_id ='".check_request('camp_id')."' AND ago > NOW() - INTERVAL 1 MONTH group by referer_domain ASC");

     if(!$data){
         session_acv('filter','do_nonfound');
         redirect(['action' => 'admin/stats/index']);
     }
     while($res=$data->fetch_assoc()){
         $ar=array('referer_domain'=>$res['referer_domain'],'views'=>number_format($res['views']),'clicks'=>number_format($res['clicks']),'earn'=>do_amount($res['earn']));
         array_push($with,$ar);
     }
     $smarty->assign('referers',$with);
 }else{
     alerts('filter','do_error');
     alerts('filter','do_nonfound');
     alerts('filter','required');
  }
 }
}
  
  $fun = new functionModel;