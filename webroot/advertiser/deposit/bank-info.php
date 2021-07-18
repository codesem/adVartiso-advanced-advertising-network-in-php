<?php
 
 require_once (dirname(dirname(dirname(__FILE__))).'/functions.php');

 $fun->do_winfo('BANK_TRANSFER');
 
 $fun->do_bank_info();

 show('Advertiser/Deposit/bank-info');