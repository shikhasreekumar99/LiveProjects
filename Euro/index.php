<?php require_once('euro_backend/db.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Euro Events | Sports &amp; Events Hospitality</title>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css" />
<script src="js/script.js"></script>
<script>
	$(document).ready(function() {
  //Set the carousel options
  $('#quote-carousel').carousel({
    pause: true,
    interval: 4000,
  });
});
</script>
<!--Smooth Scrolling-->
<!--<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.0.6/jquery.mousewheel.min.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.simplr.smoothscroll.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
$(function () {
  $.srSmoothscroll()
})
</script>-->
</head>

<body>
<!--Head starts here-->
<div class="container-fluid">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12 p0">
            	<div class="col-md-3">  <img src="images/logo.png" class="img-responsive center-block" alt="Responsive image"></div>
                <!--Menu starts here-->
                <div class="col-md-6">
                	<div id='cssmenu'>
                    	<ul>
                        	<li class='active'><a href='index.html'>Home</a></li>
                            <li><a href='dairy.html'>Event Diary</a></li>
                            <li><a href='about.html'>about us</a></li>
                            <li><a href='contact.html'>Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 fr ">
                	<div class="social-icon"><i class="fa fa-twitter"></i></div>
                    <div class="social-icon"><i class="fa fa-facebook"></i></div>
                    <div class="social-icon"><i class="fa fa-google-plus"></i></div>
                    <div class="social-icon"><i class="fa fa-youtube"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Slider starts here-->
<div class="container-fluid p0 intro">
	<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="7000" id="bs-carousel">
      	<!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#bs-carousel" data-slide-to="1"></li>
        <li data-target="#bs-carousel" data-slide-to="2"></li>
        <li data-target="#bs-carousel" data-slide-to="3"></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item slides active">
          <div class="slide-1"></div>
        </div>
        <div class="item slides">
          <div class="slide-2"></div>
        </div>
        <div class="item slides">
          <div class="slide-3"></div>
        </div>
        <div class="item slides">
          <div class="slide-4"></div>
        </div>
      </div> 
	</div>
</div>
<!--Content starts here-->
<div class="container-fluid bg p0">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12 p0  m100">
            	<div class="col-md-7">
                	<h2>Welcome to <span style="color:#003399;">Euro Events</span></h2>
                   <p class="text-justify">Euro Events has established itself as an independent supplier of a wide range of hospitality packages at major sporting and music events in U.K. and Europe. Whether you are looking to entertain clients with corporate sports hospitality or treat a friend or family member, we aim to provide the best hospitality at major sporting events and also at other events such as concerts, theatres, celebrity dinners etc.</p>
                  <a href="dairy.html"><div class="view">View Our Event Diary</div></a>
                </div>
                <div class="col-md-5">
                	<div class="pic"><img src="images/pic.jpg" /></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid p0">
	<div class="col-md-12 p0">
    	<div class="col-md-6 p0">
        	<div class="news-bg">
            	<h3>Latest News</h3>
            
               <marquee direction="up" width="100%" scrollamount="4" style="padding-bottom:5px;"> 
               
               <?php
			   $query=mysqli_query($con,"select * from news");
			   while($row=mysqli_fetch_array($query)){
			   ?>
               
                 <p><?=$row['news']; ?></p>  
                
             <?php
			   }
			   ?>
               
               </marquee> 
     
            </div>
        </div>
        <div class="col-md-6 p0">
        	<div class="test-bg fl">
            	<h3>Client’s Testimonials</h3>
            	<div class="carousel slide" data-ride="carousel" id="quote-carousel">
       			<!-- Bottom Carousel Indicators -->
                <ol class="carousel-indicators">
                 
                  <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                  <li data-target="#quote-carousel" data-slide-to="1"></li>
                  <li data-target="#quote-carousel" data-slide-to="2"></li>
                  <li data-target="#quote-carousel" data-slide-to="3"></li>
                  <li data-target="#quote-carousel" data-slide-to="4"></li>
                  <li data-target="#quote-carousel" data-slide-to="5"></li>
                  <li data-target="#quote-carousel" data-slide-to="6"></li>
                  <li data-target="#quote-carousel" data-slide-to="7"></li>
               
                </ol>
        	<!-- Carousel Slides / Quotes -->
            <div class="carousel-inner">
              <!-- Quote 1 -->
            
           <?php
		      $i=1;
			   $query=mysqli_query($con,"select * from testimonals ");
			   while($row=mysqli_fetch_array($query)){
			   ?>  
              
              
              <div class="item <?php if($i=='1'):echo "active";endif;?>">
                <blockquote>
                  <div class="row">
                    <div class="col-sm-3 text-center">
<!--                   <img class="img-circle" src="http://www.reactiongifs.com/r/overbite.gif" style="width: 100px;height:100px;">
-->                 
                    </div>
                    <div class="col-sm-9">
                      <p><?=$row['testimonals'];?></p>
                      <small><?=$row['name'];?></small>
                    </div>
                  </div>
                </blockquote>
              </div>
              
              <?php
			  $i++;
			   }
			  ?>
              
              
              
              
            </div>
        
                <!-- Carousel Buttons Next/Prev -->
                <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
      			</div>
            </div>
        </div>
    </div>
</div>
 <!-- Footer starts here -->
 <div class="container-fluid footer">
	<div class="container">
        	<div class="row">
            	<div class="col-md-12 p0">
                	<div class="col-md-6"><a href='index.html'>Home</a>&nbsp;   |   &nbsp;<a href='dairy.html'>Event Diary</a>&nbsp;   |  &nbsp;<a href='about.html'>About Us</a>&nbsp;   |   &nbsp;<a href='contact.html'>Contact Us</a>&nbsp;   |   &nbsp;<a href='terms.html'>T's & C's</a></div>
                    <div class="col-md-6 tr">© 2015 Euro Events  | Powered by <a href="http://yyupp.com/" target="_blank">Yyupp</a></div>
                </div>
            </div>
        </div>
 </div>
 
 

 
 
</body>
</html>
