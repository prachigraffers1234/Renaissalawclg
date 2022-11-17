<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
// following files need to be included
require_once("../wp-config.php");
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$checkSum = "";
$paramList = array();

$ORDER_ID = $_POST["ORDER_ID"];
$CUST_ID = $_POST["CUST_ID"];
$INDUSTRY_TYPE_ID = $_POST["INDUSTRY_TYPE_ID"];
$CHANNEL_ID = $_POST["CHANNEL_ID"];
$TXN_AMOUNT = $_POST["TXN_AMOUNT"];
$EMAIL = $_POST["EMAIL"];
$MSISDN = $_POST["MSISDN"];
$VERIFIED_BY = $_POST["VERIFIED_BY"];
$IS_USER_VERIFIED = $_POST["IS_USER_VERIFIED"];


// Create an array having all required parameters for creating checksum.
$paramList["MID"] = PAYTM_MERCHANT_MID;
$paramList["ORDER_ID"] = $ORDER_ID;
$paramList["CUST_ID"] = $CUST_ID;
$paramList["INDUSTRY_TYPE_ID"] = $INDUSTRY_TYPE_ID;
$paramList["CHANNEL_ID"] = $CHANNEL_ID;
$paramList["TXN_AMOUNT"] = $TXN_AMOUNT;
$paramList["WEBSITE"] = PAYTM_MERCHANT_WEBSITE;

$paramList["CALLBACK_URL"] = "http://renaissancelawcollege.com/payment/pgResponse.php";
$paramList["EMAIL"] = $EMAIL; //Email ID of customer
$paramList["MSISDN"] = $MSISDN; //Mobile number of customer
$paramList["VERIFIED_BY"] = $VERIFIED_BY; //
$paramList["IS_USER_VERIFIED"] =  $IS_USER_VERIFIED; //

//Here checksum string will return by getChecksumFromArray() function.
$checkSum = getChecksumFromArray($paramList,PAYTM_MERCHANT_KEY);

?>
<html>
<head>
<title>Processing to payment page</title>
</head>
<body>
	<center>
	<img src="<?php echo get_site_url()?>/payment/paymentloading.gif">
<h4 align="center">Redirecting To Payment Please Wait..</h4>
<h2 align="center">Please Do Not Press Back Button OR Refresh Page</h2>
	</center>
	
		<form method="post" action="<?php echo PAYTM_TXN_URL ?>" name="f1" style="display:none">
		<table border="1">
			<tbody>
			<?php
			foreach($paramList as $name => $value) {
				echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
			}
			?>
			<input type="hidden" name="CHECKSUMHASH" value="<?php echo $checkSum ?>">
			</tbody>
		</table>
		<script type="text/javascript">
			document.f1.submit();
		</script>
	</form>
</body>
</html>