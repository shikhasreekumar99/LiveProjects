<?php 
require_once('db.php');
$msg=$msg1="";
$fl=1;
$errdate=$errname=$errtype=$errplace="";
if(isset($_POST['submit']))
  {  
	$date=$_POST['date'];
	$name=$_POST['name'];
	$type=$_POST['type'];
	$place=$_POST['place'];
	
	  if($date=="")
	  {
		$fl=0;
		$errdate="Date cannot be blank";  
	  }
	  else
	  {
		$fl=1;
		$errdate= "";  
	  }
	    if($name=="")
	  {
		$fl=0;
		$errname="Name cannot be blank";  
	  }
	  else
	  {
		$fl=1;
		$errname= "";  
	  }
	    if($type=="")
	  {
		$fl=0;
		$errtype="Type cannot be blank";  
	  }
	  else
	  {
		$fl=1;
		$errtype= "";  
	  }
	   if($place=="")
	  {
		$fl=0;
		$errplace="Place cannot be blank";  
	  }
	  else
	  {
		$fl=1;
		$errplace= "";  
	  }
	  
	  if($fl==1)
	  {
		/* fix a date */
	//function fix_date($date)
	//{
		//$date1 = explode('-',str_replace('/','-',$adate)); 
		//return $date1[2].'-'.$date1[0].'-'.$date1[1];
	//	$date2=$date1[2].'-'.$date1[0].'-'.$date1[1];
	//}  
	//$date2=fix_date($adate);
	
	$res="INSERT INTO `events`( `date`, `name`, `type`, `place`) VALUES ( '$date' ,'$name','$type','$place')";
	   $sql=mysqli_query($con,$res);
	if($sql==1)
	$msg="Inserted successfully";
	else
	$msg1="Error";

	  }
  }
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
   <?php require_once('header.php');?>
  </head>
  <!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
  <body class="skin-blue fixed">
 <!-- Site wrapper -->
    <div class="wrapper">
        <?php require_once('menu.php');?>
     
      </header>

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
      

      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Add Events</h1>
          <ol class="breadcrumb">
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
      <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
      <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <script>
  $(function() {
            $( "#datepicker-13" ).datepicker({dateFormat: 'yy/mm/dd'});
         
         });
  </script>
                <form name="form1" method="post" action="" >
                 
                  <p>
                    <label>Date*</label>
                   <input type="text" name="date" id="datepicker-13" />
                   <span style="color:red" id="spaddress"><?= $errdate; ?> </span> 
                  </p>
                  <p><label>Event Name*</label>
                    <input type="text" name="name" id="text">
                    <span style="color:red" id="spaddress"><?= $errname; ?> </span> 
                  </p>
                  <p><label>Event Type*</label>
                    
                    <input type="text" name="type" id="events">
                    <span style="color:red" id="spaddress"><?= $errtype; ?> </span> 
                  </p>
                  <p><label>Place*</label>
                   
                    <input type="text" name="place" id="place">
                    <span style="color:red" id="spaddress"><?= $errplace; ?> </span> 
                  </p>
                  <p>
                    
                    <input type="submit" name="submit" value="submit"/>
                    
                    <span style="color:red" id="spcsname"><?= $msg; ?> </span>
                    <span style="color:red" id="spcsname"><?= $msg1; ?> </span>
                  </p>
                 
                </form>
              </div>
            </div>
            
          </div><!-- /.box -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.0
        </div>
        <strong>Copyright &copy; 2014-2015 .</strong> All rights reserved.
      </footer>
  </div><!-- ./wrapper -->

    <?php require_once('footer.php');?>
</body>
</html>
