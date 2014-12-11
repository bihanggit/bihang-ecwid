<?php

// ecwid settings
$storeURL = '';  // example: 'http://www.example.com/ecwid/index.html'
$storeId = ''; // found in your ecwid control panel

// oklink settings
// url of oklink folder on your server.  example: 'http://www.example.com/ecwid/oklink/
$oklinkURL = ''; 
// apiKey: create this at oklink.com in your account settings and paste it here
$apiKey = '';
$apiSecret = '';


//payment method settings
$login = ''; // see README
$hashValue = ''; // see README

// add trailing slash to url
$oklinkURL = preg_replace('#([^\/])$#', '\1/', $oklinkURL);