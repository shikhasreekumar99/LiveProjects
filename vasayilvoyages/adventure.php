<?php 
require_once('vasayil_backend/db.php');
?>
<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js">
<!--<![endif]-->

<head>
<title>Vasayil Voyages</title>
<meta charset="utf-8">
<meta name="keywords" content="" />
<meta name="description" content="" />

<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.ico">

<!-- this styles only adds some repairs on idevices  -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Google fonts - witch you want to use - (rest you can just remove) -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

<!-- ######### CSS STYLES ######### -->

<link rel="stylesheet" href="css/reset.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">

<!-- responsive devices styles -->
<link rel="stylesheet" media="screen" href="css/responsive-leyouts.css" type="text/css" />
<script>

$(document).ready(function() {    
    //Events that reset and restart the timer animation when the slides change
    $("#transition-timer-carousel").on("slide.bs.carousel", function(event) {
        //The animate class gets removed so that it jumps straight back to 0%
        $(".transition-timer-carousel-progress-bar", this)
            .removeClass("animate").css("width", "0%");
    }).on("slid.bs.carousel", function(event) {
        //The slide transition finished, so re-add the animate class so that
        //the timer bar takes time to fill up
        $(".transition-timer-carousel-progress-bar", this)
            .addClass("animate").css("width", "100%");
    });
    
    //Kick off the initial slide animation when the document is ready
    $(".transition-timer-carousel-progress-bar", "#transition-timer-carousel")
        .css("width", "100%");
});
</script>

<!-- mega menu -->
<link href="js/mainmenu/sticky.css" rel="stylesheet">
<link href="js/mainmenu/bootstrap.css" rel="stylesheet">
<link href="js/mainmenu/fhmm.css" rel="stylesheet">

<!-- REVOLUTION SLIDER -->
<link rel="stylesheet" type="text/css" href="js/revolutionslider/rs-plugin/css/settings.css" media="screen" />
<link rel="stylesheet" type="text/css" href="js/revolutionslider/css/slider_main.css" media="screen" />

<!-- cubeportfolio -->
<link rel="stylesheet" type="text/css" href="js/cubeportfolio/cubeportfolio.min.css">

<!-- tabs -->
<link rel="stylesheet" type="text/css" href="js/tabs/assets/css/responsive-tabs.css">
<link rel="stylesheet" type="text/css" href="js/tabs/assets/css/responsive-tabs2.css">

<!-- carousel -->
<link rel="stylesheet" href="js/carousel/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="js/carousel/skin.css" />

<!-- accordion -->
<link rel="stylesheet" href="js/accordion/accordion.css" type="text/css" media="all">

<!-- Lightbox -->
<link rel="stylesheet" type="text/css" href="js/lightbox/jquery.fancybox.css" media="screen" />
</head>

