<?php
$con=mysqli_connect("localhost","root","","db");

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
<form name="form1" method="post" action="">
  <p>CHANGE PASSWORD</p>
  <p>EMAIL*
    <input type="text" name="uname" id="uname"/>
  </p>
  <p>NEW PASSWORD*
    <input type="password" name="new_pass" id="new_pass"/>
</p>
  <p>CONFORM PASSWORD*
    <input type="password" name="con_pass" id="con_pass"/>
</p>
  <input type="submit" name="submit" id="submit" value="Change Password"/>
</form>
<a href="login.php">   <button name="" type="">Back</button></a>