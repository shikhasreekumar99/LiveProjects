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
				<li class=" c-menu-type-classic">
					<a href="index.php" >Home</a>
				</li>
				<li class="c-active c-menu-type-classic">
					<a href="about.php" >About Us</a>
				</li>
				<li class="c-menu-type-classic">
					<a href="#" class="c-link dropdown-toggle" >Services</a>
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
					<a href="" class="c-link dropdown-toggle" >Packages</a>
					
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
					<a href="testimonials.php" >Testimonials</a>
				</li>
                <li class="c-menu-type-classic">
					<a href="contacts.php" >Contact Us</a>
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
	<!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-3 -->
	<div class="c-layout-breadcrumbs-1 c-bgimage c-subtitle c-fonts-uppercase c-fonts-bold c-bg-img-center" style="background-image: url(images/bg-1.gif)">
		<div class="container">
			<div class="c-page-title c-pull-left">
				<h3 class="c-font-uppercase c-font-bold c-font-white c-font-20 c-font-slim">About Us</h3>
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
					About Us
				</li>
			</ul>
		</div>
	</div>
	<!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-3 -->
	<!-- BEGIN: PAGE CONTENT -->
	<!-- BEGIN: CONTENT/MISC/LATEST-ITEMS-3 -->
	<div class="c-content-box c-size-md c-bg-white pb0">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="c-content-media-1 p0">
						<p>Welcome to the world of modern living with innovative modular design from Lifestyle interio, all-round interior designers located at Aluva, Kochi. This organization is a pioneer in the field of customized interior work as per your budget. We offer comprehensive interior solutions for residential projects, office, showroom etc. We choose the best material, international technology, ultra-modern designs and latest trends to match your life style to its ultimate perfection. You can share with us for your total interior solutions. Simplicity in dealing, guaranteed product, unique & user friendly designs, strict commitments to the execution of work, offer as per your budget, ultimate customer satisfaction  and many more are our specialty. Our designs are intent to accommodate Indian life style and cooking culture otherwise demand.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="c-content-media-2-slider" data-slider="owl" data-single-item="true" data-auto-play="4000">
						<div class="c-content-label c-font-uppercase c-font-bold">
							Latest Projects
						</div>
						<div class="owl-carousel owl-theme c-theme owl-single">
							<div class="item">
								<div class="c-content-media-2 c-bg-img-center" style="background-image: url(images/slide-1.jpg); min-height: 380px;">
								</div>
							</div>
							<div class="item">
								<div class="c-content-media-2 c-bg-img-center" style="background-image: url(images/slide-2.jpg); min-height: 380px;">
								</div>
							</div>
							<div class="item">
								<div class="c-content-media-2 c-bg-img-center" style="background-image: url(images/slide-3.jpg); min-height: 380px;">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- BEGIN: CONTENT/MISC/ABOUT-1 -->
	<div class="c-content-box c-size-md c-bg-grey-1">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<!-- Begin: Title 1 component -->
					<div class="c-content-title-1">
						<h3 class="c-font-uppercase c-font-bold">Why lifestyle Interio</h3>
						<div class="c-line-left c-theme-bg">
						</div>
					</div>
					<!-- End-->
					<p>We believe styles have nothing to do with money and we don’t let budget compromise on stylish interiors.</p>
                    <p>We specialized in confortable, contemporary, affordable interiors that are designed to be functional and leaved in.</p>
                    <p>Each space we design is personalized to suite the lifestyle, taste and budget of each individual client.</p>
                    <p>All products are direct from factory with best quality materials at best price</p>
                    <p>We Guarantee Prompt delivery and completion of work.</p>
                    <p>We can do as much or as little as our clients want, from an initial starting point to a full design, project management and installation service.</p>
				</div>
				<div class="col-sm-6">
					<div class="c-content-client-logos-1">
						<!-- Begin: Title 1 component -->
						<div class="c-content-title-1">
							<h3 class="c-font-uppercase c-font-bold">Our services </h3>
							<div class="c-line-left c-theme-bg">
							</div>
						</div>
						<!-- End-->
						<ul class="c-content-list-1 c-theme c-font-uppercase">
						<li>Turnkey interior</li>
                        <li>Modular Kitchen</li>
                        <li>Home Cinema</li>
                        <li>Wardrobes</li>
                        <li>TV Units</li>
                        <li>Modular furniture  </li>
                        <li>Office, Shop and commercial building furnishing</li>

					</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END: CONTENT/MISC/ABOUT-1 -->
	<!-- BEGIN: CONTENT/SLIDERS/TESTIMONIALS-2 -->
    <div class="c-content-box c-size-md c-no-padding c-bg-dark-2">
		<div class="c-content-feature-4">
			<div class="c-bg-parallax c-feature-bg c-content-left c-diagonal c-border-right-dark-2" style="background-image: url(images/bg-1.jpg)">
			</div>
			<div class="c-content-area c-content-right">
			</div>
			<div class="container">
				<div class="c-feature-content c-right">
					<div class="c-content-v-center">
						<div class="c-wrapper">
							<div class="c-body">
								<div class="c-content-title-1">
									<h3 class="c-font-uppercase c-font-bold c-font-white">About Product</h3>
									<div class="c-line-right">
									</div>

								</div>
								<div class="c-content">
									<p class="c-margin-b-30">
										 All products from Lifestyle Interio are committed to provide with superior components of international standard with unmatched quality. Materials used are of top most quality having capacity to withstand atmospheric changes, moisture, pest etc, strictly complied with all effort to fulfill the eco-friendly norms. All fittings and accessories used are from top class brands. We allow our customers to opt the brand of material for the manufacture of products as per their budget, taste and satisfaction. Continuously researching for space management, Innovative methods to enhance the beauty, life span of products etc.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--<div class="c-content-box c-size-lg c-bg-white">
		<div class="container">
			<div class="c-content-testimonials-1 c-option-2" data-slider="owl" data-single-item="true" data-auto-play="8000">
				<div class="c-content-title-1">
					<h3 class="c-center c-font-uppercase c-font-bold">Our Satisfied Customers</h3>
					<div class="c-line-center c-theme-bg">
					</div>
				</div>
				<div class="owl-carousel owl-theme c-theme">
					<div class="item">
						<div class="c-testimonial">
							<p>
								 “Truly international quality product and services. The best kitchen solution I have seen”
							</p>
							<h3>
							<span class="c-name c-theme">-	S Sukumaran</span>, MIR Emerald park, Kakkanad</h3>
						</div>
					</div>
					<div class="item">
						<div class="c-testimonial">
							<p>
								 “The firm is always ready to listen our requirements and also spreading this culture into down line. I am blessing success and hoping lifestyle interio will take a new height in this field. 
