<?php
require_once('euro_backend/db.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Euro Events | Sports &amp; Events Hospitality | Event Diary</title>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/smk-accordion.css" />

<script src="js/script.js"></script>
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
                        	<li><a href='index.php'>Home</a></li>
                            <li class='active'><a href='dairy.php'>Event Diary</a></li>
                            <li><a href='about.html'>about us</a></li>
                            <li><a href='contact.html'>Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
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
<div class="container-fluid p0 bg-1">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12 align">
            	<div class="head-1">Event Diary</div>
                <div class="head-2">upcoming events</div>
            </div>
        </div>
    </div>
</div>
<!--Content starts here-->
<div class="container-fluid gradient">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12 p0  m100">
            	<div class="accordion_example1">
                
                
                 <?php
			   $i=1;	 
			   $query1=mysql_query("SELECT  `date_from` FROM `events` group by MONTH(`date_from`)")or die(mysql_error());
				while( $row1 = mysql_fetch_array($query1)){ 
				
					$time=strtotime($row1['date_from']);
                    $month=date("F",$time);
                    $monthnumber=date("m",$time);
                    $year=date("Y",$time);
							
                        ?>
                
                
                	<!--Event 1        -->
                	<div class="accordion_in <?php if($i=="1"): echo "acc_active"; endif;?>">
                    	<div class="acc_head"><?= $month." ".$year;?></div>
                        <div class="acc_content">
                        
                          <?php
				$query2=mysql_query("SELECT * from `events` where MONTH(`date_from`)='$monthnumber' and YEAR(`date_from`)='$year'")or die(mysql_error());
				while( $row2 = mysql_fetch_array($query2)){ 
					
					
					$time1=strtotime($row2['date_from']);
                    $month1=date("F",$time1);
                    $year1=date("Y",$time1);		
                    $day1=date("d",$time1);	
                    $dayname1=date("D",$time1);	
					
					$time2=strtotime($row2['date_to']);
                    $month2=date("F",$time2);
                    $year2=date("Y",$time2);		
                    $day2=date("d",$time2);
                    $dayname2=date("D",$time2);	

                        ?>
                            <div class="col-md-12 accordian-box">
                            
                            
                            
                            	<div class="col-md-2 col-md-offset-1">
                                
                                <?php
								if($row2['nature']=="one"):
								
								echo $dayname1." ".$day1;
								
								elseif($row2['nature']=="more"):
								
								echo $dayname1." ".$day1." - ".$dayname2." ".$day2;
								
								else:
								
								endif;
								?>
                              
                                </div>
                                
                                
                                
                                
                                <div class="col-md-2"><?=$row2['title'];?></div>
                                <div class="col-md-2"><?=$row2['type'];?></div>
                                <div class="col-md-2"><?=$row2['place'];?></div>
                                <div class="col-md-2"><a href="enquire.php?id=<?=$row2['events_id'];?>"><div class="enquire">Enquire</div></a></div>
                                <div class="reset"></div>
                            </div>
                            
              <?php
						 
				}
				?>
                            
                            
                        </div>
                    </div>
                    <!--Event 2-->
                    
                    
                    
                   
                    <?php
					$i++;
				   }
				?>
                    
                    
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
                	<div class="col-md-6"><a href='index.php'>Home</a>&nbsp;   |   &nbsp;<a href='dairy.php'>Event Diary</a>&nbsp;   |  &nbsp;<a href='about.html'>About Us</a>&nbsp;   |   &nbsp;<a href='contact.html'>Contact Us</a>&nbsp;   |   &nbsp;<a href='terms.html'>T's & C's</a></div>
                    <div class="col-md-6 tr">© 2015 Euro Events  | Powered by <a href="http://yyupp.com/" target="_blank">Yyupp</a></div>
                </div>
            </div>
        </div>
 </div>
<script type="text/javascript" src="js/smk-accordion.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($){
		$(".accordion_example1").smk_Accordion();
	});
</script>
</body>
</html>
