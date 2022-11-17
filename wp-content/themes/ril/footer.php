<?php

/**

* The template for displaying the footer

*

* Contains footer content and the closing of the #main and #page div elements.

*

* @package WordPress

* @subpackage Twenty_Thirteen

* @since Twenty Thirteen 1.0

*/

?>

<!-- footer start-->

<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer Area") ):?><?php endif; ?>

<!-- footer end --> 

<a href="#top" id="scrolltotop" title="Back To Top"><span class="icon-arrow-up icon-2x"></span></a>

<div id="openpanel"><!--<a id="slideit" class="icon-plus" href="#slidepanel"></a>--><a id="closeit" class="icon-minus" style="display:none;" href="#slidepanel"></a></div>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-latest.min.js"></script> 

<script src="<?php echo get_template_directory_uri(); ?>/js/NFLightBox.js" type="text/javascript"></script> 

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/previousnext.js"></script> 


<script language="javascript" type="text/javascript">

$(function() {



$("#previousnext_slideshow3").previousnext_slideshow({

slideshow_time_interval: '4000',

slideshow_window_background_color: "none",

slideshow_window_padding: '0',

slideshow_window_width: '250',

slideshow_window_height: '200',

slideshow_window_border_size: '',

slideshow_window_border_color: '',

slideshow_button_style: '3',//options: 1,2,3

directory: 'images'

});

});

</script> 

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.li-scroller.1.0.js"></script> 

<script type="text/javascript">

$(function(){

$("ul#ticker01").liScroll();

$("ul#ticker02").liScroll({travelocity: 0.15});  

});

</script> 

<script>

$(document).ready(function(){    



$("#to-left-toggle").click(function () {



$("#template-options").hide(200);

$("#to-left-toggle").hide();

});



$("#to-right-toggle").click(function () {



$("#template-options").show(300, function () {

$("#to-left-toggle").show();

});

});

});

</script> 

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.min.js"></script> 

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider-min.js"></script> 

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider-setup.js"></script> 

<!--<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fitvids.js"></script> 

<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
-->
<div id="osfooter"> 

  

</div>

<script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');



  ga('create', 'UA-63432849-1', 'auto');

  ga('send', 'pageview');



</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
var toggleSoundButton = document.querySelector('.fa-volume-mute');
var heroBackgroundVideo = document.querySelector('.herosection video');
toggleSoundButton.addEventListener('click', function (event) {

if (heroBackgroundVideo.muted !== false){
heroBackgroundVideo.muted=false;
toggleSoundButton.classList.add('fa-volume-up');
} else {
heroBackgroundVideo.muted=true;
toggleSoundButton.classList.remove('fa-volume-up');
} }); });
</script>
   

<style>
.toggle_sound{
        cursor: pointer;
}
</style>
<script>

document.addEventListener('DOMContentLoaded', function() {

var toggleSoundButton = document.querySelector('.toggle_sound');
var heroBackgroundVideo = document.querySelector('.herosection video');
toggleSoundButton.addEventListener('click', function (event) {

if (heroBackgroundVideo.muted !== false){
heroBackgroundVideo.muted=false;
} else {
heroBackgroundVideo.muted=true;
} }); });

</script>
<!-- GetButton.io widget -->




<!-- /GetButton.io widget -->
<?php wp_footer(); ?>
</body></html>