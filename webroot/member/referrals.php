<?php
  
 require_once (dirname(dirname(__FILE__)).'/functions.php');

 $fun->do_winfo('REFERRALS');

 $fun->do_fetch_referrals();

 show('Publisher/Referrals/index');

?>