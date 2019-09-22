<?php
	include("includes/dbopen.php");
	$staffid=$_GET['staffid'];		 
	$sql ="delete from faculty_details where fid='$staffid';";
	if (mysql_query($sql)==TRUE)  {
		echo '<script type="text/javascript"> alert("Deleted Successfully");
        location.replace("viewaddstaff.php");
        </script> ';  
	}
				  
	else {	
		echo '<script type="text/javascript"> alert("Deletion failed");
        location.replace("viewaddstaff.php");
        </script>'; 
	}
?>
</body>
</html>
