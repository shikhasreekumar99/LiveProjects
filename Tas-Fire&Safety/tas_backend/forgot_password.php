<?php

require_once('db.php');

if(isset($_POST['submit']))
{
	 $email=$_POST[ 'uname'];
	 $new=$_POST['new_pass'];
	$confirm=$_POST['con_pass'];
	if($new=$confirm)
	
	{
		$sql="update login set password='$new'  where email='$email'  ";
		//echo  $sql;
		
		$res=mysqli_query($con,$sql);
		//mysql_info();
	//echo $query;
		if( $res)
       
		//mysql_query($query);
		echo "Thank You. Your Password has been successfully changed.";
		else
		echo "error";
	}
		
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin | Log in</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <?php require_once('header.php');?>
    
<style>
   .error{
	   color:#F00;}
   </style>
   
  </head>
  <body class="login-page">
    <div class="login-box">
      <!--<div class="login-logo">
        <a href="index2.html"><b>Admin</b></a>
      </div>--><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg"><h3>Change Passwod</h3></p>
        <form name="forgot" id="forgot" action="" method="post">
          <div class="form-group has-feedback">
            <input name="uname" type="text" class="form-control required" id="uname" placeholder="Email"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="new_pass" id="new_pass" class="form-control required" id="password" placeholder=" New Password"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="con_pass" id="con_pass"  class="form-control required" id="password" placeholder=" Confirm Password"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <!--<div class="col-xs-8">    
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Remember Me
                </label>
              </div>                        
            </div>--><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit"  name="submit" value="submit">Change Password</button>
            </div><!-- /.col -->
          </div>
        </form>
<a href="index.php">   <button name="" type="">Back</button></a>

      <!--  <div class="social-auth-links text-center">
          </div>-->
        <!-- /.social-auth-links -->

        <!--<a href="forgot.php">I forgot my password</a><br>-->
<!--        <a href="register.html" class="text-center">Register a new membership</a>
-->
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
  
   <script src="js/jquery.validate.js"></script>
    
 <script type="text/javascript">
$(document).ready(function(){

	
 $("#forgot").validate({
           
		
			 
          messages:{
		  
		         uname: { 
                 required:"Enter Email",

               },
			    
                 new_pass: { 
                 required:"Enter New Password ",
  
			 },
			 con_pass: { 
                 required:"Enter Confirm Password ",
  
			 },
			   
	    },
		
		
    });

});

</script>

  </body>
</html>