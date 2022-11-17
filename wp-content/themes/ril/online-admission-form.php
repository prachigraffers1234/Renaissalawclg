<?php 
    //include("captcha/securimage.php");
	require("class.phpmailer.php");
	$Submit   = (isset($_POST["Submit"])?($_POST["Submit"]):"");
	$msg      = (isset($_POST["msg"])?($_POST["msg"]):"");
	$project =  (isset($_POST["project"])?($_POST["project"]):"");
	$name     = (isset($_POST["name"])?($_POST["name"]):"");
	$phone    = (isset($_POST["phone"])?($_POST["phone"]):"");
	$phone1    = (isset($_POST["phone1"])?($_POST["phone1"]):"");
	$email    = (isset($_POST["email"])?($_POST["email"]):""); 
	$detail   = (isset($_POST["detail"])?($_POST["detail"]):""); 
	$get_rand = (isset($_POST["get_rand"])?($_POST["get_rand"]):""); 
	$code     = (isset($_POST["code"])?($_POST["code"]):"");
	$city     = (isset($_POST["city"])?($_POST["city"]):""); 
	$courses     = (isset($_POST["courses"])?($_POST["courses"]):""); 
if(isset($_POST['Submit']))
{
	$project = (isset($_POST["project"])?($_POST["project"]):"");	
    $name   = (isset($_POST["name"])?($_POST["name"]):"");
	$phone  = (isset($_POST["phone"])?($_POST["phone"]):"");
	$email  = (isset($_POST["email"])?($_POST["email"]):"");
	$detail = (isset($_POST["txtdetail"])?($_POST["txtdetail"]):""); 
 	// echo $get_rand; echo $code; exit;
	//$img = new Securimage();
	//$valid = $img->check($_POST['code']);

  if(md5($code)==$get_rand) {
  $msg="Right" ;
  $subject="Renaissance Law College Enquiry.......";
		  	$message = "<table cellspacing='0' cellpadding='0' width='100%' 
                                border='0'>
                        <tbody>
                          <tr>
                            <td valign='center' align='right'>&nbsp;</td>
                            <td valign='center' align='left' 
                                >&nbsp;</td>
                            <td width='389' align='left' valign='center'>&nbsp;</td>
                          </tr>
             
						   <tr>
                            <td class='contacttxt' valign='center' align='right' 
                                width='300' bgcolor='#f7f7f8' height='29'><span 
                                class='contactstar'>* </span>Name :</td>
                            <td valign='center' align='left' width='12' 
                                bgcolor='#f7f7f8'>&nbsp;</td>
                            <td valign='center' align='left' bgcolor='#f7f7f8'><label>".$name."</label></td>
                          </tr>
                          <tr>
                            <td class='contacttxt' valign='center' align='right' 
                                bgcolor='#f7f7f8' height='29'><span 
                                class='contactstar'>* </span>Phone 2 :</td>
                            <td valign='center' align='left' width='12' 
                                bgcolor='#f7f7f8'>&nbsp;</td>
                            <td valign='center' align='left' bgcolor='#f7f7f8'>".$phone."</td>
                          </tr>
						  <tr>
                            <td class='contacttxt' valign='center' align='right' 
                                bgcolor='#f7f7f8' height='29'><span 
                                class='contactstar'>* </span>Phone 2:</td>
                            <td valign='center' align='left' width='12' 
                                bgcolor='#f7f7f8'>&nbsp;</td>
                            <td valign='center' align='left' bgcolor='#f7f7f8'>".$phone1."</td>
                          </tr>
                          <tr>
                            <td class='contacttxt' valign='center' align='right' 
                                height='29'><span class='contactstar'>*</span> Email :</td>
                            <td valign='center' align='left' width='12'>&nbsp;</td>
                            <td valign='center' align='left'>".$email."</td>
                          </tr>
						  
						  <tr>
                            <td class='contacttxt' valign='center' align='right' 
                                height='29'><span class='contactstar'>*</span> City :</td>
                            <td valign='center' align='left' width='12'>&nbsp;</td>
                            <td valign='center' align='left'>".$city."</td>
                          </tr>
						  
						  <tr>
                            <td class='contacttxt' valign='center' align='right' 
                                height='29'><span class='contactstar'>*</span> Courses :</td>
                            <td valign='center' align='left' width='12'>&nbsp;</td>
                            <td valign='center' align='left'>".$courses."</td>
                          </tr>
						  
                          <tr bgcolor='#f7f7f8'>
                            <td class='contacttxt' valign='middle' align='right' 
                                height='70'>Detail :</td>
                            <td valign='center' align='left' width='12' 
                                height='70'>&nbsp;</td>
                            <td valign='center' align='left' height='70'>".$detail."</td>
                          </tr>
                         
                          <tr>
                            <td colspan='3' align='left' valign='middle'><div id='div'>
                                                           </div></td>
                          </tr>
                        </tbody>
                      </table>";
		
		 
		/*$semi_rand = md5( time() );
		$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
		$to   = "crm@brgreality.com";
		//$from = "crm@brgreality.com";
		$headers  = 'From: <kalpesh.bairagi@gmail.com>' . "\r\n";
		$headers .= 'Bcc: <vaibhavkore@gmail.com>,<vaibhavkore@gmail.com>' . "\r\n";		
		$headers .= 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "\nMIME-Version: 1.0\n" ."Content-Type: multipart/mixed;\n" ." boundary=\"{$mime_boundary}\"";
		mail($to,$subject, stripslashes($message), $headers);*/
		
			$mail = new PHPMailer();
			//$mail->SMTPSecure    = 'ssl';
			$mail->SMTPDebug=false;
			$mail->Host = 'mail.renaissancelawcollege.com';
			$mail->Port = 587;
			$mail->IsSMTP(); // send via SMTP
			//IsSMTP(); // send via SMTP
			$mail->SMTPAuth = true; // turn on SMTP authentication
			$mail->Username = "enquiry@renaissancelawcollege.com"; // SMTP username
			$mail->Password = "n%}_.Thaa__("; // SMTP password
			$webmaster_email= ""; //Reply to this email ID                       
			
			$name='divyadityakothari25@gmail.com'; // Recipient's name
			$mail->From = $name;
			$mail->FromName = "Renaissance Law College";
			//$mail->AddAddress($email,'');
			//$mail->AddAddress('divyadityakothari25@gmail.com','Enquiry');
                        $mail->AddBCC('rlconline011@gmail.com','Enquiry');
                         $mail->AddBCC('barkhasingh@renaissancelawcollege.com','Enquiry');
			$mail->AddBCC('barkha.hanspalo8@rediffmail.com','Enquiry');
			$mail->AddBCC('barkha.hanspalo@rediffmail.com','Enquiey');
			
			//$mail->AddReplyTo($webmaster_email,"Webmaster");
			$mail->WordWrap = 50; // set word wrap
			 
			$mail->IsHTML(true); // send as HTML
			$mail->Subject = $subject;
			$mail->Body    = $message; //HTML Body
			//$mail->$SMTPDebug = true;
			if(!$mail->Send()) { echo "Mailer Error: " . $mail->ErrorInfo; }
			else               { //echo "Message has been sent"; 
echo '<script type="text/javascript">window.location="http://renaissancelawcollege.com/wp-content/themes/ril/contact-thank-you.php";</script>';
			}
			}
			 
		  $project =""; $name=""; $phone=""; $email=""; $detail=""; $code=""; 
		
		  echo '<script>alert(Enquiry Submit Successfully!);</script>';
		  $url="submit_page.html";
		 
		  /*$message = "This is a multi-part message in MIME format.\n\n" .
		  "--{$mime_boundary}\n" .
		  "Content-Type: text/html; charset=\"iso-8859-1\"\n" .
		  "Content-Transfer-Encoding: 7bit\n\n" .
		  $message . "\n\n";*/
		  //echo "mail sent successfully";
		  
  } else {
    		$msg = "Sorry the code you entered was invalid! ";
    }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Renaissance Law College</title>
<script type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}

//  onkeyup="allow_character(this);"  
function allow_character(obj){//
    //var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	var reg = /^([a-zA-Z0-9\_\:\ \-\?])+$/;
	//alert(reg);
    var address = obj.value;//alert(address);
     	if(reg.test(address) == false) {
       	//alert('Not Allowed');
		obj.value="";
		obj.focus();
 	  	 return false;
     	}
}
//-->
</script>

</head>

<body>

</body>
</html>
