<?php
 
 require_once (dirname(dirname(dirname(__FILE__))).'/functions.php');

 $fun->do_winfo('DIRECTS');
 
 $fun->do_directs();

 $fun->do_activate('campaigns','campaigns/directs');
 
 $fun->do_deactivate('campaigns','campaigns/directs');
 
 $fun->do_delete('campaigns','campaigns/directs');
 
 show('Admin/Campaigns/directs');