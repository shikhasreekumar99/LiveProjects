
<?php
include("includes/header.php");

include("includes/sidenav.php");
?>
<script>
function getname()
{
	document.getElementById('form2').submit();
}
</script>
        
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><span style="font-weight:bold;">ADMISSION DETAILS
                    </span></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
  
<?php
$tp="";

		 if(isset($_POST['tmp_no']))
		 {
		 	$tp=$_POST['tmp_no'];
		 
		 }
		 else
		 {
		 }
	
	
	include "includes/dboperation.php";
	$obj5=new dboperation();
	$query5="SELECT * FROM temp WHERE temp_no = '$tp' ";	
	$result5=$obj5->selectdata($query5);
	while($row=$obj5->fetch($result5))
	{
	 
	    $co=("$row[23]");
		$sp=("$row[24]");
		$bc=("$row[24]");
		$dt=("$row[6]");
		$na=("$row[1]");
		$db=("$row[2]");
		$sx=("$row[3]");
		$rlgn=("$row[4]");
		$cst=("$row[5]");
		$mob=("$row[8]");
		$mail=("$row[7]");
		$nagd=("$row[31]");
		$rel=("$row[32]");
		$occpn=("$row[33]");
		$inc=("$row[34]");
		$gdcontact=("$row[35]");
		$gdemail=("$row[36]");
		$adrs=("$row[10]");
		$phno=("$row[9]");
		$csem=("$row[28]");
		$rlno=("$row[11]");
		$pic=("$row[25]");
		$rnk=("$row[12]");
		$qta=("$row[13]");
		$scl1=("$row[14]");
		$rgno1=("$row[15]");
		$brd1=("$row[16]");
		$per1=("$row[17]");
		$scl2=("$row[18]");
		$rgno2=("$row[19]");
		$brd2=("$row[20]");
		$per2=("$row[21]");
		$chnc=("$row[22]");
		//$nalast=("$row[29]");
		$tot=("$row[40]");
		$phy=("$row[37]");
		$chem=("$row[38]");
		$math=("$row[39]");
		$admtype=("$row[27]");
		$blood=("$row[30]");
		$score=("$row[26]");
		
		$college_name=("$row[42]");
		$university=("$row[43]");
		
		$deg_co=("$row[44]");
		$deg_regno=("$row[45]");
		$deg_marks=("$row[46]");
		$deg_per=("$row[47]");
		
	}
	$obj4=new dboperation();
	$query4="SELECT * FROM courses WHERE course = '$co' ";	
	$result4=$obj4->selectdata($query4);
	while($row=$obj4->fetch($result4))
	{
	 
	  $cat=("$row[2]");
	}
	
		
	$objpa=new dboperation();
	$querypa="SELECT guard_contactno FROM parent where guard_contactno = '$gdcontact' ";	
	$resultpa=$objpa->selectdata($querypa);
	while($rowpa=$objpa->fetch($resultpa))
	{
	 
	  $guard_contact=("$rowpa[0]");
	}
	
  $objem=new dboperation();
	$queryem="SELECT email FROM stud_details where email = '$mail' ";	
   $resultem=$objem->selectdata($queryem);
   $rowem=$objem->fetch($resultem) ;
   $semail=$rowem[0];
//echo $mail;
//echo $semail;
	
	
$year=date('Y', strtotime($dt));
$yr=substr("$year",2);

