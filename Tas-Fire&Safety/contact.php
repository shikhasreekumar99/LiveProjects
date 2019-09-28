

<?php
require_once('tas_backend/db.php');
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>TAS Fire &amp; Security</title>
<meta name="description" content="TAS Fire &amp; Security">
<meta name="viewport" content="width=device-width">
<link rel="shortcut icon" href="images/favicon.png">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300italic,300,400italic,500,500italic,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" class="alt" href="css/theme/sky-blue.css">
<script src="js/modernizr-2.6.2.min.js"></script>
</head>
<body>


<div id="pageloader">
  <div class="loader-item">
    <div class="loader">Loading...</div>
  </div>
</div>

<div class="sidemenu">
      <ul class="footer-contact">
      <li><a href="https://www.facebook.com/TAS-Fire-Security-910145592364846/" target="_blank"  > <img src="images/facebook_32.png"></a></li>
      <li><a href="https://twitter.com/TAS_Ontario" target="_blank" ><img src="images/twitter_32.png"> </a></li>
      <li><a href="https://www.linkedin.com/company/tas-fire-&-security" target="_blank"> <img src="images/linkedin_32.png"></a></li>
      <li><a href="mailto:info@tasfireandsecurity.ca"> <img src="images/email_32.png"></a></li>
    
      <li><a href="https://plus.google.com/100787998687789320842" target="_blank"> <img src="images/gmail.png"></a></li>
      <li><a href="https://www.pinterest.com/TAS_Ontario/" target="_blank"> <img src="images/pinterest_32.png"></a></li>
    </ul>
  </div>
<!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]--> 

<!-- xxx Header xxx -->
<header> 
  <!-- xxx Top Bar xxx -->
  <div class="top-bar">
    <div class="container">
      <div class="row">
         <div class="col-sm-4" style="font-size:24px; font-weight:600;"> <i class="fa fa-phone"></i>&nbsp; &nbsp;   905 870 7779 </div>
        
        <div class="col-sm-6 text-right pull-right" style="font-size:16px;" > <i class="fa fa-envelope"></i>&nbsp; &nbsp;info@tasfireandsecurity.ca </div>
      </div>
    </div>
  </div>
  <!-- xxx Top Bar xxx --> 
  
  <!-- xxx Logo And Navigation xxx -->
  <div id="nav-wrap">
    <div class="nav-bg">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div id="main-menu" class="menuzord"> <a href="javascript:void(0)" class="menuzord-brand"><img src="images/logo.jpg" alt="TAS Fire & Security"></a>
              <ul class="menuzord-menu">
                <li><a href="index.php"><span>Home</span></a></li>
                <li><a href="about-us.php"><span>About US</span></a></li>
                <li><a href="#"><span>Service</span></a>
                  <ul class="dropdown">
                   <?php
				  $res="SELECT * FROM `services`";
				  $sql=mysqli_query($con,$res);
				  while($row=mysqli_fetch_array($sql)){
				  ?>
                  
                    <li><a href="services.php?id=<?=$row['services_id'];?>"><?=$row['title'];?></a></li>
                <?php
				  }
				  ?>
                  </ul>
                </li>
                <li ><a href="testimonials.php"><span>Testimonials</span></a> </li>
                <li><a href="#"><span>Blog</span></a> </li>
                <li><a href="#"><span>Careers</span></a> </li>
                <li><a href="#"><span>Links</span></a> </li>
                <li class="active"><a href="contact.php"><span>Contact Us</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- xxx Logo and Navigation End xxx --> 
</header>
<!-- xxx Header End xxx --> 

<!-- xxx Slider Outer xxx --> 
<!-- xxx Slider Outer End xxx --> 

<!-- xxx Callout 1 xxx -->
<section class="breadcrumb-wrap">
  <div class="container pdngtop">
    <h1>CONTACT US</h1>
    <small><a href="index.php">Home</a> / Contact Us</small> </div>
</section>
<!-- xxx Callout 1 xxx --> 

<!-- xxx Body Content xxx -->

