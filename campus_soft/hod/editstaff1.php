<?php
	session_start();
?>

<?php
	include("includes/dbopen.php");
	if (isset($_POST['submit'])) {	
		$staffid=$_SESSION['fid'];
		$name=$_POST['name'];
		$deptname=$_POST['deptname'];	
		$email=$_POST['email'];
		$phoneno=$_POST['phoneno'];
		if(!$_FILES['file']['tmp_name']=="")
		{
		$photo=addslashes(file_get_contents($_FILES['file']['tmp_name']));
		$sql ="update faculty_details set name='$name',deptname='$deptname',email='$email',phoneno='$phoneno', 
			photo='$photo' where fid='$staffid';";
		}
		else
			$sql ="update faculty_details set name='$name',deptname='$deptname',email='$email',phoneno='$phoneno' where fid='$staffid';";
	       //update staff details............				  				   
        if(mysql_query($sql,$con)== TRUE) { 
			echo '<script type="text/javascript"> alert("Updated Successfully");
            location.replace("viewaddstaff.php");
             </script> ';    
	  }
	  else	{
	  	echo '<script type="text/javascript"> alert("Updation failed");
        location.replace("viewaddstaff.php");
        </script>'; 
        
	  }
	}
?>

</body>
</html>
