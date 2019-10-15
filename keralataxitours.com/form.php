<?php
ini_set('display_errors', 'on');
error_reporting(E_ALL ^ E_NOTICE);
include_once("smtp.php");
if(isset($_POST["Submit"]))
{
$name=$_POST["txtname"];
$company=$_POST["txtcompany"];
$mail=$_POST["txtemail"];
$phone=$_POST["txtmobile"];
$message =$_POST["txtcomments"] . "<br/>\n" .
			"Regards,<br/>\n" .
          $name . "<br/>\n" .
  		  $company . "<br/>\n" .
			$mail . "<br/>\n" .
			$phone . "<br/>\n" .
    		"Note : Please Donot reply to this mail by clicking reply link,Copy the EMail Id and send message,\n<br/>" ;
$email=$mail;
$subject = $subject;
$headers1 = "MIME-Version: 1.0\r\n";
$headers1 .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: info@keralataxitours.com' . "\r\n";
if(sendMail($email,$name,$message))
{
    $msg="mail sent";
	header('Location:mailsent.html');
}
else
{
	echo "error";
}
}?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Aero Grip</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>
<script language="javascript" src="javascript/keyEvents.js"></script>
</head>

<body style="background:#FFFFFF;">
<form method="post" name="frmContact" >
	<div id="errordiv"></div>
      <table width="525"  border="0" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;">
          <tr>
		  	<td></td><td>Fields marked by <span class="style10">*</span> are mandatory </td>
		  </tr>
		  <tr>
               <td width="113" valign="top">Name <font color="#FF0000">*</font></td>
                <td width="402"><input name="txtname"   type="text" class="textbox" id="txtname" size="35"  onkeydown="return CheckAlphaName(event);" /></td>
		  </tr>
				<tr>
				<td>&nbsp;</td>
				<td>
                  <font color="#FF0000"><label id="cserrname" ></label></font> </td>
              </tr>
              <tr>
                <td valign="top">Address</td>
                <td><input name="txtcompany"   type="text" class="textbox" id="txtcompany" size="35" onkeydown="return gotoCSEmail(event);" /></td>
              </tr>
				<tr>
				<td>&nbsp;</td><td>&nbsp;</td>
              </tr>
              <tr>
                <td valign="top">Email <font color="#FF0000">*</font></td>
                <td><input name="txtemail"   type="text" class="textbox" id="txtemail" size="35" onkeydown="return gotoCSMob(event);" /></td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>
                  <font color="#FF0000"><label id="cserremail"></label></font></td>
              </tr>
              <tr>
                <td valign="top">Mobile <font color="#FF0000">*</font></td>
                <td><input name="txtmobile"   type="text" class="textbox" id="txtmobile" size="35" onkeydown="return CheckNumContact(event);" /> 
            <span class="style7">(eg : 9000000000)</span></td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td>
                  <font color="#FF0000"><label id="cserrphone"></label></font></td>
              </tr>
              <tr>
                <td valign="top">Comments</td>
                <td><textarea name="txtcomments"   cols="40" rows="5" class="textbox" id="txtcomments" ></textarea></td>
              </tr>
              <tr>
                <td height="36" valign="bottom">&nbsp;</td>
                <td valign="bottom"><input   name="Submit" type="submit"  value="Send" onclick="return validateContactUs(txtname.value,txtemail.value,txtmobile.value);"/>
                  &nbsp;
                  <!--input name="Submit2" type="submit" class="textbox" value="Cancel"  /--></td>
              </tr>
            </table>
	 </form>
</body>
</html>
