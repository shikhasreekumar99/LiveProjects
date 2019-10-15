//----------------Contact Us keyEvents-------------------//
function CheckAlphaName(e)
{
	//alert(e.keyCode);
	 if(e.keyCode>=48 && e.keyCode<=57)
	{
		//alert('fl');
		return false;
	}
	else if((e.keyCode>=65 && e.keyCode<=90)||(e.keyCode==8)||(e.keyCode==46)||(e.keyCode==32)||(e.keyCode==190)||(e.keyCode==37)||(e.keyCode==39)) {
		//alert('tr');
	  return true;
	}
	
    else if((e.keyCode == 13)||(e.keyCode==9))
	{
	 	//document.frmContact.txtcompany.focus();
		document.getElementById("txtcompany").focus();
		return false;
	}
	else
	  return false;
}

function gotoCSEmail(e)
{
	if((e.keyCode == 13)||(e.keyCode==9))
	{
	 	document.frmContact.txtemail.focus();
		return false;
	}
}

function gotoCSMob(e)
{
		if((e.keyCode == 13)||(e.keyCode==9))
	{
	 	document.frmContact.txtmobile.focus();
		return false;
	}

}

function CheckNumContact(e)
{
	if((e.keyCode>=48 && e.keyCode<=57)|| (e.keyCode==8) ||(e.keyCode==46)||(e.keyCode==37)||(e.keyCode==39))
	 {
	  if(((document.getElementById('txtmobile').value).length  <= 9) || (e.keyCode==8) ||(e.keyCode==46)||(e.keyCode==37)||(e.keyCode==39))
	  	return true;
	   else 
	  	return false;
	 }
    else if((e.keyCode == 13)||(e.keyCode==9))
	{
	 	document.frmContact.txtcomments.focus();
		return false;
	}
	else
		return false;
}

