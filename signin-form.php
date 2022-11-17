<?php

require_once('wp-config.php');


//get_header();?>
<?php

if(isset($_POST["signin"])) 

{

	$user_login = trim($_POST['user_login']);

	$user_pass = trim($_POST['user_pass']);
	
	$course = trim($_POST['course']);

	$sem = trim($_POST['sem']);

	$user_login =  ($user_login);
 
	$user_pass =  ($user_pass);

	if($user_login == "" && $user_pass == "")

	{

		$msg = "User Name And Password Can Not Be Blank";

	}

	else

	{
global $wpdb;
		$sqlData = $wpdb->get_results("SELECT * FROM `wp_users` WHERE `user_login`='$user_login' ");

 
foreach($sqlData as $val)
{
   $user_login_new =$val->user_login;
   $user_id =$val->ID;
$user_pass_new=$val->user_pass;    
}
	//	$fetchData = mysql_fetch_array($sqlData);	     

	//	$user_login_new = $fetchData['user_login'];

	//	$user_id = $fetchData['ID'];

		if($user_login == $user_login_new && wp_check_password( $user_pass, $user_pass_new, $user_id ))

		{
			

		$user = get_user_by( 'id', $user_id ); 

		if( $user ) 

		{

			wp_set_current_user( $user_id, $user->user_login );

			wp_set_auth_cookie( $user_id );

			do_action( 'wp_login', $user->user_login );

			wp_redirect("http://renaissancelawcollege.com/?page_id=1443&course=$course&sem=$sem");


		}

		}

		else

		{

		$msg = " User Name and password Is Invalid ";	

		}

	}    

}



?>
<?php
/**
* The Header template for our theme
*
* Displays all of the <head> section and everything up till <div id="main">
*
* @package WordPress
* @subpackage Twenty_Thirteen
* @since Twenty Thirteen 1.0
*/
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
<title>
<?php wp_title( '|', true, 'right' ); ?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
<![endif]-->
<link href="<?php echo get_template_directory_uri(); ?>/css/main.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo get_template_directory_uri(); ?>/css/custom.css" rel="stylesheet" type="text/css" media="all">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

<style type="text/css">
#osfooter {
	display: block;
	position: fixed;
	bottom: 0;
	left: 0;
	width: 100%;
	height: 300px;
	margin-bottom: -300px;
	overflow: hidden;
	background-color: transparent;
	z-index: 5000;
	text-indent: -5000px;
}
#osfooter div {
	margin-bottom: -1000px;
}
#osfooter a {
	display: block;
	text-indent: -5000px;
}
	.top_header_color {
		background: #E3E4E8;}
	#topnav li a {
    display: block;
    padding: 8px 8px;
    background: #e3e4e8;
    color: #000;
    font-weight: 500;
    font-size: 15px;
	font-family: 'Roboto';
}
	.blockflash{
  display:inline-block;
  background:#E3E4E8;
}
a.popup-link.add_form {
       background-color: #fff;
    padding: 5px 10px;
    font-size: 15px;
    font-weight: 600;
    border-radius: 10px;
    border: 2px solid #f70407;
    color: #f70407;
    font-family: 'Roboto';
}
.flash-me {
  color:#fff;
  font-size:25px;
  -webkit-animation: flash linear 0.5s infinite;
  animation: flash linear 0.5s infinite;
}

	ul.social.rnd50.socialicon {
    margin-right: 12px;
}
div#logo a img {
    max-width: 160px;
}
#topnav li.menu-item-has-children:hover a {
    background-color: #a90125 !important;
    color: #fff;
}
.mobnav{
	display: none;
}
.right_right nav li a {
    text-transform: capitalize;
}
div#logo a img {
    max-width: 160px;
}
#topnav {

    padding-bottom: 7px;
}
#topnav ul#menu-menu-1 li.menu-item.menu-item-has-children:hover::after {
    position: absolute;
    content: "";
    background: #a90125;
    width: 10px;
    height: 8px;
    clip-path: polygon(50% 100%, 0 0, 100% 0);
     bottom: -8px;
    left: 0;
    right: 0;
    margin: 0 auto;
}
#topnav ul#menu-menu-1 ul li.menu-item a:hover::after {
	display: none;
}
#topnav ul ul li:first-child{

    padding-top: 7px;
}
#topnav li.menu-item-has-children:hover a {
    background-color: #a90125 !important;
    color: #fff;
}
#topnav li.menu-item-has-children:hover ul li a{
	color: #FFFFFF;
	background-color: #25292d !important;
}
#topnav li.menu-item-has-children:hover ul li a:hover {
color: #FFFFFF;
    background-color: #a90125 !important;
}
#topnav li li {
    border-width: 0 0 0.5px 0;
}
div#to-right-toggle {
    display: none !important;
}
@media only screen and (max-width: 1200px) {
	#topnav li a {
    padding: 18px 6px;
    font-size: 10px;
}
	.right_right {
    padding: 20px 12px 0px 0px;
}
	#header #logo {
    padding: 0 0 0 0px;
}

}
@media only screen and (max-width: 1023px) {


	nav#topnav {
    display: none;
}
	div#logo {
    display: flex;
    align-items: center;
    justify-content: space-between;
}
	.right_right ul#menu-2-2effe3d {
    display: block !important;
}
}

