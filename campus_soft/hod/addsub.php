<?php
	include("includes/dbopen.php");	
	
if (isset($_POST['submit'])) {
	$subid=$_POST['subid'];
	$name=$_POST['name'];
	$classid=$_POST['deptname'];
	$type=$_POST['type'];
	
	$check="select * from subject_class where subjectid like '$subid'";
	$result=mysql_query($check);
	if (mysql_num_rows($result) > 0) {
?>
	<script type="text/javascript"> alert("Subject Already Exists");
  	location.replace("subreg.php");
  	</script>
<?php
	}
	else
	{
		$sql ="insert into subject_class(subjectid,subject_title,classid,type)value('$subid','$name','$classid','$type')";
		if(mysql_query($sql)== TRUE) { 
?>
		<script type="text/javascript"> alert("Subject Added Successfully");
		location.replace("subreg.php");
		</script>
<?php
		}
		else
		{
?>
		<script type="text/javascript"> alert("Failed");
		location.replace("subreg.php");
        </script> 
<?php	  
	} 
	}}
?>
 
    

