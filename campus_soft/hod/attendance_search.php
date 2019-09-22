<?php
  include("includes/header.php");
  include("includes/sidenav.php");
?>
<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header" align="center"><span>View Details</span></h1>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-12">

<label for="txtstudid"></label>
<form id="form1" name="form1" method="post" action="">

<div class=".col-sm-6 .col-md-5 .col-md-offset-2 .col-lg-6 .col-lg-offset-0">
<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
    <tr>
      <th>Name</th>
      <th>Absent Date </th>
      <th> Subject id </th> 
      <th> Hour </th>
    </tr>

<?php 
    $admisno=$_GET['admis'];
    $name=$_GET['name'];
    $cls=$_GET['class'];
    $date1=$_GET["date1"];	
    $date2=$_GET["date2"];
?>	
    <tr>
        <td><?php echo $name; ?></td>
<?php 
    $dat=mysql_query("select distinct(date),subjectid from attendance where studid='$admisno' and date BETWEEN '$date1' and '$date2' and status='A'",$con);
    while($result=mysql_fetch_array($dat)) 	
    {
	       $date=$result["date"];
         $subject=$result["subjectid"];
?>
         <td><?php echo $date; ?></td>
         <td><?php echo $subject; ?></td>
<?php 
        $sql=mysql_query("select distinct(hour) from attendance where studid='$admisno' and date='$date' and status='A'",$con);	
        while($result=mysql_fetch_array($sql)) 	
        {	
	         $hour=$result["hour"];
           
?>
           <td><?php echo $hour." "; ?>
        <?php 
        }	
?>
      </td></tr>
<?php
}
//}
?>
</table>
</div><br>



    <table width="34%" border="1" cellpadding="0" cellspacing="0">
    <?php
	//$class=explode(",",$_REQUEST['class']);	
 //$class=explode(",",$_POST['class']);
 ?>
 
  <tr> <th> SUBJECT ID </th> <th> SUBJECT NAME </th></tr>
  <?php
 
  //$class=explode(",",$_POST['class']);
	 //$class=$_GET['class'];
	$c=mysql_query("select * from subject_class where classid='$cls' order by subjectid asc",$con);
while($re=mysql_fetch_array($c))
{
	?>
      <tr>
    
        <th scope="col"><?php echo $re["subjectid"]; ?></th>
        <th scope="col" align="left"><?php echo $re["subject_title"]; ?></th>
      </tr>
      <?php
}
?>
    </table>










</form>
</body>
</html>
<?php include("includes/footer.php"); ?>