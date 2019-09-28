<?php require_once('lifestyle_backend/db.php');?>
<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Lifestyle Interio | Your complete interior solutions</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
<link href="assets/plugins/socicon/socicon.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/bootstrap-social/bootstrap-social.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/animate/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN: BASE PLUGINS  -->
<link href="assets/plugins/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/owl-carousel/owl.transitions.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
<!-- END: BASE PLUGINS -->
<!-- BEGIN THEME STYLES -->
<link href="assets/base/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="assets/base/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="assets/base/css/themes/default.css" rel="stylesheet" id="style_theme" type="text/css"/>
<link href="assets/base/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>

<style>
.error{
	color:#C00;
	
	
	}

</style>



<body class="c-layout-header-fixed c-layout-header-6-topbar">
<a href="javascript:;" data-toggle="modal" data-target="#login-form"><div class="quote"></div></a>
<!-- BEGIN: CONTENT/MODAL -->
<div class="modal fade c-content-login-form" id="login-form" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content c-square">
			<div class="modal-header c-no-border">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<h3 class="c-font-24 c-font-sbold">Request a Quote</h3>
				<p>
					Let's make today a great day!
				</p>
                
                
                <form role="form" name="request_form" action="" id="request_form" method="post" enctype="multipart/form-data"> 
					<div class="form-group">
						<label for="login-email" class="hide">Name</label>
						<input type="text" name="name" class="form-control input-lg c-square required" placeholder="Name">
                        
                        <span id="name_error"></span>
					</div>
                    <div class="form-group">
						<label for="login-email" class="hide">Email</label>
						<input type="text" name="email" class="form-control input-lg c-square required" placeholder="Email">
               <span id="email_error"></span>

					</div>
                    <div class="form-group">
						<label for="login-email" class="hide">Contact Number</label>
						<input type="text" name="contact" class="form-control input-lg c-square required" placeholder="Contact Number">
                        <span id="contact_error"></span>
					</div>
                    <div class="form-group">
                        <textarea rows="8" name="message" placeholder="Write comment here ..." class="form-control input-lg c-square required"></textarea>
                        <span id="msg_error"></span>
                    </div>
					<div class="form-group">
						<button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Submit</button>
					</div>
				</form>
                
                <div id="c_thankyou" style="color:green; display:none;" > <b>Thank You.</b>
                             We will get back you soon.  </div>
                
			</div>
		</div>
	</div>
</div>

<!-- END: CONTENT/MODAL -->
<!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
<!-- BEGIN: HEADER -->
<header class="c-layout-header c-layout-header-6 c-navbar-fluid">
<div class="c-topbar">
	<div class="container">
		<nav class="c-top-menu">
		<ul class="c-links c-theme-ul">
			<li>
				<a href="#" class="c-font-uppercase c-font-bold">Call Us On : +91 9995105807</a>
			</li>
			<!--<li class="c-divider"></li>-->
			<li>
                <a href="index.php"><i class="fa fa-home" style="font-size:18px;"></i></a>
			</li>
            <li>
                <a href="mailto:info@lifestyleinterio.co.in"><i class="fa fa-envelope"></i></a>
			</li>
		</ul>
		<ul class="c-ext hide c-theme-ul">
			<li class="c-search hide">
				<!-- BEGIN: QUICK SEARCH -->
				
				<!-- END: QUICK SEARCH -->
			</li>
		</ul>
		</nav>
		<div class="c-brand">
			<a href="index.php" class="c-logo">
			<img src="images/logo.png" alt="Lifestyle Interio" class="c-desktop-logo">
			<img src="images/logo.png" alt="Lifestyle Interio" class="c-desktop-logo-inverse">
			<img src="images/logo.png" alt="Lifestyle Interio" class="c-mobile-logo">
			</a>
			
			<button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
			<span class="c-line"></span>
			<span class="c-line"></span>
			<span class="c-line"></span>
			</button>
			
		</div>
	</div>