<body>
<div class="site_wrapper">
  <header id="header"> 
    
    <!-- Top header bar -->
    <div id="topHeader">
      <div class="wrapper">
        <div class="top_nav three">
          <div class="container">
            <div class="left">
              <ul>
                <li><a href="#"><i class="fa fa-envelope"></i> info@vasayilvoyages.com</a></li>
                <li><i class="fa fa-phone-square"></i> +91 974 519 7623</li>
              </ul>
            </div>
            <!-- end left links -->
            
            <div class="right">
              <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
            <!-- end right social links --> 
            
          </div>
        </div>
      </div>
    </div>
    <!-- end top navigation -->
    
    <div id="trueHeader">
      <div class="wrapper">
        <div class="container"> 
          
          <!-- Logo -->
          <div class="col-md-4 col-sm-4 col-xs-12" style=" padding:0px !important; "> <a href="#"><img src="images/logo.png" class="img-responsive"></a> </div>
          <!-- Menu -->
          
          <div class="col-md-8 col-sm-8 col-xs-12 pull-right">
            <nav class="navbar  fhmm" role="navigation">
              <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target="#defaultmenu" class="navbar-toggle">Menu <i class="fa fa-bars tbars"></i></button>
              </div>
              <!-- end navbar-header -->
              
              <div id="defaultmenu" class="navbar-collapse collapse ">
                <ul class="nav navbar-nav">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="about_us.html">About Us</a></li>
                  <li ><a href="health-tourism.php" >Health Tourism</a></li>
                  <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Tour Package</a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="leisure.php">Leisure</a></li>
                      <li><a href="adventure.php">Adventure</a></li>
                    </ul>
                  </li>
                  <li><a href="cute-destination.php" >Cute Destination</a></li>
                  <li ><a href="contact.html" >Contact Us</a></li>
                  
                  <!-- Mega Menu --> 
                  <!-- mega menu -->
                  
                </ul>
                <!-- end nav navbar-nav --> 
                
              </div>
              <!-- end #navbar-collapse-1 --> 
              
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="clearfix"></div>
  <div class="container_full"> 
    
    <!-- The carousel -->
    <div id="transition-timer-carousel" class="carousel slide transition-timer-carousel" data-ride="carousel"> 
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#transition-timer-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#transition-timer-carousel" data-slide-to="1"></li>
        <li data-target="#transition-timer-carousel" data-slide-to="2"></li>
		 <li data-target="#transition-timer-carousel" data-slide-to="3"></li>
      </ol>
      
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
	  
	   <div class="item active "> <img src="images/healthbnr.jpg" />
        </div>
	  
	  
	  
        <div class="item "> <img src="images/adventure2.jpg" />
          <div class="carousel-caption">
            <h1 class="carousel-caption-header">Scooba Diving</h1>
          </div>
        </div>
        
        
        <div class="item "> <img src="images/adventure1.jpg" />
          <div class="carousel-caption">
            <h1 class="carousel-caption-header">Wild Life</h1>
          </div>
        </div>
        
        <div class="item"> <img src="images/adventure3.jpg" />
          <div class="carousel-caption">
            <h1 class="carousel-caption-header">Water Sports</h1>
          </div>
        </div>
      </div>
      
      <!-- Controls --> 
      
      <!-- Timer "progress bar" -->
      <hr class="transition-timer-carousel-progress-bar animate" />
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="content_fullwidth">
    <div class="container">
      <h2 class="ipages_title1 two"><strong>ADVENTURE</strong> </h2>
      
      
         
         <?php
	   $adventure="SELECT * FROM `adventure` WHERE `id`='1'";
	   $query=mysqli_query($con,$adventure);
	   
	   foreach($query as $data){
		   
		  ?>
      
      
      <div class="one_third "><img src="vasayil_backend/<?=$data['image']?>" class="img-responsive img-rounded" /></div>
      <!-- end section -->
      
      <div class="two_third last">
       
       <?=$data['tab']?>
       
        
        <p><a href="adventure-package.html" class="but_book"><i class="fa fa-book fa-lg"></i> Book a package</a></p>
        
      </div>
      <!-- end section --> 
      
    </div>
    <div class="clearfix" style="margin-bottom:20px;"></div>
    <div class="container mrgntop">
      <div class="one_full">
        <ul class="tabs2">
          <li class="active"><a href="#example-2-tab-1" target="_self">Lakshadweep</a></li>
          <li><a href="#example-2-tab-2" target="_self">Maldives</a></li>
        </ul>
        <div class="tabs-content2">
          <div id="example-2-tab-1" class="tabs-panel2"> <img src="vasayil_backend/<?=$data['image1']?>" alt="" class="img_left2" width="170" height="170">
         
           <?=$data['tab1']?>
           
          </div>
          <!-- end tab 1 -->
          
          <div id="example-2-tab-2" class="tabs-panel2" style="display: none;"> <img src="vasayil_backend/<?=$data['image2']?>" alt="" class="img_left2" width="170" height="170">
          
           <?=$data['tab2']?>
           
          </div>
          <!-- end tab 2 -->
          
          <?php
	     
		  }
	     
		  ?>
          
          <div id="example-2-tab-3" class="tabs-panel2" style="display: none;"> <img src="http://placehold.it/170x170" alt="" class="img_left2">
            <p>Financial dolor sit amet, consectetur adipiscing elit. Phasellus ac fringilla nulla, sit amet consequat eros. Pellentesque pharetra blandit commodo. Phasellus massa nisl, feugiat ac bibendum et, dictum id ipsum. Quisque sit amet accumsan tortor. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words.</p>
          </div>
          <!-- end tab 3 --> 
          
        </div>
        <!-- end all tabs --></div>
    </div>
  </div>
  
  <!-- end features section17 -->
  
  <div class="clearfix" style="margin-bottom:20px;"></div>
  <div class="footer1">
    <div class="container">
      <div class="one_fourth">
        <ul class="faddress">
          <h3 class="nocaps">Get in Touch</h3>
          <li><i class="fa fa-map-marker fa-lg"></i>&nbsp; Darulwasayil,<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A - 41, chammany tower<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;kaloor, Kochi - 682017.<br>
          </li>
          <li><i class="fa fa-phone"></i>&nbsp; +91 974 519 7623</li>
          <li><i class="fa fa-envelope"></i>&nbsp; info@vasayilvoyages.com</a></li>
        </ul>
      </div>
      <!-- end address -->
      
      <div class="one_fourth">
        <div class="ftags">
          <h3 class="nocaps">Download Brochure</h3>
          <a href="#"><img src="images/dwnloadbrochure.jpg" class="img-responsive" style="margin-top:15px;"></a> </div>
      </div>
      
      <!-- end tags -->
      
      <div class="one_fourth">
        <div class="footerimg"> <a href="#"><img src="images/logo.png" class="img-responsive "></a></div>
      </div>
      <!-- end tweets -->
      
      <div class="one_fourth last pull-right text-right">
        <h3 class="nocaps">Follow Us</h3>
        <div class="two_half">
          <ul class="footer_social_links">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- end flickr --> 
      
    </div>
  </div>
  <!-- end footer -->
  
  <div class="clearfix"></div>
  <div class="copyright_info two">
    <div class="container">
      <div class="one_half "> Copyright © 2015 vasayil voyages. All rights reserved.  Terms of Use | Privacy Policy </div>
      <div class="powered last"> Powered by Phitany, <a href="http://phitany.com" target="_blank"> web design company Kerala</a> </div>
    </div>
  </div>
  <!-- end copyright info --> 
  
  <a href="#" class="scrollup">Scroll</a><!-- end scroll to top of the page--> 
  
