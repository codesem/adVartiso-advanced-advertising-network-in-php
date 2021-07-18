<?php
 
 require_once (dirname(dirname(dirname(__FILE__))).'/functions.php');

 $fun->do_winfo('STATS');
 
 $fun->do_adv_stats();

 show('Advertiser/Stats/index');
