<?php

 require_once (dirname(dirname(dirname(__FILE__))).'/functions.php');

 $fun->do_winfo('ANNOUNCEMENTS');

 $fun->do_fetch_announcements();

 show('Publisher/Announcements/index');

?>