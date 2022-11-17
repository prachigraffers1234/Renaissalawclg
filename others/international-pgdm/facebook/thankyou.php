<?PHP   
session_start();
$form_name = $_SESSION['form_name1'];
    if($form_name == "download-brochure-form")
    { 
/*    echo $form_name;
    echo $brochure_name;
    die();*/
        echo '<meta http-equiv="refresh" content="2;URL=downloadbrochure.php">' ;
    }    
    else if($form_name == "download-pdf-guide-form")
    { 
        echo '<meta http-equiv="refresh" content="2;URL=downloadbrochure1.php">' ;
    }    
?>


<!--
    <div class="container-fluid div_form">
        <div class="container text-center">
        <div class="row div_thanks">
            <h2><label>THANK YOU!</label></h2>
            <p>
               For sharing your details with us. 
               Our Team will get back to you shortly.
            </p>
        </div>
        </div>
    </div>

        <div class="relative">
        <div class="box div_thanks">
            <div class="div_contact text-center">
                <h2><label>THANK YOU!</label></h2>
                <p>
                   For sharing your details with us. 
                   Our Team will get back to you shortly.
                </p>
            </div> 
        </div>
        </div>
-->


<!DOCTYPE html>
<html lang="en">
<head>
  <title>IIBS PGDM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css" />
    
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '272036433308496');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=272036433308496&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

</head>
<body>
<script>
  fbq('track', 'Lead');
</script>
    
                     
    <div class="sticky_form">
        <div class="relative">
        <div class="box div_thanks">
            <div class="div_contact text-center">
                <h2><label>THANK YOU!</label></h2>
                <p>
                   For sharing your details with us. 
                   Our Team will get back to you shortly.
                </p>
            </div> 
        </div>
        </div>
    </div> 
                        
    
<!-------------------------- #BANNER -------------------------->
    <div class="container-fluid">
        <div class="row">              
            <div id="myCarousel" class="carousel slide" data-ride="carousel">                   
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="img/banner1.jpg" alt="isbr_indore_indira" />
                    </div>
<!--                    <div class="item">
                      <img src="img/banner_2.jpg" alt="isbr_indore_indira" />
                    </div>
                    <div class="item">
                      <img src="img/banner_3.jpg" alt="isbr_indore_indira" />
                    </div>
                    <div class="item">
                      <img src="img/banner_4.jpg" alt="isbr_indore_indira" />
                    </div>
                    <div class="item">
                      <img src="img/banner_5.jpg" alt="isbr_indore_indira" />
                    </div>-->
                    
                    <div class="div_absolute">
                    <div class="col-sm-12 bg_blinker">
                        <h3 class="blinker1">Admission Open for 2018-19</h3>
                    </div>
                    </div>
                    
                </div>
<!--              <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" >
                <span class="" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a> -->
                
    
<!-------------------------- #FORM -------------------------->
<!--    <div class="containr_fluid div_form">
    <div class="container">
        <div class="row">
            <h2>Contact Us</h2>
            <div class="col-sm-12 padding_20">                    
                  <form class="form-horizontal" method="post" id="conform" name="conform" action="connect.php" onSubmit="return saveCustDetails()">
                    <div class="form-group col-sm-12">
                        <input id="name" name="name" type="text" placeholder="Name" class="form-control"/>
                        <p class="error_msg" id="error_name"></p>
                    </div>
                    <div class="form-group col-sm-12">
                        <input id="mobile" name="mobile"  type="text" placeholder="Mobile" maxlength="10" class="form-control"/>
                        <p class="error_msg" id="error_mobile"></p>
                    </div>
                    <div class="form-group col-sm-12">
                        <input id="email" name="email" type="text" placeholder="Email ID" class="form-control"/>
                        <p class="error_msg" id="error_email"></p>
                    </div>
                    <div class="form-group col-sm-12 text-center">
                        <input type="submit" name="submit" id="submit" value="SUBMIT" class="form-control" />
                    </div> 
                  </form>
            </div>
        </div>
    </div>
    </div>-->
<!-------------------------- /#FORM -------------------------->
                
                
            </div>
        </div>
    </div>
