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
				<li class="c-menu-type-classic">
					<a href="index.php">Home</a>
				</li>
				<li class="c-menu-type-classic">
					<a href="about.php">About Us</a>
				</li>
				<li class="c-active c-menu-type-classic">
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
					<a href="gallery.php" >Gallery</a>
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
				<h3 class="c-font-uppercase c-font-bold c-font-white c-font-20 c-font-slim">Modular Kitchen</h3>
				<h4 class="c-font-white c-font-thin c-opacity-07">
				Lifestyle Interio, Modular Kitchen</h4>
			</div>
			<ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
				<li>
					<a href="index.php" class="c-font-white">Home</a>
				</li>
				<li class="c-font-white">
					/
				</li>
				<li class="c-state_active c-font-white">
					Service
				</li>
                <li class="c-font-white">
					/
				</li>
				<li class="c-state_active c-font-white">
					Modular Kitchen
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
            	<div class="col-md-6">
					<div class="c-content-media-2-slider" data-slider="owl" data-single-item="true" data-auto-play="3000">
						<div class="c-content-label c-font-uppercase c-font-bold">
							MODULAR KITCHEN
						</div>
						<div class="owl-carousel owl-theme c-theme owl-single">
							<div class="item">
								<div class="c-content-media-2 c-bg-img-center" style="background-image: url(images/service-4.jpg); min-height: 380px;">
								</div>
							</div>
							<div class="item">
								<div class="c-content-media-2 c-bg-img-center" style="background-image: url(images/service-5.jpg); min-height: 380px;">
								</div>
							</div>
							<div class="item">
								<div class="c-content-media-2 c-bg-img-center" style="background-image: url(images/service-6.jpg); min-height: 380px;">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="c-content-media-1 p0">
						<p>Kitchen is the most live and functional part of any dwelling house. A modern kitchen gives trust and confidence to the inmates. It makes cooking an easy job and gives you immense pleasure</p>
                        <p>We offer a wide range of Modular kitchen which are tailor made and direct from factory to suit your individual & unique requirements. Our dedicated team of experts is more than pleased to assist you from the time you enter our showroom till your kitchen is satisfactorily completed at site.</p>
                        <p>At our sprawling showrooms in Aluva, Ernakulam, we have display of Modular kitchen, which can cater to different budgets. All aspects like Cabinets, Shutters, Accessories, Appliances, Wardrobes,     LCD TV unit etc. have been elaborately displayed here.</p>
                        <h3 class="c-left c-font-red">How to choose a Modular kitchen </h3>
                        <p>Once you decide to put in modular kitchen, your first step is selecting a layout and design. Layout of your kitchen depends on the floor area, your preference and budget.</p>
					</div>
				</div>
                <h3 class="c-left c-font-red c-font-bold">Kitchen layouts are</h3>
                <ul class="c-content-list-1">
                    <li>
                        Straight line kitchen (single wall)
                    </li>
                    <li>
                        Parallel kitchen (two opposite walls)
                    </li>
                    <li>
                        L shaped kitchen
                    </li>
                    <li>
                        U shaped kitchen
                    </li>
                    <li>
                        G shaped kitchen
                    </li>
                    <li>
                        Island kitchen
                    </li>
                </ul>
                <p>Once the layout is selected, you can choose a suitable design. Next in line is to identify the material to use in kitchen. Now to cover the material we have different options like: </p>
                <p>Laminates……>PU coating……>Acrylic……>Glass…..>Veneer……> Membrane. Veneer looks like our real wood but is not recommended in kitchen as it’s not water friendly. Laminate itself has three different varieties: Glossy finish…..> Matte finish…..>Textured finish. </p>
                <h3 class="c-left c-font-red c-font-bold">Material to use for the cabinets & shutters?</h3>
                <p><u>Cabinets</u></p>
                <p>The first choice for the Kitchen cabinet material is  Water Proof Ply. (Technically called BWP 710 Grade Ply, ISI Marked preferred) We can also use HDF or Particle board. </p>
                <p><u>Shutters</u></p>
                <p>Any of MDF, HDF or Marine Ply work well for the shutters. However if you have a high traffic or maid managed kitchen then it is wise to go for Marine Ply. However shutters in Particle board are a definite no-no.</p>
                <h3 class="c-left c-font-red c-font-bold">Planning for the Appliances</h3>
                <p>While planning /appliances a few things to keep in your mind are:</p>
                <ul class="c-content-list-1">
                	<li>Place cutlery tray, basket and Thali unit below your cooktop as it’s easy to get your utensils while cooking</li>
                    <li>Place your bottle pull out on the right</li>
                    <li>Your sink, cooktop and fridge should be in a triangle. The shorter the base of triangle the more time you save while cooking<br><img src="images/kitchen-1.jpg"></li>
                    <li>If you cook Non Vegetarian at home then ensure that the Chimney has a suction capacity of 1000 Cum/ Hr or higher</li>
                    <li>Plan enough space to keep the things that you take out once in three months or the stuffs meant strictly for special occasions and all the things that you will end up accumulating over the years. It is therefore prudent to plan bulk storage spaces from the start. Tall units and corners are ideal for bulk storage. For accessibility in the corners, solutions such as magic corner units are popular and readily available however if you do not want to invest in one then just a regular shelf in the corner will do. A Tall unit is specially recommended - plan one with regular shelves instead of a pantry unit to maximize storage space <br><img src="images/kitchen-2.jpg"></li>
                    <li>LPG Cylinders take up primary space within the Kitchen, keep the operational cylinder in that corner space and connect them to the cooktop with a copper pipe – this will save you prime space under the cooktop</li>
                </ul>
                <h3 class="c-left c-font-red c-font-bold">What is the height of a Kitchen counter?</h3>
                <p>The height is usually more than the normal kitchen. Most designers (Carpenters) would keep the height as 32 inches and this is usually what the builder also gives. However typical Modular Kitchens will have a height around 36 inches .It is good to keep this height because </p>
                <ul class="c-content-list-1">
                	<li>It is more convenient to work on a higher slab</li>
                    <li>If you want to fit a dishwasher under the slab it will not fit in 32 inches</li>
                    <li>A higher height gives you more storage space underneath. However if you are 5’2’ or shorter a   high counter will get uncomfortable to work on and you may be better off with a 32 – 33 incher</li>
                </ul>
                <p>In summary: Don’t go under 32” and over 36”.</p>
                <h3 class="c-left c-font-red c-font-bold">Countertop – Beyond just Granite</h3>
                <p>The market has moved far beyond a time when the countertop meant Granite. Nowadays Kitchen counters are available both in Natural Stone (Granite) & Artificial Stone (Solid Surfaces, sometimes referred to as Corian). Granite & Corian fit best against the needs of a typical Indian Kitchen as they are both stain resistant & hard (but not brittle). If you are high on the price side of things then Solid Surfaces are great options as they offer exquisite finishes and a splash of colours to choose from.<br><img src="images/kitchen-3.jpg"></p>
                <h3 class="c-left c-font-red c-font-bold">Lighting</h3>
                <p>Specialty lighting has a huge impact on the overall look and feel of the Kitchen. Nowadays with the advent of reasonably priced LED’s it is not even a huge burden on the pocket. Plan for an LED
