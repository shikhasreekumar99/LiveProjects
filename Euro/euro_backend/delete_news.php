<?php 
require_once('db.php');

	 $id=$_GET['id']; 
	
$query="DELETE FROM `news` WHERE `id`='$id'";
mysqli_query($con,$query);

	echo "DELETED";
	
?>
<a href="View_news.php">   <button name="" type="">back</button></a>