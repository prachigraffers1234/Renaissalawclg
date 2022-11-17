<?php
/*
 Template Name: Register-From
*/
get_header();
?>
<style>
input.submit_button {
    font-family: "Roboto", Sans-serif;
    font-size: 16px;
    font-weight: 700;
    background: #F70407 !important;
    color: #fff !important;
}
	
@media only screen and (max-width: 767px) {

form#productform {
    padding: 20px;
}
form#productform br {
    display: none;
}
	form#productform .row {
    margin-bottom: 0;
}
	form#productform .row .col-md-6 {
    margin-bottom: 22px;
}
	}
</style>
<div class="container register-form form-group">
	
<div class="row" style="box-shadow: 0px 3px 30px -8px rgba(0, 0, 0, 0.2); transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s; margin: 50px 0px 50px 0px; ">
<div class="col-md-1"></div>
<div class="col-md-10" style="padding: 40px 0px 40px 0px;">

<form id="productform" method="post" action="https://graffersid.com/renaissa/paytm-page/">
<h2 style="padding: 0px 20px 35px 20px;color: #333;
    text-align: center;
    font-size: 32px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 1px;
		   font-family: 'Roboto';"
     class="top-heading">
    Registration Form  
</h2>
<h5 class="title">Fullname of Student (required)</h5>
<div class="row">
    <div class=" col-md-6">
      <input class="half_width padding" placeholder="Fullname" type="text" name="fullname" required="required"/>
    </div>
</div>
<br>

<div class="row">
    <div class="col-md-6">
        <h5 class="title">Date Of Birth (required)</h5>
        <input class="half_width padding" placeholder="Ex: DD-MM-YYYY" type="date" name="dob" required="required"/>
    </div>
    <div class="col-md-6">
         <h5 class="title">Gender (required)</h5>
         <input type="radio" name="gender" value="male" checked> Male
         <input type="radio" name="gender" value="female"> Female
    </div>
</div>
<br>

<h5 class="title">Contact Number(required)</h5>
<div class="row">
    <div class=" col-md-6">
        <input class="half_width padding" placeholder="Contact Number" type="number" name="contact_number" required="required"/>
    </div>
</div>
<br>

<div class="row">
    <div class=" col-md-12 address">
        <label> 
            <input type="checkbox" name="whatsappCheckbox"
                   value="whats"> Check If your WhatsApp contact number same as contact number
        </label> 
    </div>
</div>

<div class="whats">
    <h5 class="title">Contact WhatsApp No. (required)</h5>
  <div class="row">
    <div class="col-md-6 address">
         <input class="half_width padding" placeholder="WhatsApp Contact Number" type="number" name="contact_whats" />
    </div>
  </div>
    <br>
</div> 
<br>

<div class="row">
    <div class=" col-md-6">
        <h5 class="title">Your Email (required)</h5>
        <input class="half_width padding" placeholder="Email" type="email" name="email" required="required"/>
    </div>
    <div class=" col-md-6 address">
        <h5 class="title">Category cast (required)</h5>
        <select name="cast" class="half_width padding">
            <option value="">  Select Cast </option>
            <option value="general">  General </option>
            <option value="obc">  OBC </option>
            <option value="st">  ST </option>
            <option value="sc">  SC </option>
        </select>
    </div>
</div>
<br>

<div class="row">
    <div class="col-md-6">
        <h5 class="title">Father Name (required)</h5>
        <input class="half_width padding" placeholder="Father Name" type="text" name="fathername" required="required"/>
    </div>
    <div class="col-md-6">
        <h5 class="title">Mother Name (required)</h5>
        <input class="half_width padding" placeholder="Mother Name" type="text" name="mothername" required="required"/>
    </div>
</div>
<br>

<h5 class="title">Parents contact Number (required)</h5>
<div class="row">
    <div class="col-md-6">
        <input class="half_width padding" placeholder="Please Enter Number" type="number" name="parent_contact_no" required="required"/>
    </div>
</div>
<br>

<h5 class="title">Address (required)</h5>
<div class="row">
<div class="col-md-4 address">
    <select name="country" class="padding full_width" id="country-dropdown">
        <option value="">Select Country</option>
        <?php
        global $wpdb;
        $result = $wpdb->get_results("SELECT * FROM wp_countries");
        $i=0;
        foreach ($result as $row)
        {
        ?>
        <option value="<?php echo $row->id;?>"><?php echo $row->name;?></option>
        <?php 
        $i++; 
    } ?>
    </select>