//-------------------Contact Us Key Events End ---------------------//
function validateContact(Vehicle,dept_date_dd,dept_date_mm,dept_date_yyyy,arr_date_dd,arr_date_mm,arr_date_yyyy,Adult,Children,journeytype,Name,Email,Phone,City)
{
	
	var ret=true;
	var mobno=/^[0-9]{10}$/;
	var email = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	var ermsg="We have Problems in form Submission.<br>";
	if(Vehicle == 0)
	{
//		document.frmContact.txtname.style.backgroundColor="#dbc2b9";
		document.getElementById("errvehicle").innerHTML="required field <br>";
		//ermsg=" Enter Name";
	 	ret=false;
	}
	else
	{
		//document.frmContact.txtname.style.backgroundColor="#FFFFFF";
		document.getElementById("errvehicle").innerHTML="";	
	}
	if(dept_date_dd == "DD" || dept_date_mm =="MM" || dept_date_yyyy == "YYYY" )
	{
//		document.frmContact.txtname.style.backgroundColor="#dbc2b9";
		document.getElementById("errpickup").innerHTML="required field <br>";
		//ermsg=" Enter Name";
	 	ret=false;
	}
	else
	{
		//document.frmContact.txtname.style.backgroundColor="#FFFFFF";
		document.getElementById("errpickup").innerHTML="";	
	}
		if(arr_date_dd == "DD" || arr_date_mm =="MM" || arr_date_yyyy == "YYYY" )
	{
//		document.frmContact.txtname.style.backgroundColor="#dbc2b9";
		document.getElementById("errdropoff").innerHTML="required field <br>";
		//ermsg=" Enter Name";
	 	ret=false;
	}
	else
	{
		//document.frmContact.txtname.style.backgroundColor="#FFFFFF";
		document.getElementById("errdropoff").innerHTML="";	
	}
		if(Adult == "" || Children == "")
	{
//		document.frmContact.txtname.style.backgroundColor="#dbc2b9";
		document.getElementById("errperson").innerHTML="required field <br>";
		//ermsg=" Enter Name";
	 	ret=false;
	}
	else
	{
		//document.frmContact.txtname.style.backgroundColor="#FFFFFF";
		document.getElementById("errperson").innerHTML="";	
	}
	/*alert(document.getElementById("AirPortPickUp").checked);
	alert(document.getElementById("AirPortPickUp1").checked);*/
	
	if(document.getElementById("AirPortPickUp").checked || document.getElementById("AirPortPickUp1").checked)
	{
		document.getElementById("errairportpickup").innerHTML="";	
	}
	else
	{
		document.getElementById("errairportpickup").innerHTML="required field <br>";
		ret=false;
	}
	if(document.getElementById("RailwayPickUp").checked || document.getElementById("RailwayPickUp1").checked)
	{
		document.getElementById("errrailwaypickup").innerHTML="";	
	}
	else
	{
		document.getElementById("errrailwaypickup").innerHTML="required field <br>";
		ret=false;
	}
	if(journeytype == 0)
	{
//		document.frmContact.txtname.style.backgroundColor="#dbc2b9";
		document.getElementById("errhotel").innerHTML="required field <br>";
		//ermsg=" Enter Name";
	 	ret=false;
	}
	else
	{
		//document.frmContact.txtname.style.backgroundColor="#FFFFFF";
		document.getElementById("errhotel").innerHTML="";	
	}
	
	if(Name == "")
	{
//		document.frmContact.txtname.style.backgroundColor="#dbc2b9";
		document.getElementById("errname").innerHTML="required field <br>";
		//ermsg=" Enter Name";
	 	ret=false;
	}
	else
	{
		//document.frmContact.txtname.style.backgroundColor="#FFFFFF";
		document.getElementById("errname").innerHTML="";	
	}
	if(Phone == "")
	{
//		document.frmContact.txtname.style.backgroundColor="#dbc2b9";
		document.getElementById("errphone").innerHTML="required field <br>";
		//ermsg=" Enter Name";
	 	ret=false;
	}
	else
	{
		//document.frmContact.txtname.style.backgroundColor="#FFFFFF";
		document.getElementById("errphone").innerHTML="";	
	}
	
	
	if(Email == "")
	{
		//document.frmContact.txtemail.style.backgroundColor="#dbc2b9";
		document.getElementById("erremail").innerHTML="required field <br>";
		//ermsg=ermsg+" Enter EmailId<br>";
		ret=false;
	}
	else if(email.test(Email) == false)
	{
		//document.frmContact.txtemail.style.backgroundColor="#dbc2b9";
		document.getElementById("erremail").innerHTML="Invalid Email Address";
		//ermsg=ermsg+" Enter valid EmailId<br>";
		ret=false;
	}
	else
	{
		//document.frmContact.txtemail.style.backgroundColor="#FFFFFF";
		document.getElementById("erremail").innerHTML="";
	}
//	alert(ret);

			if(City == "")
	{
//		document.frmContact.txtname.style.backgroundColor="#dbc2b9";
		document.getElementById("errcity").innerHTML="required field <br>";
		//ermsg=" Enter Name";
	 	ret=false;
	}
	else
	{
		//document.frmContact.txtname.style.backgroundColor="#FFFFFF";
		document.getElementById("errcity").innerHTML="";	
	}
	
	
	//alert(ret);
	if(!ret)
	{
	//	alert('fal');
		document.getElementById("errordiv").innerHTML="<font color='#FF0000'>"+ermsg+"</font>";
		//document.getElementById("errordiv").style.display=true;
	}
	else
	{
			//alert('tru');
		document.getElementById("errordiv").innerHTML="";
	//	document.getElementById("errordiv").style.display=false;
	}
	
	return ret;
	
}



