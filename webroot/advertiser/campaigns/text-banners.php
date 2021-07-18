<?php
 
 require_once (dirname(dirname(dirname(__FILE__))).'/functions.php');

 $fun->do_winfo('TEXT_BANNERS');
 
 $fun->do_fetch_textbanners();

 $fun->do_pause_campaign('campaigns/text-banners');
 
 $fun->do_activate('campaigns','campaigns/text-banners');
 
 show('Advertiser/Campaigns/text-banners');