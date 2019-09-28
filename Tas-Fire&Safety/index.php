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
<title>Fire alarm installation and maintenance in Hamilton, Ontario | Security system</title>
<meta name="description" content="TAS Fire & Security specializes in the installation, maintenance, certification, inspection of fire alarm and security system across Hamilton, Ontario.">
<meta name="keywords" content="fire alarm service, fire alarm maintenance, fire protection service, security alarm, fire protection equipment">
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

<!--[if lt IE 7]>

        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>

    <![endif]--> 

<!-- xxx Header xxx -->

<header>
  <div class="sidemenu">
    <ul class="footer-contact">
      <li><a href="https://www.facebook.com/TAS-Fire-Security-910145592364846/" target="_blank"  > <img src="images/facebook_32.png" alt="Fire and Security system Hamilton"></a></li>
      <li><a href="https://twitter.com/TAS_Ontario" target="_blank" ><img src="images/twitter_32.png" alt="Fire and Security system Hamilton"> </a></li>
      <li><a href="https://www.linkedin.com/company/tas-fire-&-security" target="_blank"> <img src="images/linkedin_32.png" alt="Fire and Security system Hamilton"></a></li>
      <li><a href="mailto:info@tasfireandsecurity.ca"> <img src="images/email_32.png" alt="Fire and Security system Hamilton"></a></li>
    
      <li><a href="https://plus.google.com/100787998687789320842" target="_blank"> <img src="images/gmail.png" alt="Fire and Security system Hamilton"></a></li>
      <li><a href="https://www.pinterest.com/TAS_Ontario/" target="_blank"> <img src="images/pinterest_32.png" alt="Fire and Security system Hamilton"></a></li>
    </ul>
  </div>
  
  <!-- xxx Top Bar xxx -->
  
  <div class="top-bar">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 col-md-4" style="font-size:24px; font-weight:600;"> <i class="fa fa-phone"></i>&nbsp; &nbsp;   905 870 7779 </div>
        
       
        
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
                <li class="active"><a href="index.php"><span>Home</span></a></li>
                <li><a href="about-us.php"><span>About US</span></a></li>
                <li><a href="#"><span>Service</span></a>
                  <ul class="dropdown">
                    <?php

				  $res="SELECT * FROM `services`";

				  $sql=mysqli_query($con,$res);

				  while($row=mysqli_fetch_array($sql)){

				  ?>
                    <li><a href="services.php?id=<?=$row['services_id'];?>">
                      <?=$row['title'];?>
                      </a></li>
                    <?php

				  }

				  ?>
                  </ul>
                </li>
                <li><a href="testimonials.php"><span>Testimonials</span></a> </li>
                <li><a href="#"><span>Blog</span></a> </li>
                <li><a href="#"><span>Careers</span></a> </li>
                <li><a href="#"><span>Links</span></a> </li>
                <li><a href="contact.php"><span>Contact Us</span></a></li>
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