</div>

<div class=" col-md-4 address">
    <select class="padding full_width" id="state-dropdown" name="state">
        <option>First Select Country</option>
    </select>
</div>

<div class=" col-md-4 address">
    <select class="padding full_width" id="city-dropdown" name="city">
        <option>First Select State</option>
    </select>
</div>
</div>

<div class="row">
    <div class="col-md-9">
        <h5 class="title">Full Address (required)</h5>
        <textarea class="full_width padding" placeholder="Please Enter Full Permanent Address" name="fulladdress" required="required"></textarea>
    </div>
    <div class="col-md-3">
        <h5 class="title">Pin Code (required)</h5>
        <input class="half_width padding" placeholder="Pin Code" type="text" name="pincode" />
    </div>
</div>
<br>


<h5 class="title">Current Education (required)</h5>
<div class="row">
<div class="col-md-6">
  <select class="half_width padding" name="last_education" >
    <option value="12th">12th</option> 
    <option value="Graduation">Graduation</option>
    <option value="Post_Graduation">Post Graduation</option>   
  </select>
</div>
<div class=" col-md-6">
   <select class="half_width padding" name="education_status" >
    <option value="completed">Completed</option>
    <option value="pursuing">Pursuing</option>
  </select>
</div>
</div>
<br>

<h5 class="title">Session (required)</h5>
<div class="row">
    <div class=" col-md-6">
        <select class="half_width padding" name="session">
            <option value="Nothing">Select Session</option>
            <option value="2022">2022</option>
          </select>
    </div>
</div>
<br>

<h5 class="title">Select Course (required)</h5>
<div class="row">
    <div class="col-md-6">
      <select class="half_width padding" name="course" id="course"  onchange="myFunction()" style='width: 100%;'>
        <option>Select Course Category</option>
        <option value="B-A-LL-B">B.A.LL.B (Hons.)</option>
        <option value="B-B-A-LL-B">B.B.A.LL.B (Hons.)</option>
        <option value="B-COM-LL-B">B.Com.LL.B (Hons.)</option>  
        <option value="LL-B">LL.B (Hons.)</option>  

      </select>
    </div>

    <!-- Inner Courses Drop Down -->
<!--     <div class="col-md-4">
      <select class="half_width padding inner_course" name="inner_course"  id="inner_course" style='width: 100%;'>
        <option style="font-size: 16px; font-weight: 900;" value="">Select Course</option> 
      </select>
    </div> -->

    <!-- Course Amount -->
    <div class="col-md-6">
        <div id="price_filed" style="text-align:center;">
            <input class="submit_price padding course-price-style" type="text" name="course_fees" value="Course Fee-" readonly />
        </div>
    </div>

</div>
<br>

<h5 class="title">Counseled by (required)</h5>
<div class="row">
    <div class=" col-md-6">
        <input class="half_width padding" placeholder="Enter Name Teacher/Mentor" type="text" name="referred_by_name" />
    </div>
</div>
<br>

<div id="price_button" style="text-align:center;" class="col-md-12">
<input  class="submit_button" type="submit" name="register" value="Pay Registration fee-" />
<br><br>
</div>

</form>
</div>
<div class="col-md-1"></div>
</div>
</div>
  
<script>

function myFunction() {
    var x = document.getElementById("course").value;

    if(x == 'B-A-LL-B')
    {
        document.getElementById("price_filed").innerHTML="<input class='submit_price padding course-price-style' type='text' name='course_fees' value='Course Fee-65,000/- Year'  readonly/>";
    }
	
    else if(x == 'B-B-A-LL-B')
     {
        document.getElementById("price_filed").innerHTML="<input class='submit_price padding course-price-style' type='text' name='course_fees' value='Course Fee-65,000/- Year'  readonly/>";
    }
    else if(x == 'B-COM-LL-B')
    {
        document.getElementById("price_filed").innerHTML="<input class='submit_price padding course-price-style' type='text' name='course_fees' value='Course Fee-55,000/- Year'  readonly/>";
    }
    else if(x == 'LL-B') {
        document.getElementById("price_filed").innerHTML="<input class='submit_price padding course-price-style' type='text' name='course_fees' value='Course Fee-30,000/- Year'  readonly/>";
    }
	else{
        document.getElementById("price_filed").innerHTML = "<input class='submit_price padding course-price-style' type='text' name='course_fees' value='Course Fee' readonly />";
    }
   
}
</script>



