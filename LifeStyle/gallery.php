
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
<!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
<!-- BEGIN: HEADER -->
<header class="c-layout-header c-layout-header-6 c-navbar-fluid">
<div class="c-topbar">
	<div class="container">
		<nav class="c-top-menu">
		<ul class="c-links c-theme-ul">
			<li>
				<h1>Call Us On : +91 9995105807</h1>
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
                <li class="c-active c-menu-type-classic">
					<a href="gallery.php" >Gallery</a>
				</li>
                <li class="c-menu-type-classic">
					<a href="testimonials.php">Testimonials</a>
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
	<!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-1 -->
	<div class="c-layout-breadcrumbs-1 c-fonts-uppercase c-fonts-bold">
		<div class="container">
			<div class="c-page-title c-pull-left">
				<h3 class="c-font-uppercase c-font-bold">Gallery</h3>
			</div>
			<ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					/
				</li>
				<li class="c-state_active">
					Gallery
				</li>
			</ul>
		</div>
	</div>
	<!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-1 -->
    
    
	<!-- New Gallery -->
	<div class="c-content-box c-size-md">
		<div class="container">
			<div id="filters-container" class="cbp-l-filters-button">
				<div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
					 All
					<div class="cbp-filter-counter">
					</div>
				</div>
				<div data-filter=".turnkey" class="cbp-filter-item">
					 Turnkey Interior
					<div class="cbp-filter-counter">
					</div>
				</div>
				<div data-filter=".kitchen" class="cbp-filter-item">
					 Modular Kitchen
					<div class="cbp-filter-counter">
					</div>
				</div>
				<div data-filter=".wardrobes" class="cbp-filter-item">
					 Wardrobes
					<div class="cbp-filter-counter">
					</div>
				</div>
				<div data-filter=".tv" class="cbp-filter-item">
					 TV Units
					<div class="cbp-filter-counter">
					</div>
				</div>
                <div data-filter=".home-cinema" class="cbp-filter-item">
					 Home Cinema
					<div class="cbp-filter-counter">
					</div>
				</div>
                <div data-filter=".modular-furniture" class="cbp-filter-item">
					 Modular Furniture
					<div class="cbp-filter-counter">
					</div>
				</div>
                <div data-filter=".office-furniture" class="cbp-filter-item">
					 Office Furniture
					<div class="cbp-filter-counter">
					</div>
				</div>
			</div>
			<div id="grid-container" class="cbp">
            
            
            
				  <?php $res1="SELECT * FROM images_view WHERE `s_id`=5";
					
					$sql1=mysqli_query($con,$res1);
					while($row1=mysqli_fetch_array($sql1))
					{
					 ?>
          
				<div class="cbp-item home-cinema">
					<div class="cbp-caption">
						<div class="cbp-caption-defaultWrap">
							<img src="lifestyle_backend/<?=$row1['image'];?>" alt="">
						</div>
						<div class="cbp-caption-activeWrap">
							<div class="cbp-l-caption-alignCenter">
								<div class="cbp-l-caption-body">
									<a href="lifestyle_backend/<?=$row1['image'];?>" class="cbp-lightbox cbp-l-caption-buttonRight btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-uppercase" >Zoom</a>
								</div>
							</div>
						</div>
					</div>
                    
                    
					<div class="cbp-l-grid-projects-title">
						<?= $row1['title']; ?>
					</div>
				</div>
                
                
                <?php
					}
				
				?>
                
                
                
                
                
			 <?php $res2="SELECT * FROM images_view WHERE `s_id`=3";
					
					$sql2=mysqli_query($con,$res2);
					while($row2=mysqli_fetch_array($sql2))
					{
					 ?>
				<div class="cbp-item wardrobes">
					<div class="cbp-caption">
						<div class="cbp-caption-defaultWrap">
							<img src="lifestyle_backend/<?=$row2['image'];?>" alt="">
						</div>
						<div class="cbp-caption-activeWrap">
							<div class="cbp-l-caption-alignCenter">
								<div class="cbp-l-caption-body">
									<a href="lifestyle_backend/<?=$row2['image'];?>" class="cbp-lightbox cbp-l-caption-buttonRight btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-uppercase" >Zoom</a>
								</div>
							</div>
						</div>
					</div>
					<div class="cbp-l-grid-projects-title">
						<?=$row2['title'];?>
					</div>
				</div>
                
                
                <?php
					}
				?>
                
                
                 
                 <?php $res3="SELECT * FROM images_view WHERE `s_id`=2";
					
					$sql3=mysqli_query($con,$res3);
					while($row3=mysqli_fetch_array($sql3))
					{
					 ?>
                
                
				<div class="cbp-item kitchen">
					<div class="cbp-caption">
						<div class="cbp-caption-defaultWrap">
							<img src="lifestyle_backend/<?=$row3['image'];?>" alt="">
						</div>
						<div class="cbp-caption-activeWrap">
							<div class="cbp-l-caption-alignCenter">
								<div class="cbp-l-caption-body">
									<a href="lifestyle_backend/<?=$row3['image'];?>" class="cbp-lightbox cbp-l-caption-buttonRight btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-uppercase" >Zoom</a>
								</div>
							</div>
						</div>
					</div>
                    
                    
					<div class="cbp-l-grid-projects-title">
						<?=$row3['title'];?>
					</div>
				</div>
                
                <?php
					}
				?>
                
                
                 
                 <?php $res4="SELECT * FROM images_view WHERE `s_id`=1";
					
					$sql4=mysqli_query($con,$res4);
					while($row4=mysqli_fetch_array($sql4))
					{
					 ?>
                
				<div class="cbp-item turnkey">
					<div class="cbp-caption">
						<div class="cbp-caption-defaultWrap">
							<img src="lifestyle_backend/<?=$row4['image'];?>" alt="">
						</div>
						<div class="cbp-caption-activeWrap">
							<div class="cbp-l-caption-alignCenter">
								<div class="cbp-l-caption-body">
									<a href="lifestyle_backend/<?=$row4['image'];?>" class="cbp-lightbox cbp-l-caption-buttonRight btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-uppercase" >Zoom</a>
								</div>
							</div>
						</div>
					</div>
                    
                    
                    
					<div class="cbp-l-grid-projects-title">
						<?=$row4['title'];?>
					</div>
				</div>
                
                <?php
					}
				?>
                
                
                 
                 <?php $res5="SELECT * FROM images_view WHERE `s_id`=4";
					
					$sql5=mysqli_query($con,$res5);
					while($row5=mysqli_fetch_array($sql5))
					{
					 ?>
				<div class="cbp-item tv">
					<div class="cbp-caption">
						<div class="cbp-caption-defaultWrap">
							<img src="lifestyle_backend/<?=$row5['image'];?>" alt="">
						</div>
						<div class="cbp-caption-activeWrap">
							<div class="cbp-l-caption-alignCenter">
								<div class="cbp-l-caption-body">
									<a href="lifestyle_backend/<?=$row5['image'];?>" class="cbp-lightbox cbp-l-caption-buttonRight btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-uppercase" >Zoom</a>
								</div>
							</div>
						</div>
					</div>
                    
                    
                    
					<div class="cbp-l-grid-projects-title">
						<?=$row5['title'];?>
					</div>
				</div>
                
                <?php
				
					}
				?>
                
                
                 
                 <?php $res6="SELECT * FROM images_view WHERE `s_id`=6";
					
					$sql6=mysqli_query($con,$res6);
					while($row6=mysqli_fetch_array($sql6))
					{
					 ?>
                
				<div class="cbp-item modular-furniture">
					<div class="cbp-caption">
						<div class="cbp-caption-defaultWrap">
							<img src="lifestyle_backend/<?=$row6['image'];?>" alt="">
						</div>
						<div class="cbp-caption-activeWrap">
							<div class="cbp-l-caption-alignCenter">
								<div class="cbp-l-caption-body">
									<a href="lifestyle_backend/<?=$row6['image'];?>" class="cbp-lightbox cbp-l-caption-buttonRight btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-uppercase" >Zoom</a>
								</div>
							</div>
						</div>
					</div>
                    
                    
					<div class="cbp-l-grid-projects-title">
						<?=$row6['title'];?>
					</div>
				</div>
                
                
               <?php
					}
			   ?>
                
                
                 
                 <?php $res7="SELECT * FROM images_view WHERE `s_id`=7";
					
					$sql7=mysqli_query($con,$res7);
					while($row7=mysqli_fetch_array($sql7))
					{
					 ?>
                
				<div class="cbp-item office-furniture">
					<div class="cbp-caption">
						<div class="cbp-caption-defaultWrap">
							<img src="lifestyle_backend/<?=$row7['image'];?>" alt="">
						</div>
						<div class="cbp-caption-activeWrap">
							<div class="cbp-l-caption-alignCenter">
								<div class="cbp-l-caption-body">
									<a href="lifestyle_backend/<?=$row7['image'];?>" class="cbp-lightbox cbp-l-caption-buttonRight btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-uppercase" >Zoom</a>
								</div>
							</div>
						</div>
					</div>
                    
                    
					<div class="cbp-l-grid-projects-title">
					<?=$row7['title'];?>
					</div>
				</div>
                <?php
				
					}
				?>
                
                
                
                
                
                
                
                
			</div>
			<!--<div id="loadMore-container" class="cbp-l-loadMore-button c-margin-t-60">
				<a href="ajax/4col-portfolio/load-more.php" class="cbp-l-loadMore-link btn btn-sm c-btn-square c-btn-border-2x c-btn-dark c-btn-uppercase">
				<span class="cbp-l-loadMore-defaultText">LOAD MORE</span>
				<span class="cbp-l-loadMore-loadingText">LOADING...</span>
				<span class="cbp-l-loadMore-noMoreLoading">NO MORE WORKS</span>
				</a>
			</div>-->
		</div>
	</div>
	<!-- New Gallery -->
    
    
</div>
<!-- END: PAGE CONTAINER -->
<!-- BEGIN: LAYOUT/FOOTERS/FOOTER-5 -->
<a name="footer"></a>
<?php require_once('footer.php');?>

<!-- END: LAYOUT/FOOTERS/FOOTER-5 -->
<!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
<div class="c-layout-go2top">
	<i class="icon-arrow-up"></i>
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
<!-- END: CORE PLUGINS -->
<!-- BEGIN: LAYOUT PLUGINS -->
<script src="assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
<script src="assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<script src="assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
<script src="assets/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="assets/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>



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
<script src="assets/base/js/scripts/pages/4col-portfolio.js" type="text/javascript"></script>
<!-- END: PAGE SCRIPTS -->
<!-- END: LAYOUT/BASE/BOTTOM -->
</body>
</html>