<?php
/*
- Use PAYTM_ENVIRONMENT as 'PROD' if you wanted to do transaction in production environment else 'TEST' for doing transaction in testing environment.
- Change the value of PAYTM_MERCHANT_KEY constant with details received from Paytm.
- Change the value of PAYTM_MERCHANT_MID constant with details received from Paytm.
- Change the value of PAYTM_MERCHANT_WEBSITE constant with details received from Paytm.
- Above details will be different for testing and production environment.
*/

define('PAYTM_ENVIRONMENT', 'PROD'); // PROD  // TEST
//define('PAYTM_MERCHANT_KEY', '%&hA%9SHe22ZYo4!'); //Change this constant's value with Merchant key received from Paytm.
//define('PAYTM_MERCHANT_MID', 'Renais34810833452637'); //Change this constant's value with MID (Merchant ID) received from Paytm.
//define('PAYTM_MERCHANT_WEBSITE', 'WEBSTAGING'); //Change this constant's value with Website name received from Paytm.

define('PAYTM_MERCHANT_KEY', 'ziSdZpAdxdAdQuC8'); //Change this constant's value with Merchant key received from Paytm.
define('PAYTM_MERCHANT_MID', 'Renais44668023159798'); //Change this constant's value with MID (Merchant ID) received from Paytm.
define('PAYTM_MERCHANT_WEBSITE', 'WEBSTAGING'); //Change this constant's value with Website name received from Paytm.


$PAYTM_STATUS_QUERY_NEW_URL='https://securegw-stage.paytm.in/order/status';
$PAYTM_TXN_URL='https://securegw-stage.paytm.in/order/process';
if (PAYTM_ENVIRONMENT == 'PROD') {
	$PAYTM_STATUS_QUERY_NEW_URL='https://securegw.paytm.in/merchant-status/getTxnStatus';
	$PAYTM_TXN_URL='https://securegw.paytm.in/theia/processTransaction';
}

define('PAYTM_REFUND_URL', '');
define('PAYTM_STATUS_QUERY_URL', $PAYTM_STATUS_QUERY_NEW_URL);
define('PAYTM_STATUS_QUERY_NEW_URL', $PAYTM_STATUS_QUERY_NEW_URL);
define('PAYTM_TXN_URL', $PAYTM_TXN_URL);
?>
