	  
      
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
Template Name: Home Template
*/
get_header(); ?>

<div class="wrapper full_width row2">
  <div class="flex-container flex-rtl">
    <div class="flexslider flex-homepage">
      <ul class="flex-slides">
         <?php 
	  $pagegalleryimage = simple_fields_values("pagegalleryimage");
	  if(is_array($pagegalleryimage) && !empty($pagegalleryimage)) : 
		foreach($pagegalleryimage as $page_gallery):
	  ?>
		<li>
        	<img class="img-responsive" src="<?php echo $page_gallery['image_src']['full'][0] ?>" alt="">
        </li>
	  <?php endforeach;
	  endif; ?>
      </ul>
    </div>
  </div>
</div>
<div class="wrapper row3 if_other_color2">
  <div role="main" class="container">
    <div id="homepage" class="clear">
      <section>
      <div class="widgetizedArea" ><!-- Widget by WYSIWYG Widgets v2.3.6 - https://wordpress.org/plugins/wysiwyg-widgets/ --><ul class="nospace spacing clear">
<li class="one_third " style="background-color:#fff; padding-top:10px; padding-bottom:10px; min-height:160px;">
<div style="text-align:center;"><a href="http://renaissancelawcollege.com/Admission_Form_2020.pdf"  target="_blank"><img src="http://renaissancelawcollege.com/wp-content/uploads/2017/04/admission_open1.gif"></a>  <h4 style="margin-bottom:1px"><a href="http://renaissancelawcollege.com/Admission_Form_2020.pdf" target="_blank">Admissions Open 2021 - 2022</a></h4></div>
</li>
<li class="one_third " style="background-color:#fff; padding-top:30px; padding-bottom:30px; min-height:160px;">
<div style="text-align:center;"><a href="https://www.facebook.com/RenaissanceLawCollege" target="_blank"><img src="/wp-content/themes/ril/images/fb.jpg"></a></div>
<div style="text-align:center; margin-top:37px;"><a href="http://renaissancelawcollege.com/achievements/" ><img src="http://renaissancelawcollege.com/wp-content/uploads/2017/04/achieve-1.png"></a>
</li>
<li class="one_third " style="background-color:#fff; padding-top:10px; padding-bottom:10px; min-height:160px;">
<div style="text-align:center;"><a href="http://renaissancelawcollege.com/course/affiliation/"><img src="http://renaissancelawcollege.com/wp-content/uploads/2017/04/clat-logo-gif.gif"></a>  <h4 style="margin-bottom:1px"><a href="http://renaissancelawcollege.com/course/affiliation/" >(CLAT) Affiliated</a></h4></div>
</li>
</ul>
<!-- / WYSIWYG Widgets --></div>
      <p style="height:3px;"></p>
        <!--<div class="boxed nogutter">
          <div class="one_sixth">
            <div class="tick-news-header"> Latest News </div>
          </div>
          <div class="five_sixth nogutter">
            <div class="tickercontainer">
              <div class="mask">
                <ul id="ticker01" class="newsticker" style="width: 4241px; left: -277.56px;">
                <?php $the_query = new WP_Query("showposts=10&cat=3"); ?>
         <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
         <li><span> <?php $cpost=get_post($_GET['p_id']); echo date("d/m/Y", strtotime($cpost->post_date));?></span><a href="<?php echo get_permalink(); ?>"><?php echo substr(strip_tags($post->post_content), 0, 100).'[...]';?></a></li><?php endwhile;?>

                </ul>
              </div>
            </div>
          </div>
        </div>-->
        <div class="shout">
          <h1>Renaissance Law College that <br>creates the difference</h1>
        </div>
	<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar("Home Content I") ):?><?php endif; ?>
	<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar("Home Content II") ):?><?php endif; ?>
        
        
      </section>
    <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar("Home Content III") ):?><?php endif; ?>
    
  
