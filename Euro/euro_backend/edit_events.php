<?php 
require_once('db.php');
$msg="";
if(isset($_POST["submit"]))
{
	$date=$_POST['date'];
	$name=$_POST['name'];
	$type=$_POST['type'];
	$place=$_POST['place'];	
	$id=$_GET['id'];  
	
	
     $res="UPDATE `events` SET  date='$date' , name='$name' , type='$type' , place='$place' WHERE id=$id ";
	// echo $res;
	 //die();
			$sql=mysqli_query($con,$res);			
			if($sql)
			{
	$msg="Sucessfully Updated";
			}
		else
		{
		echo "Error";
		 }
				
//}

}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
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
            Edit Services
          <!--  <small>Blank example to the fixed layout</small>-->
          </h1>
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
                 <?php
   
$id=$_GET['id'];

   $data="SELECT * FROM `events` where `id`='$id'";

   $query=mysqli_query($con,$data);
 while ($row=mysqli_fetch_array($query))
	{
		?>
        
      
                   <p> <label>Date*</label>
                   <input type="text" name="date" id="datepicker-13"  value="<?php echo $row['1'];?>"/>
                   </p>
                
                 <p> <label>Event Name*</label>
                    <input type="text" name="name" id="text" value="<?php echo $row['2'];?>">
                    
                 </p>
                  <p><label>Event Type*</label>
                    
                    <input type="text" name="type" id="events" value="<?php echo $row['3'];?>">
                    </p>
                
                <p>  <label>Place*</label>
                   
                    <input type="text" name="place" id="place" value="<?php echo $row['4'];?>">
                    
                   </p>
              <p>  <input type="submit" name="submit" value="Update"/>
                  </p>
                  <span style="color:green" ><?php echo $msg;    ?></span>
                  <?php
	}
	?>
                </form>
         <a href="View_events.php">   <button name="" type="">back</button></a>

              </div>
            </div>
          
          </div><!-- /.box -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.0
        </div>
        <strong>Copyright &copy; 2014-2015.</strong> All rights reserved.
      </footer>
  </div><!-- ./wrapper -->

   <?php require_once('footer.php');?>
</body>
</html>
