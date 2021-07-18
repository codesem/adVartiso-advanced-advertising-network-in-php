<?php
 
 require_once (dirname(dirname(dirname(__FILE__))).'/functions.php');

 $fun->do_winfo('DIRECTS');
 
 $fun->do_fetch_directs();

 $fun->do_pause_campaign('campaigns/directs');
 
 $fun->do_activate('campaigns','campaigns/directs');
 
 show('Advertiser/Campaigns/directs');