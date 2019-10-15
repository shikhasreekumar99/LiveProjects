<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Taxi service kochi/cochin/ernakulam | taxi operator kochi | cab hire kochi | tour operator cochin | taxi tours ernakulam | car packages kochi | hire a taxi kochi | car hire kochi | rent a car kochi | car rentals kochi/cochin/ernakulam | luxury buses kochi | tempo traveller rental in cochin | luxury cars for rent kochi/cochin/ernakulam </title>
<meta name="keywords" content="Taxi service kochi/cochin/ernakulam | taxi operator kochi/cochin/ernakulam | cab hire kochi/cochin/ernakulam | tour operator kochi/cochin/ernakulam | taxi tours kochi/cochin/ernakulam | hire a taxi kochi/cochin/ernakulam | car hire kochi/cochin/ernakulam | rent a car kochi/cochin/ernakulam | car rentals kochi/cochin/ernakulam | luxury buses kochi/cochin/ernakulam | tempo traveller rental in kochi/cochin/ernakulam | luxury cars for rent kochi/cochin/ernakulam | cochin/kochi car rentals/hire" />  
 
<meta name="description" content=" Kerala taxi tours is a professionally managed service provider for rent/hire a car, bus, tempo traveller in kochi/cochin/ernakulam" />

<link href="css/style.css" rel="stylesheet" type="text/css"/>
<style>
.link_color
{
color:#617C58; text-decoration:none; border-bottom: 1px dotted;
}
</style>
<script language="javascript" src="javascript/keyEvents.js"></script>

