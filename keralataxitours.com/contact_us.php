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
    $headers .= 'From: me.shafeeqsalman@gmail.com' . "\r\n";
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

<body onload="document.frmContact.txtname.focus();" >
<div id="main-wrap">
<div id="top-wrap">
<div id="header">
<div id="logo"><img src="images/logo.png" alt="Aero Grip" width="259" height="98" /></div>
<div  id="top_ryt">
<div id="num_cap" align="right"><img src="images/numcap.png" /></div>
<div id="nav"><table width="100%" height="41" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="11%" height="36">&nbsp;</td>
    <td width="15%" align="center"><a href="index.html" class="mlink">HOME  </a></td>
    <td width="22%" align="center"> <a href="about_us.html" class="mlink">ABOUT US </a></td>
    <td width="23%" align="center"><a href="products.html" class="mlink">PRODUCTS	</a></td>
    <td width="21%" align="center"> <a href="contact_us.php" class="mlink">CONTACT US</a> </td>
    <td width="8%">&nbsp;</td>
  </tr>
</table>
</div>
</div>
</div>
</div>
<div class="clear"></div>
<div id="middle-container">
<div id="mid">
<div id="banner"> <img src="images/banner.jpg"> </div>
<div id="contents">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="67%" height="38" style="border-bottom:#999999 dotted 1px;"> <h3><span class="style1">Contact</span> Us </h3></td>
    <td width="33%" rowspan="2" align="center" valign="top"><div id="contact">
  <table width="100%" height="204" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="16%" height="42">&nbsp;</td>
      <td width="75%"><h3>Address</h3></td>
      <td width="9%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><strong>Najwa Industries,<br />
  Plot No. 24,<br />
  Industrial Growth Centre <br />
  KSIDC, Kinalur  - 673612<br />
  Phone No:  91 9061645225<br />
  91 9846734488, 91 9562655819<br />
  E Mail: najwaimpex2000@yahoo.co.in </strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</div></td>
    </tr>
  <tr>
    <td height="207" align="left" valign="top">  <form method="post" name="frmContact">
	<div id="errordiv"></div>
      <table width="525"  border="0">
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
                <td valign="bottom"><input   name="Submit" type="submit"  value="Send" onclick="return validateContact(txtname.value,txtemail.value,txtmobile.value);"/>
                  &nbsp;
                  <!--input name="Submit2" type="submit" class="textbox" value="Cancel"  /--></td>
              </tr>
            </table>
	 </form></td>
    </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
</table>

</div>
</div>
</div>
<div class="clear"></div>
<div id="footer">
<div id="footer_in"><table width="100%" border="0" cellspacing="0" cellpadding="0" style="color:#CCCCCC;">
  <tr>
    <td width="65%">&nbsp;</td>
    <td width="1%">&nbsp;</td>
    <td width="34%">&nbsp;</td>
  </tr>
  <tr>
    <td>Copyright © 2011 Aerogrip<br />
      All Rights Reserved.</td>
    <td>&nbsp;</td>
    <td align="right">Website by : <a href="http://www.innate-solutions.com/" target="_blank" class="flink">Innate IT Solutions Pvt Ltd.</a></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</div>
</div>
<div class="clear"></div>
</div>

</body>
</html>
