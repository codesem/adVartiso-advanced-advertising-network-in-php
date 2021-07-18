<?php

require_once (dirname(__DIR__)."/loader.php");
require_once (DATA.'config.php');

$smarty->assign('site_title','Step 1: Database');

 if(isset($_POST['install']) ):

  $host=$_POST['host'];
  $user=$_POST['user'];
  $pass=$_POST['pass'];
  $dbname=$_POST['dbname'];

  if(check_conn_db($host,$user,$pass,$dbname)):
   session_acv('errmysqli','faild');
   quick();
  endif;

  $system = get_system($host,$user,$pass,$dbname);
  $requirements = get_requirements();
  write(CONNECT.'system.class.php',$system,'w');
  quick(['origin' => 'installer/database', 'redirect' => 'installer/build']);
 else:
  alerts('errmysqli','faild');
 endif;

show('Installer/db');

?>