<?php
 
 require_once (dirname(dirname(dirname(__FILE__))).'/functions.php');

 $fun->do_winfo('DEPOSIT');
 
 $fun->do_deposit();

 show('Advertiser/Deposit/index');