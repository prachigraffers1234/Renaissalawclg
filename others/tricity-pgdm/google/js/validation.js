
function validate_form(){
    
	var name=document.getElementById("name").value;
    var mobile=document.getElementById("mobile").value;
	var email=document.getElementById("email").value;
    var city=document.getElementById("city").value;
/*    var e=document.getElementById("project");
    var strUser = e.options[e.selectedIndex].value;
    var strUser1 = e.options[e.selectedIndex].text;*/
	
	var reg_email = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
	var reg_name= /^[A-Za-z\s]+$/;
	var reg_number= /^\d{10}$/;
    
	if(name.trim()=="" || name==null)
	{
		document.getElementById('error_name').innerHTML="Please enter your name";
		$("#name").focus();        
		return false;
	}else{
		document.getElementById('error_name').innerHTML="";
	}
	if(reg_name.test(name)==false)
	{
		document.getElementById('error_name').innerHTML="Please enter valid name";
        $("#name").focus();
		return false;
	}else{
		document.getElementById('error_name').innerHTML="";
	}
    
	if(mobile.trim()=='' || mobile==null)
	{
		document.getElementById('error_mobile').innerHTML="Please enter mobile no";
		$("#mobile").focus();
		return false;
	}else{
		document.getElementById('error_mobile').innerHTML="";
	}
		
	if(reg_number.test(mobile)==false)
	{
		document.getElementById('error_mobile').innerHTML="Please enter valid mobile no";
		$("#mobile").focus();
		return false;
	}else{
		document.getElementById('error_mobile').innerHTML="";
	}

	if(email.trim()=='' || email==null)
	{
		document.getElementById('error_email').innerHTML="Please enter your email Id";
		$("#email").focus();
		return false;
	}else{
		document.getElementById('error_email').innerHTML="";
	}

	if(reg_email.test(email)==false)
	{
		document.getElementById('error_email').innerHTML="Please enter valid Email Id";
		$("#email").focus();
		return false;
	}else{
		document.getElementById('error_email').innerHTML="";
	}
    
	if(city.trim()=="" || city==null)
	{
		document.getElementById('error_city').innerHTML="Please enter city";
		$("#city").focus();        
		return false;
	}else{
		document.getElementById('error_city').innerHTML="";
	}
	if(reg_name.test(city)==false)
	{
		document.getElementById('error_city').innerHTML="Please enter valid city";
        $("#city").focus();
		return false;
	}else{
		document.getElementById('error_city').innerHTML="";
	}

/*    if(strUser==0)
    {
        document.getElementById('error_project').innerHTML="Please select Course";
        $("#project").focus();
        return false;
    }
    else{
        document.getElementById('error_project').innerHTML="";
    }
*/
}



function validate_form1(){
	
	var name=document.getElementById("name1").value;
    var mobile=document.getElementById("mobile1").value;
	var email=document.getElementById("email1").value;
    var city=document.getElementById("city1").value;
/*    var e=document.getElementById("project1");
    var strUser = e.options[e.selectedIndex].value;
    var strUser1 = e.options[e.selectedIndex].text;*/
	
	var reg_email = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
	var reg_name= /^[A-Za-z\s]+$/;
	var reg_number= /^\d{10}$/;
    
	if(name.trim()=="" || name==null)
	{
		document.getElementById('error_name1').innerHTML="Please enter your name";
		$("#name1").focus();        
		return false;
	}else{
		document.getElementById('error_name1').innerHTML="";
	}
	if(reg_name.test(name)==false)
	{
		document.getElementById('error_name1').innerHTML="Please enter valid name";
        $("#name1").focus();
		return false;
	}else{
		document.getElementById('error_name1').innerHTML="";
	}
    
	if(mobile.trim()=='' || mobile==null)
	{
		document.getElementById('error_mobile1').innerHTML="Please enter mobile no";
		$("#mobile1").focus();
		return false;
	}else{
		document.getElementById('error_mobile1').innerHTML="";
	}
		
	if(reg_number.test(mobile)==false)
	{
		document.getElementById('error_mobile1').innerHTML="Please enter valid mobile no";
		$("#mobile1").focus();
		return false;
	}else{
		document.getElementById('error_mobile1').innerHTML="";
	}

	if(email.trim()=='' || email==null)
	{
		document.getElementById('error_email1').innerHTML="Please enter your email Id";
		$("#email1").focus();
		return false;
	}else{
		document.getElementById('error_email1').innerHTML="";
	}

	if(reg_email.test(email)==false)
	{
		document.getElementById('error_email1').innerHTML="Please enter valid Email Id";
		$("#email1").focus();
		return false;
	}else{
		document.getElementById('error_email1').innerHTML="";
	}
    
	if(city.trim()=="" || city==null)
	{
		document.getElementById('error_city1').innerHTML="Please enter city";
		$("#city1").focus();        
		return false;
	}else{
		document.getElementById('error_city1').innerHTML="";
	}
	if(reg_name.test(city)==false)
	{
		document.getElementById('error_city1').innerHTML="Please enter valid city";
        $("#city1").focus();
		return false;
	}else{
		document.getElementById('error_city1').innerHTML="";
	}
/*    if(strUser==0)
    {
        document.getElementById('error_project1').innerHTML="Please select Course";
        $("#project1").focus();
        return false;
    }
    else{
        document.getElementById('error_project1').innerHTML="";
    }*/

}


