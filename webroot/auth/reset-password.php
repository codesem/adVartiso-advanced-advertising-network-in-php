<?php

 require_once(dirname(dirname(__FILE__)).'/loader.php');

 $fun->do_winfo('RESET_PASSWORD');

 /* reset password */
 
 $fun->do_reset_password();

 show('Auth/reset-password');