<?php
 
 require_once (dirname(dirname(dirname(__FILE__))).'/functions.php');

 $fun->do_winfo('CAMPAIGNS');
 
 $fun->do_campaigns_stats();

 show('Advertiser/Campaigns/index');