if(($co=='BTECH')||($co == 'BARCH'))
{
$obj6=new dboperation();
$query6="SELECT ug FROM last_adm_no";
	$result6=$obj6->selectdata($query6);
	$row=$obj6->fetch($result6);

	$st_id=$row[0];
$next_st_id=$st_id+1;

if(($co == 'BTECH')&&($sp == 'CIVIL ENGINEERING'))
{
	$code="BC";
}
if(($co == 'BTECH')&&($sp == 'MECHANICAL ENGINEERING'))
{
	$code="BM";
}
if(($co == 'BTECH')&&($sp == 'ELECTRICAL AND ELECTRONICS ENGINEERING'))
{
	$code="BE";
}
if(($co == 'BTECH')&&($sp == 'ELECTRONICS AND COMMUNICATION ENGINEERING'))
{
	$code="BL";
}
if(($co == 'BTECH')&&($sp == 'COMPUTER SCIENCE AND ENGINEERING'))
{
	$code="BR";
}
if(($co == 'BARCH')&&($sp == 'ARCHITECTURE'))
{
	$code="BA";
}
$admission_no=$yr.$code.$next_st_id;
}

if(($co == 'MTECH')||($co == 'MCA'))
{
	$obj9=new dboperation();
$query9="SELECT pg FROM last_adm_no";
	$result9=$obj9->selectdata($query9);
	$row1=$obj9->fetch($result9);
	$st_id1=$row1[0];
$next_st_id1=$st_id1+1;
	
if(($co == 'MTECH')&&($sp == 'INDUSTRIAL ENGINEERING AND MANAGEMENT'))
{
	$code="MM";
}
if(($co == 'MTECH')&&($sp == 'INDUSTRICAL DRIVES AND CONTROL'))
{
	$code="ME";
}
if(($co == 'MTECH')&&($sp == 'TRANSPORTATION ENGINEERING'))
{
	$code="MT";
}
if(($co == 'MTECH')&&($sp == 'MECHANICAL ENGINEERING'))
{
	$code="MME";
}
if(($co == 'MTECH')&&($sp == 'ADVANCED COMMUNICATION AND INFORMATION SYSTEM'))
{
	$code="ML";
}
if(($co == 'MTECH')&&($sp == 'ADVANCED ELECTRONICS AND COMMUNICATION'))
{
	$code="MEC";
}
if(($co == 'MTECH')&&($sp == 'COMPUTER SCIENCE AND ENGINEERING'))
{
	$code="MR";
}

if(($co == 'MCA')&&($sp == 'COMPUTER APLLICATIONS'))
{
	$code="MP";
}
$admission_no=$yr.$code.$next_st_id1;
}	

