<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("../wp-config.php");
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");
require_once("../class.phpmailer.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application’s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.

?>
<div align="center">
<img src="<?php echo get_site_url()?>/payment/paymentloading.gif">
<h4 align="center">We are sending payment related information on your mail.</h4>
<h2 align="center">Please Do Not Press Back Button OR Refresh Page</h2>
</div>
<?
//$_POST["STATUS"] = "TXN_SUCCESS";
if($isValidChecksum == "TRUE") {
	//echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
	
	$admission_id =  $_POST["ORDERID"];
	$TXNID =  $_POST["TXNID"];
	$BANKTXNID =  $_POST["BANKTXNID"];
	$TXNAMOUNT =  $_POST["TXNAMOUNT"];
	$STATUS =  $_POST["STATUS"];
	$RESPCODE =  $_POST["RESPCODE"];
	$RESPMSG =  $_POST["RESPMSG"];
	$TXNDATE =  $_POST["TXNDATE"];
	$GATEWAYNAME =  $_POST["GATEWAYNAME"];
	$BANKNAME =  $_POST["BANKNAME"];
	$PAYMENTMODE =  $_POST["PAYMENTMODE"];
	$GATEWAYNAME =  $_POST["GATEWAYNAME"];
	$CHECKSUMHASH =  $_POST["CHECKSUMHASH"];
	$full_response =  serialize($_POST);
	
	$datetime=date('Y-m-d H:i:s');
	
	$sql="UPDATE `admission` SET `is_response`=1, `txnid`='$TXNID', `banktxnid`='$BANKTXNID', `txnamount`='$TXNAMOUNT', `currency`='INR', `status`='$STATUS', `respcode`='$RESPCODE', `respmsg`='$RESPMSG', `txndate`='$TXNDATE', `gatewayname`='$GATEWAYNAME', `bankname`='$BANKNAME', `paymentmode`='$PAYMENTMODE', `checksumhash`='$CHECKSUMHASH', `full_response`='$full_response', `response_datetime`='$datetime' WHERE admission_id=$admission_id ";

	$wpdb->query($sql);

	$query="select * from admission where admission_id ='$admission_id'  ";
    
	$data = $wpdb->get_results($query);
	
	if ($STATUS == "TXN_SUCCESS") {
		$status_ = "Success";
	}else{
		$status_ = "Failed";
	}
	
	foreach($data as $row)
	{
		$email_id=$row->email_id;
		$first_name=$row->first_name;

$tablerow="<tr><td colspan='2'><strong>Student Information</strong></td></tr>
		<tr>
		<td style='width:25%'><span>First Name</span></td> 
		<td>".$row->first_name."</td>
		</tr>
		<tr>
		<td style='width:25%'><span>Last Name</span></td> 
		<td>".$row->last_name."</td>
		</tr>
		<tr>
		<td style='width:25%'><span>Course</span></td> 
		<td>".$row->course."</td>
		</tr>
		<tr>
		<td style='width:25%'><span>DOB</span></td> 
		<td>".date('d-M-Y',strtotime($row->dob))."</td>
		</tr>
		<tr>
		<td style='width:25%'><span>Email Id</span></td> 
		<td>".$row->email_id."</td>
		</tr>
		<tr>
		<td style='width:25%'><span>Mobile No.</span></td> 
		<td>".$row->mobile_no."</td>
		</tr>
		<tr><td><span>Admission Date</span></td> 
		<td>".date('d-M-Y',strtotime($row->createdate))."</td></tr>
		<tr><td colspan='2'><strong>Parent/Guardian Information</strong></td></tr>
		<tr>
		<td style='width:25%'><span>Father Name</span></td> 
		<td>".$row->father_name."</td>
		</tr>
		<tr>
		<td style='width:25%'><span>Mother Name</span></td> 
		<td>".$row->mother_name."</td>
		</tr>
		<tr>
		<td style='width:25%'><span>Guardian Name</span></td> 
		<td>".$row->guardian_name."</td>
		</tr>
		<tr>
		<td style='width:25%'><span>Email Id</span></td> 
		<td>".$row->father_email_id."</td>
		</tr>
		<tr>
		<td style='width:25%'><span>Mobile No.</span></td> 
		<td>".$row->father_mobile_no."</td>
		</tr>
		<tr>
		<td style='width:25%'><span>Alternate Mobile No.</span></td> 
		<td>".$row->alternate_no."</td>
		</tr>
		<tr><td colspan='2'><strong>Contact Address Information</strong></td></tr>
		<tr>
		<td style='width:25%'><span>Street Address Line 1</span></td> 
		<td>".$row->address1."</td>
		</tr>
		<tr>
		<td style='width:25%'><span>Street Address Line 2</span></td> 
		<td>".$row->address2."</td>
		</tr>
		<tr>
		<td style='width:25%'><span>City</span></td> 
		<td>".$row->city."</td>
		</tr>
		<tr>
		<td style='width:25%'><span>Region</span></td> 
		<td>".$row->region."</td>
		</tr>
		<tr>
		<td style='width:25%'><span>Postal / Zip Code</span></td> 
		<td>".$row->pincode."</td>
		</tr>
		<tr>
		<td style='width:25%'><span>Country</span></td> 
		<td>".$row->country."</td>
		</tr>
		<tr><td colspan='2'><strong>Payment Transaction Information</strong></td></tr>
		<tr>
		<td style='width:25%'><span>Transaction Status</span></td> 
		<td>".$status_."</td>
		</tr>
		<tr>		
		<td style='width:25%'><span>Transaction Ref. No.</span></td> 
		<td>".$row->txnid."</td>
		</tr>
		<tr><td><span>Transaction Amount</span></td> 
		<td>".$row->txnamount."</td></tr>";

		if($row->banktxnid != '')
		 {
$tablerow.="<tr><td><span>Bank Transaction No. </span></td> 
		<td>".$row->banktxnid."</td></tr>";
		 }
		 if($row->txndate != '0000-00-00 00:00:00')
		 {
$tablerow.="<tr><td><span>Transaction Date</span></td> 
		<td>".date('d-M-Y, H:i:s',strtotime($row->txndate))."</td></tr>";
		 }
	}

		
	
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		//echo "<b>Transaction status is success</b>" . "<br/>";
		
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
		
		$subject="Thank You, Your Transaction Successful !";
	}
	else {
		
		$subject="Sorry, Your Transaction Failed !";
		//echo "<b>Transaction status is failure</b>" . "<br/>";
	}

$message="<table width='100%' border='1' cellpadding='5' cellspacing='0'>
	<tr><td colspan='2'><h4>".$subject."</h4></td></tr>
	$tablerow
	</table>";


/////////////////////////////////////////////////////////

	$mail = new PHPMailer();	
	$mail->SMTPDebug=false;
	$mail->Host = 'mail.renaissancelawcollege.com';
	$mail->Port = 587;
	$mail->IsSMTP(); // send via SMTP	
	$mail->SMTPAuth = true; // turn on SMTP authentication
	$mail->Username = "enquiry@renaissancelawcollege.com"; // SMTP username
	$mail->Password = "n%}_.Thaa__("; // SMTP password
	$webmaster_email= ""; //Reply to this email ID                       
	
	$name='noreply@renaissancelawcollege.com'; // Recipient's name
	$mail->From = $name;
	$mail->FromName = "Renaissance Law College";
	$mail->AddAddress($email_id,$first_name);
	$mail->AddBCC('sanjayk@elensoft.com','Sanjay');
			
	$mail->WordWrap = 50; // set word wrap


	if ($_POST["STATUS"] == "TXN_SUCCESS") 
	{
	$filepath = $_SERVER["DOCUMENT_ROOT"].'/pdf/Admission_Form_2020.pdf';
		if(file_exists($filepath))
		{
	$mail->AddAttachment($filepath,'Admission_Form.pdf');
		}	
	}
	$mail->IsHTML(true); // send as HTML
	$mail->Subject = $subject;
	$mail->Body    = $message; //HTML Body
	$mail->Send();


///////////////////////////////////////////////////////

	/*
	if (isset($_POST) && count($_POST)>0 )
	{ 
		foreach($_POST as $paramName => $paramValue) {
				echo "<br/>" . $paramName . " = " . $paramValue;
		}
	}
	*/
	$admission_id = base64_encode($admission_id);
	?>
	<script>
	window.location.href="<?php echo get_site_url() ?>/thank-you?admissionid=<?php echo $admission_id; ?>&msg=<?php echo $subject ?>";
	</script>
	<?

}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}

?>