Thank you lifestyle interio, the look and feel of the installed kitchen is grate and totally satisfied”
							</p>
							<h3>
							<span class="c-name c-theme">Advt. K K Chandrashekaran</span>, Trikkakara </h3>
						</div>
					</div>
					<div class="item">
						<div class="c-testimonial">
							<p>
								 “I was looking for something distinctive for my shop. The 3D visualization was amazing. Lifestyle interio did an excellent work without compromising on quality and time. Thank you”
							</p>
							<h3>
							<span class="c-name c-theme">Varapuzha</span>, CFO, Valar Dohaeris </h3>
						</div>
					</div>
					<div class="item">
						<div class="c-testimonial">
							<p>
								 “Lifestyle interio is an expression of esthetic mind and statement of personality”
							</p>
							<h3>
							<span class="c-name c-theme">-	Dr. Prabhu Ranjith</span>,Green Nature, Kakkanad</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>-->
    <div class="c-content-box c-size-md c-bg-grey">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="c-content-title-1 c-margin-b-60">
						<h3 class="c-center c-font-uppercase c-font-bold">
						Our Process</h3>
						<div class="c-line-center">
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="c-content-step-1 c-opt-1">
						<div class="c-icon">
							<span class="c-hr c-hr-first"><i class="fa fa-phone"></i></span>
						</div>
						<div class="c-title c-font-20 c-font-bold c-font-uppercase">
							Step 01
						</div>
						<div class="c-description c-font-17">
							 Dial 9995105807 or 9447819195 to fix an appointment with our Interior Solution Team (IST)
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="c-content-step-1 c-opt-1">
						<div class="c-icon">
							<span class="c-hr"><i class="fa fa-male"></i></span>
						</div>
						<div class="c-title c-font-20 c-font-bold c-font-uppercase">
							Step 02
						</div>
						<div class="c-description c-font-17">
							 IST will reach your site to discuss and analysis your requirements like space utilization, style, budget, material of construction and to take measurement.
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<div class="c-content-step-1 c-opt-1">
						<div class="c-icon">
							<span class="c-hr c-hr-last"><i class="fa fa-picture-o"></i></span></span>
						</div>
						<div class="c-title c-font-20 c-font-bold c-font-uppercase">
							Step 03
						</div>
						<div class="c-description c-font-17">
							 Presentation of primary designed 2D drawing for further modifications if any along with quotation and specification of materials   
						</div>
					</div>
				</div>
			</div>
            <div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="c-content-step-1 c-opt-1">
						<div class="c-icon">
							<span class="c-hr c-hr-first"><i class="fa fa-laptop"></i></span>
						</div>
						<div class="c-title c-font-20 c-font-bold c-font-uppercase">
							Step 04
						</div>
						<div class="c-description c-font-17">
							 Total solution is mocked up in realistic 3D and presented for suggestions and finalization. Once design is finalized we will manufacture the items at the automated factory
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="c-content-step-1 c-opt-1">
						<div class="c-icon">
							<span class="c-hr"><i class="fa fa-magic"></i></span>
						</div>
						<div class="c-title c-font-20 c-font-bold c-font-uppercase">
							Step 05
						</div>
						<div class="c-description c-font-17">
							 Our expert and talented professional team will install the unit at your site
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<div class="c-content-step-1 c-opt-1">
						<div class="c-icon">
							<span class="c-hr c-hr-last"><i class="fa fa-users"></i></span></span>
						</div>
						<div class="c-title c-font-20 c-font-bold c-font-uppercase">
							Step 06
						</div>
						<div class="c-description c-font-17">
							 Final inspections by our executives
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END: CONTENT/SLIDERS/TESTIMONIALS-2 -->
	<!-- END: PAGE CONTENT -->
</div>
<!-- END: PAGE CONTAINER -->
<!-- BEGIN: LAYOUT/FOOTERS/FOOTER-5 -->
<a name="footer"></a>


<?php require_once('footer.php');?>

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
<!-- END: LAYOUT/BASE/BOTTOM -->
</body>
</html>