<div class="slider-wrap"> 
  
  <!-- xxx Revolutions Slider xxx -->
  
  <div class="tp-banner-container">
    <div class="tp-banner" >
      <ul>
        
        <!-- SLIDE-1  -->
        
        <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-thumb="images/slide-1-thumb.jpg" data-saveperformance="on"  data-title="Intro Slide"> 
          
          <!-- MAIN IMAGE --> 
          
          <img data-lazyload="images/slide-2-bg.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" alt="Fire alarm installation Hamilton"> 
          
          <!-- LAYER NR. 1 -->
          
          <div class="tp-caption slider-sub-title sfl"

                            data-x="0"

                            data-y="50"

                            data-hoffset="0"

                            data-voffset="-80"

                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"

                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"

                            data-speed="1000"

                            data-start="1700"

                            data-easing="Back.easeInOut"

                            data-endspeed="300"

    

                            style="color:#fff"><img src="images/firealrmnew.png" alt="Fire alarm maintenance"> </div>
          <div class="tp-caption white_heavy_40 customin customout text-uppercase"

                        	data-x="600"

                            data-y="100"

                            data-hoffset="0"

                            data-voffset="-80"

                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"

                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"

                            data-speed="1000"

                            data-start="1700"

                            data-easing="Back.easeInOut"

                            data-endspeed="300"

                            style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">FIRE ALARM & <br>
            PROTECTION SYSTEM</div>
          
          <!-- LAYER NR. 2 -->
          
          <div class="tp-caption small_thin_grey customin tp-resizeme rs-parallaxlevel-0"

                           	data-x="600"

                            data-y="200"

                            data-hoffset="0"

                            data-voffset="30"

                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"

                            data-speed="500"

                            data-start="2600"

                            data-easing="Power3.easeInOut"

                            data-splitin="none"

                            data-splitout="none"

                            data-elementdelay="0.05"

                            data-endelementdelay="0.1"

                            style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
            <div style="color:#ffffff; font-size: 24px !important; font-weight:600 !important;">
              <ul class="fa-ul">
                <li><i class="fa-li fa fa-angle-right"></i>Design & Installation</li>
                <li><i class="fa-li fa fa-angle-right"></i>Service & Deficiency Repair</li>
                <li><i class="fa-li fa fa-angle-right"></i>Inspection & Certification</li>
              </ul>
            </div>
          </div>
          
          <!-- LAYER NR. 3 -->
          
          <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0"

                            data-x="600"

                            data-y="380"

                            data-hoffset="0"

                            data-voffset="120"

                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"

                            data-speed="500"

                            data-start="2900"

                            data-easing="Power3.easeInOut"

                            data-splitin="none"

                            data-splitout="none"

                            data-elementdelay="0.1"

                            data-endelementdelay="0.1"

                            data-linktoslide="next"

                            style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;"><a href="services.php?id=1" class="btn-square">Read More</a> </div>
          <div class="tp-caption slider-sub-title sfl"

                            data-x="700"

                            data-y="350"

                            data-hoffset="0"

                            data-voffset="-80"

                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"

                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"

                            data-speed="500"

                            data-start="3800"

                            data-easing="Back.easeInOut"

                            data-endspeed="300"

    

                            style="color:#fff"><img src="images/slide1right.png" alt="security system ontario"> </div>
        </li>
        
        <!-- SLIDE-2  -->
        
        <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-thumb="images/slide-2-thumb.jpg" data-saveperformance="on"  data-title="FIRE ALARM "> 
          
          <!-- MAIN IMAGE --> 
          
          <img data-lazyload="images/slide-1-bg.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" alt="fire alarm extinguishher hamilton"> 
          
          <!-- LAYER NR. 1 -->
          
          <div class="tp-caption slider-sub-title sfl"

                            data-x="0"

                            data-y="50"

                            data-hoffset="0"

                            data-voffset="-80"

                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"

                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"

                            data-speed="1000"

                            data-start="1700"

                            data-easing="Back.easeInOut"

                            data-endspeed="300"

    

                            style="color:#fff"><img src="images/slide-1-img.png" alt="fire alarm certification hamilton"> </div>
          <div class="tp-caption white_heavy_40 customin customout text-uppercase"

                        	data-x="600"

                            data-y="100"

                            data-hoffset="0"

                            data-voffset="-80"

                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"

                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"

                            data-speed="1000"

                            data-start="1700"

                            data-easing="Back.easeInOut"

                            data-endspeed="300"

                            style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">FIRE EXTINGUISHER & <br>
            EMERGENCY LIGHTS </div>
          
          <!-- LAYER NR. 2 -->
          
          <div class="tp-caption small_thin_grey customin tp-resizeme rs-parallaxlevel-0"

                           	data-x="600"

                            data-y="220"

                            data-hoffset="0"

                            data-voffset="30"

                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"

                            data-speed="500"

                            data-start="2600"

                            data-easing="Power3.easeInOut"

                            data-splitin="none"

                            data-splitout="none"

                            data-elementdelay="0.05"

                            data-endelementdelay="0.1"

                            style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
            <div style="color:#ffffff; font-size:24px !important; font-weight:600 !important;">
              <ul class="fa-ul">
                <li><i class="fa-li fa fa-angle-right"></i>Rapid Response to your needs</li>
                <li><i class="fa-li fa fa-angle-right"></i>Emergency Light & Exit Sign</li>
                <li><i class="fa-li fa fa-angle-right"></i>Installation, Inspection & Tagging</li>
              </ul>
            </div>
          </div>
          
          <!-- LAYER NR. 3 -->
          
          <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0"

                            data-x="600"

                            data-y="380"

                            data-hoffset="0"

                            data-voffset="120"

                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"

                            data-speed="500"

                            data-start="2900"

                            data-easing="Power3.easeInOut"

                            data-splitin="none"

                            data-splitout="none"

                            data-elementdelay="0.1"

                            data-endelementdelay="0.1"

                            data-linktoslide="next"

                            style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;"><a href="services.php?id=2" class="btn-square">Read More</a> </div>
          <div class="tp-caption slider-sub-title sfl"

                            data-x="700"

                            data-y="350"

                            data-hoffset="0"

                            data-voffset="-80"

                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"

                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"

                            data-speed="500"

                            data-start="3800"

                            data-easing="Back.easeInOut"

                            data-endspeed="300"

    

                            style="color:#fff"><img src="images/slide2right.png" alt="fire protection service hamilton"> </div>
        </li>
        
        <!-- SLIDE-3  -->
        
        <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-thumb="images/slide-3-thumb.jpg" data-saveperformance="on"  data-title="SMOKE ALARMS"> 
          
          <!-- MAIN IMAGE --> 
          
          <img data-lazyload="images/slide-3-bg.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" alt="fire protection equipment ontario"> 
          
          <!-- LAYER NR. 1 -->
          
          <div class="tp-caption slider-sub-title sfl"

                            data-x="0"

                            data-y="50"

                            data-hoffset="0"

                            data-voffset="-80"

                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"

                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"

                            data-speed="1000"

                            data-start="1700"

                            data-easing="Back.easeInOut"

                            data-endspeed="300"

    

                            style="color:#fff"><img src="images/smoke.png" alt="fire protection service ontario"> </div>
          <div class="tp-caption white_heavy_40 customin customout text-uppercase"

                        	data-x="600"

                            data-y="100"

                            data-hoffset="0"

                            data-voffset="-80"

                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"

                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"

                            data-speed="1000"

                            data-start="1700"

                            data-easing="Back.easeInOut"

                            data-endspeed="300"

                            style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">CARBON MONOXIDE & <br>
            SMOKE ALARMS</div>
          
          <!-- LAYER NR. 2 -->
          
          <div class="tp-caption small_thin_grey customin tp-resizeme rs-parallaxlevel-0"

                           	data-x="600"

                            data-y="220"

                            data-hoffset="0"

                            data-voffset="30"

                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"

                            data-speed="500"

                            data-start="2600"

                            data-easing="Power3.easeInOut"

                            data-splitin="none"

                            data-splitout="none"

                            data-elementdelay="0.05"

                            data-endelementdelay="0.1"

                            style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
            <div style="color:#ffffff; font-size:24px !important; font-weight:600 !important;">
              <ul class="fa-ul">
                <li><i class="fa-li fa fa-angle-right"></i>Residential & Commercial</li>
                <li><i class="fa-li fa fa-angle-right"></i>Interconnected Smoke Alarm & Pull Station</li>
                <li><i class="fa-li fa fa-angle-right"></i>24/7 Customer service</li>
              </ul>
            </div>
          </div>
          
          <!-- LAYER NR. 3 -->
          
          <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0"

                            data-x="600"

                            data-y="380"

                            data-hoffset="0"

                            data-voffset="120"

                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"

                            data-speed="500"

                            data-start="2900"

                            data-easing="Power3.easeInOut"

                            data-splitin="none"

                            data-splitout="none"

                            data-elementdelay="0.1"

                            data-endelementdelay="0.1"

                            data-linktoslide="next"

                            style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;"><a href="services.php?id=3" class="btn-square">Read More</a> </div>
          <div class="tp-caption slider-sub-title sfl"

                            data-x="700"

                            data-y="350"

                            data-hoffset="0"

                            data-voffset="-80"

                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"

                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"

                            data-speed="500"

                            data-start="3800"

                            data-easing="Back.easeInOut"

                            data-endspeed="300"

    

                            style="color:#fff"><img src="images/slide3right.png" alt="fire alarm maintenance ontario"> </div>
        </li>
        
        <!--slide 4-->
        
        <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-thumb="images/slide-4-thumb.jpg" data-saveperformance="on"  data-title="SMOKE ALARMS"> 
          
          <!-- MAIN IMAGE --> 
          
          <img data-lazyload="images/slide-4-bg.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" alt="security alarm monitoring"> 
          
          <!-- LAYER NR. 1 -->
          
          <div class="tp-caption slider-sub-title sfl"

                            data-x="0"

                            data-y="50"

                            data-hoffset="0"

                            data-voffset="-80"

                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"

                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"

                            data-speed="1000"

                            data-start="1700"

                            data-easing="Back.easeInOut"

                            data-endspeed="300"

    

                            style="color:#fff"><img src="images/camera.png" alt="security alarm hamilton"> </div>
          <div class="tp-caption white_heavy_40 customin customout text-uppercase"

                        	data-x="600"

                            data-y="100"

                            data-hoffset="0"

                            data-voffset="-80"

                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"

                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"

                            data-speed="1000"

                            data-start="1700"

                            data-easing="Back.easeInOut"

                            data-endspeed="300"

                            style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">SECURITY SYSTEMS & <br>
            CAMERA</div>
          
          <!-- LAYER NR. 2 -->
          
          <div class="tp-caption small_thin_grey customin tp-resizeme rs-parallaxlevel-0"

                           	data-x="600"

                            data-y="220"

                            data-hoffset="0"

                            data-voffset="30"

                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"

                            data-speed="500"

                            data-start="2600"

                            data-easing="Power3.easeInOut"

                            data-splitin="none"

                            data-splitout="none"

                            data-elementdelay="0.05"

                            data-endelementdelay="0.1"

                            style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
            <div style="color:#ffffff; font-size:24px !important; font-weight:600 !important;">
              <ul class="fa-ul">
                <li><i class="fa-li fa fa-angle-right"></i>Monitoring Service</li>
                <li><i class="fa-li fa fa-angle-right"></i>No Contract Required</li>
                <li><i class="fa-li fa fa-angle-right"></i>CCTV Camera</li>
              </ul>
            </div>
          </div>
          
          <!-- LAYER NR. 3 -->
          
          <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0"

                            data-x="600"

                            data-y="380"

                            data-hoffset="0"

                            data-voffset="120"

                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"

                            data-speed="500"

                            data-start="2900"

                            data-easing="Power3.easeInOut"

                            data-splitin="none"

                            data-splitout="none"

                            data-elementdelay="0.1"

                            data-endelementdelay="0.1"

                            data-linktoslide="next"

                            style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;"><a href="services.php?id=4" class="btn-square">Read More</a> </div>
          <div class="tp-caption slider-sub-title sfl"

                            data-x="700"

                            data-y="350"

                            data-hoffset="0"

                            data-voffset="-80"

                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"

                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"

                            data-speed="500"

                            data-start="3800"

                            data-easing="Back.easeInOut"

                            data-endspeed="300"

    

                            style="color:#fff"><img src="images/slide4right.png" alt=""> </div>
        </li>
        
        <!--slide 5-->
        
        <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-thumb="images/slide-5-thumb.jpg" data-saveperformance="on"  data-title="SMOKE ALARMS"> 
          
          <!-- MAIN IMAGE --> 
          
          <img data-lazyload="images/slide-5-bg.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
          
          <!-- LAYER NR. 1 -->
          
          <div class="tp-caption slider-sub-title sfl"

                            data-x="0"

                            data-y="50"

                            data-hoffset="0"

                            data-voffset="-80"

                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"

                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"

                            data-speed="1000"

                            data-start="1700"

                            data-easing="Back.easeInOut"

                            data-endspeed="300"

    

                            style="color:#fff"><img src="images/potlight.png" alt=""> </div>
          <div class="tp-caption white_heavy_40 customin customout text-uppercase"

                        	data-x="600"

                            data-y="100"

                            data-hoffset="0"

                            data-voffset="-80"

                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"

                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"

                            data-speed="1000"

                            data-start="1700"

                            data-easing="Back.easeInOut"

                            data-endspeed="300"

                            style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">ELECTRICAL & <br>
            POT LIGHTS</div>
          
          <!-- LAYER NR. 2 -->
          
          <div class="tp-caption small_thin_grey customin tp-resizeme rs-parallaxlevel-0"

                           	data-x="600"

                            data-y="220"

                            data-hoffset="0"

                            data-voffset="30"

                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"

                            data-speed="500"

                            data-start="2600"

                            data-easing="Power3.easeInOut"

                            data-splitin="none"

                            data-splitout="none"

                            data-elementdelay="0.05"

                            data-endelementdelay="0.1"

                            style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
            <div style="color:#ffffff; font-size:24px !important; font-weight:600 !important;">
              <ul class="fa-ul">
                <li><i class="fa-li fa fa-angle-right"></i>POT Lights & Dimmer (LED & Halogen)</li>
                <li><i class="fa-li fa fa-angle-right"></i>Lighting & Re-lamping</li>
                <li><i class="fa-li fa fa-angle-right"></i>Free estimate</li>
              </ul>
            </div>
          </div>
          
          <!-- LAYER NR. 3 -->
          
          <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0"

                            data-x="600"

                            data-y="380"

                            data-hoffset="0"

                            data-voffset="120"

                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"

                            data-speed="500"

                            data-start="2900"

                            data-easing="Power3.easeInOut"

                            data-splitin="none"

                            data-splitout="none"

                            data-elementdelay="0.1"

                            data-endelementdelay="0.1"

                            data-linktoslide="next"

                            style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;"><a href="services.php?id=5" class="btn-square">Read More</a> </div>
          <div class="tp-caption slider-sub-title sfl"

                            data-x="700"

                            data-y="350"

                            data-hoffset="0"

                            data-voffset="-80"

                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"

                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"

                            data-speed="500"

                            data-start="3800"

                            data-easing="Back.easeInOut"

                            data-endspeed="300"

    

                            style="color:#fff"><img src="images/slide5right.png" alt=""> </div>
        </li>
        
        <!--slide 6-->
        
        <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-thumb="images/slide-6-thumb.jpg" data-saveperformance="on"  data-title="SMOKE ALARMS"> 
          
          <!-- MAIN IMAGE --> 
          
          <img data-lazyload="images/slide-6-bg.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
          
          <!-- LAYER NR. 1 -->
          
          <div class="tp-caption slider-sub-title sfl"

                            data-x="0"

                            data-y="50"

                            data-hoffset="0"

                            data-voffset="-80"

                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"

                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"

                            data-speed="1000"

                            data-start="1700"

                            data-easing="Back.easeInOut"

                            data-endspeed="300"

    

                            style="color:#fff"><img src="images/audiovideo.png" alt=""> </div>
          <div class="tp-caption white_heavy_40 customin customout text-uppercase"

                        	data-x="600"

                            data-y="100"

                            data-hoffset="0"

                            data-voffset="-80"

                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"

                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"

                            data-speed="1000"

                            data-start="1700"

                            data-easing="Back.easeInOut"

                            data-endspeed="300"

                            style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">AUDIO VIDEO & <br>
            HOME THEATRE</div>
          
          <!-- LAYER NR. 2 -->
          
          <div class="tp-caption small_thin_grey customin tp-resizeme rs-parallaxlevel-0"

                           	data-x="600"

                            data-y="220"

                            data-hoffset="0"

                            data-voffset="30"

                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"

                            data-speed="500"

                            data-start="2600"

                            data-easing="Power3.easeInOut"

                            data-splitin="none"

                            data-splitout="none"

                            data-elementdelay="0.05"

                            data-endelementdelay="0.1"

                            style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
            <div style="color:#ffffff; font-size:24px !important; font-weight:600 !important;">
              <ul class="fa-ul">
                <li><i class="fa-li fa fa-angle-right"></i>Home Theater</li>
                <li><i class="fa-li fa fa-angle-right"></i>Distributed audio</li>
                <li><i class="fa-li fa fa-angle-right"></i>Other Services</li>
              </ul>
            </div>
          </div>
          
          <!-- LAYER NR. 3 -->
          
          <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0"

                            data-x="600"

                            data-y="380"

                            data-hoffset="0"

                            data-voffset="120"

                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"

                            data-speed="500"

                            data-start="2900"

                            data-easing="Power3.easeInOut"

                            data-splitin="none"

                            data-splitout="none"

                            data-elementdelay="0.1"

                            data-endelementdelay="0.1"

                            data-linktoslide="next"

                            style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;"><a href="services.php?id=6" class="btn-square">Read More</a> </div>
          <div class="tp-caption slider-sub-title sfl"

                            data-x="700"

                            data-y="320"

                            data-hoffset="0"

                            data-voffset="-80"

                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"

                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"

                            data-speed="500"

                            data-start="3800"

                            data-easing="Back.easeInOut"

                            data-endspeed="300"

    

                            style="color:#fff"><img src="images/slide6right.png" alt=""> </div>
        </li>
        
        <!---->
        
      </ul>
      <div class="tp-bannertimer tp-bottom"></div>
    </div>
  </div>
  
  <!-- xxx Revolutions Slider End xxx --> 
  