</div>
<div class="c-navbar">
	<div class="container">
		<!-- BEGIN: BRAND -->
		<div class="c-navbar-wrapper clearfix">
			<!-- END: BRAND -->
			<!-- BEGIN: QUICK SEARCH -->
			<form class="c-quick-search" action="#">
				<input type="text" name="query" placeholder="Type to search..." value="" class="form-control" autocomplete="off">
				<span class="c-theme-link">&times;</span>
			</form>
			<!-- END: QUICK SEARCH -->
			<!-- BEGIN: HOR NAV -->
			<!-- BEGIN: LAYOUT/HEADERS/MEGA-MENU -->
			<!-- BEGIN: MEGA MENU -->
			<nav class="c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold">
			<!-- BEGIN: MEGA MENU -->
			<ul class="nav navbar-nav c-theme-nav">
				<li class="c-menu-type-classic">
					<a href="index.php">Home</a>
				</li>
				<li class="c-menu-type-classic">
					<a href="about.php">About Us</a>
				</li>
				<li class="c-menu-type-classic">
					<a href="#" class="c-link dropdown-toggle">Services</a>
					<ul class="dropdown-menu c-menu-type-classic c-pull-left">
						<li>
							<a href="turnkey.php">Turnkey Interior</a>
						</li>
						<li>
							<a href="modular-kitchen.php">Modular Kitchen</a>
						</li>
                        <li>
							<a href="wardrobes.php">Wardrobes</a>
						</li>
                        <li>
							<a href="tv.php">TV Units</a>
						</li>
                        <li>
							<a href="home-cinema.php">Home Cinema</a>
						</li>
                        <li>
							<a href="furniture.php">Modular furniture  </a>
						</li>
                        <li>
							<a href="office.php">Office, Shop & commercial building furnishing</a>
						</li>
					</ul>
				</li>
                <li class="c-menu-type-classic">
					<a href="" class="c-link dropdown-toggle">Packages</a>
					<ul class="dropdown-menu c-menu-type-classic c-pull-left">
						 <?php
				  $res="SELECT * FROM `packages`";
				  $sql=mysqli_query($con,$res);
				  while($row=mysqli_fetch_array($sql)){
				  ?>
                  
                    <li><a href="package.php?id=<?=$row['pack_id'];?>"><?=$row['title'];?></a></li>
                <?php
				  }
				  ?>
					</ul>
				</li>
                <li class="c-menu-type-classic">
					<a href="gallery.php">Gallery</a>
				</li>
                <li class="c-menu-type-classic">
					<a href="testimonials.php">Testimonials</a>
				</li>
                <li class="c-active c-menu-type-classic">
					<a href="contacts.php">Contact Us</a>
				</li>
				
			</ul>
			<!-- END MEGA MENU -->
			</nav>
			<!-- END: MEGA MENU -->
			<!-- END: LAYOUT/HEADERS/MEGA-MENU -->
			<!-- END: HOR NAV -->
		</div>
	</div>
