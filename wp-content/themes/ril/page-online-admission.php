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
Template Name: Online Admission Template
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
	background-color: #fff;
	border-radius: 4px;
	text-decoration: none;
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
	BORDER-TOP: #bfbfbf 1px solid;
	BACKGROUND: #686868;
	border-radius: 4px;
	BORDER-LEFT: #bfbfbf 1px solid;
	BORDER-BOTTOM: #bfbfbf 1px solid;
	color: #fff;
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
	.admissionform h1 {
    color: #F70407;
    font-family: "Roboto", Sans-serif;
    font-size: 30px;
    font-weight: 700;
    text-transform: uppercase;
    line-height: 35px;
    text-align: center;
    width: 100%;
}
</style>

<!--   <div id="pageintro" class="clear">
    <div class="pagetitle">
      <h1>Online Admission</h1>
    </div>
   <nav class="breadcrumb clear">
      <ul>
        <li>&nbsp;</li>
        <li>&nbsp;</li>
      </ul>
    </nav>
  </div> -->
</div>
<div class="wrapper row3 admissionform">
  <div role="main" class="container"><h1>
	   Register Now
	   </h1>
    <div class="three_quarter first">
      <section class="clear">
        
      </section>
    </div>
    <div id="sidebar_1" class="sidebar one_quarter">
