
<?php
require_once('almari_backend/db.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Al Mari</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">

<!-- js -->
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script>
    $(document).ready(function(){
        $("#nav-mobile").html($("#nav-main").html());
        $("#nav-trigger span").click(function(){
            if ($("nav#nav-mobile ul").hasClass("expanded")) {
                $("nav#nav-mobile ul.expanded").removeClass("expanded").slideUp(250);
                $(this).removeClass("open");
            } else {
                $("nav#nav-mobile ul").addClass("expanded").slideDown(250);
                $(this).addClass("open");
            }
        });
    });
</script>
</head>

<body>
<div class="container">
  <div class="row">
     <div class="col-md-2 col-sm-2 col-xs-12"><a href="index.php"><img src="images/logo.png" class="img-responsive center-block" /></a></div>
    <div class="col-md-7 col-sm-7 col-xs-12 name">
      <h1>AL-Mari voice Telecommunication & Systems</h1>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-12 ">
      <div class="social_icon">
        <ul>
          <li><a href=" https://www.facebook.com/almarivoice" target="_blank"><img src="images/facebook.png" /></a></li>
          <li><a href="https://twitter.com/AL_MariVoice " target="_blank"><img src="images/twitter.png" /></a></li>
          <li><a href="https://plus.google.com/u/1/105628204224888768995/ " target="_blank"><img src="images/google_plus.png" /></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid nav">
  <div class="container">
    <div id="nav-trigger"> <span>Menu</span> </div>
    <nav id="nav-main">
      <ul>
        <li><a href="index.php">HOME </a></li>
        <li><a href="download.php">DOWNLOAD</a></li>
        <li><a href="contact.php"> CONTACT </a></li>
        <li><a href="about.php"> ABOUT US</a></li>
        <li><a href="http://174.136.48.184/almarivoice">LOGIN</a></li>
      </ul>
    </nav>
    <nav id="nav-mobile"></nav>
  </div>
</div>

<!-------------welcome--------------->


<div class="container-fluid" style="background:#f1f1f0;">
  <div class="container news">
    <div class="row">
      <div class="col-md-1 col-sm-2 col-xs-12 newsheading">NEWS</div>
      <?php
	  $res="SELECT * FROM `news`";
	  $sql=mysqli_query($con,$res);
	  ?>
      <div class="col-md-11 col-sm-10 col-xs-12" style="padding:5px 2px;">
        <marquee scrollamount="5">
       <?php
		 while($row=mysqli_fetch_array($sql))
	  {
      echo " ".$row['news']."....  "; 
	  }
	  
	  ?>
        </marquee>
      </div>
    </div>
  </div>
  
  
  
  
  
  <div class="container" >
  <div class="row">
  
  <h3 class="innerheading">ABOUT US</h3>
  <div class="line-center"></div>
  
  
  
  <div class="col-md-4 col-sm-4 col-xs-12"> <img src="images/about_img.png" class=" img-responsive center-block" /> </div>
  
    <div class="col-md-8 col-sm-8 col-xs-12"  align="justify">
    
    
   <?php
   $result="SELECT * FROM `about_us`";
   $sql1=mysqli_query($con,$result);
   while($row1=mysqli_fetch_array($sql1))
   {
	   ?>
	<?=$row1['description'];  ?>
	<?php 
   }
   ?>
    
   
    </div>
  
  </div>
  
  
    
  </div>
</div>

<!-------------close welcome--------------->

<div class="container-fluid" style="background:#e0e0df; padding:20px 0px;">
  <div class="container">
    <div class="row"> <a href="download.php">
      <div class="col-md-2 col-xs-4 flag1 text-center"><img src="images/uae.png" class="img-responsive center-block flag_padng" />
        <h7>UAE DIALERS</h7>
      </div>
      </a> 
      <a href="download.php">
      <div class="col-md-2 col-xs-4 flag2 text-center"><img src="images/oman.jpg" class="img-responsive center-block flag_padng" />
        <h7>OMAN DIALERS</h7>
      </div>
      </a> <a href="download.php">
      <div class="col-md-2 col-xs-4 flag3 text-center"><img src="images/saudi.jpg" class="img-responsive center-block flag_padng" />
        <h7>SAUDI ARABIA DIALERS</h7>
      </div>
      </a> <a href="download.php">
      <div class="col-md-2 col-xs-4 flag4 text-center"><img src="images/qatar.jpg" class="img-responsive center-block flag_padng" />
        <h7>QATAR DIALERS</h7>
      </div>
      </a> <a href="download.php">
      <div class="col-md-2 col-xs-4 flag5 text-center"><img src="images/bahrain.jpg" class="img-responsive center-block flag_padng" />
        <h7>BAHRAIN DIALERS</h7>
      </div>
      </a> <a href="download.php">
      <div class="col-md-2 col-xs-4 flag6 text-center"><img src="images/kuwait.jpg" class="img-responsive center-block flag_padng" />
        <h7>KUWAIT DIALERS</h7>
      </div>
      </a> </div>
  </div>
</div>


<div class="container-fluid footer">
<div class="container">
 <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12 pull-left mobalign">Copyright © Almarivoice.com  </div>
      <div class="col-md-6 col-sm-6 col-xs-12 text-right pull-right mobalign"><div class="poweredby">

       

       By AL-Mari voice Telecommunication & Systems <!--<a href="http://phitany.com" target="_blank"> web design company Kerala  </a>--> </div>  </div>
    </div>

</div>


</div>


<script src="js/bootstrap.min.js"></script>
</body>
</html>
