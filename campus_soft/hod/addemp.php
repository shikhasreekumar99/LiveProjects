<?php
		include("includes/dbopen.php");

	if (isset($_POST['submit'])) {
		$fid=strtoupper($_POST['fid']);
		$name=strtoupper($_POST['name']);
		$deptname=$_POST['deptname'];
		$phoneno=$_POST['phoneno'];
		$email=$_POST['email'];
	
		$check="select * from faculty_details where fid like '$fid'";
		$result=mysql_query($check);
		if (mysql_num_rows($result) > 0) {
?>

			<script type="text/javascript"> alert("User Already Exists");
			location.replace("empreg.php");
			</script>

		<?php
		}
		else	{
			$sql ="insert into faculty_details(fid,name,deptname,phoneno,email,photo)value('$fid','$name','$deptname','$phoneno','$email',
			'" . addslashes(file_get_contents($_FILES['file']['tmp_name'])) . "')";
			if(mysql_query($sql)== TRUE) { 
		?>
				
		<script type="text/javascript"> alert("Staff Added Successfully");
			location.replace("empreg.php");
		</script>
		
		<?php
			}
			else	{			
		?>
		<script type="text/javascript"> alert("Failed");
			location.replace("empreg.php");
        </script> 
		
		<?php	  
			} 
			}}
		?>