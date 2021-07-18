<?php
 
 require_once (dirname(dirname(dirname(__FILE__))).'/functions.php');

 $fun->do_winfo('CHOOSE_METHOD');
 
 $fun->do_redirect_to_checkout();

 show('Advertiser/Deposit/invoice');