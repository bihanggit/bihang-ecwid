Oklink plugin for Ecwid using the oklink.com service.



Instructions
------------
In config.php:
- Set $storeURL to the URL of your store's homepage.
- Set $storeID to your ecwid store ID found in the bottom-right of the Ecwid control panel.
- Set $oklinkURL to the URL of the oklink/ folder which you extracted from this plugin.
- Set $apiKey and $apiSecret from [oklink.com](https://www.oklink.com/open/index.do "oklink.com")
	
In your Ecwid control panel:
- Click System Settings > Payment, then click Authorize.  Rename this to "Oklink" or whatever you'd prefer.  
- Change Payment Processor to Credit Card: Authorize.net SIM
- Click Account Details
- API Login ID: choose something random here and copy it to config.php's $login variable.
- Transaction Key: choose something random
- MD5 Hash value: choose something random here and copy it to config.php's $hashValue variable.
- Transaction Type: Authorize and Capture.
- Click Advanced Settings.
- Type in the url to bitpay/redirect2bitpay.php on your server.
- Click Save
- Click Save 
- Click Design > CSS Themes
- Either click "New CSS Theme" or edit your own theme.
- Add this to the text area of your custom theme:
<pre>
		/* bitpay checkout image */
		img.defaultCCImage {
			padding: 25px 263px 0px 0px; 
			background: url('https://en.bitcoin.it/w/images/en/2/29/BC_Logo_.png'); 
			background-size:auto; 
			background-repeat:no-repeat;
			width:0px; 
			height: 0px;
		}
</pre>
- Click Save

