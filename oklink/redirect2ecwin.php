<?php

require 'config.php';

require dirname(__FILE__).'/lib/Oklink.php';

$client = Oklink::withApiKey($apiKey, $apiSecret);

if( $client->checkCallback() ){
	$post = json_decode(file_get_contents('php://input'),true);
	if( $post['order']!=null ){
        postToEcwid($post['order'])
	}
}
header('Location: '.$storeURL);
