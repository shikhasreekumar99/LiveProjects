<?php

include("includes/header.php");
include("includes/sidenav.php");
$i=1;

//select department of login hod
$sql=mysql_query("select deptname from department where hod='$hodid'",$con);
if($sql)
{
	$result=mysql_fetch_array($sql);
}
$deptname=$result['deptname'];
//////
$sql=mysql_query("select status from feedback_status where deptname='$deptname'",$con);
if($sql)
{
	$result=mysql_fetch_array($sql);
}
$st=$result['status'];
if($st==1)
{
	echo "<script type='text/javascript'>alert('You Need to Stop Feedback Session to View the Results')</script>";
	echo "<script>window.location.href='dash_home.php'</script>";
}
if($st==0)
{
	?>
	<html>
<head>
<title>
feedback_results
</title>
</head>
<body>
<br>
 <div id="page-wrapper">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Faculty Performance</h1>
                    </div>
				</div>
 <div class="row">
                <div class="col-lg-12">
			
	<div class=".col-sm-6 .col-md-5 .col-md-offset-2 .col-lg-6 .col-lg-offset-0">
<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
  <tr>
    <th>Sl no.</th>
	 <th>Faculty id</th>
    <th>Name</th>
	<th>Subject</th>
	<th>Academic Year</th>
	<th>Index Mark</th>
	<th>View Datasheet</th>
	<th>Create pdf</th>
	</tr>
	<?php

////////
//current date
$acdyear=date("Y");
$prev=$acdyear-1;
$prev.="-". $acdyear; 
//selection based on academic year

//select mark of faculties of chosen department
$sql1=mysql_query("SELECT f.fid, f.subjectid, f.indexmark,f.acdyear,sc.subject_title, fd.name
FROM feedback_index f, subject_class sc, faculty_details fd
WHERE f.fid = fd.fid
AND f.subjectid = sc.subjectid
AND f.deptname ='$deptname' and f.acdyear='$prev'",$con);



while ($re=mysql_fetch_array($sql1))
{
	$vf=$re['fid'];
	$nm=$re['name'];
	$im=$re['indexmark'];
	$ay=$re['acdyear'];
	$st=$re['subject_title'];
	$subid=$re['subjectid'];
	//display into table
	?>
	<tr>
	<td>
	<?php
	echo $i;
	$i = $i + 1;
	?>
	</td>
	<td>
	<?php
	echo $vf;
	?>
	</td>
	<td>
	<?php
	echo $nm;
	?>
	</td>
	<td>
	<?php
	echo $st;
	?>
	</td>
	<td>
	<?php
	echo $ay;
	?>
	</td>
	<td>
	<?php
	echo $im;
	?>
	</td>
	<td>
	<a href="datafaculty.php? subid=<?php echo $subid;?> & ay=<?php echo $ay;?>">VIEW</a>
	</td>
	<td>
	<a href="feedback_pdf.php? subid=<?php echo $subid;?> & ay=<?php echo $ay;?>">CREATE</a>
	</td>
	</tr>
	<?php
}
}//close if st=1
?>
	
	
	</table>
	</table>
 </div>
                       
                    </div>
                  
            </div>
		<a href="feedback_more.php">View More</a>

	<center>
<!-- <input type="button" name="close" value="Close">-->
 </center>
 </body>
 </div>
                <!-- /.row -->
 </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
        </div>
    <!-- /#wrapper --> 

</html>
<?php
include("includes/footer.php");
?>
