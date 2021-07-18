<?php

 require_once (dirname(dirname(dirname(__FILE__))).'/functions.php');

 $fun->do_winfo('SETTINGS');

 $fun->do_settings();

 show('Advertiser/Settings/index');

?>