</div>

<!-- xxx Slider Outer End xxx --> 

<!-- xxx Callout 1 xxx -->

<section class="callout-1">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h1>Welcome to tas fire &amp; Security</h1>
        <h4>
          <p class="para1"> we are a leading fire security company located in Hamilton(ON) provides various products and services throughout Ontario. Our core focus is for fire & safety which provide monthly& annual inspection, certification, deficiency repairs, preventive and corrective maintenance of Fire Alarm, Fire Protection Equipment, Fire Extinguishers, Emergency Lighting, Sprinkler Systems, Intercoms, Access control, Security alarm, Monitoring service, Smoke Alarms, CO2 Alarms, Time distribution, TV Distribution, Public Address, Access Control and Cameras. We provide Re-lambing, Electrical and Pot Lights Service. We provide service to residential and commercial properties as per building code, fire code, electrical code and ULC Standards.</p>
          <p class="para1">Our fully licensed CFAA technicians, 309A licensed electricians, sprinkler fitters, factory trained fire protection and suppression technicians provide quality & timely service and advise to ensure your safety. We ensure very competitive rates in the area and provide price beat guarantee for all our products and services.</p>
        </h4>
      </div>
      <div class="col-sm-6"> <img src="images/pic-1.jpg" alt="TAS Fire & Security" class="callout-img"> </div>
    </div>
  </div>
