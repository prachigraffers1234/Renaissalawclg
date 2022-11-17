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
Template Name: Thank you Template
*/
get_header(); ?>
 <?php
        if ( has_post_thumbnail() ) {
            $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
           ?>
     
<div class="wrapper pageintro" style="background-image:url(<?php echo $large_image_url[0];?>);">
 <?php } ?>

<style type="text/css" >
input {
	color: #333133;
	border: thin 1px #333133;
}
.form {
	PADDING-BOTTOM: 3px;
	background-color: #fff;
	border-radius: 4px;
	COLOR: #333133;
	PADDING-TOP: 3px;
	text-decoration: none;
	font-family: Calibri;
	font-size: 14px;
	padding-left: 5px;
	font-weight: normal;
	border: 1px solid #e5e4e3;
	height: 30px;
	margin: 0px;
	width: 320px;
	float: left;
}
.form:hover {
	PADDING-BOTTOM: 3px;
	background-color: #fff;
	border-radius: 4px;
	COLOR: #333133;
	PADDING-TOP: 3px;
	text-decoration: none;
	font-family: Calibri;
	font-size: 14px;
	padding-left: 5px;
	font-weight: normal;
	border: 1px solid #d4d3d2;
	height: 30px;
	margin: 0px;
	width: 320px;
	float: left;
}
.form2 {
	PADDING-BOTTOM: 3px;
	background-color: #fff;
	border-radius: 4px;
	COLOR: #333133;
	PADDING-TOP: 3px;
	text-decoration: none;
	font-family: Calibri;
	font-size: 14px;
	padding-left: 5px;
	font-weight: normal;
	border: 1px solid #e5e4e3;
	height: 20px;
	margin: 0px;
	width: 80px;
	float: left;
}
.form3 {
	PADDING-BOTTOM: 3px;
	background-color: #fff;
	border-radius: 4px;
	COLOR: #333133;
	PADDING-TOP: 3px;
	text-decoration: none;
	font-family: Calibri;
	font-size: 14px;
	padding-left: 5px;
	font-weight: normal;
	border: 1px solid #e5e4e3;
	height: 50px;
	margin: 0px;
	width: 320px;
	float: left;
}
.Button {
	BORDER-RIGHT: #bfbfbf 1px solid;
	PADDING-RIGHT: 2px;
	BORDER-TOP: #bfbfbf 1px solid;
	PADDING-LEFT: 2px;
	FONT-SIZE: 11px;
	BACKGROUND: #a90125;
	border-radius: 4px;
	PADDING-BOTTOM: 1px;
	BORDER-LEFT: #bfbfbf 1px solid;
	PADDING-TOP: 2px;
	BORDER-BOTTOM: #bfbfbf 1px solid;
	width: 90px;
	height: 30px;
	font-family: Calibri;
	font-size: 14px;
	color: #fff;
	font-weight: bold;
}
.Button:hover {
	BORDER-RIGHT: #bfbfbf 1px solid;
	PADDING-RIGHT: 2px;
	BORDER-TOP: #bfbfbf 1px solid;
	PADDING-LEFT: 2px;
	FONT-SIZE: 11px;
	BACKGROUND: #686868;
	border-radius: 4px;
	PADDING-BOTTOM: 1px;
	BORDER-LEFT: #bfbfbf 1px solid;
	PADDING-TOP: 2px;
	BORDER-BOTTOM: #bfbfbf 1px solid;
	width: 90px;
	height: 30px;
	font-family: Calibri;
	font-size: 14px;
	color: #fff;
	font-weight: bold;
}
}
.contacttxt {
	font-family: Calibri;
	font-size: 12px;
	color: #000;
}
.style1 {
	font-family: Calibri;
	font-size: 12px;
	color: #333133;
	font-weight: bold;
}
.style2 {
	color: #333133;
	font-weight: bold;
}
.style3 {
	color: #333133
}
.error{
	color: red;
    font-size: 12px;
}
</style> 
  <div id="pageintro" class="clear">
    <div class="pagetitle">
      <h1>Thank You</h1>
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
        
      </section>
    </div>
    <div id="sidebar_1" class="sidebar one_quarter" style="width: 100%;">
<?
$admission_id = $_GET['admissionid'];
$admission_id = trim($admission_id);
$admission_id = base64_decode($admission_id);
if($admission_id=='')
{
	?>
	<script>
	window.location.href="<?php echo get_site_url() ?>";
	</script>
	<?
	exit;
}
?>
<form method="post" name="myform" id="myform" action="#">
   <table width="100%" height="450" cellpadding="0" cellspacing="0">
	  <tbody>		