function validateContactUs(name,emailid,mobile)
{

	var ret=true;
	var mobno=/^[0-9]{10}$/;
	var email = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	var ermsg="We have Problems in form Submission.<br>";
	if(name == "")
	{
		//document.frmContact.txtname.style.backgroundColor="#dbc2b9";
		document.getElementById("cserrname").innerHTML="required field <br>";
		//ermsg=" Enter Name";
	 	ret=false;
	}
	else
	{
	//	document.frmContact.txtname.style.backgroundColor="#FFFFFF";
		document.getElementById("cserrname").innerHTML="";	
	}
	if(emailid == "")
	{
	//	document.frmContact.txtemail.style.backgroundColor="#dbc2b9";
		document.getElementById("cserremail").innerHTML="required field <br>";
		//ermsg=ermsg+" Enter EmailId<br>";
		ret=false;
	}
	else if(email.test(emailid)==false)
	{
	//	document.frmContact.txtemail.style.backgroundColor="#dbc2b9";
		document.getElementById("cserremail").innerHTML="Invalid Email Address";
		//ermsg=ermsg+" Enter valid EmailId<br>";
		ret=false;
	}
	else
	{
	//	document.frmContact.txtemail.style.backgroundColor="#FFFFFF";
		document.getElementById("cserremail").innerHTML="";
	}
//	alert(ret);
	if(mobile == "")
	{
	//document.frmContact.txtmobile.style.backgroundColor="#dbc2b9";
	document.getElementById("cserrphone").innerHTML="required field";
	//ermsg=ermsg+" Enter mobileno<br>";
		 ret=false;
	}
	else if(mobno.test(mobile)==false)
	{
	//	document.frmContact.txtmobile.style.backgroundColor="#dbc2b9";
		document.getElementById("cserrphone").innerHTML="Invalid mobile no";
		//ermsg=ermsg+" Enter valid mobileno<br>";
		 ret=false;
	}
	else
	{
	//	document.frmContact.txtmobile.style.backgroundColor="#FFFFFF";
		document.getElementById("cserrphone").innerHTML="";
	}
	//alert(ret);
	if(!ret)
	{
	//	alert('fal');
		document.getElementById("errordiv").innerHTML="<font color='#FF0000'>"+ermsg+"</font>";
		//document.getElementById("errordiv").style.display=true;
	}
	else
	{
			//alert('tru');
		document.getElementById("errordiv").innerHTML="";
	//	document.getElementById("errordiv").style.display=false;
	}
	
	return ret;
	
}



