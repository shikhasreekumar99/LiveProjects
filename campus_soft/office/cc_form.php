<script>
function getname()
{
	document.getElementById('form2').submit();
}
</script>
<?php
include("includes/header.php");

include("includes/sidenav.php");

?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><span style="font-weight:bold;">CONDUCT CERTIFICATE
                      
                    </span></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
  
      <form id="form2" name="form2" method="post" action="" enctype="multipart/form-data" class="sear_frm" >
      
	  <div class="form-group ">
      <label for="a_no">Full Admission No:</label>
      <input type="text" class="form-control" id="a_no" name="a_no"   onchange="getname()" >
    </div>
 
          <?php
		 if(isset($_POST['a_no']))
		 {
		 	$ad_no=$_POST['a_no'];
			
		 }
	  ?>
       </form>
      
<?php
include "includes/dboperation.php";
	//if(!preg_match('/^([0-9]+[A-Z]+[0-9]+)$/', $ad_no)){
//echo "<!--<script>alert('Please input full admission number in Capital letter!!')</script>-->";
		//	}
			//else
			//{
	$obj12=new dboperation();
	$query12="SELECT * FROM cc where cc_admn_no='$ad_no' ";		
	$result12=$obj12->selectdata($query12);
	$row=$obj12->fetch($result12);
	$id=$row[0];
	//if($id == $ad_no)
		//echo "<!--<script>alert('CC already Issued!!')</script>-->";
	//else	
	//{
	$obj8=new dboperation();
	$query8="SELECT * FROM cc ORDER BY cc_no_int DESC LIMIT 1";
	$result8=$obj8->selectdata($query8);
	$row=$obj8->fetch($result8);
	$cc_id = $row[9];
	$next_cc_id=$cc_id+1;
        $ad_no_int = intval(substr($ad_no,4));         
	$obj5=new dboperation();
	$query5="SELECT * FROM stud_details WHERE admissionno = '$ad_no' ";	
	
	$result5=$obj5->selectdata($query5);
	while($row=$obj5->fetch($result5))
	{

   	            $name=("$row[1]");
                $yrad=("$row[6]");
                $yradnext=intval($yrad)%100+1;
                $yrad=$yrad." - $yradnext";
                $course=("$row[23]");
                $specialisation=("$row[24]");
	}
	
	//}		//}
// $issue_date=date('Y-m-d');	
// $caste=$rlgn."-".$cst; 
	?>
      <form id="form1" name="form1" method="post" action="cc1_pdf.php" enctype="multipart/form-data" class="sear_frm" target="_blank" >

	    

<div class="form-row">
 	<div class="form-group col-md-6">
      <label for="cc_no">CC No:</label>
	  <input type="text" class="form-control"  name="cc_no" id="cc_no" value="<?php echo $next_cc_id?>" readonly required>
		</div>
		<div class="form-group col-md-6">
      <label  for="adno">Admission No:</label>
	  <input type="text" class="form-control" name="adno" id="adno" value="<?php echo $ad_no?>" readonly>
      
    </div>
</div>
      
   
<div class="form-row">
 	<div class="form-group col-md-6">
      <label  for="name">Name Of Student</label>
	  <input type="text" class="form-control"  name="name" id="name"  value="<?php echo $name?>" readonly>
		</div>
		<div class="form-group col-md-6">
      <label  for="yr_adm">Year Of Admission</label>
	  <input type="text" class="form-control" name="dte" id="dte"  value="<?php echo $yrad?>" >
      
    </div>
</div>
         
<div class="form-row">
 	<div class="form-group col-md-6">
      <label for="completion">Year of Completion</label>
	  <input type="text" class="form-control" name="completion" id="completion"  value="" required>
		</div>
		<div class="form-group col-md-6">
      <label  for="course">Course</label>
	  <input type="text" class="form-control"name="course" id="course"  value="<?php echo $course?>" readonly>
      
    </div>
</div>
         
<div class="form-row">
 	<div class="form-group col-md-6">
      <label  for="specialization">specialization</label>
	  <input type="text" class="form-control"  name="specialization" id="specialization"  value="<?php echo $specialisation?>" readonly >
		</div>
		  <div class="form-group col-md-6">
       
          <label for="yearexam">Exam Year</label>
          <input type="text" name="yearexam" id="yearexam"  class="form-control" value="" required />

 </div>

</div>
      
    <div class="form-row">    
	       <div class="form-group col-md-6">
	    <label for="month">Exam Month</label>
      <select  name="month" id="month"  class="form-control" required="">
        <option selected>~~Choose Month~~</option>
        <option name="relation" value="Father" >Father</option>
			<option value="January" >January</option>
                <option value="February" >February</option>
                <option value="March" >March</option>
                <option value="April" >April</option>
                <option value="May" >May</option>
                <option value="June" >June</option>
                <option value="July" >July</option>
                <option value="August" >August</option>
                <option value="September" >September</option>
                <option value="October" >October</option>
                <option value="November" >November</option>
                <option value="December" >December</option>
      </select>
	  </div>
	  <div class="form-row"> 
	    <div class="form-group col-md-6">
        <label for="character">Character and Conduct</label>
        <input name="character" id="character"  class="form-control" required />
      </div>
    </div>  
      <div align="center">
	   <button type="submit" value="submit" name="submit" id="submit" class="btn btn-primary">PRINT CC</button> 
			<input type="reset" name="submit2" id="submit2" value="CLEAR" class="btn btn-primary" />
  </div>

 
</form>
</div>

<?php

include("includes/footer.php");
?>
