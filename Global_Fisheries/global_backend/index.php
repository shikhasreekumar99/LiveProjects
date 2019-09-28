<?php

require_once('db.php');
ob_start();
//include 'functions.php';
$msg="";
$fl=1;

if(isset($_POST['submit']))
{
   $username=$_POST['username'];
   $password=$_POST['password'];
//echo "user=".$username."<br>password=".$password;
if(empty($username)|| empty($password))
{
	$msg='Please enter valid usename or password';
	$fl=0;
}
else
{
	 $fl=1;
	 $msg="";
}
if($fl==1)
{

	//$password=md5($password);
	$res=mysqli_query($con,"select * from `login` where  username='$username' and password='$password'");
    
	if (!$res) {
    die(mysqli_error($con));
	}
	if(mysqli_num_rows($res)==1)
	{
		$row=mysqli_fetch_array($res);
		$nm=$row[1];
		$pw=$row[2];
		//echo $nm.$pw;
	
	     $_SESSION['username']=$row['username'];
		 $_SESSION['password']=$row['password'];
     	 $_SESSION['login']=$row['id'];

		// echo $_SESSION['username']. $_SESSION['password']. $_SESSION['login'];die();
		header('Location:Home.php');
		exit();
	}
	else
	{
	$msg='Please enter valid usename or password';
	}
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
  </head>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="index2.html"><b>Admin</b></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg"><h3>Please Login </h3></p>
        <form action="" method="post">
          <div class="form-group has-feedback">
            <input name="username" type="text" class="form-control" id="username" placeholder="Email"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input name="password" type="password" class="form-control" id="password" placeholder="Password"/>
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
              <button type="submit"  name="submit" value="submit" class="btn btn-primary">Sign In</button>
              <span style="color:#F00"><?php echo $msg;?></span>
            </div><!-- /.col -->
          </div>
        </form>

      <!--  <div class="social-auth-links text-center">
          </div>-->
        <!-- /.social-auth-links -->

        <a href="forgot.php">I forgot my password</a><br>
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

  </body>
</html>