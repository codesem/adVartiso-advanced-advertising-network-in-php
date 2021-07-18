<?php
 
 require_once (dirname(dirname(dirname(__FILE__))).'/functions.php');

 $fun->do_winfo('POPUPS');
 
 $fun->do_popups();

 $fun->do_activate('campaigns','campaigns/popups');
 
 $fun->do_deactivate('campaigns','campaigns/popups');
 
 $fun->do_delete('campaigns','campaigns/popups');
 
 show('Admin/Campaigns/popups');