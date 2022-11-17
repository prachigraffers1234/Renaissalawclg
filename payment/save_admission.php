<?php require_once("../wp-config.php");

$datetime=date('Y-m-d H:i:s');
$ip = $_SERVER['REMOTE_ADDR'];
	  
$session_id=session_id();
if(isset($_POST['submit']))
{
$first_name = trim($_POST['first_name']);
$last_name = trim($_POST['last_name']);
$course = trim($_POST['course']);
$dob = trim($_POST['dob']);
$mobile_no = trim($_POST['mobile_no']);
$email_id = trim($_POST['email_id']);
$father_name = trim($_POST['father_name']);
$mother_name = trim($_POST['mother_name']);
$guardian_name = trim($_POST['guardian_name']);
$father_mobile_no = trim($_POST['father_mobile_no']);
$alternate_no = trim($_POST['alternate_no']);
$father_email_id = trim($_POST['father_email_id']);
$address1 = trim($_POST['address1']);
$address2 = trim($_POST['address2']);
$city = trim($_POST['city']);
$region = trim($_POST['region']);
$pincode = trim($_POST['pincode']);
$country= trim($_POST['country']);	
$code= trim($_POST['code']);	
$get_rand= trim($_POST['get_rand']);	
$session_id_post= trim($_POST['session_id_post']);	
	
	if($session_id != $session_id_post)
	{
		$msg = "failed||Some error occured.";
	}
	if($get_rand != md5($code))
	{
		$msg = "failed||Code is incorrect.";
	}
	elseif($first_name=="" || $last_name=="" || $course=="" || $dob=="" || $email_id=="" || $mobile_no=="" || $father_name=="" || $mother_name=="" || $code=="")  
	{
		$msg = "failed||Enter all required fields";
	}	
	elseif (!filter_var($email_id, FILTER_VALIDATE_EMAIL) && $email_id!="") 
	{
		$msg = "failed||Invalid email format";		
    }
	else
	{
		
	  $dob =date('Y-m-d',strtotime($dob));	  
	  
	  $sql ="INSERT INTO `admission`( `first_name`, `last_name`, `course`, `email_id`, `mobile_no`, `dob`, `father_name`, `mother_name`, `guardian_name`, `father_mobile_no`, `alternate_no`, `father_email_id`, `address1`, `address2`, `city`, `region`, `pincode`, `country`,  `createdate`, `ip`) values('$first_name','$last_name','$course','$email_id','$mobile_no','$dob','$father_name','$mother_name','$guardian_name','$father_mobile_no','$alternate_no','$father_email_id','$address1','$address2','$city','$region','$pincode','$country','$datetime','$ip')";
	  $wpdb->query($sql);
	  $admission_id = $wpdb->insert_id;
	  	
	  $msg="success||".get_site_url()."/payment/pay_admission.php?admission_id=".$admission_id;
	  
	}	
}else
{
	$msg = "failed||Invalid request";
}
echo $msg;
//INSERT INTO `admission`(`admission_id`, `first_name`, `last_name`, `course`, `email_id`, `mobile_no`, `dob`, `father_name`, `mother_name`, `guardian_name`, `father_mobile_no`, `alternate_no`, `father_email_id`, `address1`, `address2`, `city`, `region`, `pincode`, `country`, `payable_amount`, `createdate`, `ip`, `payment_gateway`, `is_response`, `txnid`, `banktxnid`, `txnamount`, `currency`, `status`, `respcode`, `respmsg`, `txndate`, `gatewayname`, `bankname`, `paymentmode`, `checksumhash`, `full_response`, `response_datetime`) values()
?>