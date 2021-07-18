<?php

 require_once (dirname(dirname(__FILE__)).'/functions.php');

 
 if(isset($_POST["complete"])){

 //database query

  echo '<center><h3>Update Completed, we will redirect you in 3 sec....</h3></center>';

  header('refresh:2;url='.$HOST.'admin/dashboard');

 }

 show('Admin/Updates/complete');
 
?>