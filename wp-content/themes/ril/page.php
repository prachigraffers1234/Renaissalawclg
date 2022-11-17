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

get_header(); ?>

 <?php
        if ( has_post_thumbnail() ) {
            $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
           ?>
     
<div class="wrapper pageintro" style="background-image:url(<?php echo $large_image_url[0];?>);">
 <?php } ?>
  <div id="pageintro" class="clear">
    <div class="pagetitle">
      <h1><?php echo get_the_title($post->post_parent);?>g</h1>
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
       <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
		remove_filter ('the_content', 'wpautop');
		echo the_content();
		endwhile;
		endif; 
		?>
      </section>
    </div>
    <div id="sidebar_1" class="sidebar one_quarter">
      <aside class="calltoaction">
        <h6 class="uppercase font-medium"><span><?php echo get_the_title($post->post_parent);?></span></h6>
        <nav>
        
 <?php
  if($post->post_parent)
  $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0&depth=0");
  else
  $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=1&depth=0");
  if ($children) { ?>
  <ul>
  <?php echo $children; ?>
  </ul>
  <?php } ?>
        </nav>
        
        <!--  <div class="tab-wrapper clear ui-tabs ui-widget ui-widget-content ui-corner-all">
<ul class="tab-nav clear ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
<li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="0" aria-controls="tab-1" aria-labelledby="ui-id-1" aria-selected="true"><a href="#tab-1" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-1">Title 1</a></li>
<li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tab-2" aria-labelledby="ui-id-2" aria-selected="false"><a href="#tab-2" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-2">Title 2</a></li>
</ul>
<div class="tab-container">
<div id="tab-1" class="tab-content clear ui-tabs-panel ui-widget-content ui-corner-bottom" aria-labelledby="ui-id-1" role="tabpanel" aria-expanded="true" aria-hidden="false">
<ul class="list arrow">
<li><a href="#">Donec vestibulum est eget nulla bibendum rutrum.</a></li>
<li><a href="#">Vestibulum at nulla eu est molestie pellentesque.</a></li>
<li><a href="#">Ut in est orci, scelerisque consequat metus.</a></li>
<li><a href="#">Proin tempor luctus arcu, in varius nibh imperdiet.</a></li>
<li><a href="#">Nullam dictum erat vel tortor tristique et ferment.</a></li>
<li><a href="#">Donec condimentum dui eu dolor consectetur nec.</a></li>
</ul>
</div>
<div id="tab-2" class="tab-content clear ui-tabs-panel ui-widget-content ui-corner-bottom" aria-labelledby="ui-id-2" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;">
<ul class="list tick">
<li><a href="#">Donec vestibulum est eget nulla bibendum rutrum.</a></li>
<li><a href="#">Vestibulum at nulla eu est molestie pellentesque.</a></li>
<li><a href="#">Ut in est orci, scelerisque consequat metus.</a></li>
<li><a href="#">Proin tempor luctus arcu, in varius nibh imperdiet.</a></li>
<li><a href="#">Nullam dictum erat vel tortor tristique et ferment.</a></li>
<li><a href="#">Donec condimentum dui eu dolor consectetur nec.</a></li>
</ul>
</div>
</div>
</div>--> 
      </aside>
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
          <td align="center" valign="middle" style="background-color:rgb(37, 41, 45); border:none"><img src="/wp-content/themes/ril/images/whatsapp.png"> <strong style="color:#fff;">+91 9584904440</strong></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<div id="to-right-toggle" class="optleft" title="Show Options"  style="display: block;" ><a href="<?php echo get_home_url(); ?>/contact/enquiry/"></a></div>
<div  id="to-left-toggle" class="optleft" title="Close Options"  style="display: none;"></div>
<?php get_footer(); ?>
