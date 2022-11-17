<?php	
die('hello');
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
	require_once("../wp-config.php");
	
	$admission_id = $_GET['admission_id'];
	$admission_id =trim($admission_id);
	
	if($admission_id=='')
	{
		?>
		<script>
		window.location.href="<?php echo get_site_url() ?>";
		</script>
		<?
	}

    $query="select * from admission where admission_id ='$admission_id'  ";
    
	$data = $wpdb->get_results($query);
	
	foreach($data as $row)
	{
		$ORDER_ID = $row->admission_id;
		$CUST_ID = $row->admission_id;
		$EMAIL = $row->email_id;
		$MSISDN = $row->mobile_no;
		$TXN_AMOUNT= 500;
	}

	$sql ="UPDATE `admission` SET  `payable_amount`='$TXN_AMOUNT', `payment_gateway`='PAYTM', `is_response`=0 WHERE `admission_id`='$admission_id' ";
	$wpdb->query($sql);	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
	<form method="post" action="pgRedirect.php" style="display:none" name="f1">
		<table border="1">
			<tbody>
				<tr>
					<th>S.No</th>
					<th>Label</th>
					<th>Value</th>
				</tr>
				<tr>
					<td>1</td>
					<td><label>ORDER_ID::*</label></td>
					<td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?=$ORDER_ID?>">
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td><label>CUSTID ::*</label></td>
					<td><input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?=$CUST_ID?>"></td>
				</tr>
				<tr>
					<td>3</td>
					<td><label>INDUSTRY_TYPE_ID ::*</label></td>
					<td><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="PrivateEducation"></td>
				</tr>
				<tr>
					<td>4</td>
					<td><label>Channel ::*</label></td>
					<td><input id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
					</td>
				</tr>
				<tr>
					<td>5</td>
					<td><label>txnAmount*</label></td>
					<td><input title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"
						value="<?=$TXN_AMOUNT?>">
					</td>
				</tr>
				<tr>
					<td>6</td>
					<td><label>EMAIL</label></td>
					<td><input title="EMAIL" tabindex="10"
						type="text" name="EMAIL"	value="<?=$EMAIL?>">
					</td>
				</tr>
				<tr>
					<td>7</td>
					<td><label>MSISDN</label></td>
					<td><input title="MSISDN" tabindex="10"
						type="text" name="MSISDN" value="<?=$MSISDN?>">
					</td>
				</tr>
				<tr>
					<td>8</td>
					<td><label>VERIFIED_BY</label></td>
					<td><input title="VERIFIED_BY" tabindex="10"
						type="text" name="VERIFIED_BY" value="EMAIL">
					</td>
				</tr>
				<tr>
					<td>9</td>
					<td><label>IS_USER_VERIFIED</label></td>
					<td><input title="IS_USER_VERIFIED" tabindex="10"
						type="text" name="IS_USER_VERIFIED" value="YES">
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input value="CheckOut" type="submit"	onclick=""></td>
				</tr>
			</tbody>
		</table>
		* - Mandatory Fields
	</form>
	<script type="text/javascript">
			document.f1.submit();
		</script>
</body>
</html>