@media only screen and (max-width: 614px) {
	.right_right .form_form {
    justify-content: space-between;

}
	.right_right {
       width: 100%;
    padding-right: 0;
    float: none;
}
	ul.social.rnd50.socialicon {
    margin-right: 0px;
}
}
</style>

<style type="text/css" >
body{
	margin:0px;
	font-family: Calibri;
}
input{

color:#333133;
border:thin 1px #333133;}
.form{
		PADDING-BOTTOM: 3px;
	background-color:#fff;
	border-radius:4px;
	COLOR: #7d7d7d;
	PADDING-TOP: 3px;
	text-decoration: none;
	font-family: Calibri;
	font-size: 14px;
	padding-left:5px;
	font-weight: normal;
    border: 1px solid #bcbdbd;
    height:30px;
	margin: 0px;
	width:331px;
	float:left;
}
.form:hover {
	PADDING-BOTTOM: 3px;
	background-color:#fff;
	border-radius:4px;
	COLOR: #7d7d7d;
	PADDING-TOP: 3px;
	text-decoration: none;
	font-family: Calibri;
	font-size: 14px;
	padding-left:5px;
	font-weight: normal;
    border: 1px solid #606161;
    height:30px;
	margin: 0px;
	width:331px;
	float:left;
}

.form2{
	PADDING-BOTTOM: 3px;
	background-color:#fff;
	border-radius:4px;
	COLOR: #7d7d7d;
	PADDING-TOP: 3px;
	text-decoration: none;
	font-family: Calibri;
	font-size: 14px;
	padding-left:5px;
	font-weight: normal;
    border: 1px solid #bcbdbd;
    height:30px;
	margin: 0px;
	width:331px;
	float:left;
}


.form3{
	PADDING-BOTTOM: 3px;
	background-color:#fff;
	border-radius:4px;
	COLOR: #333133;
	PADDING-TOP: 3px;
	text-decoration: none;
	font-family: Calibri;
	font-size: 14px;
	padding-left:5px;
	font-weight: normal;
	border: 1px solid #e5e4e3;
    height:50px;
	margin: 0px;
	width:320px;
	float:left;
}

.Button2 {
	BORDER-RIGHT: #bfbfbf 1px solid; PADDING-RIGHT: 2px; BORDER-TOP: #bfbfbf 1px solid; PADDING-LEFT: 2px; FONT-SIZE: 11px; BACKGROUND: #069; border-radius:4px; PADDING-BOTTOM: 1px; BORDER-LEFT: #bfbfbf 1px solid;  PADDING-TOP: 2px; BORDER-BOTTOM: #bfbfbf 1px solid; width:90px; height:30px;font-family: Calibri; font-size:14px;
 color:#fff; font-weight:bold; }
 
.Button2:hover {
BORDER-RIGHT: #bfbfbf 1px solid; PADDING-RIGHT: 2px; BORDER-TOP: #bfbfbf 1px solid; PADDING-LEFT: 2px; FONT-SIZE: 11px; BACKGROUND: #686868; border-radius:4px; PADDING-BOTTOM: 1px; BORDER-LEFT: #bfbfbf 1px solid;  PADDING-TOP: 2px; BORDER-BOTTOM: #bfbfbf 1px solid; width:90px; height:30px;font-family: Calibri; font-size:14px;
 color:#fff; font-weight:bold; }
}
.contacttxt{
font-family: Calibri;
font-size:12px;
color:#000;


}

.style1 {font-family: Calibri; font-size: 12px; color: #333133; font-weight: bold; }
.style2 {
	color: #333133;
	font-weight: bold;
}
.style3 {color: #333133}


</style>

<style>
input::-moz-placeholder {
  color: black;
}
</style>
<!--[if lte IE 6]><style type="text/css">#osfooter{position:absolute; display:none;}</style><![endif]-->
<!-- Syntax hl -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/li-scroller.css" type="text/css" media="screen" />
<script>

 function validate_lform(thisform)

	{

		

  	   if( document.getElementById("user_login").value == "")

	   {

		  alert("Please Enter User Name ");  

                  $("#user_login").focus();

		  $("#user_login").css({"border": "1px solid red","box-shadow":"1px 1px 5px red"});

		  return false;

	   }

	    if( document.getElementById("user_pass").value == "")

	   {

		  alert("Please Enter Password ");  

                  $("#user_pass").focus();

		  $("#user_pass").css({"border": "1px solid red","box-shadow":"1px 1px 5px red"});

		  return false;

	   }	
	   
	    if( document.getElementById("course").value == "")

	   {

		  alert("Please Select Course ");  

                  $("#course").focus();

		  $("#course").css({"border": "1px solid red","box-shadow":"1px 1px 5px red"});

		  return false;

	   }	
	   
	    if( document.getElementById("sem").value == "")

	   {

		  alert("Please Select Sem ");  

                  $("#sem").focus();

		  $("#sem").css({"border": "1px solid red","box-shadow":"1px 1px 5px red"});

		  return false;

	   }	


   

     if (document.getElementById("user_login").value != "" && document.getElementById("user_pass").value != "")

		{

		 return true;

		}

}



function clearfiled(id)

{

  if(document.getElementById(id).value == "0"  || document.getElementById(id).value == "")

  {

   $("#"+id).css({"border": "1px solid red","box-shadow":"1px 1px 5px red"});

  }

  else

  {

   $("#"+id).css({"border": "","box-shadow":""});

   }

}

 


 

 

</script>

<style>

.required

{

color:red;

padding:4px;

}
.right_right .form_form {
    display: flex;
    justify-content: end;
    flex-wrap: wrap;
	    align-items: center;
}
@-webkit-keyframes flash {
	0% { opacity: 1; } 
	50% { opacity: .1; } 
	100% { opacity: 1; }
}
@keyframes flash {
	0% { opacity: 1; } 
	50% { opacity: .1; } 
	100% { opacity: 1; }
}
</style>
</head>

<body id="top">
<div class="wrapper row0">
  <div id="topbar"> </div>
</div>

<div class="wrapper row1">
  <div class="top_header_color">
    <header role="banner" id="header" class="clear">
      <div id="logo"> <a href="<?php echo get_home_url(); ?>" class="white"><img src="./wp-content/themes/ril/images/logo.gif" alt="" style="margin-top:5px;"/></a>
        <div class="right_right">
         <div class="form_form" style="margin-bottom:10px;">
            <ul class="social rnd50 socialicon">
              <li><a class="socico-facebook" href="https://www.facebook.com/RenaissanceLawCollege" target="_blank"><span class="icon-facebook"><em>Facebook</em></span></a></li>
				<li><a class="socico-twitter" href="https://www.instagram.com/renaissancelawcollege/" target="_blank"><span class="icon-instagram"><em>Instagram</em></span></a></li></ul>
				<ul class="social rnd50"><span class="blockflash">
<span class="flash-me"><a class="popup-link add_form" href="<?php echo get_home_url(); ?>/online-admission-form/">Register Now</a></span>
</span>
            </ul>
			  <div class="mobnav">
				<?php echo do_shortcode('[elementor-template id="5160"]'); ?>
			</div>
          </div>
          <!-- 	<div class="search_box">
<form id="tfnewsearch" method="get" action="http://www.google.com">
<ul>
<li class="margin_right">
<input type="text"  name="q" size="10">
</li>
<li>
<input type="submit" value="search" class="button small yellow"/>
</li>
</ul>
</form>
</div>-->
          
          <nav role="navigation" id="topnav" class="clear">
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
            
          </nav>
        </div>
      </div>
    </header>
  </div>
</div>



 <link rel="stylesheet" href="http://renaissancelawcollege.com/wp-content/themes/ril/css/reset.css">
	<link rel="stylesheet" href="http://renaissancelawcollege.com/wp-content/themes/ril/css/animate.css">
	<link rel="stylesheet" href="http://renaissancelawcollege.com/wp-content/themes/ril/css/styles.css">
    
    
        <div class="wrapper pageintro" style="background-image:url(http://renaissancelawcollege.com/wp-content/uploads/2015/04/about_banner.jpg);">
   <div id="pageintro" class="clear">
   
    <div class="pagetitle" >
      <h1>Login</h1>
    </div>
   <nav class="breadcrumb clear">
      <ul>
        <li>&nbsp;</li>
        <li>&nbsp;</li>
      </ul>
    </nav>
  </div>
</div>
<div class="wrapper row3">
  <div role="main" class="container">
    <div class="three_quarter first">
      <section class="clear">
       <h1 style="color:#002d56;">
	<span>Course Login</span>
</h1>

<p>&nbsp;
	
</p>

<div>
	<article>
		<div style="text-align: center;">
			<table width="989" border="0" cellspacing="0" cellpadding="0"  >
<tr>
<td><td><form  name="myform" action="<?php $_SERVER['PHP_SELF']?>" method="post" id="courseform">
              <table width="100%" height="170" border="0" align="center" cellpadding="0" cellspacing="0" style="width:200px; margin:0 auto;">
                <tr>
                  <td align="center" valign="top"><table width="240" height="265" 
                              cellpadding="0" cellspacing="0">
                    <tbody>
                      <tr>
                        <td  height="33" colspan="3" align="right" valign="top" class="contacttxt">
            
                          <input onblur="clearfiled('user_login')" id="user_login"  class="form" value="" name="user_login" type="text" placeholder="Enter User Name"  /> 
                        </td>
                      </tr>
                      <tr>
                        <td  height="33"  colspan="3" align="right" valign="top" class="contacttxt"><input type="password" id="user_pass" size="10" onblur="clearfiled('user_pass')" name="user_pass" class="form"  value="<?php echo $user_pass;?>" onkeyup="allow_character(this);" placeholder="Enter Password"/>
                        

                        </td>
                      </tr>
                      <tr>
                        <td  height="30"  colspan="3" align="right" valign="top" ><select class="form2" name="course" id="course" >
                        <option value="">Please Select</option>
  <option value="LLB">LL.B</option>
  <option value="BALLB">BA. LL.B</option>
    <option value="BcomLLB">B.com LL.B</option>
     <option value="BBALLB">BBA. LL.B</option>
</select></td>
                      </tr>
                         <tr>
                        <td  height="30" colspan="3" align="right" valign="center" ><select class="form2" name="sem" id="sem">
                         <option value="">Please Select</option>
  <option value="I">Sem 1</option>
  <option value="II">Sem 2</option>
  <option value="III">Sem 3</option>
  <option value="IV">Sem 4</option>
    <option value="V">Sem 5</option>
      <option value="VI">Sem 6</option>
  <option value="VII">Sem 7</option>
  <option value="VIII">Sem 8</option>
  <option value="IX">Sem 9</option>
  <option value="X">Sem 10</option>
</select></td>
                      </tr>

                
                      <tr>
                        <td 
                                height="32" colspan="3" align="right" valign="bottom" class="contacttxt"><table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="14%" height="34" align="center">&nbsp;</td>
                <td width="56%" height="34" rowspan="2" align="center">
                 <input class="btn btn-primary modal-login-btn"   id="signin" onClick="return validate_lform(this);" type="submit" name="signin" value="Sign In" style=" background-color:#a90125; color:#fff;"/>
                </td>
                            <td width="30%" align="center">&nbsp;</td>
                            </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td width="57" 
                                height="29" align="right" valign="top" class="contacttxt">&nbsp;</td>
                        <td width="14" align="left" valign="center">&nbsp;</td>
                        <td width="169" align="left" valign="center">&nbsp;</td>
                      </tr>
                    </tbody>
                  </table></td>
                </tr>
              </table>
            </form></td></td>
</tr>

  
  
</table>
		</div>
	</article>
</div>

<p>&nbsp;
	
</p>
      </section>
    </div>
    <div id="sidebar_1" class="sidebar one_quarter">
      <aside class="calltoaction">
        <h6 class="uppercase font-medium"><span>Login</span></h6>
        <nav>
        
         </nav>
        
       
      </aside>
    </div>
    <div class="clear"></div>
  </div>
</div>
<div style="display: none;" id="template-options" class="optleft"> 
  <div id="layout-styles-options">
    <p>Enquery now</p>
    
    <iframe src="/wp-content/themes/ril/form2.php" width="180" height="190" scrolling="No" frameborder="0" class="img-border" id="NewsWindow" ></iframe>
    <hr style="margin-top:12px; margin-bottom:12px;">
    </hr>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" >
      <tbody >
        <tr>
          <td align="center" valign="middle" style="background-color:rgb(37, 41, 45); border:none"><img src="images/whatsapp.png"> <strong style="color:#fff;">+91 9876543210</strong></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<div id="to-right-toggle" class="optleft" title="Show Options"  style="display: block;" ></div>
<div  id="to-left-toggle" class="optleft" title="Close Options"  style="display: none;"></div>



<?php include('wp-content/themes/ril/footer.php'); ?>