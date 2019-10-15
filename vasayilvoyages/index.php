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

<script src="js/progressbar/progress.js" type="text/javascript" charset="utf-8"></script>

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
            
            
            
       <!-- <div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>-->
            
            
            
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
  
  <!-- Slider
======================================= -->
  
  <div class="container_full"> 
    
    <!-- The carousel -->
    <div id="transition-timer-carousel" class="carousel slide transition-timer-carousel" data-ride="carousel"> 
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#transition-timer-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#transition-timer-carousel" data-slide-to="1"></li>
        <li data-target="#transition-timer-carousel" data-slide-to="2"></li>
        <li data-target="#transition-timer-carousel" data-slide-to="3"></li>
        <li data-target="#transition-timer-carousel" data-slide-to="4"></li>
		 <li data-target="#transition-timer-carousel" data-slide-to="5"></li>
      </ol>
      
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active"> <img src="images/parallax-bg1.jpg" />
          <div class="carousel-caption">
            <h1 class="carousel-caption-header">Natural Cure for happy minds…</h1>
          </div>
        </div>
		
		
		
		
		
		
        <div class="item"> <img src="images/parallax-bg2.jpg" />
          <div class="carousel-caption">
            <h1 class="carousel-caption-header">Smile happily with us…</h1>
          </div>
        </div>
		
		
		
		
		
        <div class="item">  <img src="images/healthbnr.jpg" />
          <div class="carousel-caption">
            
          </div>
        </div>
		
		 
		
		
		
        <div class="item"> <img src="images/parallax-bg3.jpg" />
          <div class="carousel-caption">
            <h1 class="carousel-caption-header">Advanced, Friendly and affordable…</h1>
          </div>
        </div>
        <div class="item"> <img src="images/parallax-bg4.jpg" />
          <div class="carousel-caption">
            <h1 class="carousel-caption-header">Travel with us, like a music</h1>
          </div>
        </div>
        <div class="item"> <img src="images/parallax-bg5.jpg" />
          <div class="carousel-caption">
            <h1 class="carousel-caption-header">Thrill feel the difference</h1>
          </div>
        </div>
      </div>
      
      <!-- Controls --> 
      
      <!-- Timer "progress bar" -->
      <hr class="transition-timer-carousel-progress-bar animate" />
    </div>
  </div>
  
  <!-- end slider -->
  
  
  <div class="clearfix"></div>
  <div class="features_sec37">
    <div class="container">
      <h2 class="section_title_white fure"><strong>OUR</strong> PACKAGES</h2>
      <div class="one_fourth"> <img src="images/gt.png" class="img-responsive center-block" alt="Responsive image">
        <div class="clearfix"></div>
        <h2><a href="health-tourism.html">HEALTH</a></h2>
      </div>
      <!-- end section -->
      
      <div class="one_fourth"> <img src="images/et.png" class="img-responsive center-block" alt="Responsive image">
        <div class="clearfix"></div>
        <h2><a href="leisure.html">LEISURE</a></h2>
      </div>
      <!-- end section -->
      
      <div class="one_fourth"> <img src="images/ht.png" class="img-responsive center-block" alt="Responsive image">
        <div class="clearfix"></div>
        <h2><a href="adventure.html">ADVENTURE</a></h2>
      </div>
      <!-- end section -->
      
      <div class="one_fourth last"> <img src="images/lt.png" class="img-responsive center-block" alt="Responsive image">
        <div class="clearfix"></div>
        <h2><a href="travel-facilitation.html">TRAVEL FACILITATION</a></h2>
      </div>
      <!-- end section --> 
      
      <!-- end section --> 
      
      <!-- end section --> 
      
    </div>
  </div>
  <!-- end features section37 --> 
  
  <!-- end features section20 -->
  
  <div class="clearfix"></div>
  <div class="features_sec36">
    <div class="container">
    <div class="one_half welcome">
        <h2 class="section_title_lite left">MISSION AND VISION</h2>
        <ul class="tabs">
          <li class="active"><a href="#demo-tab-1" target="_self">OUR VISION</a></li>
          <li><a href="#demo-tab-2" target="_self">OUR MISSION</a></li>
        </ul>
        <div class="tabs-content">
          <div id="demo-tab-1" class="tabs-panel">
            <p>We strive to become a one stop destination for all your travelling needs.</p>
          </div>
          
          
          <div id="demo-tab-2" class="tabs-panel" style="display: none;">
            <p>Our mission is to be the friendliest and most dependable travel management company in the world through customer satisfaction and efficiency of operation.</p>
          </div>
         
          
        </div>
      </div>
      
      
     
      
      <div class="one_half">
        <h2 class="section_title_lite left">what our clients says</h2>
        <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="4000"> 
          <!-- Carousel indicators -->
          <ol class="carousel-indicators">
          <?php
	    $i = 1;	  
	   $res="SELECT * FROM `testimonals`";
	   $sql=mysqli_query($con,$res);
	   
	   foreach($sql as $row){
		   
		  ?>
          
            <li data-target="#fade-quote-carousel" data-slide-to="0" class="<?php if($i=="1"):echo "active";endif;?>"></li>
         
         <?php
	  $i++;
	  
	   }
	   
	   ?>
          </ol>
          <!-- Carousel items -->
          <div class="carousel-inner">
          <?php
          $j = 1;
		   foreach($sql as $row){
		   
		  ?>
          
            <div class="item <?php if($j=="1"):echo "active";endif;?>">
              <blockquote> <?=$row['title'];?> </blockquote>
              <div class="profile-circle">
              -<?=$row['name'];?>
              </div>
            </div>
             
     <?php
	  $j++;
	  
	   }
	   
	   ?>
            
          </div>
        </div>
      </div>
      <!-- end right side image --> 
      
    </div>
  </div>
  <div class="clearfix"></div>
  
  <!-- end features section25 -->
  
  <div class="clearfix"></div>
  <div class="features_sec24">
    <div class="container">
      <div class="latestnews">
        <h2 class="section_title_drakgray left">Latest news</h2>
        <marquee behavior="scroll" direction="up" height="250" scrollamount="3">
        
          <?php
	   $news="SELECT * FROM `news`";
	   $query=mysqli_query($con,$news);
	   
	   foreach($query as $data){
		   
		  ?>
          
      
      
      
        <p><?=$data['news'];?></p>
        
        
        
        <p></p>
        
        
        <?php
	      }
		?>
    
        
        </marquee>
        <div class="clearfix margin_top3"></div>
      </div>
      <!-- end news -->
      
      <div class="latestblogs">
      
        <h2 class="section_title_drakgray left">Latest Video</h2>
        
            <?php
	   $video="SELECT * FROM `note` where `note_id`='3'";
	   $query1=mysqli_query($con,$video);
	   
	   foreach($query1 as $data1){
		   
   $url =$data1['description'];
   $src= substr(parse_url($url, PHP_URL_PATH), 1); 
		

		   
		  ?>
          
      
        <iframe width="100%" height="250" src="https://www.youtube.com/embed/<?=$src;?>" frameborder="0" allowfullscreen></iframe>
        <?php
	   }
	   ?>
      </div>
    </div>
  </div>
  <!-- end features section24 -->
  
  <div class="clearfix"></div>
  
  
  <div id="grid-container" class="cbp-l-grid-projects four cbp cbp-caption-overlayBottom cbp-animation-fadeOutTop cbp-ready" >
        
                <ul class="cbp-wrapper" style="opacity: 1;">
                    
             <?php
	   $gallery="SELECT * FROM `gallery` order by `gallery_id` desc";
	   $query2=mysqli_query($con,$gallery);
	   
	   foreach($query2 as $data2){
		   

		   
		  ?>    
                
                
                    <li class="cbp-item graphic" style="width: 245px; height: 234px; transform: translate3d(0px, 0px, 0px);"><div class="cbp-item-wrapper">
                        <div class="cbp-caption">
                            <div class="cbp-caption-defaultWrap">
                                <img src="vasayil_backend/<?=$data2['image']?>" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                       
                                        <a href="vasayil_backend/<?=$data2['image']?>" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Took a galley<br>by GSRthemes9">view larger</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div></li>
        <?php
	   }
	   ?>             
                   
				</ul>
            </div>
  
  
  
  <!-- end features section17 -->
  
  <div class="clearfix"></div>
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
          <a href="#"><img src="images/dwnloadbrochure.jpg" class="img-responsive " style="margin-top:15px;"></a> </div>
      </div>
      
      <!-- end tags -->
      
      <div class="one_fourth">
        <div class="footerimg"> <a href="#"><img src="images/logo.png" class="img-responsive "></a></div>
      </div>
      <!-- end tweets -->
      
      <div class="one_fourth last pull-left text-left">
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
