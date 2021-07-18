<?php
 
 class Request{
	public function csrf_token() {
		if(isset($_SESSION['csrfToken'])) 
			return $_SESSION['csrfToken'];
		else {
			$token = bin2hex(openssl_random_pseudo_bytes(32));
			$_SESSION['csrfToken'] = $token;
			return $token;
		}
	}
    public function post(){
    if($_SERVER["REQUEST_METHOD"]== 'POST' && $this->csrf_token()== $_POST['csrf']){
      if(count(array_filter($_POST))!=count($_POST)) {
        return 'empty';
      } else {
        return 'true';
      }
    } else{
        return 'false';
    }
   }
    public function get(){
     if($_SERVER["REQUEST_METHOD"]== 'GET' && $this->csrf_token() == $_GET['id']){
      if(count(array_filter($_GET))!=count($_GET)){
        return 'empty';
      } else {
        return 'true';
      }
     } else{
        return 'false';
     }
   }
 }
 $sr = new Request;
 $smarty->assign('csrfToken',$sr->csrf_token());