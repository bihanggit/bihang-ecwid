<?php

require 'config.php';
require dirname(__FILE__).'/lib/Oklink.php';

if ($_POST['x_login'] != $login) {
	print 'invalid ecwid login';
	die;
}

$invoice_num = $_POST['x_invoice_num'];
$amount      = $_POST['x_amount'];


$params = array(
    'name'           => "Order {$invoice_num}",
    'price'          => $amount,
    'price_currency' => "USD",
    'custom'         => $invoice_num,  
    'callback_url'   => $oklinkURL.'redirect2ecwin.php',
 );


try{
    $client = Oklink::withApiKey($apiKey, $apiSecret);
	$result = $client->buttonsButton($params);
	if($result->success){
        $button = $result->button;
        $url = OklinkBase::WEB_BASE.'/merchant/mPayOrderStemp2.do?buttonid='.$button->id;
        header('Location: '.$url);
	}else{
		$msg = $e->getMessage();
		error_log($msg);
	}
}catch(Exception $e) {
    $msg = $e->getMessage();
    error_log($msg);
}