</section>

<!-- xxx Callout 1 xxx --> 

<!-- xxx Body Content xxx -->

<div id="body-content" class="no-margin home"> 
  
  <!-- xxx Service Icons xxx -->
  
  <section class="service-icons m50">
    <div class="container">
      <div class="row">
        <div class="col-md-12 feature-list">
          <div class="row">
            <div class="col-sm-4 col-md-4 col-xs-12 portfolio-wrap-2 ">
              <div class="featured-item"> <a href="services.php?id=1">
                <h3>Fire Alarm & Protection System</h3>
                </a>
                <div class="hover_img" style="margin-bottom:10px !important;"> <img src="images/homeservice1.jpg" alt=""> </div>
                <ul class="fa-ul list-colored">
                  <li><i class="fa-li fa-li fa fa-check"></i>Fire Protection Equipments</li>
                  <li><i class="fa-li fa-li fa fa-check"></i>Monthly Inspection</li>
                  <li><i class="fa-li fa-li fa fa-check"></i>Fire Alarm Systems</li>
                  <li><i class="fa-li fa-li fa fa-check"></i>Annual Inspection</li>
                  <li><i class="fa-li fa-li fa fa-check"></i>Fire Safety Plans</li>
                  <li><i class="fa-li fa-li fa fa-check"></i>Sprinkler Systems</li>
                  <li><i class="fa-li fa-li fa fa-check"></i>Fire Hose Reels</li>
                  <li><i class="fa-li fa-li fa fa-check"></i>Fire Log Books</li>
                </ul>
              </div>
            </div>
            <div class="col-sm-4 col-md-4 col-xs-12 portfolio-wrap-2">
              <div class="featured-item"> <a href="services.php?id=2">
                <h3>Fire Extinguisher & Emergency Lights</h3>
                </a>
                <div class="hover_img" style="margin-bottom:10px !important;"> <img src="images/homeservice2.jpg" alt=""> </div>
                <ul class="fa-ul list-colored">
                  <li><i class="fa-li fa-li fa fa-check"></i>Emergency Light & Exit Sign</li>
                  <li><i class="fa-li fa-li fa fa-check"></i>Fire Suppression System</li>
                  <li><i class="fa-li fa-li fa fa-check"></i>Tagging & Certification</li>
                  <li><i class="fa-li fa-li fa fa-check"></i>Battery Function Test</li>
                  <li><i class="fa-li fa-li fa fa-check"></i>Battery Replacement</li>
                  <li><i class="fa-li fa-li fa fa-check"></i>Full Discharge Test</li>
                  <li><i class="fa-li fa-li fa fa-check"></i>Fire Extinguisher</li>
                  <li><i class="fa-li fa-li fa fa-check"></i>Refill & HI test</li>
                </ul>
              </div>
            </div>
            <div class="col-sm-4 col-md-4 col-xs-12 portfolio-wrap-2">
              <div class="featured-item"> <a href="services.php?id=3">
                <h3>Carbon Monoxide & Smoke Alarms</h3>
                </a>
                <div class="hover_img" style="margin-bottom:10px !important;"> <img src="images/homeservice3.jpg" alt=""> </div>
                <ul class="fa-ul list-colored">
                  <li><i class="fa-li fa-li fa fa-check"></i>Wireless interconnected Alarm</li>
                  <li><i class="fa-li fa-li fa fa-check"></i>Interconnected Smoke Alarm</li>
                  <li><i class="fa-li fa-li fa fa-check"></i>Hardwired 110V Alarm</li>
                  <li><i class="fa-li fa-li fa fa-check"></i>Manual Pull Station</li>
                  <li><i class="fa-li fa-li fa fa-check"></i>Water leak Alarm</li>
                  <li><i class="fa-li fa-li fa fa-check"></i>Smoke Alarm</li>
                  <li><i class="fa-li fa-li fa fa-check"></i>WHIMS Label</li>
                  <li><i class="fa-li fa-li fa fa-check"></i>CO2 Alarm</li>
                </ul>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-sm-4 col-md-4 col-xs-12 portfolio-wrap-2">
              <div class="featured-item"> <a href="services.php?id=4">
                <h3>Security Systems & Camera</h3>
                </a>
                <div class="hover_img" style="margin-bottom:10px !important;"> <img src="images/homeservice4.png" alt=""> </div>
                <ul class="fa-ul list-colored">
                  <li><i class="fa-li fa-li fa fa-check"></i>DVR with Smart phone Monitoring </li>
                  <li><i class="fa-li fa-li fa fa-check"></i>Service without Contract </li>
                  <li><i class="fa-li fa-li fa fa-check"></i>CCTV Camera, IP Camera </li>
                  <li><i class="fa-li fa-li fa fa-check"></i>Remote Access Feature</li>
                  <li><i class="fa-li fa-li fa fa-check"></i>Monitoring Transfer</li>
                  <li><i class="fa-li fa-li fa fa-check"></i>Monitoring Service</li>
                  <li><i class="fa-li fa-li fa fa-check"></i>Video Surveillance </li>
                  <li><i class="fa-li fa-li fa fa-check"></i>Intrusion Alarm</li>
                </ul>
              </div>
            </div>
            <div class="col-sm-4 col-md-4 col-xs-12 portfolio-wrap-2">
              <div class="featured-item"> <a href="services.php?id=5">
                <h3>Electrical & Pot Lights</h3>
                </a>
                <div class="hover_img" style="margin-bottom:10px !important;"> <img src="images/homeservice5.jpg" alt=""> </div>
                <ul class="fa-ul list-colored">
                  <li><i class="fa-li fa-li fa fa-check"></i>POT Lights & Dimmer (LED & Halogen)</li>
                  <li><i class="fa-li fa-li fa fa-check"></i>Valance & Cabinet Lighting</li>
                  <li><i class="fa-li fa-li fa fa-check"></i>Lighting & Re-lamping</li>
                  <li><i class="fa-li fa-li fa fa-check"></i>Basement Renovation</li>
                  <li><i class="fa-li fa-li fa fa-check"></i>Service & Repair</li>
                  <li><i class="fa-li fa-li fa fa-check"></i>Security Lights</li>
                  <li><i class="fa-li fa-li fa fa-check"></i>Signs & Labels</li>
                  <li><i class="fa-li fa-li fa fa-check"></i>UPS System</li>
                </ul>
              </div>
            </div>
            <div class="col-sm-4 col-md-4 col-xs-12 portfolio-wrap-2">
              <div class="featured-item"> <a href="services.php?id=6">
                <h3>Audio Video & Home Theatre</h3>
                </a>
                <div class="hover_img" style="margin-bottom:10px !important;"> <img src="images/homeservice6.jpg" alt=""> </div>
                <ul class="fa-ul list-colored">
                  <li><i class="fa-li fa-li fa fa-check"></i>Distributed audio system</li>
                  <li><i class="fa-li fa-li fa fa-check"></i>Time Distribution System</li>
                  <li><i class="fa-li fa-li fa fa-check"></i>TV Distribution System</li>
                  <li><i class="fa-li fa-li fa fa-check"></i>Public Address System</li>
                  <li><i class="fa-li fa-li fa fa-check"></i>Access Control system</li>
                  <li><i class="fa-li fa-li fa fa-check"></i>Computer Net working</li>
                  <li><i class="fa-li fa-li fa fa-check"></i>Home Theater system</li>
                  <li><i class="fa-li fa-li fa fa-check"></i>Key Pad Entry</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- xxx Service Icons Icons xxx -->
  
  <section class="brandtnew">
    <div class="main-head">
      <h1>Brands <span>We Deals</span></h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <ul class="footer-links">
            <li><a href="#"><img src="images/brand/1732822.png" class="img-responsive center-block"></li>
            <li><a href="#"><img src="images/brand/Amerex-Logo-Color.png" class="img-responsive center-block"></li>
            <li><a href="#"><img src="images/brand/ansul.gif" class="img-responsive center-block"></li>
            <li><a href="#"><img src="images/brand/badger.gif" class="img-responsive center-block"></li>
            <li><a href="#"><img src="images/brand/bosch.gif" class="img-responsive center-block"></li>
            <li><a href="#"><img src="images/brand/buckeyefirelogo100.png" class="img-responsive center-block"></li>
            <li><a href="#"><img src="images/brand/dsc.jpg" class="img-responsive center-block"></li>
            <li><a href="#"><img src="images/brand/Edwardslogo.png" class="img-responsive center-block"></li>
            <li><a href="#"><img src="images/brand/FireLite_Logo.jpg" class="img-responsive center-block"></li>
            <li><a href="#"><img src="images/brand/Flir_Logo.jpg" class="img-responsive center-block"></li>
            <li><a href="#"><img src="images/brand/general_electric_logo.png" class="img-responsive center-block"></li>
            <li><a href="#"><img src="images/brand/index.gif" class="img-responsive center-block"></li>
            <li><a href="#"><img src="images/brand/Interlogix.jpg" class="img-responsive center-block"></li>
            <li><a href="#"><img src="images/brand/logo.jpg" class="img-responsive center-block"></li>
            <li><a href="#"><img src="images/brand/Logo_StrikeFirst.gif" class="img-responsive center-block"></li>
            <li><a href="#"><img src="images/brand/logo-leviton.png" class="img-responsive center-block"></li>
            <li><a href="#"><img src="images/brand/mircom.jpg" class="img-responsive center-block"></li>
            <li><a href="#"><img src="images/brand/notifier.jpg" class="img-responsive center-block"></li>
            <li><a href="#"><img src="images/brand/partner3.jpg" class="img-responsive center-block"></li>
            <li><a href="#"><img src="images/brand/pelco.gif" class="img-responsive center-block"></li>
            <li><a href="#"><img src="images/brand/potter.jpg" class="img-responsive center-block"></li>
            <li><a href="#"><img src="images/brand/Proficient.jpg" class="img-responsive center-block"></li>
            <li><a href="#"><img src="images/brand/Russ_Logo_transparentr.jpg" class="img-responsive center-block"></li>
            <li><a href="#"><img src="images/brand/samsung-logo.jpg" class="img-responsive center-block"></li>
            <li><a href="#"><img src="images/brand/sdi.png" class="img-responsive center-block"></li>
            <li><a href="#"><img src="images/brand/sec.jpg" class="img-responsive center-block"></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
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
      <div class="col-sm-12 text-center"> Copyright &copy; 2015 TAS Fire & Security. All Right Reserved .</div>
    </div>
  </div>