<?
$query="select * from admission where admission_id ='$admission_id'  ";
    
$data = $wpdb->get_results($query);
	
	foreach($data as $row)
	{
?>		
<?
if ($row->status == "TXN_SUCCESS") {
	$msg = "Thank You, Your Transaction Successful !";
}else{
	$msg = "Sorry, Your Transaction Failed !";
}
?>		
		<tr>
		    <td height="33" colspan="2">
				<h3><?=$msg?></h3>
			</td>
		</tr>		
		<tr>
		    <td height="33" colspan="2">
				<p>For more information please check your email id <?=$row->email_id?></p>
			</td>
		</tr>
		<tr>
		  <td  height="33" align="left" valign="top" class="contacttxt" style="width: 18%;">
		  <strong>Student Name</strong></td>
		  <td  height="33" align="left" valign="top" class="contacttxt" style=""><?php echo $row->first_name?> <?php echo $row->last_name?></td>
		</tr>
		<tr>
		  <td  height="33" align="left" valign="top" class="contacttxt" style="">
		  <strong>Course</strong></td>
		  <td  height="33" align="left" valign="top" class="contacttxt" style=""><?php echo $row->course?></td>
		</tr>
		<tr>
		  <td  height="33" align="left" valign="top" class="contacttxt" style="">
		  <strong>Admission Date</strong></td>
		  <td  height="33" align="left" valign="top" class="contacttxt" style=""><?php echo date('d-M-Y',strtotime($row->createdate))?></td>
		</tr>
		<?
		if ($row->status == "TXN_SUCCESS") {
			$status_ = "Success";
		}else{
			$status_ = "Failed";
		}
		?>
		<tr>
		  <td  height="33" align="left" valign="top" class="contacttxt" style="">
		  <strong>Transaction Status</strong></td>
		  <td  height="33" align="left" valign="top" class="contacttxt" style=""><?php echo $status_?></td>
		</tr>
		<tr>
		  <td  height="33" align="left" valign="top" class="contacttxt" style="">
		  <strong>Transaction Ref. No.</strong></td>
		  <td  height="33" align="left" valign="top" class="contacttxt" style=""><?php echo $row->txnid?></td>
		</tr>
		<tr>
		  <td  height="33" align="left" valign="top" class="contacttxt" style="">
		  <strong>Transaction Amount</strong></td>
		  <td  height="33" align="left" valign="top" class="contacttxt" style=""><?php echo $row->txnamount?></td>
		</tr>
		<?
		 if($row->banktxnid != '')
		 {
		?>
		<tr>
		  <td  height="33" align="left" valign="top" class="contacttxt" style="">
		  <strong>Bank Transaction No. </strong></td>
		  <td  height="33" align="left" valign="top" class="contacttxt" style=""><?php echo $row->banktxnid?></td>
		</tr>
		<? }?>
		<?
		 if($row->txndate != '0000-00-00 00:00:00')
		 {
		?>
		<tr>
		  <td  height="33" align="left" valign="top" class="contacttxt" style="">
		  <strong>Transaction Date</strong></td>
		  <td  height="33" align="left" valign="top" class="contacttxt" style=""><?php echo date('d-M-Y, H:i:s',strtotime($row->txndate))?></td>
		</tr>
		<? }?>
		<?
		if ($row->status == "TXN_SUCCESS") {
		?>
		<tr>
		  <td  height="33" align="left" valign="top" class="contacttxt" style=""></td>
		  <td  height="33" align="left" valign="top" class="contacttxt" style=""><a target="_blank" href="<?php echo get_site_url()?>/pdf/Admission_Form_2020.pdf">Download Admission Form</a></td>
		</tr>
		<?
		}
		?>
<?
	}
?>
		<tr>
			<td height="33" align="left" valign="top" class="contacttxt" style=""></td>
			<td height="33" valign="top" class="contacttxt"> <a href="<?php echo get_site_url()?>/online-admission-form">Try Another Admission</a></td>
		</tr>
	   </tbody>
	</table>
</form>	
    </div>
    <div class="clear"></div>
  </div>
</div>
<div id="to-right-toggle" class="optleft" title="Show Options"  style="display: block;" ></div>
<div  id="to-left-toggle" class="optleft" title="Close Options"  style="display: none;"></div>
<?php get_footer(); ?>