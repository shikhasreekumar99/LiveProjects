<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Taxi service kochi/cochin/ernakulam | taxi operator kochi | cab hire kochi | tour operator kochi | taxi tours cochin | hire a taxi kochi | car hire cochin | rent a car kochi | car rentals kochi/cochin/ernakulam | luxury buses kochi/cochin/ernakulam | tempo traveller rental in kochi | luxury cars for rent kochi | cochin/kochi car rentals/hire</title>
<meta name="keywords" content="Taxi service kochi/cochin/ernakulam | taxi operator kochi/cochin/ernakulam | cab hire kochi/cochin/ernakulam | tour operator kochi/cochin/ernakulam | taxi tours kochi/cochin/ernakulam | hire a taxi kochi/cochin/ernakulam | car hire kochi/cochin/ernakulam | rent a car kochi/cochin/ernakulam | car rentals kochi/cochin/ernakulam | luxury buses kochi/cochin/ernakulam | tempo traveller rental in kochi/cochin/ernakulam | luxury cars for rent kochi/cochin/ernakulam | cochin/kochi car rentals/hire" />  
 
<meta name="description" content=" Kerala taxi tours is a professionally managed service provider for rent/hire a car, bus, tempo traveller in kochi/cochin/ernakulam" />

<link href="css/style.css" rel="stylesheet" type="text/css"/>
<style>
.link_color
{
color:#617C58; text-decoration:none; border-bottom: 1px dotted;
}
</style>
<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
<script language="javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
		$("#contactForm").validate({
		errorClass: "inputError",
		messages: {
			name: {
				required: ""				
			},
			message: {
				required: ""				
			},
			email: {
				required: ""				
			},
			mobile: {
				required: ""				
			},
			txtcomments: {
				required: ""				
			},
			
		},
		submitHandler: function() {
		    name = $("#name").val();
			message = $("#message").val();
			email = $("#email").val();
			mobile = $("#mobile").val();
			txtcomments = $("#txtcomments").val();
		
			var sendData = '&name='+name+'&message='+message+'&email='+email+'&mobile='+mobile+'&txtcomments='+txtcomments;
			$.ajax({
	  		type: "POST",
	  		url: "mail/mail.php",
	  		data: sendData,
	  		success: function(msg) {
				$('#res').html(msg)
				.hide()
				.slideDown(1000, function() {
				});
				<!--if(msg == "<span style='color:red;'>MAIL SENT SUCCESSFULLY</span>" || msg == "FAIL TO SENT MAIL")-->
				if(msg == "<span style='color:green;'><b>MAIL SENT SUCCESSFULLY</b></span>" || msg == "<span style='color:red;'><b>FAIL TO SENT MAIL</b></span>") {
					$("#name").val("");
					$("#message").val("");
					$("#email").val("");
					$("#mobile").val("");
					$("#txtcomments").val("");
					
					d = new Date();
				}
				setTimeout(
  function() 
  {
   $('#res').html(msg)
				
				.slideUp(1000, function() {
				});
  }, 4000);
				
	  		}
		});
		return false; }
	});	
});
</script>

</head>

<body>
		<div id="wrapper">
				<div id="header">
					<div class="logo"><a href="index.html"><img src="images/logo.png" border="0"/></a></div>
					<div class="logo_right">
							<div class="menu">
									<div class="home" align="left"><a href="index.html" class="menu_font">Home</a></div>
									<div class="abo" align="center"><a href="about.html" class="menu_font">About Us</a></div>
									<div class="car" align="center"><a href="car.html" class="menu_font"> Packages</a></div>
									<div class="con" align="center"><a href="contact.php" class="menu_font">Contact Us</a></div>
							</div>
							<div class="clear"></div>
							<div class="pho">
								<div class="ph"><img src="images/phon.png" border="0"/></div><span class="ph_font">Helpline : 09446529261</span><span class="lang">(English)</span><br/>
								<span class="ph_font">&nbsp;&nbsp;&nbsp;24 X 7 : 09388429261</span><span class="lang">(Hindi)</span>
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
												<span class="hed_font">Contact Us </span><br/>
														<div class="line"></div>
														<div class="clear"></div>
                                                        
            <form action="" method="post" enctype="multipart/form-data" id="contactForm" > 
            <div id="res"></div>
                                                       
      <table width="525"  border="0" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;">
          <tr>
		  	<td></td><td>Fields marked by <span class="style10">*</span> are mandatory </td>
		  </tr>
		  <tr>
               <td width="113" valign="top">Name <font color="#FF0000">*</font></td>
                <td width="402"><input type="text" id="name" name="name" class="txtbox input required"/></td>
		  </tr>
				<tr>
				<td>&nbsp;</td>
				<td>
                  <font color="#FF0000"><label id="cserrname" ></label></font> </td>
              </tr>
              <tr>
                <td valign="top">Address</td>
                <td><input name="message"   type="text"  id="message"  class="input required textbox" /></td>
              </tr>
				<tr>
				<td>&nbsp;</td><td>&nbsp;</td>
              </tr>
              <tr>
                <td valign="top">Email <font color="#FF0000">*</font></td>
                <td><input type="text"  id="email" name="email" class="input required email txtbox"/></td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>
                  <font color="#FF0000"><label id="cserremail"></label></font></td>
              </tr>
              <tr>
                <td valign="top">Mobile <font color="#FF0000">*</font></td>
                <td><input type="text" id="mobile" name="mobile" class="input required number txtbox"/> 
            <span class="style7">(eg : 9000000000)</span></td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td>
                  <font color="#FF0000"><label id="cserrphone"></label></font></td>
              </tr>
              <tr>
                <td valign="top">Comments</td>
                <td><textarea name="txtcomments"   cols="40" rows="5"  id="txtcomments" class="textbox" ></textarea></td>
              </tr>
              <tr>
                <td height="36" valign="bottom">&nbsp;</td>
                <td valign="bottom"><input name="submit" type="submit" style="width:48px; height:25px; border:none; float:left;" class="submit" alt="Send Email"/>
                  &nbsp;
                  <!--input name="Submit2" type="submit" class="textbox" value="Cancel"  /--></td>
              </tr>
            </table>
            </form>
														
														
										</div>
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
<p><a  class="link_color" href="http://keralataxitours.com/taxi-service-kochi.html">Taxi service kochi</a></p>
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
