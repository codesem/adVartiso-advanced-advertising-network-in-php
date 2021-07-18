<?php

 require_once (dirname(dirname(__FILE__)).'/loader.php');

 $cbs_data = $query->addquery('select','deposite_methods','*','s','coinbase','methods=?');
 function errorExit($error_msg) {
     die('IPN Error: '.$error_msg);
 } 
 $headers = getallheaders();
 $signraturHeader = isset($headers['X-Cc-Webhook-Signature']) ? $headers['X-Cc-Webhook-Signature'] : null;

 $request = file_get_contents('php://input'); 
 if ($request === FALSE || empty($request)) {
     errorExit('Error reading POST data');
 }
 $hmac = hash_hmac("sha256", $request, trim($cbs_data->secret_key));
 if ($hmac != $signraturHeader) {
     errorExit('HMAC signature does not match');
 }
 $jsn_result = json_decode($request, true);
 
 /* data */
 $txn_id = $jsn_result['event']['data']['code'];
 $item_name = $jsn_result['event']['data']['name'];
 $status_text = $jsn_result['event']['type']; 
 $item_number = $jsn_result['event']['data']['metadata']['customer_id'];
 $transaction_id = $jsn_result['event']['payments']['transaction_id'];
 $confirmations_accumulated = $jsn_result['event']['payments']['block']['confirmations_accumulated'];

 /* invoice */
 $invoice = $query->addquery('select','invoice','*','i',$item_number,'id=?');

 if ($status_text == 'charge:created') { 
     
     //created
     $query->addquery('insert','payments','user_id,item_number,txn_id,payment_gross,currency_code,payment_status,type,created','iissssss',[$invoice->user_id,$item_number,$txn_id,$invoice->amount,do_config(17),$status_text,'Coinbase',$dateForm]);
     $query->addquery('update','invoice','status_text=?,txn_id=?','ssi',[$status_text,$txn_id,$item_number],'id=?');
     
 } elseif ($status_text == 'charge:confirmed') { 
     
     /* transaction successful */
     $query->addquery('update','payments','txn_id=?,payment_status=?,payment_gross=?','sssi',[$txn_id,$status_text,$invoice->amount,$item_number],'item_number=?');
     $query->addquery('update','invoice','status=?','ii',[1,$item_number],'id=?');
     $query->addquery('update','user','ad_balance=ad_balance+?','si',[$invoice->amount,$invoice->user_id],'user_id=?');
     $query->addquery('insert','notifications','user_id,role,type,amount,created','issss',[$invoice->user_id,'advertiser','deposit',$invoice->amount,$dateForm]);
     $query->addquery('update','invoice','status_text=?','si',[$status_text,$item_number],'id=?');

 } elseif ($status_text == 'charge:failed') {
     
     //failed
     $query->addquery('update','payments','txn_id=?,payment_status=?,payment_gross=?','sssi',[$txn_id,$status_text,$invoice->amount,$item_number],'item_number=?');
     $query->addquery('update','invoice','status_text=?','si',[$status_text,$item_number],'id=?');
 }else{
     //other
     $query->addquery('update','payments','txn_id=?,payment_status=?,payment_gross=?','sssi',[$txn_id,$status_text,$invoice->amount,$item_number],'item_number=?');
     $query->addquery('update','invoice','status_text=?','si',[$status_text,$item_number],'id=?');
 }
 
 die('IPN OK'); 