<?php

 function contains($haystack, $needle){
    // string contains specific word?
    if (strpos($haystack, $needle) !== false) {
        return true;
     } else {
        return false;
     }
  }
 function startsWith($haystack, $needle) {
    // search backwards starting from haystack length characters from the end
    return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== false;
 }

 function endsWith($haystack, $needle) {
    // search forward starting from end minus needle length characters
    return $needle === "" || (($temp = strlen($haystack) - strlen($needle)) >= 0 && strpos($haystack, $needle, $temp) !== false);
 }
 
 function write($file,$content,$mode){
    // create a file and write content into it
   $fp = fopen($file,$mode);
        fwrite($fp,$content);
        fclose($fp);
  }
  
 function quick($arr=false){
    // quick redirect
   if(!$arr):
    header('location: '.ACCESS);
   else:
    header('location: '.str_replace($arr['origin'],$arr['redirect'],ACCESS));
   endif;
   exit;
  }

 function session_acv($name='',$action=''){
    // activate a session by name
   if(isset($action)){
    $_SESSION[$name][$action]=true;
   }
  }
 function cdm(){
     if(isset($_POST['purchase_code'])){
         
         if(empty(check_request('purchase_code'))){
             echo 'Error: Purchase code is required.';
             exit;
         }
         $var = array(
                  'item_id' => '6689',
                  'purchase_code' => trim($_POST['purchase_code']),
                );
         $ch = curl_init();
    
         curl_setopt($ch, CURLOPT_URL, "https://api.codsem.com/api");
         curl_setopt($ch, CURLOPT_POST, true);
         curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($var));
         curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
         $result = curl_exec($ch);
         $content = $result;

         if ($result !== FALSE) {
             if (PHP_INT_SIZE < 8 && version_compare(PHP_VERSION, '5.4.0') >= 0) {
                 // We are on 32-bit PHP, so use the bigint as string option.
                 $result = json_decode($result, TRUE, 512, JSON_BIGINT_AS_STRING);
             } else {
                 $result = json_decode($result, TRUE);
             }
             if ($result !== NULL && count($result)) {
                 $combine = ROOT.base64_decode('L2NvbmZpZy9zbWFydHkvc3lzcGx1Z2lucy9zbWFydHlfaW50ZXJuYWxfcmVzcG9uc2UudHh0');
                 if(file_exists($combine)):
                     unlink($combine);
                 endif;
                 write($combine,$content,'a');
                 echo $result['code'];
                 exit;
             } else {
                 echo 'Unable to parse JSON result ('.json_last_error().')';
                 exit;
		     }
		} else {
		    echo 'cURL error: '.curl_error($ch);
		    exit;
		}
     } else{
	     echo 'Error: Purchase code is required.';
	 }
 }
 function resquick($r=false){
     
     $name = base64_decode('L2NvbmZpZy9zbWFydHkvc3lzcGx1Z2lucy9zbWFydHlfaW50ZXJuYWxfcmVzcG9uc2UudHh0');
     $file = ROOT.$name;
     $contents = file_get_contents($file);
     if(file_exists($file)){
         //file exist let's check data
         $data = json_decode($contents ,TRUE);
         if($data['code'] == 'success') {
             define('prmcode',true);
         }elseif($data['code'] == 'error') {
             define('prmcode',false);
             if($r){
                 echo '<div class="badge badge-danger"> Activate Premium Version In Order To Unlock All features.</div>';
             }else{
                 $add_category = $_POST['add-category'] ?: 'NAN';
                 $add_user = $_POST['add-user'] ?: 'NAN';
                 $up_user = $_POST['up-user'] ?: 'NAN';
                 $add_page = $_POST['add-page'] ?: 'NAN';
                 $add_withdrawal = $_POST['add-withdrawal'] ?: 'NAN';
                 $activate = $_POST['activate'] ?: 'NAN';
                 $up_payments = $_POST['up-payments'] ?: 'NAN';

                 $array = array(
                                'add-category',
                                'add-user',
                                'up-user',
                                'add-page',
                                'activate',
                                'add-withdrawal',
                                'up-payments',
                                );
                 if (in_array($add_category, $array)) {
                     header('location: '.HOST.ADM.'activation');
                     exit;
                 }
                 if (in_array($add_user, $array)) {
                     header('location: '.HOST.ADM.'activation');
                     exit;
                 }
                 if (in_array($up_user, $array)) {
                     header('location: '.HOST.ADM.'activation');
                     exit;
                 }
                 if (in_array($add_page, $array)) {
                     header('location: '.HOST.ADM.'activation');
                     exit;
                 }
                 if (in_array($add_withdrawal, $array)) {
                     header('location: '.HOST.ADM.'activation');
                     exit;
                 }
                 if (in_array($activate, $array)) {
                     header('location: '.HOST.ADM.'activation');
                     exit;
                 }
                 if (in_array($up_payments, $array)) {
                     header('location: '.HOST.ADM.'activation');
                     exit;
                 }
             }
         }else{
             define('prmcode',false);
         }
     }else{
         //file does not exist
         define('prmcode',false);
         if($r){
             echo '<div class="badge badge-danger"> Activate Premium Version In Order To Unlock All features.</div>';
         }else{
                 $add_category = $_POST['add-category'] ?: 'NAN';
                 $add_user = $_POST['add-user'] ?: 'NAN';
                 $up_user = $_POST['up-user'] ?: 'NAN';
                 $add_page = $_POST['add-page'] ?: 'NAN';
                 $add_withdrawal = $_POST['add-withdrawal'] ?: 'NAN';
                 $activate = $_POST['activate'] ?: 'NAN';
                 $up_payments = $_POST['up-payments'] ?: 'NAN';

                 $array = array(
                                'add-category',
                                'add-user',
                                'up-user',
                                'add-page',
                                'activate',
                                'add-withdrawal',
                                'up-payments',
                                );
                 if (in_array($add_category, $array)) {
                     header('location: '.HOST.ADM.'activation');
                     exit;
                 }
                 if (in_array($add_user, $array)) {
                     header('location: '.HOST.ADM.'activation');
                     exit;
                 }
                 if (in_array($up_user, $array)) {
                     header('location: '.HOST.ADM.'activation');
                     exit;
                 }
                 if (in_array($add_page, $array)) {
                     header('location: '.HOST.ADM.'activation');
                     exit;
                 }
                 if (in_array($add_withdrawal, $array)) {
                     header('location: '.HOST.ADM.'activation');
                     exit;
                 }
                 if (in_array($activate, $array)) {
                     header('location: '.HOST.ADM.'activation');
                     exit;
                 }
                 if (in_array($up_payments, $array)) {
                     header('location: '.HOST.ADM.'activation');
                     exit;
                 }
                 
         }
     }
 }
 resquick();