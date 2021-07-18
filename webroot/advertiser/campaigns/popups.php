<?php
 
 require_once (dirname(dirname(dirname(__FILE__))).'/functions.php');

 $fun->do_winfo('POPUPS');
 
 $fun->do_fetch_popups();

 $fun->do_pause_campaign('campaigns/popups');
 
 $fun->do_activate('campaigns','campaigns/popups');
 
 show('Advertiser/Campaigns/popups');