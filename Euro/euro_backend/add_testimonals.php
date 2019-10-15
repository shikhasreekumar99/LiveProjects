<?php 
require_once('db.php');
$msg=$msg1="";
$fl=1;
$errtestimonals=$errname="";
if(isset($_POST['submit']))
  {  
	$testimonals=$_POST['testimonals'];
	$name=$_POST['name'];
	
	  if($testimonals=="")
	  {
		$fl=0;
		$errtestimonals="Testimonals cannot be blank";  
	  }
	  else
	  {
		$fl=1;
		$errtestimonals= "";  
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
	  if($fl==1)
	  {
	
	$res="INSERT INTO `testimonals`( `testimonals`, `name`) VALUES ( '$testimonals' ,'$name')";
	   $sql=mysqli_query($con,$res);
	   //echo $sql;
//	   exit();
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
            Add testimonals</h1>
          <ol class="breadcrumb">
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
                <form name="form1" method="post" action="" >
                 
                  <p><label>Add name*</label>
         <input type="text" name="name" id="name" class="form-control"/></p>
          <span style="color:red" id="spaddress"><?= $errname; ?> </span> 
                  <p><label>Add Testimonals*</label>
                    <textarea name="testimonals" id="testimonals" class="form-control"></textarea>
    	 <span style="color:red" id="spaddress"><?= $errtestimonals; ?> </span> 
        
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