<div id="body-content" class="no-margin"> 
  <!-- xxx Contact Us xxx -->
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <h3>OUR ADDRESS</h3>
        <ul class="footer-contact">
          <li> <i class="fa fa-map-marker"></i>
            <div class="icon-text"> TAS Fire & Security,<br>
                35,Stone Church Rd,<br>
                Hamilton, Ontario,<br>
                Canada- L9K 1S4. </div>
          </li>
          <li> <i class="fa fa-phone"></i>
            <div class="icon-text"> 905 870 7779 <br>
            </div>
          </li>
          <li> <i class="fa fa-fax"></i>
            <div class="icon-text"> 905 581 7521 <br>
            </div>
          </li>
          <li> <i class="fa fa-envelope"></i>
            <div class="icon-text">
            <a href="#">info@tasfireandsecurity.ca</a><br>
          </li>
        </ul>
        <br>
      </div>
      <div class="col-sm-9">
        <h3>CONTACT FORM</h3>
        <div class="row">
          <div class="col-sm-12">
            <div>
              <div id="sucessmessage"> </div>
            </div>
          </div>
          <form action="#" method="post" id="contact_form" name="contact_form" novalidate>
            <div class="col-sm-4">
              <input type="text" name="name" id="name" class="form-control required" placeholder="Name">
            </div>
            <div class="col-sm-4">
              <input type="text" name="email" id="email" class="form-control required" placeholder="Email">
            </div>
            <div class="col-sm-4">
              <input type="text" name="subject" id="subject" class="form-control required" placeholder="Subject">
            </div>
            <div class="col-sm-12">
              <textarea name="message" id="message" class="form-control required" rows="8" placeholder="Message"></textarea>
              <span id="msg_error"></span>
            </div>
            <div class="col-sm-12">
              <button type="submit" class="form-btn">Contact us</button>
            </div>
          </form>  
          
        </div>
      
       <div id="thankyou" style="color:#030; display:none;"><br/><b>Thank you for contacting us.. We will get back to you soon.</b></div> 

      </div>
    </div>
  </div>
  <!-- xxx Contact Us End xxx --> 
  
 
</div>

<!-- xxx Body Content End xxx --> 

<!-- xxx Footer Content xxx -->

<section class="calloutnew">
  <div class="home-padnew">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12" > <img src="images/canadian.jpg" class="img-responsive center-block"> </div>
            <div class="col-md-3 col-sm-3 col-xs-12" > <img src="images/logo2.jpg" class="img-responsive center-block"> </div>
            <div class="col-md-3 col-sm-3 col-xs-12" > <img src="images/logo3.jpg" class="img-responsive center-block"> </div>
            <div class="col-md-3 col-sm-3 col-xs-12" > <img src="images/logo4.jpg" class="img-responsive center-block"> </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12" > <img src="images/logo5.jpg" class="img-responsive center-block"> </div>
            <div class="col-md-3 col-sm-3 col-xs-12" > <img src="images/logo6.jpg" class="img-responsive center-block"> </div>
            <div class="col-md-3 col-sm-3 col-xs-12" > <img src="images/logo7.jpg" class="img-responsive center-block"> </div>
            <div class="col-md-3 col-sm-3 col-xs-12" > <img src="images/logo8.jpg" class="img-responsive center-block"> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
