<?php
	include("includes/header.php");
	include("includes/sidenav.php");
?>

<div id="page-wrapper">   
	            <div class="row"><div class="col-lg-12" >
                    <h1 class="page-header">ATTENDANCE</h1>
             </div>

	<form method="post" enctype="multipart/form-data">

 	<br>
  	<label>Class</label>
	<select name="class">
	<option>select</option>
	<?php
		$res=mysql_query("select * from department where hod='$hodid'",$con);
		if($rs=mysql_fetch_array($res))	{
		$res1=mysql_query("select * from class_details where deptname='$rs[deptname]' and active='YES'",$con);
		while($rs1=mysql_fetch_array($res1))	{
	?>
	<option value="<?php  $class=$rs1['classid']; 
		echo $rs1['classid'].",".$rs1['courseid'].",S".$rs1['semid'].",".$rs1['branch_or_specialisation'];?>">
		<?php 
			echo $rs1['courseid'];
		?>
		,S<?php 
			echo $rs1['semid'];
		?>,
		<?php 
			echo $rs1['branch_or_specialisation'];
		?>
	</option>

	<?php
		}		}
	?>
	</select>

	<br><br>
	<input type="date" name="date1" placehodler="dd/mm/yyyy" value="<?php echo date("d/m/Y"); ?>" />
	<input type="date" name="date2" placehodler="dd/mm/yyyy" value="<?php echo date("d/m/Y"); ?>" />
	<input type="submit" name="btnshow" value="View Attendence"  /><br>
	</form>

	<?php
		if(isset($_POST["btnshow"]))	{
			$class=explode(",",$_POST['class']);
			$date1=$_POST["date1"];
			$date2=$_POST["date2"];	
			//print_r($class);
			//	$student=explode("-",$class[4]);
	?>

    <table border="1" width="100%">
    <tr>
    	<td>Roll No</td>
    	<td>Name</td>
    	<?php
			$res=mysql_query("select * from subject_allocation where classid='$class[0]' order by subjectid asc",$con);
			while($rs=mysql_fetch_array($res))	{
		?>
    	<td>
    	<?php 
    		echo $rs["subjectid"]; 
    	?></td>
    	<?php
			}
		?>
    	<td>Total</td>
    </tr>
    <?php
//	$j=$student[0];
	//$k=$student[1];
	//while($j<=$k)
//	{ 
		
		$res2=mysql_query("SELECT a.adm_no,b.name,c.rollno FROM stud_sem_registration a,stud_details b,current_class c where a.classid='$class[0]' and a.new_sem='$class[2]' and a.adm_no=b.admissionno and a.classid=c.classid and a.adm_no=c.studid order by c.rollno asc",$con);
		
		while($rs2=mysql_fetch_array($res2))	{
			$i=1;
			$sid=$rs2["rollno"];
			?>           
			<tr>
				<td><?php echo $rs2["rollno"]; ?></td>
				<td><?php echo $rs2["name"]; ?></td>
				<?php
				$total=0;
				$present=0;
				$res3=mysql_query("select * from subject_allocation where classid='$class[0]' order by subjectid asc",$con);
				while($rs3=mysql_fetch_array($res3))
				{
					
					$res4=mysql_query("select * from attendance where studid='$rs2[adm_no]' and date BETWEEN '$date1' AND '$date2' and subjectid='$rs3[subjectid]' and classid='$class[0]'",$con);
					$res5=mysql_query("select * from attendance where studid='$rs2[adm_no]' and date BETWEEN '$date1' AND '$date2' and subjectid='$rs3[subjectid]' and classid='$class[0]' and status='P'",$con);
					?>
              		<td><?php 
						if(mysql_num_rows($res4)==0)
							echo "0%";
						else
							echo ((mysql_num_rows($res5)/mysql_num_rows($res4))*100)."%"; ?></td>
							<?php
								$total+=mysql_num_rows($res4);
								$present+=mysql_num_rows($res5);						
				}
				?>
                <td><?php 
					if($total==0)
						echo "0%";
					else
						echo (($present/$total)*100)."%"; ?></td>
			</tr>
			<?php
		}
		//$j++;
	}
	?>
</table>

<?php

?>




</table><br />
    <table width="34%" border="1" cellpadding="0" cellspacing="0">
    <?php
//	$class=explode(",",$_REQUEST['class']);	
 //$class=explode(",",$_POST['class']);
 ?>
 <br>
  <tr> <th> subject id </th> <th> subject name </th></tr>
  <?php
	$c=mysql_query("select * from subject_class where classid='$class[0]' order by subjectid asc",$con);
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


</body>
</html>