<style type="text/css">
<!--
.style10 {color: #FD0000}
.style11 {color: #990000}
-->
</style>
</head>
<?php
ini_set('display_errors', 'on');
error_reporting(E_ALL ^ E_NOTICE);
include_once("smtp.php");
if(isset($_POST["submit"]))
{

$name=$_POST["Name"];
//$company=$_POST["txtcompany"];
$mail=$_POST["Email"];
$phone=$_POST["Phone"];
$city=$_POST["City"];
$veh="Vehicle  : ".$_POST["Vehicle"];
$pick="Pick up from : ".$_POST["dept_date_dd"]."-".$_POST["dept_date_mm"]."-".$_POST["dept_date_yyyy"];
$drop="Drop off at : ".$_POST["arr_date_dd"]."-".$_POST["arr_date_mm"]."-".$_POST["arr_date_yyyy"];
$person="Persons : Adult - ".$_POST["Adult"]." Children - ".$_POST["Children"];
$airport="Airport Pickup : ".$_POST["AirPortPickUp"];
$railway="Railway Pickup : ".$_POST["RailwayPickUp"];
$hotel="Hotel : ".$_POST["journeytype"];
$day1=$_POST["Day1"];
$day1=($day1 == "0")?"":"Day1 : ".$day1."<br/>\n";
$day2=$_POST["Day2"];
$day2=($day2 == "0")?"":"Day2 : ".$day2."<br/>\n";
$day3=$_POST["Day3"];
$day3=($day3 == "0")?"":"Day3 : ".$day3."<br/>\n";
$day4=$_POST["Day4"];
$day4=($day4 == "0")?"":"Day4 : ".$day4."<br/>\n";
$day5=$_POST["Day5"];
$day5=($day5 == "0")?"":"Day5 : ".$day5."<br/>\n";
$day6=$_POST["Day6"];
$day6=($day6 == "0")?"":"Day6 : ".$day6."<br/>\n";
$Day=$day1.$day2.$day3.$day4.$day5.$day6;
//$day1=($day1==0)?"fff":"Day1 : ".$day1;
//echo "hgfhgfhg".$day1;
$message =$_POST["Comments"] . "<br/>\n" .
			$veh . "<br/>\n" .
			$pick . "<br/>\n" .
			$drop . "<br/>\n" .
			$person . "<br/>\n" .
			$airport . "<br/>\n" .
			$railway . "<br/>\n" .
			$hotel . "<br/>\n" .
			$Day."<br/>\n".
			"Regards,<br/>\n" .
          $name . "<br/>\n" .
  		//  $company . "<br/>\n" .
			$mail . "<br/>\n" .
			$phone . "<br/>\n" .
			$city. "<br/>\n" .
    		"Note : Please Donot reply to this mail by clicking reply link,Copy the EMail Id and send message,\n<br/>" ;
$email=$mail;
$subject = $subject;
$headers1 = "MIME-Version: 1.0\r\n";
$headers1 .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: info@ebizuniverse.com' . "\r\n";
/*if(sendMail($email,$name,$message))
{
    $msg="mail sent";
	header('Location:thanks.html');
}
else
{
	echo "error";
}*/


require("mail/class.PHPmailer.php");
			$mailer = (object) new PHPmailer();
			//setup PHPMailer
			$your_Email = "info@keralataxitours.com";
			
			$mailer->From = $email;
			$mailer->FromName = $name;  
			$mailer->AddAddress($your_Email);
			$mailer->Subject = "Package Enquiry";
			$mailer->Body = $message;
			//send mail as HTML
			$mailer->IsHTML(true);
			//set charset
			$mailer->CharSet = "utf-8";
			//set mailing method... mail, smtp or sendmail
			$mailer->Mailer = "mail";
			if ($mailer->Send())
        	{ 
				header('Location:thanks.html');
        	}
        	else
        	{
				echo "<span style='color:red;'><b>FAIL TO SENT MAIL</b></span>";
        	}
		
		
		ob_end_flush();

}?>
<body>
		<div id="wrapper">
				<div id="header">
					<div class="logo"><a href="index.html"><img src="images/logo.png" border="0"/></a></div>
					<div class="logo_right">
							<div class="menu">
									<div class="home" align="left"><a href="index.html" class="menu_font">Home</a></div>
									<div class="abo" align="center"><a href="about.html" class="menu_font">About Us</a></div>
									<div class="car" align="center"><a href="car.html" class="menu_font">Car Packages</a></div>
									<div class="con" align="center"><a href="contact.php" class="menu_font">Contact Us</a></div>
							</div>
							<div class="clear"></div>
							<div class="pho">
								<div class="ph"><img src="images/phon.png" border="0"/></div><span class="ph_font">Call Us : 0484 111212</span>
							</div>
					</div>
				</div>
				<div class="clear"></div>
				<!--<div id="banner">
						<img src="images/banner.png" border="0"/></div>-->
						<div class="clear"></div>
						<div id="mid_content" style="min-height:650px;">
								<div class="mid_inner">
										<div class="welcome">
												<span class="hed_font">Packages </span><br/>
														<div class="line"></div>
														<div class="clear"></div>
														<?php
$values=$_POST['indica'];
$arrval=explode(":",$values);
?>

														<p>
														<form name="package" id="package" method="post" >
														
														<table cellpadding="0" cellspacing="0" width="100%">
																
																<tr style="padding:5px 0px 5px 0px;">
																 
														  </tr>
																<tr style="padding:5px 0px 5px 0px;">
																 
														  </tr>
														  <tr> <td><div id="errordiv"></div></td>
														  </tr>
																<tr style="padding:5px 0px 5px 0px;">
																  <td>&nbsp;</td>
																  <td>&nbsp;</td>
																  <td>Fields marked by <span class="style10">*</span> are mandatory </td>
														  </tr>
																<tr style="padding:5px 0px 5px 0px;">
																
																	<td width="37%">Vehicle<font color="#FF0000"> *</font></td>	
																	<td width="3%">&nbsp;</td>	
																	<td width="60%"><select name="Vehicle" id="Vehicle" class="formTextMedium"><option value="0">Select</option>

<optgroup label="Cars"><option value="tataindica">Tata Indica</option><option value="tataindigo">Tata Indigo</option><option value="logan">Logan</option><option value="swiftdzire">Swift Dzire</option><option value="toyotainnova">Innova</option><option value="tavera">Tavera</option><option  value="corolla">Corolla</option><option value="xylo">Xylo</option><option value="skoda">Skoda</option><option value="benz">Benz</option></optgroup><optgroup label="Tempo Traveller"><option value="12-14-seater">12/14 seater</option><option value="17-seater">17 seater</option></optgroup><optgroup label="Bus"><option value="32-seater">32 seater Bus</option><option value="35-39-seater">35-39 seater Bus</option><option value="35-39-seater-pushback">35 Pushback</option></optgroup>                </select> 
                  <font color="#FF0000"><label id="errvehicle" ></label></font> </td>
																</tr>
																<tr>
																	<td height="10">&nbsp;</td>
																	<td>&nbsp;</td>
																	<td>&nbsp;</td>
																	<td>&nbsp;</td>
																</tr>
																<tr>
																	<td width="37%" >Pick up from  <font color="#FF0000"> *</font></td>	
																	<td width="3%">&nbsp;</td>	
																	<td ><!--input name="Dept" type="text" class="formTextSmall" id="Dept"-->
										<input name="Pickup"  type="text" size="10" >						
                                        <select name="dept_date_dd" id="ctl00_ContentPlaceHolder1_dept_date_dd" class="inputtxt1">

	<option value="DD">DD</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>

	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>

	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>

	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
	<option value="22">22</option>
	<option value="23">23</option>

	<option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>

	<option value="30">30</option>
	<option value="31">31</option>
</select>
                                        <select name="dept_date_mm" id="ctl00_ContentPlaceHolder1_dept_date_mm" class="inputtxt1">
	<option value="MM">MM</option>
	<option value="1">1</option>
	<option value="2">2</option>

	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>

	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
</select>                             
                                        <select name="dept_date_yyyy" id="ctl00_ContentPlaceHolder1_dept_date_yyyy" class="inputtxt1">
	<option value="YYYY">YYYY</option>

	<option value="2010">2010</option>
	<option value="2011">2011</option>
	<option value="2012">2012</option>
	<option value="2013">2013</option>
	<option value="2014">2014</option>
	<option value="2015">2015</option>
</select> <font color="#FF0000"><label id="errpickup" ></label></font>                                      </td>
	
																	<td width="0%">&nbsp;</td>	
																</tr>
																<tr>
																	<td height="10">&nbsp;</td>
																	<td>&nbsp;</td>
																	<td>&nbsp;</td>
																	<td>&nbsp;</td>
																</tr>
																<tr>
																	<td width="37%" >Drop off at    <font color="#FF0000"> *</font></td>	
																	<td width="3%">&nbsp;</td>	
																	<td ><!--input name="Arr" type="text" class="formTextSmall" id="Arr"-->
																	<input name="Drop" type="text"  size="10">	
                                        <select name="arr_date_dd" id="ctl00_ContentPlaceHolder1_arr_date_dd" class="inputtxt1">

	<option value="DD">DD</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>

	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>

	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>

	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
	<option value="22">22</option>
	<option value="23">23</option>

	<option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>

	<option value="30">30</option>
	<option value="31">31</option>
</select>
                                        <select name="arr_date_mm" id="ctl00_ContentPlaceHolder1_arr_date_mm" class="inputtxt1">
	<option value="MM">MM</option>
	<option value="1">1</option>
	<option value="2">2</option>

	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>

	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
</select>                             
                                        <select name="arr_date_yyyy" id="ctl00_ContentPlaceHolder1_arr_date_yyyy" class="inputtxt1">
	<option value="YYYY">YYYY</option>

	<option value="2010">2010</option>
	<option value="2011">2011</option>
	<option value="2012">2012</option>
	<option value="2013">2013</option>
	<option value="2014">2014</option>
	<option value="2015">2015</option>
</select> <font color="#FF0000"><label id="errdropoff" ></label></font>                                      </td>
	
																	<td width="0%">&nbsp;</td>	
																</tr>
																<tr>
																	<td height="10">&nbsp;</td>
																	<td>&nbsp;</td>
																	<td>&nbsp;</td>
																	<td>&nbsp;</td>
																</tr>
																<tr>
																	<td >No Of Persons <font color="#FF0000"> *</font></td>
																	<td>&nbsp;</td>
																	<td> <span>Adult </span> <input name="Adult" type="text" class="formTextSmall" size="5" >
																	  <span> Children</span> <input name="Children" type="text" class="formTextSmall"  size="5"><font color="#FF0000">
																	  <label id="errperson" > </label>
																	  </font></td>
																	<td>&nbsp;</td>
																</tr>
																<tr>
																	<td height="10">&nbsp;</td>
																	<td>&nbsp;</td>
																	<td>&nbsp;</td>
																	<td>&nbsp;</td>
																</tr>
																<tr>
																	<td height="10">Airport Pickup <font color="#FF0000"> *</font></td>
																	<td>&nbsp;</td>
																	<td><input name="AirPortPickUp" id="AirPortPickUp" type="radio" value="Yes"> <span>Yes</span>
                    <input name="AirPortPickUp"  id="AirPortPickUp1" type="radio" value="No"> 
                    <span>No </span><font color="#FF0000"><label id="errairportpickup" ></label></font></td>
																	<td>&nbsp;</td>
																</tr>
																<tr>
																	<td height="10">&nbsp;</td>
																	<td>&nbsp;</td>
																	<td>&nbsp;</td>
																	<td>&nbsp;</td>
																</tr>
																<tr>
																	<td height="10">Railway Pickup <font color="#FF0000"> *</font></td>
																	<td>&nbsp;</td>
																	<td><input name="RailwayPickUp"  id="RailwayPickUp" type="radio" value="Yes"> 
																	<span>Yes</span>
                    <input name="RailwayPickUp"  id="RailwayPickUp1" type="radio" value="No"> 
                    <span>No </span> <font color="#FF0000"><label id="errrailwaypickup" ></label></font></td>
																	<td>&nbsp;</td>
																</tr>
																<tr>
																	<td height="10">&nbsp;</td>
																	<td>&nbsp;</td>
																	<td>&nbsp;</td>
																	<td>&nbsp;</td>
																</tr>
															
															
																<tr>
																	<td height="10">Hotels for you <font color="#FF0000"> *</font></td>
																	<td>&nbsp;</td>
																	
																	<td><select name="journeytype"  style="width:200px;" id="ctl00_ContentPlaceHolder1_drp_journey_type" class="inputtxt1"  onchange="journeytype()">
    <option value="0">Select</option>																	
	<option value="Round Trip">Rs 1000 – Rs 1500 (2 Star) </option>
	<option value="One Way">Rs 1500 – Rs 2500 (3 Star)</option>
	<option value="One Way">Rs 2500 – Rs 3500  ( 3 Star Dlx)</option>
	<option value="One Way">Rs 3500  and above </option>
      
	              

</select><font color="#FF0000"><label id="errhotel" ></label></font></td>
																	<td>&nbsp;</td>
																</tr>
																<tr>
																  <td height="10">&nbsp;</td>
														  </tr>
																<tr>
																  <td >Day1 &nbsp;&nbsp; &nbsp;&nbsp;
                                                                    <select name="Day1"  style="width:150px;" id="select9" class="inputtxt1"  >
                                                                      <option value="0">Select</option>
                                                                      <option value="Cochin">Cochin</option>
                                                                      <option value="Munnar">Munnar</option>
                                                                      <option value="Thekkady">Thekkady</option>
                                                                      <option value="Alleppey">Alleppey </option>
                                                                      <option value="Madurai">Madurai </option>
                                                                      <option value="Rameshwaram">Rameshwaram </option>
                                                                      <option value="Kovalam">Kovalam </option>
                                                                      <option value="Kumarakom">Kumarakom </option>
                                                                      <option value="Trivandrum">Trivandrum </option>
                                                                      <option value="Wayanadu">Wayanadu </option>
                                                                      <option value="Calicut">Calicut </option>
                                                                      <option value="Coimbatore">Coimbatore </option>
                                                                      <option value="Kodaikanal">Kodaikanal </option>
                                                                      <option value="Ooty">Ooty </option>
                                                                      <option value="Ashtamudi">Ashtamudi </option>
                                                                      <option value="Kottayam">Kottayam </option>
                                                                      <option value="Guruvayoor">Guruvayoor </option>
                                                                      <option value="Kanyakumari">Kanyakumari </option>
                                                                    </select></td>
																  <td>&nbsp;</td>
																  <td>Day2 &nbsp;&nbsp; &nbsp;&nbsp;
                                                                    <select name="Day2"  style="width:150px;" id="select12" class="inputtxt1"  onchange="journeytype()">
                                                                      <option value="0">Select</option>
                                                                      <option value="Cochin">Cochin</option>
                                                                      <option value="Munnar">Munnar</option>
                                                                      <option value="Thekkady">Thekkady</option>
                                                                      <option value="Alleppey">Alleppey </option>
                                                                      <option value="Madurai">Madurai </option>
                                                                      <option value="Rameshwaram">Rameshwaram </option>
                                                                      <option value="Kovalam">Kovalam </option>
                                                                      <option value="Kumarakom">Kumarakom </option>
                                                                      <option value="Trivandrum">Trivandrum </option>
                                                                      <option value="Wayanadu">Wayanadu </option>
                                                                      <option value="Calicut">Calicut </option>
                                                                      <option value="Coimbatore">Coimbatore </option>
                                                                      <option value="Kodaikanal">Kodaikanal </option>
                                                                      <option value="Ooty">Ooty </option>
                                                                      <option value="Ashtamudi">Ashtamudi </option>
                                                                      <option value="Kottayam">Kottayam </option>
                                                                      <option value="Guruvayoor">Guruvayoor </option>
                                                                      <option value="Kanyakumari">Kanyakumari </option>
                                                                    </select></td>
																  <td>&nbsp;</td>
														  </tr>
																<tr>
																  <td >&nbsp;</td>
																  <td>&nbsp;</td>
																  <td>&nbsp;</td>
																  <td>&nbsp;</td>
														  </tr>
																
																<tr>
																  <td >Day3 &nbsp;&nbsp; &nbsp;&nbsp;
                                                                    <select name="Day3"  style="width:150px;" id="select10" class="inputtxt1"  onchange="journeytype()">
                                                                      <option value="0">Select</option>
                                                                      <option value="0">Select</option>
                                                                      <option value="Cochin">Cochin</option>
                                                                      <option value="Munnar">Munnar</option>
                                                                      <option value="Thekkady">Thekkady</option>
                                                                      <option value="Alleppey">Alleppey </option>
                                                                      <option value="Madurai">Madurai </option>
                                                                      <option value="Rameshwaram">Rameshwaram </option>
                                                                      <option value="Kovalam">Kovalam </option>
                                                                      <option value="Kumarakom">Kumarakom </option>
                                                                      <option value="Trivandrum">Trivandrum </option>
                                                                      <option value="Wayanadu">Wayanadu </option>
                                                                      <option value="Calicut">Calicut </option>
                                                                      <option value="Coimbatore">Coimbatore </option>
                                                                      <option value="Kodaikanal">Kodaikanal </option>
                                                                      <option value="Ooty">Ooty </option>
                                                                      <option value="Ashtamudi">Ashtamudi </option>
                                                                      <option value="Kottayam">Kottayam </option>
                                                                      <option value="Guruvayoor">Guruvayoor </option>
                                                                      <option value="Kanyakumari">Kanyakumari </option>
                                                                    </select></td>
																  <td>&nbsp;</td>
																  <td>Day4  &nbsp;&nbsp; &nbsp;&nbsp;
                                                                    <select name="Day4"  style="width:150px;" id="select" class="inputtxt1"  onchange="journeytype()">
                                                                      <option value="0">Select</option>
                                                                      <option value="Cochin">Cochin</option>
                                                                      <option value="Munnar">Munnar</option>
                                                                      <option value="Thekkady">Thekkady</option>
                                                                      <option value="Alleppey">Alleppey </option>
                                                                      <option value="Madurai">Madurai </option>
                                                                      <option value="Rameshwaram">Rameshwaram </option>
                                                                      <option value="Kovalam">Kovalam </option>
                                                                      <option value="Kumarakom">Kumarakom </option>
                                                                      <option value="Trivandrum">Trivandrum </option>
                                                                      <option value="Wayanadu">Wayanadu </option>
                                                                      <option value="Calicut">Calicut </option>
                                                                      <option value="Coimbatore">Coimbatore </option>
                                                                      <option value="Kodaikanal">Kodaikanal </option>
                                                                      <option value="Ooty">Ooty </option>
                                                                      <option value="Ashtamudi">Ashtamudi </option>
                                                                      <option value="Kottayam">Kottayam </option>
                                                                      <option value="Guruvayoor">Guruvayoor </option>
                                                                      <option value="Kanyakumari">Kanyakumari </option>
                                                                    </select></td>
																  <td>&nbsp;</td>
														  </tr>
																<tr>
																  <td >&nbsp;</td>
																  <td>&nbsp;</td>
																  <td>&nbsp; </td>
																  <td>&nbsp;</td>
														  </tr>
																<tr>
																  <td >Day5 &nbsp;&nbsp; &nbsp;&nbsp;
                                                                    <select name="Day5"  style="width:150px;" id="select11" class="inputtxt1"  onchange="journeytype()">
                                                                      <option value="0">Select</option>
                                                                      <option value="Cochin">Cochin</option>
                                                                      <option value="Munnar">Munnar</option>
                                                                      <option value="Thekkady">Thekkady</option>
                                                                      <option value="Alleppey">Alleppey </option>
                                                                      <option value="Madurai">Madurai </option>
                                                                      <option value="Rameshwaram">Rameshwaram </option>
                                                                      <option value="Kovalam">Kovalam </option>
                                                                      <option value="Kumarakom">Kumarakom </option>
                                                                      <option value="Trivandrum">Trivandrum </option>
                                                                      <option value="Wayanadu">Wayanadu </option>
                                                                      <option value="Calicut">Calicut </option>
                                                                      <option value="Coimbatore">Coimbatore </option>
                                                                      <option value="Kodaikanal">Kodaikanal </option>
                                                                      <option value="Ooty">Ooty </option>
                                                                      <option value="Ashtamudi">Ashtamudi </option>
                                                                      <option value="Kottayam">Kottayam </option>
                                                                      <option value="Guruvayoor">Guruvayoor </option>
                                                                      <option value="Kanyakumari">Kanyakumari </option>
                                                                    </select></td>
																  <td>&nbsp;</td>
																  <td>Day6 &nbsp;&nbsp; &nbsp;&nbsp;
                                                                    <select name="Day6"  style="width:150px;" id="select2" class="inputtxt1"  onchange="journeytype()">
                                                                      <option value="0">Select</option>
                                                                      <option value="Cochin">Cochin</option>
                                                                      <option value="Munnar">Munnar</option>
                                                                      <option value="Thekkady">Thekkady</option>
                                                                      <option value="Alleppey">Alleppey </option>
                                                                      <option value="Madurai">Madurai </option>
                                                                      <option value="Rameshwaram">Rameshwaram </option>
                                                                      <option value="Kovalam">Kovalam </option>
                                                                      <option value="Kumarakom">Kumarakom </option>
                                                                      <option value="Trivandrum">Trivandrum </option>
                                                                      <option value="Wayanadu">Wayanadu </option>
                                                                      <option value="Calicut">Calicut </option>
                                                                      <option value="Coimbatore">Coimbatore </option>
                                                                      <option value="Kodaikanal">Kodaikanal </option>
                                                                      <option value="Ooty">Ooty </option>
                                                                      <option value="Ashtamudi">Ashtamudi </option>
                                                                      <option value="Kottayam">Kottayam </option>
                                                                      <option value="Guruvayoor">Guruvayoor </option>
                                                                      <option value="Kanyakumari">Kanyakumari </option>
                                                                    </select></td>
																  <td>&nbsp;</td>
														  </tr>
																<tr>
																  <td >&nbsp;</td>
																  <td>&nbsp;</td>
																  <td>&nbsp;</td>
																  <td>&nbsp;</td>
														  </tr>
																
																<tr>
																	<td >Comments</td>
																	<td>&nbsp;</td>
																	<td><textarea name="Comments" cols="31" class="formTextMedium" style="width:200px;"></textarea></td>
																	<td>&nbsp;</td>
																</tr>
																<td height="10">&nbsp;</td>
																	<td>&nbsp;</td>
																	<td>&nbsp;</td>
																	<td>&nbsp;</td>
																</tr>
																<tr>
																	<td >Name <font color="#FF0000"> *</font></td>
																	<td>&nbsp;</td>
																	<td><input name="Name" class="required formTextMedium" type="text"><font color="#FF0000">
																	   <label id="errname" > </label>
																	</font></td>
																	<td>&nbsp;</td>
																</tr>
																<tr>
																	<td height="10">&nbsp;</td>
																	<td>&nbsp;</td>
																	<td>&nbsp;</td>
																	<td>&nbsp;</td>
																</tr>
																<tr>
																	<td >Email <font color="#FF0000"> *</font></td>
																	<td>&nbsp;</td>
																	<td><input name="Email" class="required formTextMedium" type="text"> <font color="#FF0000"><label id="erremail" ></label></font></td>
																	<td>&nbsp;</td>
																</tr>
																<tr>
																	<td height="10">&nbsp;</td>
																	<td>&nbsp;</td>
																	<td>&nbsp;</td>
																	<td>&nbsp;</td>
																</tr>
																<tr>
																	<td >Phone <font color="#FF0000"> *</font></td>
																	<td>&nbsp;</td>
																	<td><input name="Phone" type="text" class="required formTextMedium" id="Phone"> <font color="#FF0000"><label id="errphone" ></label></font></td>
																	<td>&nbsp;</td>
																</tr>
																<tr>
																	<td height="10">&nbsp;</td>
																	<td>&nbsp;</td>
																	<td>&nbsp;</td>
																	<td>&nbsp;</td>
																</tr>
																<tr>
																	<td >City <font color="#FF0000"> *</font></td>
																	<td>&nbsp;</td>
																	<td><input name="City" type="text" class="required formTextMedium" id="City"> <font color="#FF0000"><label id="errcity" ></label></font></td>
																	<td>&nbsp;</td>
																</tr>
																<tr>
																	<td style="height:10px;">&nbsp;</td>
																	<td>&nbsp;</td>
																	<td></td>
																	<td>&nbsp;</td>
																</tr>
																<tr>
																	<td >&nbsp;</td>
																	<td>&nbsp;</td>
																	<td><input aria-disabled="false" role="button" name="submit" class="button ui-button ui-widget ui-state-default ui-corner-all" value="submit" type="submit" onclick="return validatePackage(Vehicle.value,dept_date_dd.value,dept_date_mm.value,dept_date_yyyy.value,arr_date_dd.value,arr_date_mm.value,arr_date_yyyy.value,Adult.value,Children.value,journeytype.value,Name.value,Email.value,Phone.value,City.value);"></td>
																	<td>&nbsp;</td>
																</tr>
														</table>
														</form>
														</p>
														
														
										</div>
										<script language="javascript">

//alert("tiut");
document.booking.Vehicle.options['<?php echo $arrval[4];?>'].selected=true;
//var x=document.getElementById("Vehicle").selectedIndex;
//var y=document.getElementById("Vehicle").options;
//alert("Index: " + y[x].index + " is " + y[x].text);
//document.quoteForm.Vehicle.options[2].selected=true;
//document.quoteForm.Vehicle.selectedIndex=5;
//alert(document.getElementById("Vehicle").name);//=4
</script>
										<div class="contact">
												<div class="contact_inn">
														<span class="hed_font">Address</span><br/>
														<div class="line2"></div>
														<div class="clear"></div>
														<b><p align="left">1st Floor Teekay Tower  <br/>
Near Muthoot Technopolis<br/>
Seaport Airport Road<br/>
Kakkanad - 682037 <br/>
Email : info@keralataxitours.com <br/>
info@msglobalholidays.com
 </p></b>
												</div>
										</div>
												<div class="clear"></div>
													
								</div>
						</div>
						<div class="clear"> </div>
						<div class="mid_bottom"></div>
						<div class="clear"></div>
						<div id="footer">
						<table cellspacing="0" cellpadding="0" border="0" align="center" style="width: 100%; line-height: 0px;" class="footer_font">
<tbody>
<tr>
<td>
<p><a  class="link_color" href=" http://keralataxitours.com/">Taxi service kochi</a></p>
</td>
<td>
<p><a  class="link_color" href="http://keralataxitours.com/taxi-services-kochi.html">Taxi service cochin</a></p>
</td>
<td>
<p><a  class="link_color" href="http://keralataxitours.com/">Taxi service ernakulam</a></p>
</td>
<td>
<p><a  class="link_color" href="http://keralataxitours.com/about.html">Taxi operator kochi</a></p>
</td>
<td>
<p><a  class="link_color" href="http://keralataxitours.com/">Taxi operator cochin</a></p>
</td>
</tr>
<tr>
<td>
<p><a  class="link_color" href="http://keralataxitours.com/about.html">Taxi operator ernakulam</a></p>
</td>
<td>
<p><a  class="link_color" href="http://keralataxitours.com/">Rent a car kochi</a></p>
</td>
<td>
<p><a  class="link_color" href="http://keralataxitours.com/car.html"> Cab hire kochi</a></p>
</td>
<td>
<p><a  class="link_color" href=" http://keralataxitours.com/about.html">car hire kochi</a></p>
</td>
<td>
<p><a  class="link_color" href=" http://keralataxitours.com/car.html ">rental services kochi</a></p>
</td>
</tr>
<tr>
<td>
<p><a  class="link_color" href="http://keralataxitours.com/">tour operator kochi</a></p>
</td>
<td>
<p><a  class="link_color" href="http://keralataxitours.com/car.html">Taxi tours kochi</a></p>
</td>
<td>
<p><a  class="link_color" href=" http://keralataxitours.com/"> taxi tours cochin </a></p>
</td>
<td>
<p><a  class="link_color" href=" http://keralataxitours.com/about.html ">taxi tours ernakulam</a></p>
</td>
<td>
<p><a  class="link_color" href=" http://keralataxitours.com/about.html ">luxury cars for rent kochi</a></p>
</td>
</tr>
<tr>
<td>
<p><a  class="link_color" href="http://keralataxitours.com/">hire a cab kochi</a></p>
</td>
<td>
<p><a  class="link_color" href=" http://keralataxitours.com/ ">car rental services kochi</a></p>
</td>
<td>
<p><a  class="link_color" href="http://keralataxitours.com/car.html ">buses for rent kochi</a></p>
</td>
<td>
<p><a  class="link_color" href="http://keralataxitours.com/contact.php">tempo traveller for rent kochi</a></p>
</td>
<td>
<p><a  class="link_color" href="http://keralataxitours.com/">kerala taxi services</a></p>
</td>
</tr>
</tbody>
</table>
<p></p>
						
								<div class="footer_inner"><span class="footer_font">Copyright © 2011 Keralataxitours  All Rights Reserved.<br/>
Website by : <a href="http://www.phitany.com/" class="footer_link" target="_blank" title="Phitany">Phitany</a> and <a href="http://g3creativestudios.com/" class="footer_link" target="_blank" title="G3 Creative Studio">G3 Creative Studio</a> </span></div>
							<div class="footer_inner" align="right">
							<div class="footer_inner" align="right">
							<span class="footer_font"> <a href="index.html" class="footer_link">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="about.html" class="footer_link">About Us</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="car.html" class="footer_link">Packages</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="contact.php" class="footer_link">Contact Us</a></span>
							</div>
						</div>
		</div>
</body>
</html>