<!-------------------------- /#BANNER -------------------------->
    





    <div class="container-fluid div_form">
        <div class="container">
        <div class="row padding_20">
            <h2 class="text-center padding_bottom_20"> Enquire Now</h2>
            <form class="form-inline col-sm-12" method="post" id="conform" name="conform" action="mail.php" onSubmit="return validate_form()">
            <input type="hidden" name="formname" value="top-form"/>
            <div class="form-group col-sm-6 col-md-2 col-md-offset-1">
                <input id="name" name="name" type="text" placeholder="Name" class="form-control" required />
                <p class="error_msg" id="error_name"></p>
            </div>
            <div class="form-group col-sm-6 col-md-2">
                <input id="mobile" name="mobile"  type="text" placeholder="Contact No." maxlength="10" class="form-control" required />
                <p class="error_msg" id="error_mobile"></p>
            </div>
            <div class="form-group col-sm-6 col-md-2">
                <input id="email" name="email" type="text" placeholder="Email ID" class="form-control" required />
                <p class="error_msg" id="error_email"></p>
            </div>
            <div class="form-group col-sm-6 col-md-2">
                <input id="city"  class="form-control" name="city" placeholder="City" required />
                <p class="error_msg" id="error_city"></p>
            </div>
            <div class="form-group col-sm-6 col-sm-offset-3 col-md-2 col-md-offset-0">
                <input type="submit" name="submit" id="submit" value="SUBMIT" class="form-control btn_style1"/>
                <p></p>
            </div>
            </form>
        </div>
        </div>
    </div>

    
    
<!-------------------------- #ABOUT -------------------------->
    <div class="containr_fluid">
    <div class="container div_about">
        <div class="row padding_20">
            <h3 class="padding_bottom_10">About Indore Indira</h3>
            <div class="col-sm-10 col-sm-offset-1">
            <p>
                Indore Indira Group of Institutions aims to deliver education to meet the growing needs of an individual and the society. Today, companies around the world are converging and Indian companies are thereby becoming globally competitive. To address this demand of industry and to deliver the specific requirements of industries in terms of skilled manpower, Indore Indira has elaborate spectrum of professional programs under one roof. With an exposure to a competitive, holistic and dynamic environment, students develop great certainty and confidence that enables them to face the challenges of the globalised industrial scenario.
            </p>
            </div>
        </div>
    </div>
    </div>
<!-------------------------- /#ABOUT -------------------------->
    
    
<!-------------------------- #ADVISORY BOARD -------------------------->
    <div class="containr_fluid div_board">
    <div class="container">
        <div class="row text-cente padding_20">
            <div class="col-sm-12 col-md-6">
                <h3 class="padding_bottom_30 text-left">They made us proud...</h3>
                <div class="row padding_bottom_30 text-center">
                    <div class="col-sm-6 ">
                        <img alt="ADVISORY BOARD" src="img/student1.jpg"/>
                        <p><b>Vikas Jha</b></p>
                        <p>Placed in Al Abbas Group, Dubai<br/>
                           12.30 Lakhs per Annum</p>
                    </div>
                    <div class="col-sm-6 ">
                        <img alt="ADVISORY BOARD" src="img/student2.jpg"/>
                        <p><b>Ruchika Trivedi</b></p>
                        <p>Placed in Pioneer Brokers, Dubai<br/>
                           11 Lakhs per Annum</p>
                    </div>
<!--                    <div class="col-sm-6 col-md-4">
                        <img alt="ADVISORY BOARD" src="img/student_3.jpg"/>
                        <p><b>Sumeet Sarkar</b></p>
                        <p>Placed in Omega, Dubai<br/>
                           10 Lakhs per Annum</p>
                    </div>-->
                </div>
            </div>
            <div class="col-sm-12 col-md-5 col-md-offset-1 div_outcome">
                <h3 class="padding_bottom_30 text-left">Program Highlights</h3>
                <ul>
                    <li>International Placements</li>
                    <li>3 Months Interships in Dubai & Mauritius</li>
                    <li>Approved by AICTE, Ministry of HRD, Govt. of India</li>
                    <li>Additional Classes, Workshops & Certification programs</li>
                    <li>Experience two internships abroad & gain cross-cultural experience</li>
                    <li>Specialisation in Marketing, Finance, Accounting, PR, Information technology & Human Resources</li>
                    <li>Highest Package at 13 Lakhs/annum</li>
                </ul>
            </div>
        </div>
    </div>
    </div>
<!-------------------------- /#ADVISORY BOARD -------------------------->

    
	
<!-------------------------- #FOOTER -------------------------->
    <div class="container-fluid div_footer">
        <div class="container">
            <div class="row text-right">
                <p class="no_margin">Designed By - InnoServ Digital</p>
            </div>
        </div>	
    </div>
<!-------------------------- /#FOOTER -------------------------->    
<!--
<script>
  $('.carousel').carousel({
   interval: 15000
  });
 </script>
-->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/validation.js"></script>
  
<script type="text/javascript">
    $(document).ready(function(){
        $(".slide-toggle").click(function(){
            $(".box").animate({
                width: "toggle"
            });
        });
    });
</script>

</body>
</html>






































