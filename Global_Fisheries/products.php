
<?php  require_once('global_backend/db.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<title>Global Fisheries &amp; Traders</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<link rel="shortcut icon" href="images/favicon.png">
    
	<!-- CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/fontElegant.css" rel="stylesheet" type="text/css" />
	<link href="css/flexslider.css" rel="stylesheet" type="text/css" />
	<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" />
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
   

   
 
	<!-- FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	
</head>
<body>

<!-- PRELOADER -->
<div id="preloader"><div><em></em><em></em><em></em><em></em></div></div>
<!-- //PRELOADER -->
<div class="preloader_hide">

	<!-- PAGE -->
	<div id="page" class="single_page">

		<!-- HEADER -->
		<header>

			<!-- CONTAINER -->
			<div class="container">
				
				<!-- MENU BLOCK -->
				<div class="menu_block clearfix">
				
					
					<!-- LOGO -->
					<div class="logo pull-left">
						<a href="index.html" ><img src="images/logo.png" alt="" /></a>
					</div><!-- //LOGO -->
					
					<!-- MENU -->
					<div class="pull-right top_menu_wrapper">
						<nav class="navmenu center">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li><a href="about.html">About Us</a></li>
                                <li class="first active"><a href="products.php" style="color:white" >Products</a></li>
                                 <li><a href="services.php" >Services</a></li>
                                <li><a href="gallery.php" >Gallery</a></li>
								<li><a href="contacts.html" >Contact Us</a></li>
							</ul>
						</nav>
					</div><!-- //MENU -->
				</div><!-- //MENU BLOCK -->
			</div><!-- //CONTAINER -->
		</header><!-- //HEADER -->
		
		
		<!-- ABOUT -->
		<section id="about">
			
			<!-- CONTAINER -->
			<div class="container">

				<div class="about_description m100" data-appear-top-offset="-200" data-animated="fadeInUp">
					<div class="row">

					<div class="portfolio_block margbot30">
                    
                    <?php
					$res="SELECT * FROM `category`";
					$sql=mysqli_query($con,$res);
					while($row=mysqli_fetch_array($sql))
					{
					
					?>
						
						<div class="element creative col-lg-3 col-md-3 col-sm-6 col-ss-12 margbot30">
							<div class="portfolio_item">
  							    <div  class="imgLiquidFill imgLiquid" style="width:300px; height:200px;">
                            	<img src="global_backend/<?= $row['image']; ?>" class="img-responsive center-block grow img_style imgLiquid" alt="Responsive image" >
                      			 </div>        
								<div class="portfolio_item_descr">
									<a href=""><?= $row['category'];?></a>
                                    <a href="product-detail.php?cat_id=<?php echo $row['cat_id']; ?>"><p class="mb15">View Detail<i class="fa fa-long-arrow-right"></i></p></a>
								</div>
							</div>
						</div>
						<?php
					}
						?>
                        
					</div>
				</div>
				</div>
			</div>
		</section>


		<!-- FOOTER -->
		<footer>
			<!-- CONTAINER -->
			<div class="container clearfix">
				<div class="pull-left copyright">© Copyright 2015 Global Fisheries & Traders. All Rights Reserved. Powered by Phitany, <a href="http://www.phitany.com/" target="_blank">Web designing company in Kerala.</a></div>
					
				<div class="pull-right social">
					<a class="twitter" href="" ><i class="fe social_twitter"></i></a>
					<a class="facebook" href="" ><i class="fe social_facebook"></i></a>
					<a class="back_top" href="" ><i class="fe arrow_carrot-up"></i></a>
				</div>
			</div><!-- //CONTAINER -->
		</footer><!-- //FOOTER -->
	</div><!-- //PAGE -->
</div>

	<!-- SCRIPTS -->
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE]><html class="ie" lang="en"> <![endif]-->
	
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>    
    <script type="text/javascript"></script>
    <script src="js/imgLiquid-min.js"></script>
    
<script type="text/javascript">
$(document).ready(function() {
    $(".imgLiquidFill").imgLiquid();
});
</script>

	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="js/owl.carousel.min.js" type="text/javascript"></script>
	<script src="js/jquery.BlackAndWhite.js"></script>
	<script src="js/jquery.cbpQTRotator.min.js" type="text/javascript"></script>
	<script src="js/animate.js" type="text/javascript"></script>
	<script src="js/myscript.js" type="text/javascript"></script>
</body>
</html>