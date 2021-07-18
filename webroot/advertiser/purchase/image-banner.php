<?php
 
 require_once (dirname(dirname(dirname(__FILE__))).'/functions.php');

 $fun->do_winfo('ORDER_IMAGE_BANNER');
 
 $fun->do_order_imgbanner();

 show('Advertiser/Purchase/image-banner');