function validatePackage(Vehicle,dept_date_dd,dept_date_mm,dept_date_yyyy,arr_date_dd,arr_date_mm,arr_date_yyyy,Adult,Children,journeytype,Name,Email,Phone,City)
{
	
	var ret=true;
	var mobno=/^[0-9]{10}$/;
	var email = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	var ermsg="We have Problems in form Submission.<br>";
	//alert(Phone);//----1
	if(Vehicle == 0)
	{
//		document.frmContact.txtname.style.backgroundColor="#dbc2b9";
		document.getElementById("errvehicle").innerHTML="required field <br>";
		//ermsg=" Enter Name";
	 	ret=false;
	}
	else
	{
		//document.frmContact.txtname.style.backgroundColor="#FFFFFF";
		document.getElementById("errvehicle").innerHTML="";	
	}
	if(dept_date_dd == "DD" || dept_date_mm =="MM" || dept_date_yyyy == "YYYY" )
	{
//		document.frmContact.txtname.style.backgroundColor="#dbc2b9";
		document.getElementById("errpickup").innerHTML="required field <br>";
		//ermsg=" Enter Name";
	 	ret=false;
	}
	else
	{
		//document.frmContact.txtname.style.backgroundColor="#FFFFFF";
		document.getElementById("errpickup").innerHTML="";	
	}
		if(arr_date_dd == "DD" || arr_date_mm =="MM" || arr_date_yyyy == "YYYY" )
	{
//		document.frmContact.txtname.style.backgroundColor="#dbc2b9";
		document.getElementById("errdropoff").innerHTML="required field <br>";
		//ermsg=" Enter Name";
	 	ret=false;
	}
	else
	{
		//document.frmContact.txtname.style.backgroundColor="#FFFFFF";
		document.getElementById("errdropoff").innerHTML="";	
	}
		if(Adult == "" || Children == "")
	{
//		document.frmContact.txtname.style.backgroundColor="#dbc2b9";
		document.getElementById("errperson").innerHTML="required field <br>";
		//ermsg=" Enter Name";
	 	ret=false;
	}
	else
	{
		//document.frmContact.txtname.style.backgroundColor="#FFFFFF";
		document.getElementById("errperson").innerHTML="";	
	}
	/*alert(document.getElementById("AirPortPickUp").checked);
	alert(document.getElementById("AirPortPickUp1").checked);*/
	//alert(Phone);
	if(document.getElementById("AirPortPickUp").checked || document.getElementById("AirPortPickUp1").checked)
	{
		document.getElementById("errairportpickup").innerHTML="";	
	}
	else
	{
		document.getElementById("errairportpickup").innerHTML="required field <br>";
		ret=false;
	}
	if(document.getElementById("RailwayPickUp").checked || document.getElementById("RailwayPickUp1").checked)
	{
		document.getElementById("errrailwaypickup").innerHTML="";	
	}
	else
	{
		document.getElementById("errrailwaypickup").innerHTML="required field <br>";
		ret=false;
	}
	if(journeytype == 0)
	{
//		document.frmContact.txtname.style.backgroundColor="#dbc2b9";
		document.getElementById("errhotel").innerHTML="required field <br>";
		//ermsg=" Enter Name";
	 	ret=false;
	}
	else
	{
		//document.frmContact.txtname.style.backgroundColor="#FFFFFF";
		document.getElementById("errhotel").innerHTML="";	
	}
	
	if(Name == "")
	{
//		document.frmContact.txtname.style.backgroundColor="#dbc2b9";
		document.getElementById("errname").innerHTML="required field <br>";
		//ermsg=" Enter Name";
	 	ret=false;
	}
	else
	{
		//document.frmContact.txtname.style.backgroundColor="#FFFFFF";
		document.getElementById("errname").innerHTML="";	
	}
	if(Phone == "")
	{
//		document.frmContact.txtname.style.backgroundColor="#dbc2b9";
		document.getElementById("errphone").innerHTML="required field <br>";
		//ermsg=" Enter Name";
	 	ret=false;
	}
	else
	{
		//document.frmContact.txtname.style.backgroundColor="#FFFFFF";
		document.getElementById("errphone").innerHTML="";	
	}
	
	
	if(Email == "")
	{
		//document.frmContact.txtemail.style.backgroundColor="#dbc2b9";
		document.getElementById("erremail").innerHTML="required field <br>";
		//ermsg=ermsg+" Enter EmailId<br>";
		ret=false;
	}
	else if(email.test(Email) == false)
	{
		//document.frmContact.txtemail.style.backgroundColor="#dbc2b9";
		document.getElementById("erremail").innerHTML="Invalid Email Address";
		//ermsg=ermsg+" Enter valid EmailId<br>";
		ret=false;
	}
	else
	{
		//document.frmContact.txtemail.style.backgroundColor="#FFFFFF";
		document.getElementById("erremail").innerHTML="";
	}
//	alert(ret);
//alert(Phone);
			if(City == "")
	{
//		document.frmContact.txtname.style.backgroundColor="#dbc2b9";
		document.getElementById("errcity").innerHTML="required field <br>";
		//ermsg=" Enter Name";
	 	ret=false;
	}
	else
	{
		//document.frmContact.txtname.style.backgroundColor="#FFFFFF";
		document.getElementById("errcity").innerHTML="";	
	}
	
	
	//alert(ret);
	if(!ret)
	{
	//	alert('fal');
		document.getElementById("errordiv").innerHTML="<font color='#FF0000'>"+ermsg+"</font>";
		//document.getElementById("errordiv").style.display=true;
	}
	else
	{
			//alert('tru');
		document.getElementById("errordiv").innerHTML="";
	//	document.getElementById("errordiv").style.display=false;
	}
	//alert(ret);
	return ret;
	
}