</div>
<!-- xxx Body Content End xxx -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-3">
        <div class="footer-wrap-2">
          <div class="footer-logo"> <a href="#"><img src="images/logo.png" class="img-responsive center-block" alt=""></a> </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-3">
        <div class="footer-wrap-2">
          <div class="footer-logo"> <a href="#"><img src="images/fireclip.png" class="img-responsive center-block" alt=""></a> </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-3">
        <div class="footer-wrap-2">
          <h3>Get Socialize</h3>
          <div class="social-icons">
            <ul>
              <li><a href="https://www.facebook.com/TAS-Fire-Security-910145592364846/" target="_blank"  > <img src="images/facebook_32.png"></a></li>
      <li><a href="https://twitter.com/TAS_Ontario" target="_blank" ><img src="images/twitter_32.png"> </a></li>
      <li><a href="https://www.linkedin.com/company/tas-fire-&-security" target="_blank"> <img src="images/linkedin_32.png"></a></li>
      <li><a href="mailto:info@tasfireandsecurity.ca"> <img src="images/email_32.png"></a></li>
    
      <li><a href="https://plus.google.com/100787998687789320842" target="_blank"> <img src="images/gmail.png"></a></li>
      <li><a href="https://www.pinterest.com/TAS_Ontario/" target="_blank"> <img src="images/pinterest_32.png"></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-3">
        <div class="footer-wrap-2">
          <h3>Contact Us</h3>
          <ul class="footer-contact">
            <li> <i class="fa fa-map-marker"></i>
              <div class="icon-text"> TAS Fire & Security,<br>
                35,Stone Church Rd,<br>
                Hamilton, Ontario,<br>
                Canada- L9K 1S4. </div>
            </li>
            <li> <i class="fa fa-phone"></i>
              <div class="icon-text"> 905 870 7779 </div>
            </li>
            <li> <i class="fa fa-fax"></i>
              <div class="icon-text"> 905 581 7521 </div>
            </li>
            <li> <i class="fa fa-envelope"></i>
              <div class="icon-text"> <a href="#">info@tasfireandsecurity.ca</a> </div>
            </li>
            <li> </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- xxx Footer Content xxx -->

<section class="copyright">
  <div class="container">
    <div class="row">
    <div class="col-sm-12 text-center"> Copyright &copy; 2015 TAS Fire & Security. All Right Reserved . </div>
    </div>
  </div>
</section>
<!-- xxx Footer Content End xxx --> 

<!-- xxx Back To Top xxx -->
<div id="back-top"> <a class="img-circle" href="#top"> <i class="fa fa-angle-up"></i> </a> </div>
<!-- xxx End xxx --> 

<!-- JQuery Plugins--> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script src="js/jquery.validate.js"></script>

<script type="text/javascript">
$(document).ready(function(){

	
 $("#contact_form").validate({
           rules: {
			    email: {
				        
						required: true,
				        
						email: true,
						
			           },
					    
			  
                  },
				
		  errorPlacement: function(error, element) {
			  
                    if (element.attr("name") == "message"){
                  
				          error.appendTo("#msg_error");
              
			        }else  {
                   
				           error.insertAfter(element);
                    }
             },

          messages:{
		 
		         name: { 
                 required:"Enter your name"

               },
			    
                 email: { 
                 required:"Enter email id",
               },
			   
			    subject: { 
                 required:"Enter Subject",


               },
			     message: { 
                 required:"Enter your message"

               },
			   
	    },
		
    
	submitHandler: function(form) {
            
           $.ajax({
                 type: 'POST',
                 url: "mail/contact_mail.php",
                 data: $('#contact_form').serialize(),   // I WANT TO ADD EXTRA DATA + SERIALIZE DATA
                 success: function(msg){
					 
					    $('#thankyou').show();
					 $('form[name="contact_form"]')[0].reset();
					 
					 }
           });                                     
          return false; 

        }

		
		
		
		
    });

});

</script>

<script type='text/javascript' src="js/bootstrap.min.js"></script> 
<script type='text/javascript' src="js/menuzord.js"></script> 
<script type='text/javascript' src="js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="js/stellar.js"></script> 
<script type='text/javascript' src="twitter/jquery.tweet.js"></script> 
<script type='text/javascript' src="js/jquery.fancybox.js"></script> 
<script type="text/javascript" src="js/jquery.appear.min.js"></script> 
<script type="text/javascript" src="js/waypoints.min.js"></script> 
<script type="text/javascript" src="js/jquery.counterup.min.js"></script> 
<script type='text/javascript' src="js/jquery.validate.min.js"></script> 
<script type='text/javascript' src="js/jquery.fitvids.js"></script> 
<script type='text/javascript' src="js/jflickrfeed.min.js"></script> 
<script type="text/javascript" src="js/jquery.cubeportfolio.min.js"></script> 
<script type="text/javascript" src="js/portfolio-4.js"></script> 






<!-- JQuery Map Plugin --> 
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 
<script type="text/javascript" src="js/jquery.gmap.min.js"></script> 

<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script> 
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 
<script type='text/javascript' src="js/site-custom.js"></script> 

</body>
</html>
