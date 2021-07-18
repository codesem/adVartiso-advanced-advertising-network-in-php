<?php
 
 require_once (dirname(dirname(dirname(__FILE__))).'/functions.php');

 $fun->do_winfo('IMAGE_BANNERS');
 
 $fun->do_fetch_imgbanners();

 $fun->do_pause_campaign('campaigns/image-banners');
 
 $fun->do_activate('campaigns','campaigns/image-banners');

 show('Advertiser/Campaigns/image-banners');