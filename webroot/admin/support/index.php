<?php

require_once (dirname(dirname(dirname(__FILE__))).'/functions.php');

if( isset($_POST['send-message'] ) ){

$required = array('name', 'mail', 'message');

$error = false;

foreach($required as $field) 
{
if (empty($_POST[$field]))
{
$error = true;
  }
}
if ($error) 
{

$_SESSION['warn']['required']=true;

header('Location: index');

} else
{

$GoMail->message(["from"=> $_POST['mail'],"to"=> 'doblzero@gmail.com',"name" => $_POST['name'],"message" => $_POST['message']]);

session_acv('success','sent');

header("location: index" );

 }

}else{
    
alerts('success','sent');

alerts('warn','required');

}

show('Admin/Support/index');

?>