<?php
/*
 Template Name: PayTm
*/
//get_header();
?>
<?php
 //print_r($_REQUEST);

    //     die();

      if(isset($_REQUEST['register']))
      {
        extract($_REQUEST);
       // print_r($_REQUEST);
        //die();
        
        if ($course == "B-A-LL-B")
        {   
            $registration_fees = 500;

        }
        else if ($course == "B-B-A-LL-B")
        {   
            $registration_fees = 500;

        }
        else if ($course == "B-COM-LL-B")
        {   
            $registration_fees = 500;

        }
        else if ($course == "LL-B")
        {   
            $registration_fees = 500;

        } 
        else{
          $registration_fees = 500;
        }

        if ($whatsappCheckbox) {
          $contact_number = $contact_number;
          $contact_whats = $contact_number;
        }
        else{
          $contact_number = $contact_number;
          $contact_whats = $contact_whats;
        }
        // Insert Data into databse
        $data=array(
           "fullname"=>$fullname,
           "dob"=>$dob,
           "gender"=>$gender,
           "contact_number"=>$contact_number,
           "contact_whats"=>$contact_whats,
           "email"=>$email,
           "cast"=>$cast,
           "fathername"=>$fathername,
           "mothername"=>$mothername,
           "parent_contact_no"=>$parent_contact_no,
          "country"=>$country,
          "state"=>$state,
          "city"=>$city,
          "fulladdress"=>$fulladdress,
          "pincode"=>$pincode,
          "last_education"=>$last_education,
          "education_status"=>$education_status,
          "session"=>$session,
          "course"=>$course,
          "course_fees"=>$course_fees,
          "referred_by_name"=>$referred_by_name,
          "registration_fees"=>$registration_fees,     
       );
        global $wpdb;
        $tbl_name="wp_candidate"; 

        //  print_r($data);
       $res=$wpdb->insert($tbl_name,$data);
		//  echo $wpdb->last_query;
      // print_r($res);
      //   die();
      } 

    // Get last user_id and order id
  global $wpdb;
    $id = $wpdb->get_results("SELECT user_id FROM wp_candidate ORDER BY user_id DESC LIMIT 1");
    foreach ($id as $x)
  {
    $id = $x->user_id;
  }

  $MercUnqRef = $fullname . " " . $fathername . " " . $id;
?>
<?php
/**
* import checksum generation utility
* You can get this utility from https://developer.paytm.com/docs/checksum/
*/
require_once("encdec_paytm.php");
//include( get_template_directory() . '/encdec_paytm.php' );
/* initialize an array with request parameters */
$paytmParams = array(
    
  /* Find your MID in your Paytm Dashboard at https://dashboard.paytm.com/next/apikeys */
  "MID" => "Renais44668023159798",
    
  /* Find your WEBSITE in your Paytm Dashboard at https://dashboard.paytm.com/next/apikeys */
  "WEBSITE" => "DEFAULT",

  "MERC_UNQ_REF" => $MercUnqRef,
    
  /* Find your INDUSTRY_TYPE_ID in your Paytm Dashboard at https://dashboard.paytm.com/next/apikeys */
  "INDUSTRY_TYPE_ID" => "PrivateEducation",
    
  /* WEB for website and WAP for Mobile-websites or App */
  "CHANNEL_ID" => "WEB",
    
  /* Enter your unique order id */
  "ORDER_ID" => $id,
    
  /* unique id that belongs to your customer */
  "CUST_ID" => $id,
    
  /* customer's mobile number */
  "MOBILE_NO" => $contact_number,
    
  /* customer's email */
  "EMAIL" => $email,
    
  /**
  * Amount in INR that is payble by customer
  * this should be numeric with optionally having two decimal points
  */
  "TXN_AMOUNT" => $registration_fees,
    
  /* on completion of transaction, we will send you the response on this URL */
  //"CALLBACK_URL" => "https://renaissance.ac.in/template-register/",
  "CALLBACK_URL" => "https://graffersid.com/renaissa/paytm-response/",
);

/**
* Generate checksum for parameters we have
* Find your Merchant Key in your Paytm Dashboard at https://dashboard.paytm.com/next/apikeys 
*/
$checksum = getChecksumFromArray($paytmParams,"ziSdZpAdxdAdQuC8");

/* for Staging */
//$url = "https://securegw-stage.paytm.in/order/process";

/* for Production */
$url = "https://securegw.paytm.in/order/process";

/* Prepare HTML Form and Submit to Paytm */
?>
<html>
  <head>
    <title>Merchant Checkout Page</title>
  </head>
  <body>
    <center><h1>Please do not refresh this page...</h1></center>
    <form method='post' action='<?php echo $url ;?>' name='paytm_form'>
        <?php
          foreach($paytmParams as $name => $value) {
            echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
          }
          // print_r($paytmParams);
          // exit();

        ?>
        <input type="hidden" name="CHECKSUMHASH" value="<?php echo $checksum ;?>">
    </form>
    <script type="text/javascript">
      document.paytm_form.submit();
    </script>
  </body>
</html>
