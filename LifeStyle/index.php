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
<meta content="" name="Lifestyle Interio"/>
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
<link href="assets/plugins/revo-slider/css/settings.css" rel="stylesheet" type="text/css"/>
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
<!-- BEGIN: PAGE CONTAINER -->
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
			
			<!-- END: QUICK SEARCH -->
			<!-- BEGIN: HOR NAV -->
			<!-- BEGIN: LAYOUT/HEADERS/MEGA-MENU -->
			<!-- BEGIN: MEGA MENU -->
			<nav class="c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold">
			<!-- BEGIN: MEGA MENU -->
			<ul class="nav navbar-nav c-theme-nav">
				<li class="c-active c-menu-type-classic">
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
                <li class="c-menu-type-classic">
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
<!-- END: LAYOUT/HEADERS/HEADER-1 -->
<div class="c-layout-page">
	<!-- BEGIN: PAGE CONTENT -->
	<!-- BEGIN: LAYOUT/SLIDERS/REVO-SLIDER-4 -->
	<section class="c-layout-revo-slider c-layout-revo-slider-4">
	<div class="tp-banner-container c-theme" style="height: 75%">
		<div class="tp-banner">
			<ul>
				<!--BEGIN: SLIDE #1 -->
				<li data-transition="fade" data-slotamount="1" data-masterspeed="1000">
					<img alt="" src="images/slide-1.jpg" class="fit">
					<div class="caption lft tp-resizeme" data-x="left" data-y="center" data-voffset="110" data-speed="900" data-start="2000" data-easing="easeOutExpo">
						<a href="#" class="c-action-btn btn btn-lg c-btn-square life-style-btn c-btn-bold c-btn-uppercase">We transform your dreams into<br>reality & make you smile</a>
					</div>
				</li>
				<!--END -->
				<!--BEGIN: SLIDE #2 -->
				<li data-transition="fade" data-slotamount="1" data-masterspeed="1000">
					<img alt="" src="images/slide-2.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
					<div class="caption lft tp-resizeme" data-x="left" data-y="center" data-voffset="110" data-speed="900" data-start="2000" data-easing="easeOutExpo">
						<a href="#" class="c-action-btn btn btn-lg c-btn-square life-style-btn c-btn-bold c-btn-uppercase">Wardrobes</a>
					</div>
				</li>
				<!--END -->
				<!--BEGIN: SLIDE #3 -->
				<li data-transition="fade" data-slotamount="1" data-masterspeed="1000">
					<img alt="" src="images/slide-3.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
					<div class="caption lft tp-resizeme" data-x="left" data-y="center" data-voffset="110" data-speed="900" data-start="2000" data-easing="easeOutExpo">
						<a href="#" class="c-action-btn btn btn-lg c-btn-square life-style-btn c-btn-bold c-btn-uppercase">Modular Kitchen</a>
					</div>
				</li>
                <li data-transition="fade" data-slotamount="1" data-masterspeed="1000">
					<img alt="" src="images/slide-4.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
					<div class="caption lft tp-resizeme" data-x="left" data-y="center" data-voffset="110" data-speed="900" data-start="2000" data-easing="easeOutExpo">
						<a href="#" class="c-action-btn btn btn-lg c-btn-square life-style-btn c-btn-bold c-btn-uppercase">Turnkey Interior</a>
					</div>
				</li>
				<!--END -->
			</ul>
		</div>
	</div>
	</section>
	<div class="c-content-box c-size-lg c-bg-grey-1 p0">
		<div class="col-md-12 p0">
            <div class="col-md-6 p0">
            	<div class="white-fill">
                    <div class="c-content-feature-5">
                        <div class="c-content-title-1">
                            <h3 class="c-left c-font-dark c-font-uppercase c-font-bold">Why<br>Lifestyle Interio ?</h3>
                            <div class="c-line-left c-bg-blue-3 c-theme-bg">
                            </div>
                        </div>
                        <div class="c-text">
                             We believe styles have nothing to do with money and we don’t let budget compromise on stylish interiors.
                        </div>
                        <button type="submit" class="btn c-btn-uppercase btn-md c-btn-bold c-btn-square c-theme-btn">Explore</button>
                        <img class="c-photo img-responsive" width="400" alt="" src="images/dummy.jpg">
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 p0">
            	<div class="black-fill">
                <ul class="c-content-list-1 c-theme">
                        <li>
                            Direct from factory   
                        </li>
                        <li>
                            Best quality materials 
                        </li>
                        <li>
                            State of the art design
                        </li>
                        <li>
                            Focus on Optimal space utilization and ease of use
                        </li>
                        <li>
                            Experienced and talented workforce
                        </li>
                        <li>Emphasis on customer satisfaction</li>
                        <li>On Time completion</li>
                        <li>Fits your budget</li>
                        <li>Value for money</li>
                        <li>Prompt delivery</li>
                        <li>Simple terms and conditions</li>

                    </ul>
                    </div>
            </div>
		</div>
        <div class="reset"></div>
	</div>
    <div class="c-content-box c-size-md gradinat-1">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-4">
                	<div class="gradinat-2">
                    	All Products  <br>
                        <span style="font-size:30px; text-transform:uppercase; font-weight:bold;">Direct </span><br>
                       from Factory
                    </div>
                </div>
                <div class="col-md-4">
                	<div class="gradinat-2">
                    	Interior Services  <br>
                        <span style="font-size:30px; text-transform:uppercase; font-weight:bold;">anywhere </span><br>
                        in Kerala
                    </div>
                </div>
                <div class="col-md-4">
                	<div class="gradinat-2">
                    	Interior Packages from <br>
                        <span style="font-size:30px; text-transform:uppercase; font-weight:bold;">** Lakhs</span><br>
                        Onwards
                    </div>
                </div>
            </div>
        </div>
    </div>
    
	<div class="c-content-box c-size-md c-bg-white c-no-bottom-padding">
		<div class="container">
			<div class="c-content-product-1 c-opt-1">
				<div class="c-content-title-1">
					<h3 class="c-center c-font-uppercase c-font-bold">Checkout Our Services</h3>
					<div class="c-line-center">
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="c-media">
							<img src="images/img-1.jpg" alt=""/>
						</div>
					</div>
					<div class="col-md-8">
						<div class="c-body">
							<ul class="c-row">
								
								<li>
									<h4>Turnkey Interior</h4>
									<p>
										Opting for integrated turnkey solutions of Lifestyle Interio ensures a single point of contact...
									</p>
								</li>
                                
                                <li>
									<h4>Modular Kitchen</h4>
									<p>
										Kitchen is the most live and functional part of any dwelling house. A modern kitchen gives...
									</p>
								</li>
							</ul>
							<ul class="c-row">
								<li>
									<h4>Wardrobes</h4>
									<p>
										A wardrobe in a room signifies the personality of a person, as the style of arrangement...
									</p>
								</li>
								<li>
									<h4>TV Units</h4>
									<p>
										TV unit is not only a place to keep the TV set, DVD player, set-top box or CDs but also a place...
									</p>
								</li>
							</ul>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    
    <div class="c-content-box c-size-md c-bg-grey-1 c-overflow-hide pb0">
		<div class="cbp c-content-latest-works-fullwidth">
			<div class="cbp-item identity logos">
				<a href="gallery.php" class="cbp-caption">
				<div class="cbp-caption-defaultWrap">
					<img src="images/img-2.jpg" alt="">
				</div>
				<div class="cbp-caption-activeWrap">
					<div class="cbp-l-caption-alignLeft">
						<div class="cbp-l-caption-body">
							<div class="cbp-l-caption-title">
								
							</div>
							<div class="cbp-l-caption-desc">
								
							</div>
						</div>
					</div>
				</div>
				</a>
			</div>
			<div class="cbp-item web-design">
				<a href="gallery.php" class="cbp-caption">
				<div class="cbp-caption-defaultWrap">
					<img src="images/img-3.jpg" alt="">
				</div>
				<div class="cbp-caption-activeWrap">
					<div class="cbp-l-caption-alignLeft">
						<div class="cbp-l-caption-body">
							<div class="cbp-l-caption-title">
								
							</div>
							<div class="cbp-l-caption-desc">
								
							</div>
						</div>
					</div>
				</div>
				</a>
			</div>
			<div class="cbp-item motion identity">
				<a href="gallery.php" class="cbp-caption">
				<div class="cbp-caption-defaultWrap">
					<img src="images/img-4.jpg" alt="">
				</div>
				<div class="cbp-caption-activeWrap">
					<div class="cbp-l-caption-alignLeft">
						<div class="cbp-l-caption-body">
							<div class="cbp-l-caption-title">
								
							</div>
							<div class="cbp-l-caption-desc">
								
							</div>
						</div>
					</div>
				</div>
				</a>
			</div>
			<div class="cbp-item identity graphic">
				<a href="gallery.php" class="cbp-caption">
				<div class="cbp-caption-defaultWrap">
					<img src="images/img-5.jpg" alt="">
				</div>
				<div class="cbp-caption-activeWrap">
					<div class="cbp-l-caption-alignLeft">
						<div class="cbp-l-caption-body">
							<div class="cbp-l-caption-title">
								
							</div>
							<div class="cbp-l-caption-desc">
								
							</div>
						</div>
					</div>
				</div>
				</a>
			</div>	
		</div>
	</div>
    

	<!--<div class="c-content-box c-size-md c-bg-grey-1">
		<div class="container">
			<div class="c-content-client-logos-slider-1 c-bordered" data-slider="owl" data-items="6" data-desktop-items="4" data-desktop-small-items="3" data-tablet-items="3" data-mobile-small-items="2" data-auto-play="5000">
				<div class="c-content-title-1">
					<h3 class="c-center c-font-uppercase c-font-bold">Happy Customers</h3>
					<div class="c-line-center c-theme-bg">
					</div>
				</div>
				<div class="owl-carousel owl-theme c-theme owl-bordered1">
					<div class="item">
						<a href="#"><img src="images/client1.png" alt=""/></a>
					</div>
					<div class="item">
						<a href="#"><img src="images/client2.png" alt=""/></a>
					</div>
					<div class="item">
						<a href="#"><img src="images/client3.png" alt=""/></a>
					</div>
					<div class="item">
						<a href="#"><img src="images/client4.png" alt=""/></a>
					</div>
					<div class="item">
						<a href="#"><img src="images/client5.png" alt=""/></a>
					</div>
					<div class="item">
						<a href="#"><img src="images/client6.png" alt=""/></a>
					</div>
						<div class="item">
						<a href="#"><img src="images/client1.png" alt=""/></a>
					</div>
					<div class="item">
						<a href="#"><img src="images/client2.png" alt=""/></a>
					</div>
					<div class="item">
						<a href="#"><img src="images/client3.png" alt=""/></a>
					</div>
					<div class="item">
						<a href="#"><img src="images/client4.png" alt=""/></a>
					</div>
					<div class="item">
						<a href="#"><img src="images/client5.png" alt=""/></a>
					</div>
					<div class="item">
						<a href="#"><img src="images/client6.png" alt=""/></a>
					</div>
				</div>
			</div>
		</div>
	</div>-->