running along the backsplash and, if you are the “new age experimental” type, next to the skirting at the bottom. Any wall cabinets with a glass shutter should also have a spotlight.</p>
<p>The above should give you quite a head start in kitchen planning - good enough for you to enjoy both the journey now and the outcome for a long time to come – here’s wishing you happy homemaking<br><img src="images/kitchen-4.jpg"></p>
			</div>
		</div>
	</div>
	<!-- BEGIN: CONTENT/SLIDERS/TESTIMONIALS-2 -->
	<div class="c-content-box c-size-lg c-bg-grey m60">
		<div class="container">
			<!-- Begin: testimonials 1 component -->
			<div class="c-content-testimonials-1 c-option-2" data-slider="owl" data-single-item="true" data-auto-play="8000">
				<!-- Begin: Title 1 component -->
				<div class="c-content-title-1">
					<h3 class="c-center c-font-uppercase c-font-bold">Our Satisfied Customers</h3>
					<div class="c-line-center c-theme-bg">
					</div>
				</div>
				<!-- End-->
				<!-- Begin: Owlcarousel -->
				<div class="owl-carousel owl-theme c-theme">
					
				           
                 <?php $sql="SELECT * FROM `testimonals` order by test_id desc limit 4";
		
		$sql_exe=mysqli_query($con,$sql);
		
               while($row=mysqli_fetch_assoc($sql_exe))
		       {
        ?>
               
                
					<div class="item">
						<div class="c-testimonial">
							<p>
								 <?=$row['title'];?>
							</p>
							<h3>
							<span class="c-name c-theme">-	<?=$row['name'];?></span>, <?=$row['place'];?></h3>
						</div>
					</div>
                    
                    
                 <?php
			   }
			   ?>
                  
					
                    
                 	
					
					
				</div>
				<!-- End-->
			</div>
			<!-- End-->
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