if (isset($_REQUEST['button']))
{

		$co=$_POST['course1'];
		$code=$_POST['code'];
		$st_id=$_POST['st_id'];
		$next_st_id=$_POST['next_st_id'];
		$st_id1=$_POST['st_id1'];
		$next_st_id1=$_POST['next_st_id1'];
		$sp=$_POST['spec'];
		$bc=$_POST['bch'];
		$admno=$_POST['adm_no'];
		$todays_date=$_POST['dte'];
		$na=$_POST['name'];
		$db=$_POST['dob'];
		$sx=$_POST['gender'];
		$rlgn=$_POST['religion'];
		$cst=$_POST['caste'];
		$mob=$_POST['mobile'];
		$mail=$_POST['email'];
		$semail=$_POST['semail'];
		$gdcontact=$_POST['gdcontact'];
		$guard_contact=$_POST['guard_contact'];
		$gdemail=$_POST['gdemail'];
		$nagd=$_POST['name_guard'];
		$rel=$_POST['relation'];
		$occpn=$_POST['occupation'];
		$inc=$_POST['income'];
		$adrs=$_POST['address'];
		$phno=$_POST['phone'];
		$csem=$_POST['cur_sem'];
		$rlno=$_POST['roll_num'];
		$rnk=$_POST['rank_no'];
		$qta=$_POST['quota'];
		$scl1=$_POST['school_1'];
		$rgno1=$_POST['reg_no_yr_1'];
		$brd1=$_POST['board_1'];
		$per1=$_POST['per1'];
		$scl2=$_POST['school_2'];
		$rgno2=$_POST['reg_no_yr_2'];
		$brd2=$_POST['board_2'];
		$per2=$_POST['per2'];
		$chnc=$_POST['no_chance'];
		$tot=$_POST['total'];
		$phy=$_POST['physics'];
		$chem=$_POST['chemistry'];
		$math=$_POST['maths'];
		$admtype=$_POST['admtype'];
		$blood=$_POST['blood'];
		$score=$_POST['score'];
		$college_name=$_POST['college_name'];
		$university=$_POST['university'];
		$deg_co=$_POST['degree_course'];
		$deg_regno=$_POST['degree_regno'];
		$deg_marks=$_POST['degree_marks'];
		$deg_per=$_POST['degree_percent'];
		$hid=$_POST['c'];
		//$file=$_FILES['file']['name'];

	 	

if($semail == $mail)
{
	echo "<script>alert('Already Submitted!')</script>";
}
else
 {
 $obj=new dboperation();
  $q="INSERT INTO `stud_details`(`admissionno`, `name`, `dob`, `gender`, `religion`, `caste`, `year_of_admission`, `email`, `mobile_phno`, `land_phno`, `address`, `rollno`, `rank`, `quota`, `school_1`, `regno_1`, `board_1`,`percentage_1`, `school_2`, `regno_2`, `board_2`,`percentage_2`, `no_chance1`, `courseid`, `branch_or_specialisation`, `branch_code`,`image`, `gate_score`, `admission_type`, `entry_sem`,`status`, `blood`) VALUES ('$admno', '$na', '$db', '$sx', '$rlgn','$cst', '$todays_date', '$mail', '$mob','$phno', '$adrs', '$rlno', '$rnk', '$qta', '$scl1', '$rgno1','$brd1', '$per1','$scl2', '$rgno2', '$brd2','$per2', '$chnc','$co','$sp','$code','" . addslashes(file_get_contents($_FILES['file']['tmp_name'])) . "', '$score', '$admtype','$csem','On Going','$blood')";
    $obj->Ex_query($q);

	 if($guard_contact != $gdcontact)
	 {
  $objpa=new dboperation();
 $q2pa="INSERT INTO `parent`(`name_guardian`, `guard_contactno`, `occupation`, `guard_email`, `income`) VALUES ('$nagd','$gdcontact','$occpn','$gdemail','$inc')";
    $objpa->Ex_query($q2pa);
		}
		
	$res5=mysql_query("SELECT max(parentid) as pid from parent") or die(mysql_error());
	$x=mysql_fetch_assoc($res5);
	$ress=$x["pid"];
	
	 //$objpa1=new dboperation();
	// $parent="SELECT max(parentid) from parent";
	// $objpa1->Ex_query($parent);
	  
	$objpa2=new dboperation();
    $q2pa2="INSERT INTO `parent_student`(`admissionno`, `parentid`, `Relation`) VALUES ('$admno','$ress','$rel')";
    $objpa2->Ex_query($q2pa2);

	
	  $objlog=new dboperation();
 $qlog="INSERT INTO `login`(`username`, `password`, `usertype`) VALUES ('$admno','$admno','student')";
    $objlog->Ex_query($qlog);

	
  if($co == 'BTECH')
      {
   $obj2=new dboperation();
 $q2="INSERT INTO `ugstudent_qual`(`admissionno`, `physics`, `chemistry`, `maths`, `total_marks`, `percentage`) VALUES ('$admno', '$phy' , '$chem', '$math', '$tot', '$per2')";
    $obj2->Ex_query($q2);
	
	$obj11=new dboperation();
	$q11="UPDATE last_adm_no SET ug='$next_st_id' WHERE `ug`='$st_id'";
	 $obj11->Ex_query($q11);
      }
    elseif($co == 'BARCH')
     {
	$objb=new dboperation();
 $qb="INSERT INTO `ugstudent_qual`(`admissionno`, `physics`, `chemistry`, `maths`, `total_marks`, `percentage`)VALUES ('$admno', '$phy' , '$chem', '$math', '$tot', '$per2')";
    $objb->Ex_query($qb);
	
	$obja=new dboperation();
	$qa="UPDATE last_adm_no SET ug='$next_st_id' WHERE `ug`='$st_id'";
	 $obja->Ex_query($qa);
	 }
	elseif($co == 'MCA')	 	 
	{	 
	$obj7=new dboperation();
 $q7="INSERT INTO `pgstudent_qual` (`admissionno`, `college_name`, `university`, `degree_course`, `degree_regno`, `degree_marks`, `degree_percent`) VALUES ('$admno','$college_name','$university', '$deg_co' , '$deg_regno', '$deg_marks', '$deg_per')";
    $obj7->Ex_query($q7);
	
	$obj1c=new dboperation();
	$q1c="UPDATE last_adm_no SET pg='$next_st_id1' WHERE `pg`='$st_id1'";
	 $obj1c->Ex_query($q1c);  
     } 
	 else
	 {
	$objc=new dboperation();
 $qc="INSERT INTO `pgstudent_qual` (`admissionno`, `college_name`, `university`, `degree_course`, `degree_regno`, `degree_marks`, `degree_percent`) VALUES ('$admno','$college_name','$university', '$deg_co' , '$deg_regno', '$deg_marks', '$deg_per')";
    $objc->Ex_query($qc);  
	
	$obj1d=new dboperation();
	$q1d="UPDATE last_adm_no SET pg='$next_st_id1' WHERE `pg`='$st_id1'";
	 $obj1d->Ex_query($q1d);   
	 }
	 
	echo "<script>alert('Details are entered successfully')</script>";
	}
}	  ?>

    	<h2>Personal Details</h2>
  
    	<form id="form2" name="form2" method="post" action="" enctype="multipart/form-data" class="sear_frm" >

 
   <div class="form-group ">
      <label for="name">Temp No:</label>
      <input type="text" class="form-control" id="tmp_no" name="tmp_no"   onchange="getname()" >
    </div>
  

