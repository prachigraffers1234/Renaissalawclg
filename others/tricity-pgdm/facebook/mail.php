<?PHP namespace SendGrid; ?>
<?PHP
require_once('sendgrid-php/sendgrid-php.php');

if(isset($_POST['submit']))
{
    ob_start();
    session_start();

    $form_name = $_POST['formname'];
    $_SESSION['form_name1'] = $form_name;

    $brochure_name = $_POST['brochure'];
    $_SESSION['brochure_name1'] = $brochure_name;

/*    echo $form_name;
    echo $brochure_name;
    die();*/

    helloEmail();
    header('location: thankyou.php');
    exit();
    ob_end_flush();
}

function helloEmail()
{
    $name = ($_POST['name']);
    $mobile = ($_POST['mobile']);
    $email = ($_POST['email']);
    $city = ($_POST['city']);
    //$project = ($_POST['project']);
//    $querymsg = $query = $datemsg = $date = "";

    $subject = "Facebook | IIBS Tricity | Enquiry | ";

    if($_POST['formname'] == "top-form")
    {
        $subject.="Top Form";
    }
    else if($_POST['formname'] == "side-form")
    {
        $subject.="Side Form";
    }
    else if($_POST['formname'] == "download-brochure-form")
    {
        $subject.="Download Brochure Form";
    }
    else if($_POST['formname'] == "download-pdf-guide-form")
    {
        $subject.="Download PDF Guide Form";
    }
    else if($_POST['formname'] == "apply-now-form")
    {
        $subject.="Get More Details Form";
    }
    else if($_POST['formname'] == "schedule-site-visit-form")
    {
        $subject.="Schedule Site Visit";

        $datemsg = $_POST['date'];

        $date ="<tr><td style='border:1px solid #666;border-collapse:collapse;'><strong>Query</strong> </td><td style='border:1px solid #666;border-collapse:collapse;'>" . trim($datemsg) . "</td></tr>";
    }
    else if($_POST['formname'] == "Ask-your-query-form")
    {
        $subject.="Consult Now Form";

        $querymsg = $_POST['query'];

        $query ="<tr><td style='border:1px solid #666;border-collapse:collapse;'><strong>Query</strong> </td><td style='border:1px solid #666;border-collapse:collapse;'>" . trim($querymsg) . "</td></tr>";
    }


    $message = '<html><body>';
    $message .= '<table rules="all" style="border:1px solid #666;" cellpadding="10">';
    $message .= "<tr><td style='border:1px solid #666;border-collapse:collapse;'><strong>Name </strong> </td><td style='border:1px solid #666;border-collapse:collapse;'>" . trim($name) . "</td></tr>";
    $message .= "<tr><td style='border:1px solid #666;border-collapse:collapse;'><strong>Contact </strong> </td><td style='border:1px solid #666;border-collapse:collapse;'>" . trim($mobile) . "</td></tr>";
    $message .= "<tr><td style='border:1px solid #666;border-collapse:collapse;'><strong>Email Id </strong> </td><td style='border:1px solid #666;border-collapse:collapse;'>" . trim($email) . "</td></tr>";
    $message .= "<tr><td style='border:1px solid #666;border-collapse:collapse;'><strong>City  </strong> </td><td style='border:1px solid #666;border-collapse:collapse;'>" . trim($city) . "</td></tr>";
    /*$message .= "<tr><td style='border:1px solid #666;border-collapse:collapse;'><strong>Selected Course </strong> </td><td style='border:1px solid #666;border-collapse:collapse;'>" . trim($project) . "</td></tr>";*/
    $message .= $query;
    /*$message .= $date;*/
    $message .= "</table>";
    $message .= "</body></html>";

    $body = $message;

    $from = new Email("IIBS Tricity Enquiry", "digital.leads@innoserv.co.in");
    $subject = $subject;
    /*$to = new Email(null, "shruti.jathar@innoserv.co.in");*/
    $to = new Email(null, "menikasoni@indoreindira.com");
    $content = new Content("text/html", "$body");
    $mail = new Mail($from, $subject, $to, $content);

    $cc = new Email(null, "manoj.rathod@innoserv.co.in");
    $mail->personalization[0]->addCC($cc);

    $cc = new Email(null, "shirish.deshpande@innoserv.co.in");
    $mail->personalization[0]->addCC($cc);

    $cc = new Email(null, "vishal@innoserv.co.in");
    $mail->personalization[0]->addCC($cc);


    $apiKey = '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';
    $sg = new \SendGrid($apiKey);

    $request_body = $mail;
    $response = $sg->client->mail()->send()->post($request_body);
}
?>
