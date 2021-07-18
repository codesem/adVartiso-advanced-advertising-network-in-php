<?php

 require_once (dirname(dirname(dirname(__FILE__))).'/functions.php');

 $fun->do_winfo('Withdrawal Options');
 
 $fun->do_upwithdraws();

 show('Admin/Options/withdrawal');
 
?>