<script>
    jQuery(document).on('change','#course',function(){
    var selected_course = jQuery(this).val();
    if (selected_course == 'B-A-LL-B')
    {
        document.getElementById("price_button").innerHTML="<input class='submit_button' type='submit' name='register' value='Registration fee-500'/>";
    }
    else if (selected_course == 'B-B-A-LL-B'){
        document.getElementById("price_button").innerHTML="<input class='submit_button' type='submit' name='register' value='Registration fee-500'/>";
    }
    else if (selected_course == 'B-COM-LL-B'){
        document.getElementById("price_button").innerHTML="<input class='submit_button' type='submit' name='register' value='Registration fee-500'/>";
    }
    else if (selected_course == 'LL-B'){
        document.getElementById("price_button").innerHTML="<input class='submit_button' type='submit' name='register' value='Registration fee-500'/>";
    }
		else{
        document.getElementById("price_button").innerHTML = "<input  class='submit_button' type='submit' name='register' value='Registration fee-0'/>";
    }
    
});
</script> 

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>  



<script>
  jQuery(document).ready(function() {
    jQuery("#productform").validate({
        rules: {
            fullname: "required",
            fathername: "required",
            contact_number: {
                required: true,
                minlength: 10,
                number: true
            },
            email: {
                required: true,
                email: true
            },
            country: "required",
            state: "required",
            city: "required",
            referred_by_name: "required",
            course: {
                required: true,
            }
        },
        messages: {
            fullname: "Please enter your fullname",
            fathername: "Please enter your fathername",
            mothername: "Please enter your mothername",
            fulladdress: "Please enter your permanent address",
            email: "Please enter a valid email address",
            contact_number: {
                required: "Please enter your phone number",
                number: "Please enter only numeric value"
            },
            country: "Please enter your country",
            state: "Please enter your state",
            city: "Please enter your city",
            referred_by_name: "Please enter referred name",
            fullname: {
                required: "Please enter a username",
                minlength: "Your username must consist of at least 3 characters"
            },
        }
    });
});

  // Get state and cities
  $(document).ready(function() {
        $('#country-dropdown').on('change', function() {
            var country_id = this.value;
            //console.log('country_id');
            $.ajax({
            url: 'https://graffersid.com/renaissa/get-state-template/',
            type: "POST",
            data: {
            country_id: country_id
            },
            cache: false,
            success: function(result){
            $("#state-dropdown").html(result);
            $('#city-dropdown').html('<option value="">Select State First</option>'); 
            }
            });
            });    
            $('#state-dropdown').on('change', function() {
            var state_id = this.value;
            $.ajax({
            url: 'https://graffersid.com/renaissa/get-city-template/',
            type: "POST",
            data: {
            state_id: state_id
            },
            cache: false,
            success: function(result){
            $("#city-dropdown").html(result);
            }
            });
        });
    });

    $(document).ready(function() {
        $('#second_country_dropdown').on('change', function() {
            var country_id = this.value;
            //console.log('country_id');
            $.ajax({
            url: 'https://graffersid.com/renaissa/get-state-template/',
            type: "POST",
            data: {
            country_id: country_id
            },
            cache: false,
            success: function(result){
            $("#second_state_dropdown").html(result);
            $('#second_city_dropdown').html('<option value="">Select State First</option>'); 
            }
            });
            });    
            $('#second_state_dropdown').on('change', function() {
            var state_id = this.value;
            $.ajax({
            url: 'https://graffersid.com/renaissa/get-city-template/',
            type: "POST",
            data: {
            state_id: state_id
            },
            cache: false,
            success: function(result){
            $("#second_city_dropdown").html(result);
            }
            });
        });
    });

    $(document).ready(function() { 
        $('input[type="checkbox"]').click(function() { 
            var inputValue = $(this).attr("value"); 
            $("." + inputValue).toggle(); 
        }); 
    }); 
</script>  

<?php
get_footer();
?>
