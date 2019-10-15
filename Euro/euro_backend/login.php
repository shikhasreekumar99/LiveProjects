<?php
ob_start();
//include 'functions.php';
session_start();
$msg="";
$fl=1;
if(isset($_POST['submit']))
{
	$con=mysql_connect('localhost','root','');
	mysql_select_db('db',$con);
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
	$res=mysql_query("select * from `login` where  username='$username' and password='$password'  ");

	if (!$res) {
    die(mysql_error($con));
	}
	if(mysql_num_rows($res)==1)
	{
		$row=mysql_fetch_array($res);
		$nm=$row[1];
		$pw=$row[2];
		//echo $nm.$pw;
	
	     $_SESSION['username']=$row['username'];
		 $_SESSION['password']=$row['password'];
		// echo $_SESSION['username']. $_SESSION['password'];
		header('Location:index1.php');
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
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
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
            <div class="col-xs-8">    
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Remember Me
                </label>
              </div>                        
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit"  name="submit" value="submit">Sign In</button>
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
  <!--  <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>-->
  </body>
</html>