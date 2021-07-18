<?php
 
 require_once (dirname(dirname(dirname(__FILE__))).'/functions.php');

 $fun->do_winfo('TEXT_BANNERS');
 
 $fun->do_textbanners();

 $fun->do_activate('campaigns','campaigns/text-banners');
 
 $fun->do_deactivate('campaigns','campaigns/text-banners');
 
 $fun->do_delete('campaigns','campaigns/text-banners');
 
 show('Admin/Campaigns/text-banners');