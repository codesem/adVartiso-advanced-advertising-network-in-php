<?php

 require_once (dirname(dirname(dirname(__FILE__))).'/functions.php');

 $fun->do_winfo('CHANGE_PASSWORD');

 $fun->do_password();

 show('Advertiser/Settings/password');

?>