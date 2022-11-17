<?php
header('Location: thank_you.php');
?>
<?php
require_once('phpmailer/class.phpmailer.php');
require_once('phpmailer/class.smtp.php');

			if(isset($_POST['submit']))
			{
				$mail = new PHPMailer();
				$name = ($_POST['name']);
				$mobile = ($_POST['mobile']);
				$email = ($_POST['email']);
        $courses = ($_POST['courses']);

                $message ='';
				$message = '<html><body>';
	            $message .= '<table rules="all" style="border:1px solid #666;" cellpadding="10">';
				$message .= "<tr><td style='border:1px solid #666;border-collapse:collapse;'><strong>Name </strong> </td><td style='border:1px solid #666;border-collapse:collapse;'>" . trim($name) . "</td></tr>";
				$message .= "<tr><td style='border:1px solid #666;border-collapse:collapse;'><strong>Contact </strong> </td><td style='border:1px solid #666;border-collapse:collapse;'>" . trim($mobile) . "</td></tr>";
				$message .= "<tr><td style='border:1px solid #666;border-collapse:collapse;'><strong>Email Id </strong> </td><td style='border:1px solid #666;border-collapse:collapse;'>" . trim($email) . "</td></tr>";
				$message .= "<tr><td style='border:1px solid #666;border-collapse:collapse;'><strong>Selected Course </strong> </td><td style='border:1px solid #666;border-collapse:collapse;'>" .implode('<br /> ', $_POST['courses']). "</td></tr>";
				$message .= "</table>";
	            $message .= "</body></html>";

				$body = $message;
				$mail = new PHPMailer();
				$mail->IsSMTP();
				$mail->SMTPAuth = true;
				$mail->Host = "smtp.rediffmailpro.com";
				$mail->Port = 587;
				$mail->Username = "digital.leads6@innoserv.co.in";
				$mail->Password = "digital@123";
				$mail->SetFrom('digital.leads@innoserv.co.in', 'RCCM');
				$mail->Subject = "RCCM Law Enquiry - Google Lead";
				$mail->MsgHTML($body);
				$mail->AddAddress('renaissancelawcollegeindore@gmail.com');
				$mail->AddCC('vishal@innoserv.co.in');
				$mail->AddCC('ashish.vijayan@innoserv.co.in');
				$mail->AddCC('ashish@innoserv.co.in');
				$mail->AddCC('shikha@innoserv.co.in');
				if($mail->Send()) {
				  echo "Message sent!";
				}
                else {
				  echo "Mailer Error: " . $mail->ErrorInfo;
				}

				include("../db_config.php");
				$lp_name = "RCCM Law Enquiry - Google Lead";
		    $lp_link = "http://renaissancelawcollege.com/law-campaign-google/";
				$form_name = "Top Form";
				$project = implode('<br /> ', $_POST['courses']);

		$insert_sql = "INSERT INTO renaissancelawcollege_lp_record (fname, mobile, email, city, program, query, lp_name, lp_link, form_name)
		VALUES ('".$name."', '".$mobile."', '".$email."', '', '".$project."', '".$querymsg."', '".$lp_name."', '".$lp_link."', '".$form_name."')";

		  if (mysqli_query($conn, $insert_sql)) {

		  }




			}




		?>