</section>

<!-- xxx Footer Content End xxx --> 

<!-- xxx Back To Top xxx -->

<div id="back-top"> <a class="img-circle" href="#top"> <i class="fa fa-angle-up"></i> </a> </div>

<!-- xxx End xxx --> 

<!-- JQuery Plugins--> 

<script type="text/javascript" src="js/jquery.min.js"></script> 
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
<script type="text/javascript">

		jQuery(document).ready(function() {

			

			jQuery('.tp-banner').show().revolution(

			{

				dottedOverlay:"none",

				delay:10000,

				startwidth:1170,

				startheight:550,

				hideThumbs:200,

				

				thumbWidth:100,

				thumbHeight:50,

				thumbAmount:5,

				

				navigationType:"bullet",

				navigationArrows:"solo",

				navigationStyle:"preview4",

				

				touchenabled:"on",

				onHoverStop:"off",

				

				swipe_velocity: 0.7,

				swipe_min_touches: 1,

				swipe_max_touches: 1,

				drag_block_vertical: false,

										

				parallax:"mouse",

				parallaxBgFreeze:"on",

				parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

										

				keyboardNavigation:"off",

				

				navigationHAlign:"center",

				navigationVAlign:"bottom",

				navigationHOffset:0,

				navigationVOffset:20,



				soloArrowLeftHalign:"left",

				soloArrowLeftValign:"center",

				soloArrowLeftHOffset:20,

				soloArrowLeftVOffset:0,



				soloArrowRightHalign:"right",

				soloArrowRightValign:"center",

				soloArrowRightHOffset:20,

				soloArrowRightVOffset:0,

						

				shadow:0,

				fullWidth:"on",

				fullScreen:"on",



				spinner:"spinner4",

				

				stopLoop:"off",

				stopAfterLoops:-1,

				stopAtSlide:-1,



				shuffle:"off",

				

				autoHeight:"off",						

				forceFullWidth:"off",									

										

				hideThumbsOnMobile:"off",

				hideNavDelayOnMobile:1500,						

				hideBulletsOnMobile:"off",

				hideArrowsOnMobile:"off",

				hideThumbsUnderResolution:0,

				

				hideSliderAtLimit:0,

				hideCaptionAtLimit:0,

				hideAllCaptionAtLilmit:0,

				startWithSlide:0,

				videoJsPath:"rs-plugin/videojs/",

				fullScreenOffsetContainer: "header"	

			});		

							

		});	//ready

		

	</script> 
<script>

    

    $(document).ready(function() {

	$('#myCarousel').carousel({

		

	interval: 5000

	})

});

</script>
</body>
</html>