<div class="form-row">
 	<div class="form-group col-md-6">
      <label for="adm_no">Admission No:</label>
	  <input type="text" class="form-control" id="text" name="adm_no" value="<?php echo $admission_no?>" required>
		</div>
		<div class="form-group col-md-6">
      <label  for="course">Course</label>
	  <input type="text" class="form-control" id="course1" name="course1"  value="<?php echo $co?>" required>
      
    </div>
</div>
        
        
<div class="form-row">
 	<div class="form-group col-md-6">
      <label for="spec">Branch</label>
	  <input type="text" class="form-control" id="spec" name="spec" value="<?php echo $sp?>" required>
		</div>
		<div class="form-group col-md-6">
      <label  for="bch">Batch</label>
	  <input type="text" class="form-control" id="bch" name="bch"  value="<?php echo $bc?>" required>
    </div>  
    </div>
		
	
<div <div class="form-row">
  <div class="form-group">
   <label class="col-sm-4 control-label" for="admtype">Admission Type</label>
 
 <?php
  if($admtype == 'Normal')
  {
 echo "<label class='radio-inline'><input type='radio' name='admtype' value='Normal' checked> Normal</label>";
 echo "<label class='radio-inline'><input type='radio' name='admtype' value='Lateral'> Lateral</label>";
 echo "<label class='radio-inline'><input type='radio' name='admtype' value='Transfer'> Transfer</label>";
  }
  elseif($admtype == 'Lateral')
  {
 echo "<label class='radio-inline'><input type='radio' id='admtype' name='admtype' value='Normal'> Normal</label>";
 echo "<label class='radio-inline'><input type='radio' id='admtype' name='admtype' value='Lateral' checked> Lateral</label>";
 echo "<label class='radio-inline'><input type='radio' id='admtype' name='admtype' value='Transfer'> Transfer</label>";
  }
  elseif($admtype == 'Transfer')
  {
 echo "<label class='radio-inline'> <input type='radio' id='admtype'  name='admtype' value='Normal'> Normal</label>";
 echo "<label class='radio-inline'><input type='radio' id='admtype' name='admtype' value='Lateral'> Lateral</label>";
 echo "<label class='radio-inline'><input type='radio' id='admtype' name='admtype' value='Transfer' checked> Transfer</label>";
  }
  else
  {
 echo "<label class='radio-inline'><input type='radio' id='admtype' name='admtype' value='Normal'> Normal</label>";
 echo "<label class='radio-inline'><input type='radio' id='admtype' name='admtype' value='Lateral'> Lateral</label>";
 echo "<label class='radio-inline'><input type='radio' id='admtype' name='admtype' value='Transfer'> Transfer</label>";
  }?>
   </div>
  </div>
 
 
 
 
 
 
  <div class="form-row">
 	<div class="form-group col-md-6">
      <label for="yr_adm">Year Of Admission</label>
	  <input type="text" class="form-control" id="dte" name="dte"   value="<?php echo $dt?>" required>
		</div>
		<div class="form-group col-md-6">
      <label  for="name">Name Of Candidate</label>
	  <input type="text" class="form-control" id="name" name="name" value="<?php echo $na?>" required=>
      
    </div>
