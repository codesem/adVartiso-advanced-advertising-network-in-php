<?php
 
 require_once (dirname(dirname(dirname(__FILE__))).'/functions.php');

 $fun->do_winfo('ORDER_DIRECT');
 
 $fun->do_order_direct();

 show('Advertiser/Purchase/direct');