<form method="post" name="myform" id="productform" action="https://graffersid.com/renaissa/paytm-page/">
   <table width="100%" height="450" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td colspan="2"><h4>Student Details</h4></td>
    </tr>
    <tr>
      <td  height="33" align="right" valign="top" class="contacttxt" style="padding-bottom:15px;"><label>
          <input  type="text"  name="first_name" id="first_name" class="form"  placeholder="First Name *" />
        </label></td>
      <td  height="33" align="right" valign="top" class="contacttxt"  style="padding-bottom:15px;"><label>
          <input  type="text"  name="last_name" id="last_name"  class="form"  placeholder="Last Name *" />
        </label></td>
    
      <td  height="33"  colspan="2" align="right" valign="top" class="contacttxt"  style="padding-bottom:15px;"><select name="course" id="course" class="form">
          <option value="" >Please Select Course  *</option>
          <option value="BA. LL. B (Hons.)" >B.A.LL.B (Hons.)</option>
          <option value="BBA. LL. B (Hons.)"  >B.B.A.LL.B (Hons.)</option>
          <option value="B.Com. LL. B (Hons.)" >B.Com.LL.B (Hons.)</option>
          <option value="LL. B (Hons.)" >LL.B (Hons.)</option>
       
        </select></td>
    </tr>   
    <tr>
      <td  height="33" align="right" valign="top" class="contacttxt"  style="padding-bottom:15px;"><input id="dob" name="dob" size="10" type="text" class="form"  placeholder="DOB  *" autocomplete="off"/></td>
   
      <td  height="33" align="right" valign="top" class="contacttxt"  style="padding-bottom:15px;"><input id="email_id" name="email_id" size="10"  type="text" class="form"  placeholder="Email  *"/></td>
    
      <td  height="33" align="right" valign="top" class="contacttxt"  style="padding-bottom:15px;"><input id="mobile_no" name="mobile_no" size="10"  type="text" class="form" maxlength="10"  placeholder="Mobile No.  *"/></td>
    </tr>
    <tr>
    <tr>
      <td colspan="2"><h4>Parent/Guardian Details</h4></td>
    </tr>
    <tr>
      <td  height="33" align="right" valign="top" class="contacttxt"  style="padding-bottom:15px;"><label>
          <input  type="text"  name="father_name" id="father_name"  class="form" placeholder="Father Name  *" />
        </label></td>
      <td  height="33" align="right" valign="top" class="contacttxt"  style="padding-bottom:15px;"><label>
          <input  type="text" id="mother_name"  name="mother_name"  class="form"  placeholder="Mother Name  *" />
        </label></td>
    
      <td  height="33" align="right" valign="top" class="contacttxt"  style="padding-bottom:15px;"><label>
          <input  type="text" id="guardian_name"  name="guardian_name"  class="form" placeholder="Guardian Name" />
        </label></td>
        </tr>
    <tr>
      <td  height="33"  align="right" valign="top" class="contacttxt"  style="padding-bottom:15px;"><input id="father_mobile_no" name="father_mobile_no" type="text" class="form" placeholder="Mobile No."  maxlength="10"/></td>
   
      <td  height="33"  align="right" valign="top" class="contacttxt"  style="padding-bottom:15px;"><input id="alternate_no" name="alternate_no" type="text" class="form"  placeholder="Alternate Mobile No"  maxlength="10"/></td>
	  
      <td  height="33"  align="right" valign="top" class="contacttxt"  style="padding-bottom:15px;"><input class="form" id="father_email_id" name="father_email_id" type="text" placeholder="Email"/></td>
    </tr>
    <tr>
    <tr>
      <td colspan="2"><h4>Contact Address</h4></td>
    </tr>
    <tr>
     <td  height="33"  align="right" valign="top" class="contacttxt"  style="padding-bottom:15px;"><input class="form" id="address1" name="address1" type="text" placeholder="Street Address Line 1"/></td>
     
     <td  height="33"  align="right" valign="top" class="contacttxt"  style="padding-bottom:15px;"><input class="form" id="address2" name="address2" type="text" placeholder="Street Address Line 2"/></td>
   
    <td  height="33"  align="right" valign="top" class="contacttxt"  style="padding-bottom:15px;"><input class="form" id="city" name="city" type="text" placeholder="City"/></td>
     </tr>
    <tr>
    <td  height="33"  align="right" valign="top" class="contacttxt"  style="padding-bottom:15px;"><input class="form" id="region"  name="region" type="text" placeholder="Region"/></td>
    
    <td  height="33"  align="right" valign="top" class="contacttxt"  style="padding-bottom:15px;"><input class="form" id="pincode"  name="pincode" type="text" placeholder="Postal / Zip Code"/></td>
	
    <td  height="33"  align="right" valign="top" class="contacttxt"  style="padding-bottom:15px;"><input class="form" id="country"  name="country" type="text"  placeholder="Country"/></td>
    </tr>
    
    <tr>
      <td height="44" align="left" valign="middle">
		<span style="font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold;"> Enter Code </span>
		&nbsp;&nbsp;&nbsp;
		<span style="background-color: #ccc;padding: 5px;color: #fff;"><?php $get_rand_value = rand(10000,1000000); echo $get_rand_value; ?></span>
		&nbsp;&nbsp;&nbsp;
		<input type="text" style="display:inline;float: none;" placeholder="Code" class="form2" id="code" name="code"  />
        		
        <input type="hidden" class="form" name="get_rand" value="<?php echo md5($get_rand_value);?>" />
		<input type="hidden" name="session_id_post" id="session_id_post" value="<?= $session_id; ?>" />
		</td>
		
    </tr>
    <tr>
        <td height="29" colspan="3" style="text-align:center" valign="top" class="contacttxt">
	     <span id="msg" style="color:red"></span>
		 <input  type="submit" value="Submit" name="register" id="submit" class="Button"/>
		
</td>        
    </tr>
   </tbody>
</table>
</form>
    </div>
    <div class="clear"></div>
  </div>
</div>