</div>


  
  <div class="form-row">
 	<div class="form-group col-md-6">
      <label for="spec">Data Of Birth</label>
	  <input type="text" class="form-control" id="dob" name="dob"  value="<?php echo $db?>" required>
		</div>
		<div class="form-group col-md-6">
      <label  for="blood">Blood Group</label>
	  <input type="text" class="form-control" id="blood" name="blood" value="<?php echo $blood?>" required>
      
    </div>
</div>
  
  
  

 <div <div class="form-row">
  <div class="form-group">
<label class="col-sm-4 control-label"  for="gender">Gender</label>

   
   <?php
  if($sx == 'M')
  {  
echo "<label class='radio-inline'> <input class='radio-inline' type='radio' name='gender' value='M' checked> Male</label>";
 echo "<label class='radio-inline'> <input type='radio' name='gender' value='F'> Female</label>";
 echo "<label class='radio-inline'> <input type='radio' name='gender' value='O'> Other</label>";
  }
  elseif($sx == 'F')
  {
	echo "<label class='radio-inline'><input class='radio-inline'  type='radio' name='gender' value='M'> Male</label>";
 echo "<label class='radio-inline'><input class='radio-inline' type='radio' name='gender' value='F' checked> Female</label>";
 echo "<label class='radio-inline'><input class='radio-inline' type='radio' name='gender' value='O'> Other</label>";  
  }
  elseif($sx == 'O')
  {
	 echo "<label class='radio-inline'><input class='radio-inline' type='radio' name='gender' value='M'> Male</label>";
 echo "<label class='radio-inline'><input class='radio-inline' type='radio' name='gender' value='F'> Female</label>";
 echo "<label class='radio-inline'><input class='radio-inline' type='radio' name='gender' value='O' checked> Other</label>"; 
  }
   else
  {
 echo "<label class='radio-inline'><input class='radio-inline' type='radio' name='gender' value='M'> Male</label>";
 echo "<label class='radio-inline'><input class='radio-inline' type='radio' name='gender' value='F'> Female</label>";
 echo "<label class='radio-inline'><input class='radio-inline' type='radio' name='gender' value='O'> Other</label>";   
   }?>
 
   </div>

  </div>
  
  
  
  <div class="form-row">
 	<div class="form-group col-md-6">
      <label for="religion">Religion</label>
	  <input type="text" class="form-control" id="religion" name="religion" value="<?php echo $rlgn?>"  required>
		</div>
		<div class="form-group col-md-6">
      <label  for="caste">Caste</label>
	  <input type="text" class="form-control" id="caste" name="caste" value="<?php  echo $cst?>" required> 
    </div>
