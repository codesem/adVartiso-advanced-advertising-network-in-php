<?php

 /*
 |--------------------------------------------------------------------------
 | pluginModel
 |--------------------------------------------------------------------------
 |
 | All plugins functions are loaded from here.
 |
 */
 
  class pluginModel{
  
  var $balance = "0.00000"; // default balance
  var $interval = "1 MONTH"; // default interval
  var $host = HOST; // URL
  var $referer = REFERER ?: HOST; // REFERER URL
  var $pfx = PFX; // DB perfix

}
 
  $plgn = new pluginModel;