<div id="to-right-toggle" class="optleft" title="Show Options"  style="display: block;" ><a href="<?php echo get_home_url(); ?>/contact/enquiry/"></a></div>
<div  id="to-left-toggle" class="optleft" title="Close Options"  style="display: none;"></div>
<?php get_footer(); ?>
<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<script>
$(function() {  
$('#dob').datetimepicker({
//defaultDate: data.data.default_date,
format: 'DD-MMM-YYYY' ,
//inline: true,
focusOnShow:false,
useCurrent: false,
});

$.validator.addMethod("india10", function(value, element) {
	var	x = '91';		
	var valid = true;
	//console.log(value);
	//console.log(value.length);
	if(value.length == 0){
		valid = true;
	}
	else if( x == '91' && value.length != 10){
		valid = false;
	}
   return valid;
}, "<font style='font-weight: normal; font-size: 15px;' color='#E01C1F' size='-1' face='calibri'>Must be 10 digit Mobile No.</font>");

	$("#myform").validate({
		submitHandler: function(form) {		
			
			$.ajax({
			url: "<?=get_site_url()?>/paytm-page/",
			type: "POST",
			data: $("#myform").serialize(),
			beforeSend: function() {
				$("#submit").hide();
				$("#msg").html("Please wait..");
			},
			success: function(response){
					$("#submit").show();
					try {					
						data = (response);
					} catch(e) {
						alert(e); // error in the above string (in this case, yes)!
						return;
					}
					data =response.split('||');					
					if(data[0] && data[0] == "success"){
						window.location.href=data[1];
						$("#submit").hide();
					}else{
						$("#msg").html(data[1]);
					}
			},
			
		});	
			
		
		},
		rules: {		
		first_name    	: { required: true}, 
		last_name    	: { required: true}, 
		course   		: { required: true},
		dob 	   		: { required: true}, 
		email_id 		: { required: true, email:true}, 
		mobile_no       : { required: true, india10:true, number:true,minlength :10 , maxlength :10}, 
		father_name	    : { required: true}, 
		mother_name 	: { required: true},
		father_mobile_no: { required: false, india10:true,number:true,minlength :10 , maxlength :10},
		alternate_no 	: { required: false, india10:true,number:true,minlength :10 , maxlength :10},
		father_email_id : { required: false, email:true},
		address1	   	: { required: false}, 
		address2	   	: { required: false}, 
		city 	   		: { required: false}, 
		region 	   		: { required: false}, 
		pincode	   		: { required: false,  number: true , minlength :6 , maxlength :6 },
		country 	   	: { required: false}, 
		code 	   		: { required: true}
		
		}
	});

}); 
</script>
<link rel="stylesheet" type="text/css" media="screen" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker-standalone.css" />
<link rel="stylesheet" type="text/css" media="screen" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script> 
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script> 
<script type="text/javascript">
$.fn.datetimepicker.defaults.icons = {
time: 'fa fa-clock-o',
date: 'fa fa-calendar',
up: 'fa fa-chevron-up',
down: 'fa fa-chevron-down',
previous: 'fa fa-chevron-left',
next: 'fa fa-chevron-right',
today: 'fa fa-dot-circle-o',
clear: 'fa fa-trash',
close: 'fa fa-times'
};
</script> 
<script>
  $(document).ready(function() {
    $("#productform").validate({
        rules: {
        first_name    	: { required: true}, 
		last_name    	: { required: true}, 
		course   		: { required: true},
		dob 	   		: { required: true}, 
		email_id 		: { required: true, email:true}, 
		mobile_no       : { required: true, india10:true, number:true,minlength :10 , maxlength :10}, 
		father_name	    : { required: true}, 
		mother_name 	: { required: true},
		father_mobile_no: { required: false, india10:true,number:true,minlength :10 , maxlength :10},
		alternate_no 	: { required: false, india10:true,number:true,minlength :10 , maxlength :10},
		father_email_id : { required: false, email:true},
		address1	   	: { required: false}, 
		address2	   	: { required: false}, 
		city 	   		: { required: false}, 
		region 	   		: { required: false}, 
		pincode	   		: { required: false,  number: true , minlength :6 , maxlength :6 },
		country 	   	: { required: false}, 
		code 	   		: { required: true}
        },
        messages: {
            first_name: "Please enter your first name",
			last_name: "Please enter your last name",
            father_name: "Please enter your father name",
            mother_name: "Please enter your mother name",
            address1: "Please enter your permanent address",
            email_id: "Please enter a valid email address",
            mobile_no: {
                required: "Please enter your phone number",
                number: "Please enter only numeric value"
            },
            country: "Please enter your country",
            state_p: "Please enter your state",
            city: "Please enter your city",
            referred_by_name: "Please enter referred name",
            first_name: {
                required: "Please enter a first name",
                minlength: "Your username must consist of at least 3 characters"
            },
        }
    });
});
</script>
