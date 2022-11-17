function saveCustDetails()
{
	var name=document.getElementById("name").value;
	var email=document.getElementById("email").value;
	var mobile=document.getElementById("mobile").value;
	var chk1=document.getElementById("chk1");
	var chk2=document.getElementById("chk2");
	var chk3=document.getElementById("chk3");	
	var chk=document.conform.chk1.checked || document.conform.chk2.checked || document.conform.chk3.checked;
	
	var regemail = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	var regname= /^[A-Za-z\s]+$/;
	var number=  /^[1-9]{1}[0-9]{9}$/;
	
	if(name.trim()=="" || name==null)
	{
		document.getElementById("error_name").innerHTML="Enter first name";
		document.forms['conform']['name'].focus();
		return false;
	}
	else{
		document.getElementById("error_name").innerHTML="";
		
	}
	if(regname.test(name)==false)
	{
		document.getElementById("error_name").innerHTML="Enter valid first name";
		document.forms['conform']['name'].focus();
		return false;
	}
	else{
		document.getElementById("error_name").innerHTML="";
		
	}
    
    		
	if(mobile.trim()=='' || mobile==null)
	{
		document.getElementById("error_mobile").innerHTML="Enter mobile no ";
		document.forms['conform']['mobile'].focus();
		return false;
	}
	else{
		document.getElementById("error_mobile").innerHTML="";
		
	}
			
	if(number.test(mobile)==false)
	{
		document.getElementById("error_mobile").innerHTML="Enter valid contact no.";
		document.forms['conform']['mobile'].focus();
		return false;
	}	
	else{
		document.getElementById("error_mobile").innerHTML="";
		
	}
    
    	if(email.trim()=='' || email==null)
	{
		document.getElementById("error_email").innerHTML="Enter email id";
		document.forms['conform']['email'].focus();
		return false;
	}
	else{
		document.getElementById("error_email").innerHTML="";
		
	}
		
	if(regemail.test(email)==false)
	{
		document.getElementById("error_email").innerHTML="Enter valid email id";
		document.forms['conform']['email'].focus();
		return false;
	}
	else{
		document.getElementById("error_email").innerHTML="";
		
	}

	    if (chk===false) {
			document.getElementById("error_courses").innerHTML="Select one course option";
			document.forms['conform']['chk1'].focus();
		return false;
		
	}
	else {
		
		document.getElementById("error_courses").innerHTML="";
	}

	
}