</div>
       
   
<div class="form-row">
 	<div class="form-group col-md-6">
      <label for="mobile">Mobile No:</label>
	  <input type="text" class="form-control" id="mobile" name="mobile" value="<?php echo $mob?>"  required>
		</div>
		<div class="form-group col-md-6">
      <label  for="email">Email</label>
	  <input type="text" class="form-control" id="email" name="email"  value="<?php echo $mail?>" required>      
    </div>
</div>   
        <input type="hidden" name="code" id="code"  value="<?php echo $code?>" />
        <input type="hidden" name="st_id" id="st_id"  value="<?php echo $st_id?>" />
        <input type="hidden" name="next_st_id" id="next_st_id"  value="<?php echo $next_st_id?>" />
         <input type="hidden" name="st_id1" id="st_id1"  value="<?php echo $st_id1?>" />
        <input type="hidden" name="next_st_id1" id="next_st_id1"  value="<?php echo $next_st_id1?>" /> 
         <input type="hidden" name="gdcontact" id="gdcontact"  value="<?php echo $gdcontact?>" />
           <input type="hidden" name="guard_contact" id="guard_contact"  value="<?php echo $guard_contact?>" />
        <input type="hidden" name="gdemail" id="gdemail"  value="<?php echo $gdemail?>" />
          <input type="hidden" name="semail" id="semail"  value="<?php echo $semail?>" />
      
	  <div class="form-row">
 	<div class="form-group col-md-6">
      <label for="name_guard">Name Of Guardian</label>
	  <input type="text" class="form-control" id="name_guard" name="name_guard" value="<?php echo $nagd?>" required>
		</div>
		<div class="form-group col-md-6">
      <label  for="relation">Relation With Guardian</label>
	  <input type="text" class="form-control" id="relation" name="relation"  value="<?php echo $rel?>" required>
      
    </div>
</div>  
<div class="form-row">
 	<div class="form-group col-md-6">
      <label for="occupation">Occupation Of Guardian</label>
	  <input type="text" class="form-control" id="occupation" name="occupation"  value="<?php echo $occpn?>" required>
		</div>
		<div class="form-group col-md-6">
      <label  for="income">Annual Income</label>
	  <input type="text" class="form-control" id="income" name="income"   value="<?php echo $inc?>"  required>
      
    </div>
</div>  

<div class="form-row">
 	<div class="form-group col-md-6">
      <label for="address">Address</label>
	  <input type="text" class="form-control" id="address" name="address"  value="<?php echo $adrs?>"  required>
		</div>
		<div class="form-group col-md-6">
      <label  for="phone">Telephone No</label>
	  <input type="text" class="form-control" id="phone" name="phone"  value="<?php echo $phno?>" required>
    
    </div>
</div> 
 <div class="form-row">
       <div class="form-group">
    <label for="file">Upload Image</label>
    <input type="file" class="form-control-file" id="file" name="file">
  </div>   
    	</div>
        <h2>Academic</h2>
   
     <div class="form-row">
 	<div class="form-group">
      <label for="cur_sem">Current Semester</label>
	  <input type="text" class="form-control" id="cur_sem" name="cur_sem"  value="<?php echo $csem?>"  required>
		</div>
        </div>
    
 
          <div class="form-row">
 	<div class="form-group col-md-6">
      <label for="roll_no">Entrance roll No:</label>
	  <input type="text" class="form-control" id="roll_num" name="roll_num"  value="<?php echo $rlno?>" required>
		</div>
		<div class="form-group col-md-6">
      <label  for="rank_no">Entrance rank No:</label>
	  <input type="text" class="form-control" id="rank_no" name="rank_no" value="<?php echo $rnk?>"  required>
      
    </div>
