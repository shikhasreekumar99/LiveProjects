<?php
//include("dbopen.php");
	$con=mysql_connect("localhost","root","");
	mysql_select_db("ritsoft",$con);

if(isset($_POST['Submit']))
{
 session_start();
 $uname=$_POST['username'];
 $pwd=$_POST['password'];
 $r=mysql_query("select usertype from login where username='$uname' and password='$pwd'",$con);
 $n=mysql_num_rows($r);
 //echo  mysql_error();
 if($n == 1 )	{
 	$_SESSION['logid']=$uname;
	//header("Location: changepassword.php");
	//die();
	$row=mysql_fetch_array($r);
			//admin
  	if ($row['usertype']=="admin")	{
   		$_SESSION['adminid']=$uname;
   		$_SESSION['utype']=$row['usertype'];
   		echo "<script>alert('ADMIN')</script>";
		  header("Location:homepage.php");
 	}
			//hod
 	elseif ($row['usertype']=="hod")	{
   		$x=mysql_query("select fid from faculty_details where name='$uname'",$con);
   		$y=mysql_num_rows($x);
   		if($y == 1 )	{
    		$row=mysql_fetch_array($x);
    		$_SESSION['fid']=$row['fid'];
    		$_SESSION['hodid']=$uname;
    		$_SESSION['utype']=$row['usertype'];
    		header("Location:dash_home.php");
    		echo "<script>alert('HOD')</script>";
  		}
 	}
}
else
	echo "<script>alert('Incorrect username or password')</script>";
}
?>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="data-table/css/tablestyle.css">	
</head>
<body>
	<form id="login" action = "login.php" method = "POST" enctype = "multipart/form-data">
	<table  id="outer1" align="center" style="padding-top:20px">
		<thead>
			<tr>
				<th  align="center">LOGIN</th>
			</tr>
		</thead>
	<tr>

		<td align="center"><input type="text" name="username" placeholder="Username"/> </br></td>
	</tr>
	<tr>
	

		<td align="center"><input type="password" name="password" placeholder="Password" required pattern="^[A-Za-z0-9@.\s]{2,50}$" title="Text contains only AlphaNumeric ,Space ,@ and Period" 
			maxlength="50" /> </br></td>
	</tr>
	<tr>
		<td align="center"><input type="submit"  name="Submit" value= "Submit"/></td>
	</tr>
	</table>
	</form>
</body>
</html>