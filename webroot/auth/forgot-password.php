<?php

 require_once(dirname(dirname(__FILE__)).'/loader.php');

 $fun->do_winfo('FORGOT_PASSWORD');

 /* forgot password */
 
 $fun->do_forgot_password();

 show('Auth/forgot-password');