</div>  
  <div class="form-row">
 	<div class="form-group col-md-6">
      <label for="quota">Quota</label>
	  <input type="text" class="form-control" id="quota" name="quota"  value="<?php echo $qta?>" required>
	  <input type="hidden" name="c" value="<?php echo $pic?>">
		</div>
		<div class="form-group col-md-6">
      <label  for="school_1">Name of Instition from SSLC or equivalent </label>
	  <input type="text" class="form-control" id="school_1" name="school_1" value="<?php echo $scl1?>" required>
      
    </div>
</div>  
    <div class="form-row">
 	<div class="form-group col-md-6">
      <label for="reg_no_yr_1"> Register Number</label>
	  <input type="text" class="form-control" id="reg_no_yr_1" name="reg_no_yr_1" value="<?php echo $rgno1?>" required>
		</div>
		<div class="form-group col-md-6">
      <label  for="board_1">Name of Board/University </label>
	  <input type="text" class="form-control" id="board_1" name="board_1" value="<?php echo $brd1?>" required>
      
    </div>
</div>  
        
       
          <div class="form-row">
 	<div class="form-group col-md-6">
      <label for="per1"> Percentage of SSLC</label>
	  <input type="text" class="form-control" id="per1" name="per1" value="<?php echo $per1?>"  required>
		</div>
		<div class="form-group col-md-6">
      <label  for="school_2">Name of Instition from 12th exam passed</label>
	  <input type="text" class="form-control" id="school_2" name="school_2"  value="<?php echo $scl2?>" required>
      
    </div>
</div> 
  <div class="form-row">
 	<div class="form-group col-md-6">
      <label for="reg_no_yr_2">Register Number</label>
	  <input type="text" class="form-control" id="reg_no_yr_2" name="reg_no_yr_2"  value="<?php echo $rgno2?>" required>
		</div>
		<div class="form-group col-md-6">
      <label  for="board_2">Name of Board/University</label>
	  <input type="text" class="form-control" id="board_2" name="board_2" value="<?php echo $brd2?>" required>
      
    </div>
</div> 
  <div class="form-row">
 	<div class="form-group col-md-6">
      <label for="per2">Percentage of 12th</label>
	  <input type="text" class="form-control" id="per2" name="per2" value="<?php echo $per2?>"  required>
		</div>
		<div class="form-group col-md-6">
      <label  for="no_chance">No of chances taken for qualifying exam passed</label>
	  <input type="text" class="form-control" id="no_chance" name="no_chance" value="<?php echo $chnc?>" required>
      
    </div>
</div> 
 <div class="form-row">
 	<div class="form-group col-md-6">
      <label for="total">Total marks obtained </label>
	  <input type="text" class="form-control" id="total" name="total"  value="<?php echo $tot?>" required>
		</div>
