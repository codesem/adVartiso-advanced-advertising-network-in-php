<?php

 require_once (dirname(__DIR__)."/loader.php");
 require_once (DATA.'config.php');

$smarty->assign('site_title','Step 3: Create Admin User');

 if(isset($_POST['register'])) {

   $username = $_POST['username'];
   $password = md5($_POST['password']);
   $email = $_POST['email'];
   $passwordcheck = md5($_POST['passwordcheck']);
   $website=$_POST['website'];

   if($password == $passwordcheck) {
      $query->addquery('insert','user','username,password,email,role,created','sssss',[$username,$password,$email,'admin',$dateForm]);
       if(!endsWith($website, '/')):
           $website = $website.DS;
       endif;
       $appConfig = get_app($website,Theme,'on','3.5.0',$sr->csrf_token(),'ADVARTISO',$dateForm,$dateForm);
       write(CONFIG.'app.php',$appConfig,'w');
       session_acv('sign','express_login');
       quick(['origin' => 'installer/admin', 'redirect' => '']);
   } else {
   //pass error
   session_acv('errpass','passfaild');
   quick();
   }
 } else {
   alerts('errpass','passfaild');
 }
 show('Installer/admin');

?>