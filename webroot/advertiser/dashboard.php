<?php

 require_once (dirname(dirname(__FILE__)).'/functions.php');

 $fun->do_winfo('DASHBOARD');

 $fun->do_adv_statistics();
 
 $fun->do_adv_chart();

 show('Advertiser/Layout/dashboard');

?>