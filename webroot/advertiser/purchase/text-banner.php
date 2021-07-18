<?php
 
 require_once (dirname(dirname(dirname(__FILE__))).'/functions.php');

 $fun->do_winfo('ORDER_TEXT_BANNER');
 
 $fun->do_order_txtbanner();

 show('Advertiser/Purchase/text-banner');