<div class="one_third">
  <article>
    <h2><span>Events</span></h2>
                 <marquee style="height:300px; padding:15px;" scrollamount="2" scrolldelay="5" direction="up" onmouseover="this.stop()" onmouseout="this.start()">
              <?php $the_query = new WP_Query("cat=4"); ?>
              <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
              <figure class="clear"><div class="imgl boxholder">
              
              <?php
        if ( has_post_thumbnail() ) {
            $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
           ?>
      <img src="<?php echo $large_image_url[0];?>" alt="" width="91" height="91" >
      <?php }  else { ?>
       <img src="http://renaissancelawcollege.com/wp-content/uploads/2017/04/no-img-found.jpg" alt="" width="91" height="91">
        <?php }  ?>
              
              
              </div>
              <figcaption><strong><?php echo substr(strip_tags($post->post_title), 0, 30);?> </strong> - <?php echo substr(strip_tags($post->post_content), 0, 90);?> <footer class="read-more"><a href="<?php echo get_permalink(); ?>">Read More »</a></footer></figcaption></figure>
             <?php endwhile;?>
            </marquee>
    
    
    
    
    
<!--      <ul><li><figure class="clear"><div class="imgl boxholder"><img alt="Template Demo Image" src="http://renaissancelawcollege.com/wp-content/uploads/2015/04/sodh-2016.jpg"></div><figcaption><strong>Shodh-2016 </strong> - Five  days  Research  Week  Programme  titled  “Shodh-2016” <footer class="read-more"><a href="http://renaissancelawcollege.com/sodh-2016/">Read More »</a></footer></figcaption></figure><figure class="clear"><div class="imgl boxholder"><img alt="Template Demo Image" src="http://renaissancelawcollege.com/wp-content/uploads/2015/04/ciber-law.jpg"></div><figcaption><strong> Cyber Law Workshop</strong> - Cyber  law  workshop  was  conducted  by Prof. Nisheeth Dixit<footer class="read-more"><a href="http://renaissancelawcollege.com/sodh-2016/">Read More »</a></footer></figcaption></figure></li><li><figure class="clear"><div class="imgl boxholder"><img alt="Template Demo Image" src="/wp-content/themes/ril/images/90x90_3.jpg"></div><figcaption><strong>INDUSTRIAL VISITS</strong> - Regular visits to industries give the students hands-on-experience of the matters & cases.<footer class="read-more"><a href="#">Read More »</a></footer></figcaption></figure><figure class="clear"><div class="imgl boxholder"><img alt="Template Demo Image" src="/wp-content/themes/ril/images/90x90_4.jpg"></div><figcaption><strong>LAW FEST</strong> - A blend of intellectual and cultural events full of learning and delights giving opportunity to<footer class="read-more"><a href="#">Read More »</a></footer></figcaption></figure></li><li><figure class="clear"><div class="imgl boxholder"><img alt="Template Demo Image" src="/wp-content/themes/ril/images/90x90_5.jpg"></div><figcaption><strong>PLACEMENT ASSISTANCE CRITERIA</strong> - Renaissance Law College offers placement to the students subject to fulfilment<footer class="read-more"><a href="#">Read More »</a></footer></figcaption></figure><figure class="clear"><div class="imgl boxholder"><img alt="Template Demo Image" src="/wp-content/themes/ril/images/90x90_6.jpg"></div><figcaption><strong>GENERAL AWARENESS PROGRAM</strong> - In today's competitive and complex world, it is quintessential for<footer class="read-more"><a href="#">Read More »</a></footer></figcaption></figure></li></ul>-->

  </article>
</div>

    
    
    
    </div>
    <div class="clear"></div>
  </div>
</div>
<div style="display: none;" id="template-options" class="optleft"> 
  
  <div id="layout-styles-options">
    <p>Enquiry now</p>

    
    <iframe src="/wp-content/themes/ril/form2.php" width="180" height="300" scrolling="No" frameborder="0" class="img-border" id="NewsWindow" ></iframe>
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
