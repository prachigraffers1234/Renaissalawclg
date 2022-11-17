<?php
/**
* The template for displaying all pages
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages and that other
* 'pages' on your WordPress site will use a different template.
*
* @package WordPress
* @subpackage Twenty_Thirteen
* @since Twenty Thirteen 1.0
*/
/*
Template Name: Online Admission template
*/
get_header(); ?>
 <?php
        if ( has_post_thumbnail() ) {
            $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
           ?>
     
<div class="wrapper pageintro" style="background-image:url(<?php echo $large_image_url[0];?>);">
 <?php } ?>
  <div id="pageintro" class="clear">
    <div class="pagetitle">
      <h1><?php echo get_the_title($post->post_parent);?></h1>
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
  <div role="main" class="container" style="width:80%">
    <div class="one first">
      <section class="clear">
       <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
		remove_filter ('the_content', 'wpautop');
		echo the_content();
		endwhile;
		endif; 
		?>
      </section>
    </div>
    
    <div class="clear"></div>
  </div>
</div>
<div style="display: none;" id="template-options" class="optleft"> 
  <!--  <h1 class="layout-styles-title">Demo Options</h1>-->
  <div id="layout-styles-options">
    <p>Enquiry now</p>
    <!--           <form class="well span8">
<div class="row">
<div class="span3">
<label style="float:left; margin:5px">Name :</label><br>
<input type="text" class="span3" placeholder="Your name">
<label style="float:left; margin:5px">Phone :</label>
<input type="text" class="span3" placeholder="Phone number">
<label style="float:left; margin:5px">Email :</label>
<input type="text" class="span3" placeholder="Email address">

</div>


<button type="submit" class="btn btn-primary pull-right" style="margin:8px">Send</button>
</div>
</form>-->
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
<div id="to-right-toggle" class="optleft" title="Show Options"  style="display: block;" ><a href="<?php echo get_home_url(); ?>/contact/enquiry/"></a></div>
<div  id="to-left-toggle" class="optleft" title="Close Options"  style="display: none;"></div>
<?php get_footer(); ?>
