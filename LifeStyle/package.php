<?php
require_once('lifestyle_backend/db.php');

?><!DOCTYPE html>
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
					<a href="index.php" >Home</a>
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
                <li class="c-active c-menu-type-classic">
					<a href="" class="c-link dropdown-toggle">Packages</a>
					<ul class="dropdown-menu c-menu-type-classic c-pull-left">
				<?php	
				$sql="select * from packages";
                $rs_result = mysqli_query ($con,$sql); //run the query
                while ($row = mysqli_fetch_array($rs_result)) { 
                ?>  
                        <li>
							<a href="package.php?id=<?=$row['pack_id'];?>"><?php echo $row['title']; ?></a>
						</li>
                        
                        
                        
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
				<h3 class="c-font-uppercase c-font-bold c-font-white c-font-20 c-font-slim">Basic Package</h3>
			</div>
			<ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
				<li>
					<a href="index.php" class="c-font-white">Home</a>
				</li>
				<li class="c-font-white">
					/
				</li>
				<li class="c-state_active c-font-white">
					Packages
				</li>
                <li class="c-font-white">
					/
				</li>
				<li class="c-state_active c-font-white">
					Basic
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
                <?php
				
               
				$pack_id=$_GET['id'];
					
				$sql1="select DISTINCT type,type_id,notes,total from package_type_products_view where `pack_id`='$pack_id'";
                $result1 = mysqli_query ($con,$sql1); //run the query
				
                if(mysqli_num_rows($result1)!=0):
                ?>
                	<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="package_table" style="background:#eee;">

                    <tbody><tr style="border-bottom: #000 1px solid;">

                      <th class="p_t_row_1">Sl No</th>

                      <th class="p_t_row_2">Product</th>

                      <th class="p_t_row_1">QTY</th>

                    </tr>

                    
                    <?php
					
				 $i=1;	
                while ($row1 = mysqli_fetch_array($result1)) { 
				
				$typeid=$row1['type_id'];


					?>
                    
                    
                    
                    
                    
                    <tr style="border-bottom: #000 1px solid;">

                      <td class="p_t_row_1"><?=$i;?></td>

                      <td class="p_t_row_2">&nbsp;<?=$row1['type'];?><br>
                      
                      <?php
					  
			    $sql2="select * from package_type_products_view where `type_id`='$typeid' and `pack_id`='$pack_id'";
                $result2 = mysqli_query ($con,$sql2); //run the query
                while ($row2 = mysqli_fetch_array($result2)) { 
?>
                      
                      &nbsp;<?=$row2['prod_title'];?>
                      
                      <br>
                      
                  <?php
					  
				}
				?>
                      
                      
                     </td>

                      <td class="p_t_row_1">
                      
                      
                      
                                  <?php
					  
			    $sql2="select * from package_type_products_view where `type_id`='$typeid' and `pack_id`='$pack_id'";
                $result2 = mysqli_query ($con,$sql2); //run the query
                while ($row2 = mysqli_fetch_array($result2)) { 
?>   
                      
                      
                      
                      
                       <?=$row2['qty'];?><br>
                       
                       <?php
					   
				}
				?>
                       </td>
    
                    </tr>



<?php
                  $i++;
				}
				
				$sql3="select * from packages where `pack_id`='$pack_id'";
                $result3 = mysqli_query ($con,$sql3); //run the query
                while ($row3 = mysqli_fetch_array($result3)) { 
				
				?>
                
                
           <tr style="border-bottom: #000 1px solid;">

                      <td class="p_t_row_1"></td>

                      <td class="p_t_row_2"><p><strong>NOTES</strong></p><p><?=$row3['notes'];?></p></td>

                      <td class="p_t_row_1">   </td>

                    </tr>

                    
                    <tr style="border-bottom: #000 1px solid;">

                      <td class="p_t_row_1">&nbsp;</td>

                      <th class="p_t_row_2"> <?=$row3['total'];?> </th>

                      <td class="p_t_row_1">&nbsp;</td>

                    </tr>

                    
              
                 <?php
				}
				?>
                    

                  </tbody></table>
                  
                  <?php
				  
				  else:
				  
				  echo "No results..";
				  
				  
				  endif;
				  ?>
                </div>
                <div class="col-md-4">
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
<!-- END: LAYOUT/BASE/BOTTOM -->
</body>
</html>