</div>
<!-- END: PAGE CONTAINER -->
<!-- BEGIN: LAYOUT/FOOTERS/FOOTER-5 -->
<a name="footer"></a>
<?php require_once('footer.php');?>

<!-- END: LAYOUT/FOOTERS/FOOTER-5 -->
<!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
<div class="c-layout-go2top">
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




<script src="assets/plugins/revo-slider/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
<script src="assets/plugins/revo-slider/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
<script src="assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
<script src="assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<script src="assets/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
<script src="assets/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="js/wavytext.js"></script>
<script>
$(document).ready(function(){
    'use strict';
    var is_dark = false;
    $('h1').wavyText({
        transition_speed: '3.5s'
    });
});
</script>
<!-- END: LAYOUT PLUGINS -->
<!-- BEGIN: SCRIPTS -->
<script src="assets/base/js/components.js" type="text/javascript"></script>
<script src="assets/base/js/app.js" type="text/javascript"></script>
<script>
	$(document).ready(function() {    
		App.init(); // init core   

		// init main slider
		var slider = $('.c-layout-revo-slider .tp-banner');
	    var cont = $('.c-layout-revo-slider .tp-banner-container');
	    var api = slider.show().revolution({
	        delay: 2000,    
	        startwidth:1170,
	        startheight: (App.getViewPort().width < App.getBreakpoint('md') ? 1024 : 620),
	        navigationType: "hide",
	        navigationArrows: "solo",
	        touchenabled: "on",
	        onHoverStop: "off",
	        keyboardNavigation: "off",
	        navigationStyle: "circle",
	        navigationHAlign: "center",
	        navigationVAlign: "center",
	        fullScreenAlignForce:"off",
	        shadow: 0,
	        fullWidth: "on",
	        fullScreen: "off",       
	        spinner: "spinner2",
	        forceFullWidth: "on",
	        hideTimerBar:"on",
	        hideThumbsOnMobile: "on",
	        hideNavDelayOnMobile: 1500,
	        hideBulletsOnMobile: "on",
	        hideArrowsOnMobile: "on",
	        hideThumbsUnderResolution: 0,
	        videoJsPath: "rs-plugin/videojs/",
	    }); 
	});
	</script>
</body>
</html>