</div>

<!-- ######### JS FILES ######### --> 
<!-- get jQuery from the google apis --> 
<script type="text/javascript" src="js/universal/jquery.js"></script> 

<!-- style switcher --> 
<script src="js/style-switcher/jquery-1.js"></script> 
<script src="js/style-switcher/styleselector.js"></script> 

<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
<script type="text/javascript" src="js/revolutionslider/rs-plugin/js/jquery.themepunch.plugins.min.js"></script> 
<script type="text/javascript" src="js/revolutionslider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 

<!-- mega menu --> 
<script src="js/mainmenu/bootstrap.min.js"></script> 
<script src="js/mainmenu/fhmm.js"></script> 

<!-- jquery jcarousel --> 
<script type="text/javascript" src="js/carousel/jquery.jcarousel.min.js"></script> 

<!-- scroll up --> 
<script src="js/scrolltotop/totop.js" type="text/javascript"></script> 

<!-- tabs --> 
<script src="js/tabs/assets/js/responsive-tabs.min.js" type="text/javascript"></script> 

<!-- jquery jcarousel --> 
<script type="text/javascript">
	jQuery(document).ready(function() {
			jQuery('#mycarouselthree').jcarousel();
	});
</script> 

<!-- accordion --> 
<script type="text/javascript" src="js/accordion/custom.js"></script> 

<!-- REVOLUTION SLIDER --> 
<script type="text/javascript" src="js/revolutionslider/rs-plugin/js/custom.js"></script> 

<!-- sticky menu --> 
<script type="text/javascript" src="js/mainmenu/sticky.js"></script> 
<script type="text/javascript" src="js/mainmenu/modernizr.custom.75180.js"></script> 

<!-- cubeportfolio --> 
<script type="text/javascript" src="js/cubeportfolio/jquery.cubeportfolio.min.js"></script> 
<script type="text/javascript" src="js/cubeportfolio/main.js"></script> 

<!-- carousel --> 
<script defer src="js/carousel/jquery.flexslider.js"></script> 
<script defer src="js/carousel/custom.js"></script> 

<!-- lightbox --> 
<script type="text/javascript" src="js/lightbox/jquery.fancybox.js"></script> 
<script type="text/javascript" src="js/lightbox/custom.js"></script> 
<script type="text/javascript">
	// Menu drop down effect
	$('.dropdown-toggle').dropdownHover().dropdown();
	$(document).on('click', '.fhmm .dropdown-menu', function(e) {
	  e.stopPropagation()
	})
</script>
</body>
</html>
