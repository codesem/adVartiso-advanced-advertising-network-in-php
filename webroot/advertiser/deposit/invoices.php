<?php
 
 require_once (dirname(dirname(dirname(__FILE__))).'/functions.php');

 $fun->do_winfo('INVOICES');
 
 $fun->do_fetch_invoices();

 show('Advertiser/Deposit/invoices');