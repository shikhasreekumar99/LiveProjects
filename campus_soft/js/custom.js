function val(formok)
{
	var t=true;
	if(formok.textfield.value=="")
	{
		alert("Enter your name");
		formok.textfield.focus();
		t=false;
		return t;
	}
	if(formok.textfield.value!="")
	{
		var str=/[a-zZ-Z]/;
		if(str.test(formok.textfield.value))
		{
			t=true;
		}
		else
		{
			alert("name must be string");
			formok.textfield.focus();
			t=false;
			return t;
		}
	}
	
	if(formok.textfield2.value=="")
	{
		alert("Enter Admsn no");
		formok.textfield2.focus();
		t=false;
		return t;
		
	}
	/*if(formok.textfield2.value!="")
	{
		var str=/[a-zZ-Z]/;
		if(str.test(formok.textfield.value))
		{
			t=true;
		}
		else
		{
			alert("department must be string");
			formok.textfield2.focus();
			t=false;
			return t;
		}
	}*/
	/*if(formok.textfield3.value=="")
	{
		alert("Enter department");
		formok.textfield3.focus();
		t=false;
		return t;
	}
	if(formok.textfield3.value!="")
	{
		var str=/[a-zZ-Z]/;
		if(str.test(formok.textfield3.value))
		{
			t=true;
		}
		else
		{
			alert("department must be string");
			formok.textfield3.focus();
			t=false;
			return t;
		}
	}
	if(formok.textfield4.value == "")
	{
		alert("Enter dob");
		formok.textfield4.focus();
		t=false;
		return t;
	}
	if(formok.textfield5.value == "")
	{
		alert("Enter age");
		formok.textfield5.focus();
		t=false;
		return t;
	}
	if(formok.textfield6.value == "")
	{
		alert("Enter address");
		formok.textfield6.focus();
		t=false;
		return t;
	}
}