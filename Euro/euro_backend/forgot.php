<?php
if(isset($_POST['submit']))
{ 
$con= mysql_connect('localhost','root','');
 mysql_select_db('db',$con);
 $fl=1;
 $msg="";
$email=$_POST['email'];
if($fl==1)
{
    $res=mysql_query("select * from `login` where  email='$email'  ");
 
	        if (!$res)
			 {
    die(mysql_error($con));
			 }
	if(mysql_num_rows($res)==1)
	{
		$row=mysql_fetch_array($res);
			$em=$row[3];
			  $_SESSION['email']=$row['email'];
			    //  echo $em;

			  	header('Location:forgot_password.php');
				exit();
					}
	else
	{
	      echo 'Please enter valid usename or password';
	}
	}
}
?>
<html>
<head>
<style type="text/css">
 input{
 border:1px solid olive;
 border-radius:5px;
 }
 h1{
  color:darkgreen;
  font-size:22px;
  text-align:center;
 }

</style>
</head>
<body>
<h1>Forgot Password<h1>
<form action='' method='post'>
<table cellspacing='5' align='center'>
<tr><td>Email id:</td><td><input type='text' name='email'/>
</td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/></td></tr>
</table>
</form>
</body>
</html>