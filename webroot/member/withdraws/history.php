<?php
 
 require_once (dirname(dirname(dirname(__FILE__))).'/functions.php');

 $fun->do_winfo('WITHDRAWAL_HISTORY');
 
 $fun->do_withdraw_history();

 show('Publisher/Withdraw/history');