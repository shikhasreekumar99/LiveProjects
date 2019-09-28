
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
      <div class="col-md-4 col-sm-4 col-xs-12 mrgn">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>
          
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active"> <img src="images/slider1.jpg" alt="..."> 
              <!--<div class="carousel-caption">
            <h2>Heading</h2>
          </div>--> 
            </div>
            <div class="item"> <img src="images/slider2.jpg" alt="..."> </div>
            <div class="item"> <img src="images/slider3.jpg" alt="..."> </div>
          </div>
          
          <!-- Controls --> 
          <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a> <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a> </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12 welcome mrgn" > <img src="images/call_10.png" class="img-responsive center-block call " />
        <div class="welcome_content">
          <h1>Why?. AL-Marivoice !</h1>
          <p style="text-align:justify;">Multi dialer support for all platform. Exellent call quality with cheap rates. Call Dialer to Dialer at free of cost. Supports G.729 codec.A to Z Termination.Call any where. 100% Pure Billing. 24x7 Customer Care Service. Works with EDGE, GPRS, Wi-Fi & VPN.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12" style="text-decoration:none;"> 
      
  <a href="http://174.136.48.184/almarivoice"> <div class="mlog" style="text-decoration:none;">  Member Login</div></a>
   
     
      
        <h2>Save from your mobile</h2>
        <img src="images/callpic_13.png" class="img-responsive center-block phone" />
        <div class="dwnld">Download Mobile Dialer Now <a href="download.php"><i class="fa fa-download fa-2x pull-right" ></i></a></div>
        
        
        
        <div class="dwnld pull-right text-right">
        
        
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="PULAWX7QUYNXC">
<table width="40%">
<tr><td><input type="hidden" name="on0" value="For Online Payments">For Online Payments</td></tr><tr><td><select name="os0">
        <option value="Calling Cards">Calling Cards </option>
        <option value="Other">Other </option>
</select> </td></tr>
</table>
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" style="margin-top:-40px;" name="submit" class="pull-right" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

        
        </div>
        
        
        
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
