<?php
	include("includes/header.php");
	include("includes/sidenav.php");

	if(isset($_POST["clsid"]))	{
		$classid=$_POST["clsid"];
	}
?>

<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header" align="center"><span>Subject Allocation</span></h1>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-12">


	<form id="subview" action = "" method = "POST" enctype = "">
	<label>Class:</label>
	<select name='clsid' onchange="this.form.submit()">
	<option value =''>Select</option>

	<?php
		$s=mysql_query("select deptname from faculty_details where fid ='$hodid'",$con);
		$r = mysql_fetch_assoc($s);
		$deptname=$r["deptname"];

		$sql ="select distinct(classid) from class_details  where deptname='$deptname'";
		$result = mysql_query($sql);

		while ($row = mysql_fetch_array($result)) {
   	 		echo "<option value='" . $row["classid"] ."'>" . $row["classid"] ."</option>";
		}
		echo "</select>";
	?>        
</form>
<div class=".col-sm-6 .col-md-5 .col-md-offset-2 .col-lg-6 .col-lg-offset-0">
<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">

     	<tr>
     		<th>Faculty Name</th>
     		<th>Subject-ID</th>
     		<th>Subject</th>
     	</tr>
<?php
 		$sql =mysql_query("select * from subject_allocation where classid in(select classid from class_details where deptname in(select deptname from department where hod='$hodid' and active like '%YES%' ))");
     	while($dat=mysql_fetch_array($sql))
        {
			$subjectid=$dat["subjectid"];
			$fid=$dat["fid"];
			$sql1=mysql_query("select subject_title from subject_class where subjectid='$subjectid'");
			while($r1=mysql_fetch_array($sql1))	{
				$title=$r1["subject_title"];
							
				$sql2=mysql_query("select name from faculty_details where fid='$fid'");
				while($r=mysql_fetch_array($sql2))	{
					$name=$r["name"];				
      			?>	  	
		<tr>
				<td><?php echo $name;?></td>
				<td><?php echo $subjectid;?></td>
				<td><?php echo $title;?></td>
		</tr>
			
	<?php
		}
	 	}
		}
	 
	?>

</table>