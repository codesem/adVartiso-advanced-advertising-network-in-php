<?php

require_once '../../functions.php';

 
 if(isset($_POST["submit"])){

 if($_FILES["userfile"]["name"]) 
 {

 $filename = $_FILES["userfile"]["name"];

 $source = $_FILES["userfile"]["tmp_name"];

 $type = $_FILES["userfile"]["type"];

 $name = explode(".", $filename);

 $accepted_types = array('application/zip', 'application/x-zip-compressed', 'multipart/x-zip', 'application/x-compressed');

 foreach($accepted_types as $mime_type) {

 if($mime_type == $type) {
    
  $okay = true;
 
  break;
  }
 }

 $continue = strtolower($name[1]) == 'zip' ? true : false;

 if(!$continue) {

 //die("The file you are trying to upload is not a .zip file Please try again.");

 }

 $target_path = ROOT.DS.'updates'.DS.$filename;

 if(move_uploaded_file($source, $target_path)) {

 $zip = new ZipArchive();

 $x = $zip->open($target_path);

 if ($x === true):

 $zip->extractTo(WWW_ROOT.'template'.DS.$_GET["theme"].DS);

 $zip->close();

 unlink($target_path);

/*
 |--------------------------------------------------------------------------
 | Uploaded / extracted 
 |--------------------------------------------------------------------------
 |
 | Set version / rewrite some files
 |
 */
 
 $query->addquery('update','tbl_themes','version=?','ss',[$_GET["v"],$_GET["theme"]],'name=?');

 $_SESSION['update']['updated']=true;
 
 Redirect(['controller' => 'admin', 'action' => 'set/themes']);

 else:
     
 unlink($target_path);

 $_SESSION['update']['error']=true;
 
 Redirect(['controller' => 'admin', 'action' => 'set/update?theme='.$_GET["theme"].'&v='.$_GET["v"]]);

 endif;

 }else{

 $_SESSION['update']['error']=true;
 
 Redirect(['controller' => 'admin', 'action' => 'set/update?theme='.$_GET["theme"].'&v='.$_GET["v"]]);
	
	}
	
 }
 }else{
 alerts('update','error');
 }

 
 show('Admin/Updates/themes');
 
 ?>