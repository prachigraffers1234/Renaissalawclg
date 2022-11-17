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
<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
<![endif]-->
<link href="<?php echo get_template_directory_uri(); ?>/css/main.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo get_template_directory_uri(); ?>/css/custom.css" rel="stylesheet" type="text/css" media="all">
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
  background:##E3E4E8;
}
a.popup-link.add_form {
       background-color: #fff;
    padding: 5px 10px;
    font-size: 15px;
    font-weight: 600;
    border-radius: 10px;
    border: 2px solid #f70407;
    color: #f70407;
}
.flash-me {
  color:#fff;
  font-size:25px;
  -webkit-animation: flash linear 1s infinite;
  animation: flash linear 1s infinite;
}

	ul.social.rnd50.socialicon {
    margin-right: 12px;
}

@-webkit-keyframes flash {
  0% { opacity: 0; } 
  80% { opacity: 1; color:#fff; } 
  83% { opacity: 0; color:#fff; } 
  86% { opacity: 1; color:#fff;}  
  89% { opacity: 0} 
  92% { opacity: 1; color:#fff;} 
  95% { opacity: 0; color:#fff;}
  100% { opacity: 1; color:#fff;}
}
@keyframes flash {
  0% { opacity: 0; } 
  80% { opacity: 1; color:#fff; } 
  83% { opacity: 0; color:#fff; } 
  86% { opacity: 1; color:#fff;}  
  89% { opacity: 0} 
  92% { opacity: 1; color:#fff;} 
  95% { opacity: 0; color:#fff;}
  100% { opacity: 1; color:#fff;}
}
</style>
<!--[if lte IE 6]><style type="text/css">#osfooter{position:absolute; display:none;}</style><![endif]-->
<!-- Syntax hl -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/li-scroller.css" type="text/css" media="screen" />
<?php wp_head(); ?>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-76793539-3', 'auto');
ga('send', 'pageview');
</script>
	
</head>

<body id="top">
<div class="wrapper row0">
  <div id="topbar"> </div>
</div>
<div class="wrapper row1">
  <div class="top_header_color">
    <header role="banner" id="header" class="clear">
      <div id="logo"> <a href="https://graffersid.com/renaissa/" class="white"><img src="https://graffersid.com/renaissa/wp-content/uploads/2022/02/logo.gif" alt="" style="margin-top:5px;"/></a>
        <div class="right_right">
          <div class="form_form" style="margin-bottom:10px;">
            <ul class="social rnd50 socialicon">
              <li><a class="socico-facebook" href="https://www.facebook.com/RenaissanceLawCollege" target="_blank"><span class="icon-facebook"><em>Facebook</em></span></a></li>
				<li><a class="socico-twitter" href="https://www.instagram.com/renaissancelawcollege/" target="_blank"><span class="icon-instagram"><em>Instagram</em></span></a></li></ul>
				<ul class="social rnd50"><span class="blockflash">
<span class="flash-me"><h6>
					Admission Open
					</h6><a class="popup-link add_form" href="https://graffersid.com/renaissa/register-now/">Register Now</a></span>
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
