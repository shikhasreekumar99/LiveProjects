<?php
	include("includes/header.php");
	include("includes/sidenav.php");

$sql=mysql_query("select * from department where hod='$hodid'",$con);
if($sql)
{
	$result=mysql_fetch_array($sql);
}
$deptname=$result['deptname'];

?>


<div id="page-wrapper">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Add Subject</h1>
                    </div>
				</div>
 
		
    
		<form id="addsub" action = "addsub.php" method = "POST" enctype = "">
		<table  id="outer1" align="center" style="padding-top:40px">
					<tr>
					<td>Subject-ID: <span class="required">*</span></td>
					<td>
					<input required="required" class="form-control" id="Text1" type="text" name="subid" style="text-transform:uppercase; width: 400px" />
					</td>
				</tr>
				<tr>
					<td>Subject Title: <span class="required">*</span></td>
					<td>
					<input required="required" class="form-control" autocomplete="off" id="Text1" type="text" name="name" style="text-transform:uppercase; width: 400px" />
					</td>
				</tr>
				<tr>
					<td>Class: <span class="required">*</span></td>
					<td>
					<select name="deptname" class="form-control">
					<option value="--select--">--select--</option>
					<?php
						
 						$sql="select * from class_details where deptname='$deptname' and active like '%YES%'";
						$r=mysql_query($sql,$con);
						while($result=mysql_fetch_array($r)){
							echo '<option value="'.$result['classid'].'">'.$result['classid'].'</option>';
						}
					?>
					</select>
					</td>
				</tr>
				<tr>
					<td>Type: <span class="required">*</span></td>
					<td>
						<select name="type" class="form-control">
					<option value="--select--">--select--</option>
					<option value="core">CORE</option>
					<option value="elective">ELECTIVE</option>
					<option value="lab">LAB</option>
					</td>
				</tr>
					
				<tr>
        			<td><input style="width:200px" class="btn btn-primary" id="submit" type="submit" value="Submit" name="submit"/></td>
					
					
      			</tr>
      	</table>
	  </form>
	</body>
</html>
    