</div>
</header>
<!-- END: HEADER -->
<!-- BEGIN: PAGE CONTAINER -->
<div class="c-layout-page">
	<!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-1 -->
	<div class="c-layout-breadcrumbs-1 c-bgimage c-subtitle c-fonts-uppercase c-fonts-bold c-bg-img-center" style="background-image: url(images/bg-1.gif)">
		<div class="container">
			<div class="c-page-title c-pull-left">
				<h3 class="c-font-uppercase c-font-bold c-font-white c-font-20 c-font-slim">Contact Us</h3>
				<h4 class="c-font-white c-font-thin c-opacity-07">
				History of Lifestyle Interio </h4>
			</div>
			<ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
				<li>
					<a href="index.php" class="c-font-white">Home</a>
				</li>
				<li class="c-font-white">
					/
				</li>
				<li class="c-state_active c-font-white">
					Contact Us
				</li>
			</ul>
		</div>
	</div>
	<!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-1 -->
	<!-- BEGIN: PAGE CONTENT -->
	<!-- BEGIN: CONTENT/CONTACT/FEEDBACK-2 -->
	<div class="c-content-box c-size-md c-no-padding c-bg-img-center" style="background-image:url(images/bg-2.jpg);">
		<div class="container">
			<div class="c-content-feedback-1 c-option-2">
				<div class="c-content-title-1">
					<h3 class="c-center c-font-white c-font-bold c-font-uppercase">Lifestyle <span class="c-font-black">Interio</span></h3>
					<div class="c-line-center c-left">
					</div>
					<div class="c-line-center c-right">
					</div>
					<p class="c-center c-font-white">
						Modern Design&nbsp;<span>&nbsp;&nbsp;Always Committed</span>
					</p>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="c-container c-bg-white c-bg-img-bottom-right" style="background-image:url(assets/base/img/content/misc/feedback_box_3.png)">
							<div class="c-content-title-1">
								<h3 class="c-font-uppercase c-font-bold">ABOUT PRODUCT</h3>
								<div class="c-line-left">
								</div>
								<p class="c-font-lowercase">
									All products from Lifestyle Interio are committed to provide with superior components of international standard with unmatched quality. 
								</p>
								<a href="about.php" class="btn btn-md c-btn-border-2x c-btn-square c-theme-btn c-btn-uppercase c-btn-bold">Read More</a>
							</div>
						</div>
						<div class="c-container c-bg-white c-bg-img-bottom-right" style="background-image:url(assets/base/img/content/misc/feedback_box_2.png)">
							<div class="c-content-title-1">
								<h3 class="c-font-uppercase c-font-bold">Contact Us</h3>
								<div class="c-line-left">
								</div>
								<div class="c-section">
								<div class="c-content-label c-font-uppercase c-font-bold c-theme-bg">
									Address
								</div>
								<p>
									Lifestyle Interio,<br>Door No: XXI / 158 1st floor, <br> Menachery building,Paravoor Junction,<br>Thottakkattukara P.O, Aluva<br>Ernakulam- 683108
								</p>
							</div>
                            <div class="c-section m15">
								<div class="c-content-label c-font-uppercase c-font-bold c-theme-bg">
									Contacts
								</div>
								<p>
									<strong>Office</strong>+91 9995105807<br><strong>Mobile</strong> +91 9995105807
								</p>
							</div>
						  </div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="c-contact">
							<div class="c-content-title-1">
								<h3 class="c-font-uppercase c-font-bold">Keep in touch</h3>
								<div class="c-line-left">
								</div>
								<p class="c-font-lowercase">
									Our helpline is always open to receive any inquiry or feedback. Please feel free to drop us an email from the form below and we will get back to you as soon as we can.
								</p>
							</div>
                            
                            
                            
 <form role="form" name="contact_form" action="" id="contact_form" method="post" enctype="multipart/form-data"> 
								<div class="form-group">
									<input type="text" placeholder="Your Name"  name="name"  class="form-control c-square c-theme input-lg required">
								</div>
								<div class="form-group">
									<input type="text" placeholder="Your Email"  name="email"  class="form-control c-square c-theme input-lg required">
								</div>
								<div class="form-group">
									<input type="text" placeholder="Contact Phone"  name="contact"  class="form-control c-square c-theme input-lg required">
								</div>
								<div class="form-group">
									<textarea rows="8" name="message" placeholder="Write comment here ..." class="form-control c-theme c-square input-lg required"></textarea>
								</div>
								<button type="submit" class="btn c-theme-btn c-btn-uppercase btn-lg c-btn-bold c-btn-square">Submit</button>
							</form>
                             <div id="c_thankyou" style="color:green; display:none;" > <b>Thank You.</b>
                             We will get back you soon.  </div>
                             
                             
                             
                             
                             
                             
                             
                             
                             
                             
                             
						</div>
					</div>
				</div>
                
              
               
              
                
			</div>
		</div>
	</div>
    
      <div class="c-content-box c-size-lg c-bg-grey p0">
    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15711.028206350404!2d76.3437107318869!3d10.11896184622822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTDCsDA3JzA4LjYiTiA3NsKwMjAnMzQuMSJF!5e0!3m2!1sen!2sin!4v1441348505212" width="100%" height="500px" frameborder="0" allowfullscreen></iframe>
    </div>
     
                
	<!-- END: CONTENT/CONTACT/FEEDBACK-2 -->
	<!-- END: PAGE CONTENT -->
</div>

<!-- END: PAGE CONTAINER -->
<!-- BEGIN: LAYOUT/FOOTERS/FOOTER-5 -->
<a name="footer"></a>

<footer class="c-layout-footer c-layout-footer-1">


<div class="c-postfooter">
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-sm-7">
				<p class="c-copyright c-font-oswald c-font-14">
					 Copyright &copy; 2015 Lifestyle Interio. Powered by Phitany, <a href="http://www.phitany.com/" target="_blank">Webdesigning Company in Kerala</a>
				</p>
			</div>
			<div class="col-md-5 col-sm-5">
				<ul class="c-socials">
					<li>
						<a href="https://www.facebook.com/pages/Lifestyle-Interio-Interior-Designers/156572701349859" target="_blank"><i class="fa fa-facebook"></i></a>
					</li>
					<li>
						<a href="https://twitter.com/lifestylealuva" target="_blank"><i class="fa fa-twitter"></i></a>
					</li>
					<li>
						<a href="https://www.youtube.com/channel/UCs-EbLXubgkmFn9WqLThF5w?view_as=public" target="_blank"><i class="fa fa-youtube-play"></i></a>
					</li>
					<li>
						<a href="https://plus.google.com/103001900645885022230/posts/p/pub" target="_blank"><i class="fa fa-google-plus"></i></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>


</footer>



<!-- END: LAYOUT/FOOTERS/FOOTER-5 -->
<!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
<div class="c-layout-go2top" style="display: block;">
	<i class="icon-arrow-up"><img src="images/up.png"></i>