function validate_form2(){
	
	var name=document.getElementById("name2").value;
    var mobile=document.getElementById("mobile2").value;
	var email=document.getElementById("email2").value;
    var city=document.getElementById("city2").value;
/*    var e=document.getElementById("project2");
    var strUser = e.options[e.selectedIndex].value;
    var strUser1 = e.options[e.selectedIndex].text;*/
    /*var date=document.getElementById("date").value;*/
	
	var reg_email = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
	var reg_name= /^[A-Za-z\s]+$/;
	var reg_number= /^\d{10}$/;
    
	if(name.trim()=="" || name==null)
	{
		document.getElementById('error_name2').innerHTML="Please enter your name";
		$("#name2").focus();        
		return false;
	}else{
		document.getElementById('error_name2').innerHTML="";
	}
	if(reg_name.test(name)==false)
	{
		document.getElementById('error_name2').innerHTML="Please enter valid name";
        $("#name2").focus();
		return false;
	}else{
		document.getElementById('error_name2').innerHTML="";
	}
    
	if(mobile.trim()=='' || mobile==null)
	{
		document.getElementById('error_mobile2').innerHTML="Please enter mobile no";
		$("#mobile2").focus();
		return false;
	}else{
		document.getElementById('error_mobile2').innerHTML="";
	}
		
	if(reg_number.test(mobile)==false)
	{
		document.getElementById('error_mobile2').innerHTML="Please enter valid mobile no";
		$("#mobile2").focus();
		return false;
	}else{
		document.getElementById('error_mobile2').innerHTML="";
	}

	if(email.trim()=='' || email==null)
	{
		document.getElementById('error_email2').innerHTML="Please enter your email Id";
		$("#email2").focus();
		return false;
	}else{
		document.getElementById('error_email2').innerHTML="";
	}

	if(reg_email.test(email)==false)
	{
		document.getElementById('error_email2').innerHTML="Please enter valid Email Id";
		$("#email2").focus();
		return false;
	}else{
		document.getElementById('error_email2').innerHTML="";
	}
    
	if(city.trim()=="" || city==null)
	{
		document.getElementById('error_city2').innerHTML="Please enter city";
		$("#city2").focus();        
		return false;
	}else{
		document.getElementById('error_city2').innerHTML="";
	}
	if(reg_name.test(city)==false)
	{
		document.getElementById('error_city2').innerHTML="Please enter valid city";
        $("#city2").focus();
		return false;
	}else{
		document.getElementById('error_city2').innerHTML="";
	}
    
/*	if(date.trim()=="" || date==null)
	{
		document.getElementById('error_date').innerHTML="Please select Date";
		$("#date").focus();        
		return false;
	}else{
		document.getElementById('error_date').innerHTML="";
	}*/
	
/*    if(strUser==0)
    {
        document.getElementById('error_project2').innerHTML="Please select Course";
        $("#project2").focus();
        return false;
    }
    else{
        document.getElementById('error_project2').innerHTML="";
    }*/
    
}


function validate_form3(){
    
	var name=document.getElementById("name3").value;
    var mobile=document.getElementById("mobile3").value;
	var email=document.getElementById("email3").value;
    var city=document.getElementById("city3").value;
/*    var e=document.getElementById("project3");
    var strUser = e.options[e.selectedIndex].value;
    var strUser1 = e.options[e.selectedIndex].text;*/
	
	var reg_email = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
	var reg_name= /^[A-Za-z\s]+$/;
	var reg_number= /^\d{10}$/;
    
	if(name.trim()=="" || name==null)
	{
		document.getElementById('error_name3').innerHTML="Please enter your name";
		$("#name3").focus();        
		return false;
	}else{
		document.getElementById('error_name3').innerHTML="";
	}
	if(reg_name.test(name)==false)
	{
		document.getElementById('error_name3').innerHTML="Please enter valid name";
        $("#name3").focus();
		return false;
	}else{
		document.getElementById('error_name3').innerHTML="";
	}
    
	if(mobile.trim()=='' || mobile==null)
	{
		document.getElementById('error_mobile3').innerHTML="Please enter mobile no";
		$("#mobile3").focus();
		return false;
	}else{
		document.getElementById('error_mobile3').innerHTML="";
	}
		
	if(reg_number.test(mobile)==false)
	{
		document.getElementById('error_mobile3').innerHTML="Please enter valid mobile no";
		$("#mobile3").focus();
		return false;
	}else{
		document.getElementById('error_mobile3').innerHTML="";
	}

	if(email.trim()=='' || email==null)
	{
		document.getElementById('error_email3').innerHTML="Please enter your email Id";
		$("#email3").focus();
		return false;
	}else{
		document.getElementById('error_email3').innerHTML="";
	}

	if(reg_email.test(email)==false)
	{
		document.getElementById('error_email3').innerHTML="Please enter valid Email Id";
		$("#email3").focus();
		return false;
	}else{
		document.getElementById('error_email3').innerHTML="";
	}
    
	if(city.trim()=="" || city==null)
	{
		document.getElementById('error_city3').innerHTML="Please enter city";
		$("#city3").focus();        
		return false;
	}else{
		document.getElementById('error_city3').innerHTML="";
	}
	if(reg_name.test(city)==false)
	{
		document.getElementById('error_city3').innerHTML="Please enter valid city";
        $("#city3").focus();
		return false;
	}else{
		document.getElementById('error_city3').innerHTML="";
	}
	
/*    if(strUser==0)
    {
        document.getElementById('error_project3').innerHTML="Please select Course";
        $("#project3").focus();
        return false;
    }
    else{
        document.getElementById('error_project3').innerHTML="";
    }*/

}

