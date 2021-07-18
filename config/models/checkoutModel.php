<?php

 /*
 |--------------------------------------------------------------------------
 | checkoutModel
 |--------------------------------------------------------------------------
 |
 | Payments checkouts can be found here.
 | In main time only Coinbase/PayPal/Stripe are supported.
 |
 */
 
 class checkouts{
      public function coinbase($name,$number,$amount,$currency){
       global $query,$user;
       require(CBS.'coinbase.inc.php');
       $cps = new CoinbaseAPI();
       $data = $query->addquery('select','deposite_methods','*','s','coinbase','methods=?');
       //var_export($data);exit;
       $cps->Setup($data->public_key);
       $invoice = $query->addquery('select','invoice','*','i',$number,'id=?');

       $failurl = HOST.ADV.'deposit/index';
       $successurl = HOST.ADV.'deposit/invoices';
       
       $req = array(
           
           'name' => 'INVOICE #'.$number,
           'description'=> $name,
           'pricing_type' => 'fixed_price',
           'local_price' => ["amount"=> $amount,
           "currency"=> $currency],
           'metadata' => ["customer_id"=> $number,
           "customer_name"=> $user->first_name],
           'redirect_url' => $successurl,
           'cancel_url' => $failurl
       );

       $result = $cps->CreateTransaction($req);
       if (isset($result['error'])) {
               session_acv('checkout','error');
               $_SESSION['checkout']['msg'] = 'Error: ' .$result['error'];
               redirect(['controller' => 'advertiser','action' => 'deposit/index']);
             }else{
               header('location:' .$result['data']['hosted_url']);
	           exit;
           }
       }
      public function paypal($name,$number,$amount,$currency){
       global $query;
       require(PPL.'paypal.inc.php');
       $ppl = new PayPalAPP();
       $data = $query->addquery('select','deposite_methods','*','s','paypal','methods=?');
       $invoice = $query->addquery('select','invoice','*','i',$number,'id=?');
       //var_export($number);exit;
       $ppl->Setup($invoice->token);

       $failurl = HOST.ADV.'deposit/index';
       $successurl = HOST.ADV.'deposit/invoices';

       $req = array(
         
         'cmd' => '_xclick',
         'charset' => 'utf-8',
         'item_name' => $name,
         'item_number'=> $number,
         'amount' => $amount,
         'business' => $data->account,
         'notify_url' => HOST.IPN.'ppl_handler',
         'return' => $successurl,
         'cancel_return' => $failurl
       );
       $result = $ppl->ExpressCheckout($req);
       if (isset($result['error'])) {
               session_acv('checkout','error');
               $_SESSION['checkout']['msg'] = 'Error: ' .$result['error'];
               redirect(['controller' => 'advertiser','action' => 'deposit/index']);
             }else{
                 //var_export($result['hosted_url']);exit;
               header('location:' .$result['hosted_url']);
	           exit;
           }
       }
      public function stripe($name,$number,$amount,$currency){
       global $query,$user,$dateForm;
       require(STP.'init.php');
       $data = $query->addquery('select','deposite_methods','*','s','stripe','methods=?');

       $stripe = new \Stripe\StripeClient($data->secret_key);
       $invoice = $query->addquery('select','invoice','*','i',$number,'id=?');
       $amount = number_format(($amount*100) , 0, '', '');
       $succurl = HOST.ADV.'deposit/index';
       $failurl = HOST.ADV.'deposit/invoices';


           $token = $_POST['stripeToken'];
           
           try {
               $charge = $stripe->charges->create([
                   'amount' => $amount,
                   'currency' => strtolower($currency),
                   'source' => $token
               ]);    
           } catch (\Stripe\Exception\CardException $e) {       
               $_SESSION['checkout']['msg'] = $e->getError()->message;
               session_acv('checkout','error');
               header('location:' .$failurl);
               exit;
           } catch (\Stripe\Exception\RateLimitException $e) {
               // Too many requests made to the API too quickly
               $_SESSION['checkout']['msg'] = $e->getError()->message;
               session_acv('checkout','error');
               header('location:' .$failurl);
               exit;
           } catch (\Stripe\Exception\AuthenticationException $e) {
               $_SESSION['checkout']['msg'] = $e->getError()->message;
               session_acv('checkout','error');
               header('location:' .$failurl);
               exit;
           } catch (\Stripe\Exception\InvalidRequestException $e) {
               $_SESSION['checkout']['msg'] = $e->getError()->message;
               session_acv('checkout','error');
               header('location:' .$failurl);
               exit;
           } catch (\Stripe\Exception\ApiConnectionException $e) {
               // Network communication with Stripe failed
               $_SESSION['checkout']['msg'] = $e->getError()->message;
               session_acv('checkout','error');
               header('location:' .$failurl);
               exit;
           } catch (\Stripe\Exception\ApiErrorException $e) {
               // Network communication with Stripe failed
               $_SESSION['checkout']['msg'] = $e->getError()->message;
               session_acv('checkout','error');
               header('location:' .$failurl);
               exit;
           } catch (Exception $e) {
               //catch any non-stripe exceptions
               $_SESSION['checkout']['msg'] = $e->getError()->message;
               session_acv('checkout','error');
               header('location:' .$failurl);
               exit;
           }
       
       if($charge->status == 'succeeded'){
          //enter into DB
             $query->addquery('update','invoice','status_text=?,status=?','sii',[$charge->status,'1',$number],'id=?');
             $query->addquery('insert','payments','user_id,item_number,txn_id,payment_gross,payment_status,type,created','iisssss',[$invoice->user_id,$number,$charge->txn_id,$invoice->amount,$charge->status,'Stripe',$dateForm]);
             $query->addquery('update','user','ad_balance=ad_balance+?','si',[$invoice->amount,$invoice->user_id],'user_id=?');
             $query->addquery('insert','notifications','user_id,role,type,amount,created','issss',[$invoice->user_id,'advertiser','deposit',$invoice->amount,$dateForm]);
             header('location:' .$succurl);
	         exit;
       }else{
             $query->addquery('update','invoice','status_text=?','si',[$charge->status,$number],'id=?');
             $query->addquery('insert','payments','user_id,item_number,txn_id,payment_gross,payment_status,type,created','iisssss',[$invoice->user_id,$number,$charge->txn_id,$invoice->amount,$charge->status,'Stripe',$dateForm]);
             header('location:' .$failurl);
	         exit;
       }
    
       }
      public function paytm($name,$number,$amount,$currency){
       global $query,$user,$dateForm,$smarty;
       
       header("Pragma: no-cache");
       header("Cache-Control: no-cache");
       header("Expires: 0"); 
             
       require(PTM.'config_paytm.php');
       require(PTM.'encdec_paytm.php');
 
       $data = $query->addquery('select','deposite_methods','*','s','paytm','methods=?');
       $invoice = $query->addquery('select','invoice','*','i',$number,'id=?');
       
       $checkSum = "";
       $paramList = array();
       
       // Create an array having all required parameters for creating checksum.
       $paramList["MID"] = $data->account;
       $paramList["ORDER_ID"] = $number;
       $paramList["CUST_ID"] = $invoice->user_id;
       $paramList["INDUSTRY_TYPE_ID"] = 'Retail';
       $paramList["CHANNEL_ID"] = 'WEB';
       $paramList["TXN_AMOUNT"] = number_format($amount , 0, '', '');
       $paramList["WEBSITE"] = $data->secret_key;
       $paramList["CALLBACK_URL"] = HOST.$data->ipn_url;
       $paramList["EMAIL"] = $user->email;
       $paramList["VERIFIED_BY"] = "EMAIL";
       $paramList["IS_USER_VERIFIED"] = "YES";
       
       /*
       $paramList["CALLBACK_URL"] = "http://localhost/PaytmKit/pgResponse.php";
       $paramList["MSISDN"] = $MSISDN; //Mobile number of customer
       $paramList["EMAIL"] = $EMAIL; //Email ID of customer
       $paramList["VERIFIED_BY"] = "EMAIL"; //
       $paramList["IS_USER_VERIFIED"] = "YES"; //
       */
       
       //Here checksum string will return by getChecksumFromArray() function.
       $checkSum = getChecksumFromArray($paramList,$data->public_key);

       //assign variables
       $smarty->assign('txn_url',PAYTM_TXN_URL);
       $smarty->assign('paramList',$paramList);
       $smarty->assign('checkSum',$checkSum);
       
       show('Advertiser/Deposit/paytm');
       }
      public function bank($name,$number,$amount,$currency){
       global $query;
       $data = $query->addquery('select','deposite_methods','*','s','bank','methods=?');
       $invoice = $query->addquery('select','invoice','*','i',$number,'id=?');
       redirect(['controller' => 'advertiser','action' => 'deposit/bank-info/'.$number.DS]);
       }
  }