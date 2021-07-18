<?php
 
 require_once (dirname(dirname(dirname(__FILE__))).'/functions.php');

 $fun->do_winfo('ORDER_POPUP');
 
 $fun->do_order_popup();

 show('Advertiser/Purchase/popup');