<?php
require_once('db.php');
if(isset($_POST['submit']))
{ 

 $msg="";
$email=$_POST['email'];

    $res=mysqli_query($con,"select * from `login` where  email='$email'  ");
	        
	if(mysqli_num_rows($res)==1)
	{
		$row=mysqli_fetch_array($res);
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
<style>
   .error{
	   color:#F00;}
   </style>
   
</head>
<body>
<h1>Forgot Password<h1>
<form id="forgot" action='' method='post'>
<table cellspacing='5' align='center'>
<tr><td>Email id:</td>
<td><input type='text' name='email' class="required"/>
</td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/></td></tr>
</table>
</form>
 <script src="js/jquery.min.js"></script>
 <script src="js/jquery.validate.js"></script>
    
 <script type="text/javascript">
$(document).ready(function(){

	
 $("#forgot").validate({
           
		
			 
          messages:{
		  
		         email: { 
                 required:"Enter Email",

               },
			    
	    },
		
		
    });

});

</script>
</body>
</html>
 