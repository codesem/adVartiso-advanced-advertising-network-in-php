<?php

 require_once (dirname(dirname(dirname(__FILE__))).'/functions.php');

 $fun->do_winfo('Ads Configuration');

 $fun->do_ads_config();
 
 show('Admin/Options/ads');

?>