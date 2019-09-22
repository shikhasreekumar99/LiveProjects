<script  src="jquery.js"></script>
<script>
	function re()	{
		document.getElementById('form1').submit();
	}
</script>

<form action="sem_verification.php" id="form1" method='post'>
<?php
	include("includes/dbopen.php");
	$reg_id = $_GET['id']; 
	$clsid=$_GET['clsid'];
	$x="Approved";
	mysql_query("UPDATE stud_sem_registration SET apv_status='$x' WHERE reg_id='$reg_id'")or die(mysql_error());
	
?>

<input type="hidden" name="cid" value="<?php echo $clsid ?>">
<?php 
	echo "<script>re()</script>" 
?>
</form>
