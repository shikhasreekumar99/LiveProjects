<?php
	include("includes/dbopen.php");
	if (isset($_POST['submit'])) {
		$classid=$_POST['classid'];
		$subjectid=$_POST['subjectid'];
		$fid=$_POST['fid'];
		$name=$_POST['name'];
		$sql ="insert into subject_allocation(classid,subjectid,fid) value('$classid','$subjectid','$fid')";
		
	if(mysql_query($sql) == TRUE)	{
?>

	<script type="text/javascript"> alert("Subject Allotted Successfully");
      	location.replace("suballoc_view.php");
    </script> 
		  
	<?php 
			} 
		else	{

	?>
			
	<script type="text/javascript"> alert("Already Subject allocated");
  		location.replace("suballoc1.php");
 	</script>  
   
<?php
	}	}
?>
