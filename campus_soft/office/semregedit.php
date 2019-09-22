<?php
	include("includes/connection.php");
	$reg_id = $_GET['id']; 
	$x="Approved by OFFICE";
	mysql_query("UPDATE stud_sem_registration SET office_status='$x' WHERE reg_id='$reg_id'")or die(mysql_error());
	header("Location:sem_verification.php");  // bring back to original page 
?>