</div> 


      <?php
  if($co == 'MCA')
  {
  echo " <div class='form-row'>
	<div class='form-group col-md-6'>";
    echo "<label for='score'>Gate Score</label> ";
	        echo "<input type='text' class='form-control' name='score' id='score' placeholder='Disable'  disabled/>";
 
  echo "</div>
   </div>";
   
   
   echo "<div class='form-row'>
 	<div class='form-group col-md-6'>";
	  
	  echo "<label for='college_name'><strong>Degree Details  : </strong> College Name</label>";
		
			  echo "<input type='text' class='form-control' name='college_name' id='college_name' value='$college_name' />";
			  echo "</div>
			  <div class='form-group col-md-6'>";
       echo "<label for='university'>University</label></td>";
	
			  echo "<input type='text' class='form-control' name='university' id='university' value='$university' />";
			  
			  echo "</div>
			  </div>";
   
   
   
 echo "<div class='form-row'>
 	<div class='form-group col-md-6'>";
	  
	  echo "<label for='degree_course'><strong>Degree Details  : </strong> Degree Course</label>";
		
			  echo "<input type='text' class='form-control' name='degree_course' id='degree_course' value='$deg_co' />";
			  echo "</div>
			  <div class='form-group col-md-6'>";
       echo "<label for='degree_regno'> Degree Register Number</label></td>";
	
			  echo "<input type='text' class='form-control' name='degree_regno' id='degree_regno' value='$deg_regno' />";
			  
			  echo "</div>
			  </div>";
			  
			   echo "<div class='form-row'>
 	<div class='form-group col-md-6'>";
			  echo "<label for='degree_marks'>Degree Marks</label>";
			
			  echo "<input  class='form-control' type='text' name='degree_marks' id='degree_marks' value='$deg_marks' />";
			    echo "</div> <div class='form-group col-md-6'>";
       echo "<label for='degree_percent'> Degree Percentage</label>";
	
			  echo "<input class='form-control' type='text' name='degree_percent' id='degree_percent' value='$deg_per' />";
			   echo "</div> </div>";
	   
  }
  elseif($co == 'MTECH')
  {
   echo " <div class='form-row'>
	<div class='form-group col-md-6'>";
    echo "<label for='score'>Gate Score</label> ";
	        echo "<input type='text' class='form-control' name='score' id='score'  value='$score' />";
 
  echo "</div>
   </div>";
   
   
   echo "<div class='form-row'>
 	<div class='form-group col-md-6'>";
	  
	  echo "<label for='college_name'><strong>Degree Details  : </strong> College Name</label>";
		
			  echo "<input type='text' class='form-control' name='college_name' id='college_name' value='$college_name' />";
			  echo "</div>
			  <div class='form-group col-md-6'>";
       echo "<label for='university'>University</label></td>";
	
			  echo "<input type='text' class='form-control' name='university' id='university' value='$university' />";
			  
			  echo "</div>
			  </div>";
   
 echo "<div class='form-row'>
 	<div class='form-group col-md-6'>";
	  
	  echo "<label for='degree_course'><strong>Degree Details  : </strong> Degree Course</label>";
		
			  echo "<input type='text' class='form-control' name='degree_course' id='degree_course' value='$deg_co' />";
			  echo "</div>
			  <div class='form-group col-md-6'>";
       echo "<label for='degree_regno'> Degree Register Number</label></td>";
	
			  echo "<input type='text' class='form-control' name='degree_regno' id='degree_regno' value='$deg_regno' />";
			  
			  echo "</div>
			  </div>";
			  
			   echo "<div class='form-row'>
 	<div class='form-group col-md-6'>";
			  echo "<label for='degree_marks'>Degree Marks</label>";
			
			  echo "<input  class='form-control' type='text' name='degree_marks' id='degree_marks' value='$deg_marks' />";
			    echo "</div> <div class='form-group col-md-6'>";
       echo "<label for='degree_percent'> Degree Percentage</label>";
	
			  echo "<input class='form-control' type='text' name='degree_percent' id='degree_percent' value='$deg_per' />";
			   echo "</div> </div>";
  }
  else
  {
	  echo "<div class='form-row'>
 	<div class='form-group col-md-6'>";
	  echo "<label for='physics'><strong>Marks Obtained : </strong> Physics</label>";
			
			  echo "<input type='text' class='form-control' name='physics' id='physics' value='$phy'/>";
        echo "</div>
			  <div class='form-group col-md-6'>";
      echo "<label for='chemistry'>Chemistry</label>";
       echo "<input type='text' class='form-control' name='chemistry' id='chemistry'  value='$chem'/>";
	     echo "</div> </div> <div class='form-row'> <div class='form-group col-md-6'>";
	   echo "<label for='maths'>Mathematics</label>";
	   echo "<input type='text' class='form-control' name='maths' id='maths'  value='$math'/>"; 
	   echo "</div> </div>";
  }
 

?>
  <div align="center">
  <button type="submit" value="Submit" name="button" id="button" class="btn btn-primary">Submit</button> 
  <input type="reset" name="submit2" id="submit2" value="CLEAR" class="btn btn-primary" />
  </div>
</form>
  </div>
  
<?php 
include("includes/footer.php");
 ?>