</div>
<!-- END: LAYOUT/FOOTERS/GO2TOP -->
<!-- BEGIN: LAYOUT/BASE/BOTTOM -->
<!-- BEGIN: CORE PLUGINS -->
<!--[if lt IE 9]>
	<script src="../assets/global/plugins/excanvas.min.js"></script> 
	<![endif]-->
<script src="assets/plugins/jquery.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

<script src="assets/plugins/jquery.validate.js"></script>
    
<script type="text/javascript">
$(document).ready(function(){




 $("#request_form").validate({
           rules: {
			    email: {
				        
						required: true,
				        
						email: true,
						
			           },
					    
			   contact: {
				   
                       number: true, // as space is not a number it will return an error
					   
                       minlength: 10, // will count space 
			
                       maxlength: 15
                      
					   },
			  

                  },
				  
				  
	      errorPlacement: function(error, element) {
			  
                    if (element.attr("name") == "name"){
                  
				          error.appendTo("#name_error");
              
			        }else  if (element.attr("name") == "email"){
                  
				          error.appendTo("#email_error");
              
			        }else  if (element.attr("name") == "contact"){
                  
				          error.appendTo("#contact_error");
              
			        }else  if (element.attr("name") == "message"){
                  
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
			   
			     contact: { 
                 required:"Enter your contact number",

               },
			   
			     message: { 
                 required:"Enter your message"

               }, 
			   
			  
	    },
		
    
	submitHandler: function(form) {
            
           $.ajax({
                 type: 'POST',
                 url: "mail/request_mail.php",
                 data: $('#request_form').serialize(),   // I WANT TO ADD EXTRA DATA + SERIALIZE DATA
                 success: function(msg){
					 
					    $('#r_thankyou').show();
					 $('form[name="request_form"]')[0].reset();
					 
					 }
           });                                     
          return false; 

        }

		
    });



	
 $("#send_form").validate({
           rules: {
			    email: {
				        
						required: true,
				        
						email: true,
						
			           },
					    
			   contact: {
				   
                       number: true, // as space is not a number it will return an error
					   
                       minlength: 10, // will count space 
			
                       maxlength: 15
                      
					   },
			  

                  },
				
		 
          messages:{
		 
		         name: { 
                 required:"Enter your name"

               },
			    
                 email: { 
                 required:"Enter email id",
               },
			   
			     contact: { 
                 required:"Enter your contact number",

               },
			   
			     message: { 
                 required:"Enter your comment"

               }, 
			   
			   subject: { 
                 required:"Enter  subject"

               },
			   
	    },
		
    
	submitHandler: function(form) {
            
           $.ajax({
                 type: 'POST',
                 url: "mail/note_mail.php",
                 data: $('#send_form').serialize(),   // I WANT TO ADD EXTRA DATA + SERIALIZE DATA
                 success: function(msg){
					 
					    $('#s_thankyou').show();
					 $('form[name="send_form"]')[0].reset();
					 
					 }
           });                                     
          return false; 

        }

		
    });



	
 $("#contact_form").validate({
           rules: {
			    email: {
				        
						required: true,
				        
						email: true,
						
			           },
					    
			   contact: {
				   
                       number: true, // as space is not a number it will return an error
					   
                       minlength: 10, // will count space 
			
                       maxlength: 15
                      
					   },
			  

                  },
				
		 
          messages:{
		 
		         name: { 
                 required:"Enter your name"

               },
			    
                 email: { 
                 required:"Enter email id",
               },
			   
			     contact: { 
                 required:"Enter your contact number",

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
					 
					    $('#c_thankyou').show();
					 $('form[name="contact_form"]')[0].reset();
					 
					 }
           });                                     
          return false; 

        }

		
		
		
		
    });

});

</script>





<!-- END: CORE PLUGINS -->
<!-- BEGIN: LAYOUT PLUGINS -->
<script src="assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
<script src="assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<script src="assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
<script src="assets/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="assets/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
<!-- END: LAYOUT PLUGINS -->
<!-- BEGIN: THEME SCRIPTS -->
<script src="assets/base/js/components.js" type="text/javascript"></script>
<script src="assets/base/js/app.js" type="text/javascript"></script>
<script>
	$(document).ready(function() {    
		App.init(); // init core    
	});
	</script>
<!-- END: THEME SCRIPTS -->
<!-- BEGIN: PAGE SCRIPTS -->
<script src="//maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
<script src="assets/plugins/gmaps/gmaps.js" type="text/javascript"></script>
<script src="assets/base/js/scripts/pages/contact.js" type="text/javascript"></script>
<!-- END: PAGE SCRIPTS -->
<!-- END: LAYOUT/BASE/BOTTOM -->
</body>
</html>