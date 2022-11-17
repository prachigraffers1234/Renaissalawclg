<!DOCTYPE html>
<html lang="en">
<head>
  <title>IIBS TRICITY</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css" />


</head>
<body>
    
    <div class="sticky_form">
        <div class="relative">
        <button type="button" class="slide-toggle">Enquire Now</button>
        <div class="box">
        <form class="form-inline" method="post" id="form4" name="conform" action="mail.php" onSubmit="return validate_form3()">
            <input type="hidden" name="formname" value="side-form"/>                
            <input id="name3" name="name" type="text" placeholder="Name" class="form-control" required />
            <p class="error_msg" id="error_name3"></p>
            
            <input id="mobile3" name="mobile" type="text" placeholder="Mobile Number" maxlength="10" class="form-control" required />
            <p class="error_msg" id="error_mobile3"></p>
            
            <input id="email3" name="email"  type="text" placeholder="Email ID" class="form-control" required />
            <p class="error_msg" id="error_email3"></p>
            
            <input id="city3" name="city"  type="text" placeholder="City" class="form-control" required />
            <p class="error_msg" id="error_city3"></p>  
            
<!--            <select class="form-control" name="project" id="project3">
            <option value="0" selected="true" disabled="disabled">Select Course</option>
            <option value="MBA">MBA</option>
            <option value="PGDM">PGDM</option>
            <option value="Tricity PGDM">Tricity PGDM</option> 
            </select>
            <p class="error_msg" id="error_project3"></p>-->
    
            <input type="submit" name="submit" id="submit" value="SUBMIT" class="form-control btn_style2" />
        </form>
        </div>
        </div>
    </div> 
                        
    
<!-------------------------- #BANNER -------------------------->
    <div class="container-fluid">
        <div class="row">              
            <div id="myCarousel" class="carousel slide" data-ride="carousel">                   
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="img/banner1.jpg" alt="isbr_mba" />
                    </div>
<!--                    <div class="item">
                      <img src="img/banner_2.jpg" alt="isbr_mba" />
                    </div>-->
                    
                    <div class="div_absolute">
                    <div class="col-sm-12 bg_blinker">
                        <h3 class="blinker1">Admission Open for 2018-19</h3>
                    </div>
                    </div>
                    
                </div>
              <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" >
                <span class="" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a> 
                
    
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
                    <div class="form-group col-sm-12">
                        <h4>Select Course</h4>
                          <div class="col-sm-12">
                            <label>
                                <input id="chk1" type="checkbox" name="course[]" value="MBA" >
                                MBA
                            </label>
                          </div>
                          <div class="col-sm-12">
                            <label>
                                <input id="chk2" type="checkbox" name="course[]" value="PGDM">
                                PGDM
                            </label>
                          </div>
                          <div class="col-sm-12">
                            <label>
                                <input id="chk3" type="checkbox" name="course[]" value="TRICITY PGDM">
                                TRICITY PGDM
                            </label>
                          </div>
                        <p class="error_msg" id="error_chk"></p>
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
        <div class="row padding_bottom_20">
            <h2 class="text-center padding_bottom_20">Enquire Now</h2>
            <form class="form-inline col-sm-12" method="post" id="conform" name="conform" action="mail.php" onSubmit="return validate_form()">
            <input type="hidden" name="formname" value="top-form"/>
            <div class="form-group col-sm-6 col-sm-offset-0 col-md-2 col-md-offset-1">
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
<!--            <div class="form-group col-sm-6 col-sm-offset-3 col-md-2 col-md-offset-0">
                <select class="form-control" name="project" id="project">
                <option value="0" selected="true" disabled="disabled">Select Course</option>
                <option value="MBA">MBA</option>
                <option value="PGDM">PGDM</option>
                <option value="Tricity PGDM">Tricity PGDM</option> 
                </select>
                <p class="error_msg" id="error_project"></p>
            </div>-->
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
            <div class="col-sm-12 col-md-8 col-md-offset-2 div_outcome">
                <h3 class="padding_bottom_30">Program Highlights</h3>
                <ul class="col-sm-6">
                    <li>Tri-city Internships</li>
                    <li>Cross Specialization Internship</li>
                    <li>Highest Package @ 13 Lakhs/Annum</li>
                    <li>Exposure to 3 different corporate cultures</li>
                    <li>100% Placement Assistance</li>
                </ul>
                <ul class="col-sm-6">                    
                    <li>Placement opportunities and exposure to all sectors of industry</li>
                    <li>More than 500 placements in different sectors in the industry</li>
                    <li>100 prominent and distinguished corporate recruiters</li>
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