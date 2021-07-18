<?php

 function _is_curl_installed() {
     //check for curl extension
    if  (in_array  ('curl', get_loaded_extensions())) {
        return true;
    }
    else {
        return false;
    }
 }
 function sitePRCL() {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    return $protocol;
 }
 function redirect($result, $permanent = false) {
     global $hs,$HOST;
     
     /* Redirecting */
     if($permanent) {
         header('HTTP/1.1 301 Moved Permanently');
     }
     if (empty($result['controller']) && isset($result['action'])) {
         header('Location: '.$HOST.$result['action']);
	 } elseif (isset($result['action'])) {
	     header('Location: '.$HOST.$result['controller'].DS.$result['action']);
	 }
     exit();
}
 function delete_files($target) {
    //delete files - dir
    if(is_dir($target)){
        $files = glob( $target . '*', GLOB_MARK ); //GLOB_MARK adds a slash to directories returned
        
        foreach( $files as $file )
        {
            delete_files( $file );      
        }

        rmdir( $target );
    } elseif(is_file($target)) {
        unlink( $target );  
    }
 }
 function fetch($path = ''){
     global $smarty;
     
     /* Template */
     $temp = $smarty->fetch(WWW_ROOT . 'template'.DS . Theme . DS . $path . '.tpl');
     return $temp;
 }
 function labels($r,$i,$d=false){
     global $smarty;
     
     if(!$d):
         $smarty->assign('_'.$r,$i);
     else:
         $smarty->assign('_'.$r,$i);
         $smarty->assign('__'.$r,$d);
     endif;
 }
 function messages($r,$i,$d=false){
     global $smarty;
     
     $smarty->assign('_'.$r,$i);
     if($i=='danger' || $i=='warnings'):
         $smarty->assign('__'.$r,'Error: '.$d);
     else:
         $smarty->assign('__'.$r,$d);
     endif;
 }
 function pages($perpage = 9,$screen = 0){
   if (!isset($_GET['p']) || $_GET['p']==0 )
    $screen;
   else
    $screen=$_GET['p']-1;
    $start = $screen * $perpage;
    return array('perpage' => $perpage, 'screen' => $screen , 'start' => $start);
 }
 function paging($page,$last_page,$part,$custom=false){
 global $smarty;

 $paging = false;
 
 if(contains(ACCESS, '/admin/')){
  $l='<li>';
  $li='</li>';
  $class="";
 }else{
   $l='<li class="page-item">';
   $active='<li class="page-item act">';
   $li='</li>';
   $class="page-link";
 }
 
 if($page != 1){
 $paging.=$l.'<a class="'.$class.'" href="'.$part.($page - 1).'">&lsaquo;</a>'.$li;
 }
 if($page > 4){
 $paging.=$l.'<a class="'.$class.'" href="'.$part.($page-$page+1).'">&laquo;</a>'.$li;
 }
 for($i=4;$i>0;$i--)
 if($page-$i>0){
 $paging.=$l.'<a class="'.$class.'" href="'.$part.($page-$i).'">'.($page-$i).'</a>'.$li;
 }
 if ($page == 0){
 $paging.=$l.'<a class="'.$class.'">&rsaquo;</a>'.$li;
 }
 elseif($page == $last_page){
 $paging.=$active.'<a class="'.$class.'">&lsaquo;</a>'.$li;
 }
 else{
 $paging.=$l.'<a class="'.$class.'">'.$page.'</a>'.$li;
 }
 for($i=1 ; $i<5 ; $i++)
 if($last_page-($page+$i)>0){
 $paging.=$l.'<a class="'.$class.'" href="'.$part.($page+$i).'">'.($page+$i).'</a>'.$li;
 }
 if ($page < $last_page - 5){
 $paging.=$l.'<a class="'.$class.'" href="'.$part.($last_page - 1).'">&raquo;</a>'.$li;
 }
 if ($page != $last_page-1){
 $paging.=$l.'<a class="'.$class.'" href="'.$part.($page + 1).'">&rsaquo;</a>'.$li;
 }
 if($paging && !$custom){
     $smarty->assign('paging',$paging);
 }
 if($paging && $custom){
     return $paging;
 }
  
 }
 function secure_role(){ 
 global $user,$uid;
 //var_export($user);exit;
 if( empty(trim($uid)) || $uid == '0') {
  //user is not logged in
  redirect(['controller' => 'auth', 'action' => 'signin?r='.base64_encode(ACCESS)]);
 }

 if( !isset($_SESSION['user']['logged'])) {
  //user is not logged in
  redirect(['controller' => 'auth', 'action' => 'signin?r='.base64_encode(ACCESS)]);
 }

  if(contains(ACCESS, '/admin/') && $user->role == 'publisher') {
   //check for roles 
   redirect(['controller' => 'publisher', 'action' => 'dashboard']);
  }
  if(contains(ACCESS, '/admin/') && $user->role == 'advertiser') {
   //check for roles 
   redirect(['controller' => 'advertiser', 'action' => 'dashboard']);
  }
 }
 function mailer($mailer,$debug=false){
 
 //mailer
 require_once (MAILER.'PHPMailer.php');
 require_once (MAILER.'POP3.php');
 require_once (MAILER.'OAuth.php');
 require_once (MAILER.'SMTP.php');
 $mailAPP = new PHPMailer;
 
 switch(do_config(30)):
  case 'smtp':
  //use smtp
  $mailAPP->isSMTP();
 if($debug){
  $mailAPP->SMTPDebug = 1;
 }
  $mailAPP->Host = do_config(32);
  $mailAPP->Port = do_config(33);
  $mailAPP->SMTPSecure = do_config(34);
  $mailAPP->SMTPAuth = true;
  $mailAPP->Username = do_config(31);
  $mailAPP->Password = do_config(35);
  break;
 endswitch;

  $mailAPP->setFrom($mailer['from'], do_config(0));
  $mailAPP->addReplyTo(do_config(13), do_config(0));
  $mailAPP->addAddress($mailer['to'], $mailer['subject']);
  $mailAPP->Subject = $mailer['subject'];
  $mailAPP->isHTML(true); 
  $mailAPP->msgHTML($mailer['msg']);
  $response = $mailAPP->send();
  if(!$response){
     if($debug){
         var_export($mailAPP->ErrorInfo);exit;
     }else {
         return 2;
     }
  }
}
 function reCaptcha($reCAPTCHA_secret_key=false){
     
 //recaptcha
 if(isset($_POST['g-recaptcha-response'])):
  $info = [
  'secret' => do_config(6),
  'response' => $_POST['g-recaptcha-response']];
  
  $verify = curl_init();
 
  curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
  curl_setopt($verify, CURLOPT_POST, true);
  curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($info));
  curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($verify);
  $data = json_decode($response);

  if(isset($data->success) && $data->success == true){
    return true;
  }elseif($data->error-codes || $data->challenge_ts || $data->hostname || $data->success == false){
    return false;
  }
 
 endif;

 }
 function check_request($result,$func=false,$mode=false){

 //check for inputs requests

 if(!empty($result)){
    
  if(!$mode):

   if ($func):
      
    $result = filter_var($func($_POST[$result]), FILTER_SANITIZE_STRING);

   else:

    $result = filter_var($_POST[$result], FILTER_SANITIZE_STRING);
    
   endif;
   
       return $result;
       
    if(empty($result) || !filter_var($result, FILTER_SANITIZE_STRING)):
     
       return false;

     endif;

   elseif($mode):

   switch($mode):
     
   case 'email':

   if ($func):
      
    $result = filter_var($func($_POST[$result]), FILTER_VALIDATE_EMAIL);

   else:

    $result = filter_var($_POST[$result], FILTER_VALIDATE_EMAIL);
    
   endif;

       return $result;

    if(empty($result) || !filter_var($result, FILTER_VALIDATE_EMAIL)):
     
       return false;
       
     endif;
     
  break;
  
  case 'int':
      
   if ($func):
      
    $result = filter_var($func($_POST[$result]), FILTER_VALIDATE_INT);

   else:

    $result = filter_var($_POST[$result], FILTER_VALIDATE_INT);
    
   endif;

       return $result;

    if(empty($result) || !filter_var($result, FILTER_VALIDATE_INT)):
     
       return false;
       
     endif;
 
  break;
  
  case 'ip':
      
   if ($func):
      
    $result = filter_var($func($_POST[$result]), FILTER_VALIDATE_IP);

   else:

    $result = filter_var($_POST[$result], FILTER_VALIDATE_IP);
    
   endif;

       return $result;

    if(empty($result) || !filter_var($result, FILTER_VALIDATE_IP)):
     
       return false;
       
     endif;
 
  break;
  
  case 'url':
      
   if ($func):
      
    $result = filter_var($func($_POST[$result]), FILTER_VALIDATE_URL);

   else:

    $result = filter_var($_POST[$result], FILTER_VALIDATE_URL);
    
   endif;

       return $result;

    if(empty($result) || !filter_var($result, FILTER_VALIDATE_URL)):
     
       return false;
       
     endif;
 
  break;
 
  endswitch;
     
  endif;
  
 }
 }
 function show($path = ''){
  
  global $smarty;
 
 if(isset($path)){

 $smarty->display(WWW_ROOT . 'template/' . Theme . DS . $path . '.tpl');

 }
  }
 function errorAndDie($error_msg) {
   //check for errors write in => logs => reports.txt
   global $dateForm;
   $debug_file = ROOT.DS.'logs/reports.txt';
   if (!empty($debug_file)) {
    $report = 'Error: '.$dateForm.' | '.$error_msg.PHP_EOL; 
    WRITE($debug_file,$report,"a");
    die('Error: '.$error_msg);
   }
  }
 function alerts($session,$alert){
  //alerts
  global $smarty;
  if(isset($_SESSION[$session][$alert])){
   $smarty->assign($alert,true);
   unset($_SESSION[$session]);
  }else{
   $smarty->assign($alert,false);
   }
  }
 function get_percentage($amount,$percent) {
    $total = do_amount($amount,false);
    $tax = do_amount(($percent / 100) * $total, false);
    return $tax;
 }
 function do_amount($a,$r=true){
      if($r) {
         if(do_config(18) == 'before') {
          return do_config(3).number_format($a, do_config(19), '.', '');
         }elseif(do_config(18) == 'after') {
          return number_format($a, do_config(19), '.', '').do_config(3);
         }
      } else {
          return number_format($a, do_config(19), '.', '');
      }  
 }
 function do_config($i){
         global $query;
         $id=$i+1;
         $option = $query->addquery('select','config','value','i', $id,'config_id=?');
         return $option->value;
 }
 function do_size($size,$type='source',$device='pc'){
     if($type == 'source'){
        switch($size){
         case '728x90':
             $pc = 'width:723px;height:90px;background-size:723px 90px;';
             $mb = 'width:283px; height:40px;background-size:283px 40px;'; 
             $tb = 'width:383px; height:50px;background-size:383px 50px;'; 
             break;
         case '468x60':
             $pc = 'width:463px; height:60px;background-size:463px 60px;';
             $mb = 'width:200px; height:35px;background-size:200px 35px;'; 
             $tb = 'width:283px; height:40px;background-size:283px 40px;'; 
             break;
         case '300x250':
             $pc = 'width:295px; height:250px;background-size:295px 250px;';
             $mb = 'width:195px; height:150px;background-size:195px 150px;'; 
             $tb = 'width:210px; height:200px;background-size:210px 200px;'; 
             break;
         case '300x600':
             $pc = 'width:295px; height:600px;background-size:295px 600px;';
             $mb = 'width:195px; height:300px;background-size:195px 300px;'; 
             $tb = 'width:210px; height:400px;background-size:210px 400px;'; 
             break;
         case '120x600':
             $pc = 'width:120px; height:600px;background-size:120px 600px;';
             $mb = 'width:95px; height:400px;background-size:95px 400px;'; 
             $tb = 'width:105px; height:450px;background-size:105px 450px;'; 
             break;
         case '200x200':
             $pc = 'width:200px; height:200px;background-size:200px 200px;';
             $mb = 'width:90px; height:90px;background-size:90px 90px;'; 
             $tb = 'width:100px; height:100px;background-size:100px 100px;'; 
             break;
         case '125x125':
             $pc = 'width:127px; height:125px;background-size:127px 125px;';
             $mb = 'width:107px; height:105px;background-size:107px 105px;'; 
             $tb = 'width:117px; height:115px;background-size:117px 115px;'; 
             break;
         case '690x500':
             $pc = 'width:685px; height:500px;background-size:685px 500px;';
             $mb = 'width:385px; height:250px;background-size:385px 250px;'; 
             $tb = 'width:485px; height:300px;background-size:485px 300px;'; 
             break;
     }
     }else{
        switch($size){
         case '728x90':
             $pc = 'width:728px; height:94px;';
             break;
         case '468x60':
             $pc = 'width:468px; height:60px;';
             break;
         case '300x250':
             $pc = 'width:300px; height:250px;';
             break;
         case '300x600':
             $pc = 'width:300px; height:600px;';
             break;
         case '120x600':
             $pc = 'width:125px; height:600px;';
             break;
         case '200x200':
             $pc = 'width:205px; height:200px;';
             break;
         case '125x125':
             $pc = 'width:132px; height:128px;';
             break;
         case '690x500':
             $pc = 'width:690px; height:500px;';
             break;
     }
     }
     if($device == 'pc'){
         return $pc;
     }elseif($device == 'mb'){
         return $mb;
     }
 }
 function do_url_zone(){
     if(contains(HOST, 'http://')){
         $url = str_replace('http:','',HOST);
     }elseif(contains(HOST, 'https://')){
         $url = str_replace('https:','',HOST);
     }
     return $url;
 }
 function get_ip() {
 // Get client IP address
    if (getenv("HTTP_CF_CONNECTING_IP")) {
        $ip = getenv("HTTP_CF_CONNECTING_IP");
    } elseif (getenv("HTTP_CLIENT_IP")) {
        $ip = getenv("HTTP_CLIENT_IP");
    } elseif (getenv("HTTP_X_FORWARDED_FOR")) {
        $ip = getenv("HTTP_X_FORWARDED_FOR");
        if (strstr($ip, ',')) {
            $tmp = explode(',', $ip);
            $ip = trim($tmp[0]);
        }
    } else {
        $ip = getenv("REMOTE_ADDR");
    }

    return $ip;
 }
 function ip_visitor_country(){

 // type can be "code" (default), "abbr", "name"
 $countryCode = getCountryFromIP(get_ip(), "code");

 // full name of country - spaces are trimmed
 $countryName = getCountryFromIP(get_ip(), " NamE ");
 return (object) ["code" => $countryCode,"name" => $countryName];
 }
 function detectDevice($deviceName = false){
    //detect device
	$userAgent = $_SERVER["HTTP_USER_AGENT"];
	$devicesTypes = array(
        "PC" => array("msie 10", "msie 9", "msie 8", "windows.*firefox", "windows.*chrome", "x11.*chrome", "x11.*firefox", "macintosh.*chrome", "macintosh.*firefox", "opera"),
        "MOBILE" => array("mobile ", "android.*mobile", "iphone", "ipod", "opera mobi", "opera mini","tablet", "android", "ipad", "tablet.*firefox"),
        "BOT" => array("googlebot", "mediapartners-google", "adsbot-google", "duckduckbot", "msnbot", "bingbot", "ask", "facebook", "yahoo", "addthis")

    );
 	foreach($devicesTypes as $deviceType => $devices) {           
        foreach($devices as $device) {
            if(preg_match("/" . $device . "/i", $userAgent)) {
                $deviceName = $deviceType;
            }
        }
    }
    return ucfirst($deviceName);
 	}
 function detectBrowser() { 
     $u_agent = $_SERVER['HTTP_USER_AGENT'];
     $bname = 'Other';
     $platform = 'Other';

  /* platform */
  if (preg_match('/linux/i', $u_agent)) {
    $platform = 'Linux';
  }elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
    $platform = 'Mac';
  }elseif (preg_match('/windows|win32/i', $u_agent)) {
    $platform = 'Windows';
  }
  
  /* name seperately */
  if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent)){
    $bname = 'Internet Explorer';
    $ub = "MSIE";
  }elseif(preg_match('/Firefox/i',$u_agent)){
    $bname = 'Mozilla Firefox';
    $ub = "Firefox";
  }elseif(preg_match('/OPR/i',$u_agent)){
    $bname = 'Opera';
    $ub = "Opera";
  }elseif(preg_match('/Chrome/i',$u_agent) && !preg_match('/Edge/i',$u_agent)){
    $bname = 'Google Chrome';
    $ub = "Chrome";
  }elseif(preg_match('/Safari/i',$u_agent) && !preg_match('/Edge/i',$u_agent)){
    $bname = 'Apple Safari';
    $ub = "Safari";
  }elseif(preg_match('/Netscape/i',$u_agent)){
    $bname = 'Netscape';
    $ub = "Netscape";
  }elseif(preg_match('/Edge/i',$u_agent)){
    $bname = 'Edge';
    $ub = "Edge";
  }elseif(preg_match('/Trident/i',$u_agent)){
    $bname = 'Internet Explorer';
    $ub = "MSIE";
  }
  
  /* return info */
  return (object) [
                 'userAgent' => $u_agent,
                 'name'      => $bname,
                 'platform'  => $platform,
                 'ub'        => $ub,
                ];

} 
 function isproxy($ip){
     $ports = array(80,81,553,554,1080,3128,4480,6588,8000,8080);
     foreach ($ports as $port) {
         if (@fsockopen($ip, $port, $errno, $errstr, 5)) {
             return true;
         }else{
             $headers = array('CLIENT_IP','FORWARDED','FORWARDED_FOR','FORWARDED_FOR_IP','VIA','X_FORWARDED','X_FORWARDED_FOR','HTTP_CLIENT_IP','HTTP_FORWARDED','HTTP_FORWARDED_FOR','HTTP_FORWARDED_FOR_IP','HTTP_PROXY_CONNECTION','HTTP_VIA','HTTP_X_FORWARDED','HTTP_X_FORWARDED_FOR');
             foreach ($headers as $header){
                 if (isset($_SERVER[$header])) {
                     return true;
                 }else{
                     return false;
                 }
             } 
         }
 } 
 
 }