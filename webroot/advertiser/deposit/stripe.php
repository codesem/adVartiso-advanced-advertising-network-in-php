<?php
 
 require_once (dirname(dirname(dirname(__FILE__))).'/functions.php');

 $fun->do_winfo('CREDIT_CARD');
 
 $fun->do_stripe();

 show('Advertiser/Deposit/stripe');