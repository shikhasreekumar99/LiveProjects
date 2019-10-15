<?php
require_once('db.php');
$msg=$msg1="";

if(!isset($_SESSION['login']))
{
header('Location:index.php');
}
else{
	
if(isset($_POST['submit'])){
	
	$new=$_POST['new_pass'];
	$confirm=$_POST['con_pass'];
	$id=$_SESSION['login'];
	if($new==$confirm)
	
	{
		$sql="update login set password='$new' where id='$id'";
		//echo  $sql;
//		exit();
		$res=mysqli_query($con,$sql);
		//mysql_info();
	//echo $query;
		if( $res)
       
		//mysql_query($query);
		$msg= "Thank You. Your Password has been successfully changed.";
		else
		$msg1="error";
	}
}
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
  
      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Change Password
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
        
                <form name="form1" method="post" action="" >
                 <p style="color:#03C">NEW PASSWORD* </p>
                 <p>
                     <input type="password" name="new_pass" id="new_pass" />
                 </p>
                        <p style="color:#03C">CONFIRM PASSWORD*</p>
                        <p>
                          <input type="password" name="con_pass" id="con_pass" />
                        </p>
                        <input type="submit" name="submit" id="submit" value="Change Password"/>
                        <span style="color:#F00"><?= $msg;?></span>
                        <span style="color:#F00"><?= $msg1;?></span>
                      
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
        <strong>Copyright &copy; Euro Events 2015 </strong> All rights reserved.
      </footer>
  </div><!-- ./wrapper -->
  
  
<?php require_once('footer.php'); ?>


</body>
</html>
