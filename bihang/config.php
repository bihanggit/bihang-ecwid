<?php

// ecwid settings
$storeURL = '';  // example: 'http://www.example.com/ecwid/index.html'
$storeId = ''; // found in your ecwid control panel

// bihang settings
// url of bihang folder on your server.  example: 'http://www.example.com/ecwid/bihang/
$bihangURL = ''; 
// apiKey: create this at bihang.com in your account settings and paste it here
$apiKey = '';
$apiSecret = '';


//payment method settings
$login = ''; // see README
$hashValue = ''; // see README

// add trailing slash to url
$bihangURL = preg_replace('#([^\/])$#', '\1/', $bihangURL);