<?php

 require_once (dirname(dirname(dirname(__FILE__))).'/functions.php');

 $fun->do_winfo('New Withdrawal');

 $fun->do_add_withdrawal();
 
 show('Admin/Options/add-withdrawal');

?>