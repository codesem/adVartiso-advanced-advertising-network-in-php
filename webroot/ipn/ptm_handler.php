<?php
/*
 header("Pragma: no-cache");
 header("Cache-Control: no-cache");
 header("Expires: 0");
*/
 require_once (dirname(dirname(__FILE__)).'/loader.php');
 require_once(PTM.'config_paytm.php');
 require_once(PTM.'encdec_paytm.php');  
 
 $ptm_data = $query->addquery('select','deposite_methods','*','s','paytm','methods=?');
 function errorExit($error_msg) {
     die('IPN Error: '.$error_msg);
 } 

 $failurl = HOST.ADV.'deposit/index';
 $successurl = HOST.ADV.'deposit/invoices';
 $paytmChecksum = "";
 $paramList = array();
 $isValidChecksum = "FALSE";

 $paramList = $_POST;
 
 /* data */
    $ORDERID = $_POST['ORDERID'];
    $MID = $_POST['MID'];
    $TXNID = $_POST['TXNID'];
    $TXNAMOUNT = $_POST['TXNAMOUNT'];
    $PAYMENTMODE = $_POST['PAYMENTMODE'];
    $CURRENCY = $_POST['CURRENCY'];
    $TXNDATE = $_POST['TXNDATE'];
    $STATUS = $_POST['STATUS'];
    $RESPCODE = $_POST['RESPCODE'];
    $RESPMSG = $_POST['RESPMSG'];
    $GATEWAYNAME = $_POST['GATEWAYNAME'];
    $BANKTXNID = $_POST['BANKTXNID'];
    $BANKNAME = $_POST['BANKNAME'];
 
 $paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg
 
 //Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application?s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
 $isValidChecksum = verifychecksum_e($paramList, $ptm_data->public_key, $paytmChecksum); //will return TRUE or FALSE string.
 $invoice = $query->addquery('select','invoice','*','i',$ORDERID,'id=?');
 if(!$invoice) {
     //wrong invoice id
     errorExit('Wrong data.');
 }
 if($isValidChecksum == "TRUE") {
	echo "<b>Checksum matched</b>";
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		echo "<b>Transaction status is success</b>" . "<br/>";
		//Process your transaction here as success transaction.
		$query->addquery('insert','payments','user_id,item_number,txn_id,payment_gross,currency_code,payment_status,type,created','iissssss',[$invoice->user_id,$ORDERID,$TXNID,$invoice->amount,do_config(17),$RESPMSG,'PayTM',$dateForm]);
		$query->addquery('update','invoice','status=?','ii',[1,$ORDERID],'id=?');
		$query->addquery('update','user','ad_balance=ad_balance+?','si',[$invoice->amount,$invoice->user_id],'user_id=?');
		$query->addquery('insert','notifications','user_id,role,type,amount,created','issss',[$invoice->user_id,'advertiser','deposit',$invoice->amount,$dateForm]);
		$query->addquery('update','invoice','status_text=?','si',[$RESPMSG,$ORDERID],'id=?');
        
        //redirect
        header('location:' .$successurl);
	    exit;
	}else {
	    $query->addquery('update','invoice','status_text=?','si',[$RESPMSG,$ORDERID],'id=?');
	    
	    //redirect
        header('location:' .$failurl);
	    exit;
	        //errorExit('Transaction status is failure');
	}
 }else {
 	errorExit('Checksum mismatched.');
	//Process transaction as suspicious.
 }

?>