<?php
session_start();
$subjectid=$_GET['subid'];
$ay=$_GET['ay'];

require('pdf/pdfSample.php');

include("includes/dbopen.php");
//$pdf = new PDF('P','mm',array(250,400));
//$pdf = new PDF('P','mm',array(500,400));
$pdf = new PDF('P','mm',array(410,400));
//$pdf->dbopen();
$pdf->AddPage();
$pdf->AliasNbPages();   // necessary for x of y page numbers to appear in document
$pdf->SetAutoPageBreak(false);
$pdf->Image('rit.jpg',50,20,-120);
			//$pdf->SetFont('Arial','B',15);
$y = 20;
$x = 100;  
 //$pdf->Cell(40,10,$id);
$pdf->setXY($x, $y);
$pdf->SetFont('Arial','B',25);
$pdf->Cell(60,20,'RAJIV GANDHI INSTITUTE OF TECHNOLOGY');
$y = 22;
$x = 110; 
$pdf->setXY($x, $y);
$pdf->SetFont('Arial','B',17);
$pdf->Cell(30,40,'(Department of Technical Education, Government of Kerala)');
$y = 30;
$x = 115; 
$pdf->setXY($x, $y);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(30,40,'Govt.Engineering College, Velloor(P.O),Pampady,kottayam-686 501.');
$y = 38;
$x = 138; 
$pdf->setXY($x, $y);
//$pdf->SetFont('Arial','B',14);
$pdf->Cell(30,40,'Ph:0481 - 2507763/2506153, Fax:0481 - 2506153');
$y = 46;
$x = 145; 
$pdf->setXY($x, $y);
//$pdf->SetFont('Arial','B',14);
$pdf->Cell(30,40,'Email : info@rit.ac.in, Web : www.rit.ac.in');
$y = 70;
$x = 120; 
$pdf->setXY($x, $y);
$pdf->SetFont('Arial','B',17);
$pdf->Cell(30,40,'CONSOLIDATED STUDENT EVALUATION REPORT');
$pdf->SetFont('Arial','B',15);

$y=90;
$x=50;
$pdf->setXY($x, $y);
$pdf->Cell(10,40,'Name of Staff : ');
$y=100;
$x=50;
$pdf->setXY($x, $y);
$pdf->Cell(10,40,'Subject : ');
$y=110;
$x=50;
$pdf->setXY($x, $y);
$pdf->Cell(10,40,'Department : ');
$y=120;
$x=50;
$pdf->setXY($x, $y);
$pdf->Cell(10,40,'Semester : ');
$y=130;
$x=50;
$pdf->setXY($x, $y);
$pdf->Cell(10,40,'Academic Year : ');
$y=140;
$x=50;
$pdf->setXY($x, $y);
$pdf->Cell(10,40,'Number of Students Responded to the Questionnaire : ');
$pdf->setFont("Arial","B","13");
$pdf->setXY(45, 324);
$pdf->Cell(10,40,'TEACHING EFFECTIVENESS INDEX                                      : ');
$pdf->SetFont('Arial','',15);
$pdf->setXY(235, 345);
$pdf->Cell(10,40,'HOD / Dean /Principal');


//queries
$result=mysql_query("SELECT name,fid FROM faculty_details WHERE fid IN (SELECT fid FROM subject_allocation WHERE subjectid ='$subjectid')",$con);
if($result)
{
    while($row=mysql_fetch_array($result))
	{
		$facid=$row['fid'];
		$x=190;
		$y=90;
		$pdf->setXY($x, $y);
	$pdf->Cell(10, 40, $row['name']);
	}	
}
$result=mysql_query("select subject_title from subject_class where subjectid='$subjectid'",$con);
if($result)
{
    while($row=mysql_fetch_array($result))
	{
		$x=190;
		$y=100;
		$pdf->setXY($x, $y);
	$pdf->Cell(10, 40, $row['subject_title']);
	}	
}
$result=mysql_query("select deptname from class_details where classid in(select classid from subject_class where subjectid='$subjectid')",$con);
if($result)
{
    while($row=mysql_fetch_array($result))
	{
		$dp=$row['deptname'];
	}
}
//current date
$acdyear=date("Y");
$prev=$acdyear-1;
$prev.="-". $acdyear; 

$result=mysql_query("select deptname,semid,acdyear from mainfeedback where subjectid='$subjectid' and acdyear='$ay'",$con);
if($result)
{
    while($row=mysql_fetch_array($result))
	{
		$x=190;
		$y=110;
		$pdf->setXY($x, $y);
	$pdf->Cell(10, 40, $dp);
	$x=190;
	$y=120;
	$pdf->setXY($x, $y);
	$pdf->Cell(10, 40, $row['semid']);
	$x=190;
	$y=130;
	$pdf->setXY($x, $y);
	$pdf->Cell(10, 40, $row['acdyear']);
	}	
}

$result=mysql_query("SELECT COUNT(responseid) as cnt FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay'",$con);
if($result)
	{
    while($row=mysql_fetch_assoc($result))
	{
		$n = $row['cnt'];
		$x=190;
		$y=140;
		$pdf->setXY($x, $y);
		$pdf->Cell(10, 40, $row['cnt']); 
	}
	}
	$pdf->setFont("Arial","B","13");

$result=mysql_query("select indexmark from feedback_index where fid='$facid' and subjectid='$subjectid' and acdyear='$ay'",$con);
if($result)
{
    while($row=mysql_fetch_array($result))
	{
	$pdf->setXY(195, 324);
	$pdf->Cell(10, 40, $row['indexmark']);
	}	
}
//table

$pdf->SetDrawColor(0, 0, 0); //black
//table header
$pdf->SetFillColor(250, 250, 250); //gray
$pdf->setFont("Arial","B","13");
//$pdf->setXY(35, 120); 
//$pdf->setXY(170, 150); 
		//$x=45;
		//$y=170;
$pdf->setXY(45, 170);//location of titles
$pdf->Cell(150, 15, "1. Knowledge of the teacher in the subject", 1, 0, "L", 1);   // CHANGE THESE TO REPRESENT YOUR FIELDS 
$pdf->Cell(30, 7.5, "Excellent", 1, 0, "L", 1); 
$pdf->Cell(30, 7.5, "Good", 1, 0, "L", 1); 
$pdf->Cell(30, 7.5, "Fair", 1, 0, "L", 1); 
$pdf->Cell(30, 7.5, "Poor", 1, 0, "L", 1); 
$pdf->Cell(30, 7.5, "Blank", 1, 0, "L", 1); 
$pdf->setXY(195, 177.5);//location for displaying count values

$kn1=mysql_query("SELECT COUNT(responseid) as ckn1 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs1=17.75",$con);
if($kn1)
 {
    while($krow1=mysql_fetch_assoc($kn1))
  {
	//echo $krow1['ckn1'];
	//$pdf->setXY(145, 185);
    $pdf->Cell(30, 7.5, $krow1['ckn1'], 1, 0, "L", 1); 
	$a1 = $krow1['ckn1'];
  }
 }
 $kn2=mysql_query("SELECT COUNT(responseid) as ckn2 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs1=14.125",$con);
if($kn2)
 {
    while($krow2=mysql_fetch_assoc($kn2))
  {
    $pdf->Cell(30, 7.5, $krow2['ckn2'], 1, 0, "L", 1); 
	$a2 = $krow2['ckn2'];
  }
 }
$kn3=mysql_query("SELECT COUNT(responseid) as ckn3 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs1=10.28125",$con);
if($kn3)
 {
    while($krow3=mysql_fetch_assoc($kn3))
  {
    $pdf->Cell(30, 7.5, $krow3['ckn3'], 1, 0, "L", 1); 
	$a3 = $krow3['ckn3'];
  }
 }
$kn4=mysql_query("SELECT COUNT(responseid) as ckn4 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs1=3.53125",$con);
if($kn4)
 {
    while($krow4=mysql_fetch_assoc($kn4))
  {
    $pdf->Cell(30, 7.5, $krow4['ckn4'], 1, 0, "L", 1); 
	$a4 = $krow4['ckn4'];
  }
 }
$kn5=mysql_query("SELECT COUNT(responseid) as ckn5 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs1=8",$con);
if($kn5)
 {
    while($krow5=mysql_fetch_assoc($kn5))
  {
    $pdf->Cell(30, 7.5, $krow5['ckn5'], 1, 0, "L", 1); 
	$a5 = $krow5['ckn5']; 
  }
 }
$pdf->setXY(45, 185);//location of titles 2
$pdf->Cell(150, 15, "2. Clarity and understandability of teachers explanations", 1, 0, "L", 1);   // CHANGE THESE TO REPRESENT YOUR FIELDS 
$pdf->Cell(30, 7.5, "Excellent", 1, 0, "L", 1); 
$pdf->Cell(30, 7.5, "Good", 1, 0, "L", 1); 
$pdf->Cell(30, 7.5, "Fair", 1, 0, "L", 1); 
$pdf->Cell(30, 7.5, "Poor", 1, 0, "L", 1); 
$pdf->Cell(30, 7.5, "Blank", 1, 0, "L", 1); 
$pdf->setXY(195, 192.5);//location for displaying count values  215=185+30  
$cl1=mysql_query("SELECT COUNT(responseid) as ccl1 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs2=14.5",$con);
if($cl1)
 {
    while($clrow1=mysql_fetch_assoc($cl1))
  {
    $pdf->Cell(30, 7.5, $clrow1['ccl1'], 1, 0, "L", 1); 
	$a1 = $clrow1['ccl1'];
  }
 }
$cl2=mysql_query("SELECT COUNT(responseid) as ccl2 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs2=11.8125",$con);
if($cl2)
 {
    while($clrow2=mysql_fetch_assoc($cl2))
  {
    $pdf->Cell(30, 7.5, $clrow2['ccl2'], 1, 0, "L", 1); 
	$a2 = $clrow2['ccl2'];
  }
 }
$cl3=mysql_query("SELECT COUNT(responseid) as ccl3 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs2=8.1125",$con);
if($cl3)
 {
    while($clrow3=mysql_fetch_assoc($cl3))
  {
    $pdf->Cell(30, 7.5, $clrow3['ccl3'], 1, 0, "L", 1); 
	$a3 = $clrow3['ccl3'];
  }
 }
$cl4=mysql_query("SELECT COUNT(responseid) as ccl4 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs2='2.0125'",$con);
if($cl4)
 {
    while($clrow4=mysql_fetch_assoc($cl4))
  {
    $pdf->Cell(30, 7.5, $clrow4['ccl4'], 1, 0, "L", 1); 
	$a4 = $clrow4['ccl4'];
  }
 }
$cl5=mysql_query("SELECT COUNT(responseid) as ccl5 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs2=4.0875",$con);
if($cl5)
 {
    while($clrow5=mysql_fetch_assoc($cl5))
  {
    $pdf->Cell(30, 7.5, $clrow5['ccl5'], 1, 0, "L", 1); 
	$a5 = $clrow5['ccl5'];
  }
 }
$pdf->setXY(45, 200);//location of titles 3
$pdf->Cell(150, 15, "3. Teacher's willingness to help", 1, 0, "L", 1);   // CHANGE THESE TO REPRESENT YOUR FIELDS 
$pdf->Cell(30, 7.5, "Excellent", 1, 0, "L", 1); 
$pdf->Cell(30, 7.5, "Good", 1, 0, "L", 1); 
$pdf->Cell(30, 7.5, "Fair", 1, 0, "L", 1); 
$pdf->Cell(30, 7.5, "Poor", 1, 0, "L", 1); 
$pdf->Cell(30, 7.5, "Blank", 1, 0, "L", 1); 
$pdf->setXY(195, 207.5);//location for displaying count values  
$w1=mysql_query("SELECT COUNT(responseid) as cw1 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs3=7.5",$con);
if($w1)
 {
    while($wrow1=mysql_fetch_assoc($w1))
  {
	$pdf->Cell(30, 7.5, $wrow1['cw1'], 1, 0, "L", 1); 
	$a1 = $wrow1['cw1'];
  }
 }
 $w2=mysql_query("SELECT COUNT(responseid) as cw2 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs3=5.7125",$con);
if($w2)
 {
    while($wrow2=mysql_fetch_assoc($w2))
  {
	$pdf->Cell(30, 7.5, $wrow2['cw2'], 1, 0, "L", 1); 
	$a2 = $wrow2['cw2'];
  }
 }
 $w3=mysql_query("SELECT COUNT(responseid) as cw3 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs3=4.0375",$con);
if($w3)
 {
    while($wrow3=mysql_fetch_assoc($w3))
  {
	$pdf->Cell(30, 7.5, $wrow3['cw3'], 1, 0, "L", 1); 
	$a3 = $wrow3['cw3'];
  }
 }
 $w4=mysql_query("SELECT COUNT(responseid) as cw4 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs3=1.125",$con);
if($w4)
 {
    while($wrow4=mysql_fetch_assoc($w4))
  {
	$pdf->Cell(30, 7.5, $wrow4['cw4'], 1, 0, "L", 1); 
	$a4 = $wrow4['cw4'];
  }
 }
 $w5=mysql_query("SELECT COUNT(responseid) as cw5 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs3=2.2125",$con);
if($w5)
 {
    while($wrow5=mysql_fetch_assoc($w5))
  {
	$pdf->Cell(30, 7.5, $wrow5['cw5'], 1, 0, "L", 1); 
	$a5 = $wrow5['cw5'];
  }
 }
$pdf->setXY(45, 215);//location of titles 3
$pdf->Cell(150, 15, "4. Approximate % of classes not engaged by the teacher", 1, 0, "L", 1);   // CHANGE THESE TO REPRESENT YOUR FIELDS 
$pdf->Cell(30, 7.5, "<10%", 1, 0, "L", 1); 
$pdf->Cell(30, 7.5, "10-25%", 1, 0, "L", 1); 
$pdf->Cell(30, 7.5, ">25%", 1, 0, "L", 1); 
$pdf->Cell(30, 7.5, "-", 1, 0, "L", 1); 
$pdf->Cell(30, 7.5, "Blank", 1, 0, "L", 1); 
$pdf->setXY(195, 222.5);//location for displaying count values  
$en1=mysql_query("SELECT COUNT(responseid) as cen1 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs4=5.85",$con);
if($en1)
 {
    while($enrow1=mysql_fetch_assoc($en1))
  {
	$pdf->Cell(30, 7.5, $enrow1['cen1'], 1, 0, "L", 1); 
	$a1 = $enrow1['cen1'];
  }
 }
$en2=mysql_query("SELECT COUNT(responseid) as cen2 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs4=3.6625",$con);
if($en2)
 {
    while($enrow2=mysql_fetch_assoc($en2))
  {
	$pdf->Cell(30, 7.5, $enrow2['cen2'], 1, 0, "L", 1); 
	$a2 = $enrow2['cen2'];
  }
 }
$en3=mysql_query("SELECT COUNT(responseid) as cen3 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs4=1.9125",$con);
if($en3)
 {
    while($enrow3=mysql_fetch_assoc($en3))
  {
	$pdf->Cell(30, 7.5, $enrow3['cen3'], 1, 0, "L", 1); 
	$a3 = $enrow3['cen3'];
  }
 }
$pdf->Cell(30, 7.5,"-", 1, 0, "L", 1); 
$en4=mysql_query("SELECT COUNT(responseid) as cen4 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs4=1.6375",$con);
if($en4)
 {
    while($enrow4=mysql_fetch_assoc($en4))
  {
	$pdf->Cell(30, 7.5, $enrow4['cen4'], 1, 0, "L", 1); 
	$a4 = $enrow4['cen4'];
  }
 }
$pdf->setXY(45, 230);//location of titles 3
$pdf->Cell(150, 15, "5. Whether the teacher dictates notes only without explanation", 1, 0, "L", 1);   // CHANGE THESE TO REPRESENT YOUR FIELDS 
$pdf->Cell(30, 7.5, "No", 1, 0, "L", 1); 
$pdf->Cell(30, 7.5, "Yes", 1, 0, "L", 1); 
$pdf->Cell(30, 7.5, "-", 1, 0, "L", 1); 
$pdf->Cell(30, 7.5, "-", 1, 0, "L", 1); 
$pdf->Cell(30, 7.5, "Blank", 1, 0, "L", 1); 
$pdf->setXY(195, 237.5);//location for displaying count values  
$d1=mysql_query("SELECT COUNT(responseid) as cd1 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs5=4",$con);
if($d1)
 {
    while($drow1=mysql_fetch_assoc($d1))
  {
	$pdf->Cell(30, 7.5, $drow1['cd1'], 1, 0, "L", 1); 
	$a1 = $drow1['cd1'];
  }
 }
$d2=mysql_query("SELECT COUNT(responseid) as cd2 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs5=0.67375",$con);
if($d2)
 {
    while($drow2=mysql_fetch_assoc($d2))
  {
	$pdf->Cell(30, 7.5, $drow2['cd2'], 1, 0, "L", 1); 
	$a2 = $drow2['cd2'];
  }
 }
$pdf->Cell(30, 7.5,"-", 1, 0, "L", 1); 
$pdf->Cell(30, 7.5,"-", 1, 0, "L", 1); 

$d3=mysql_query("SELECT COUNT(responseid) as cd3 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs5=1.65",$con);
if($d3)
 {
    while($drow3=mysql_fetch_assoc($d3))
  {
	$pdf->Cell(30, 7.5, $drow3['cd3'], 1, 0, "L", 1); 
	$a3 = $drow3['cd3'];
  }
 }
$pdf->setXY(45, 245);//location of titles 3
$pdf->Cell(150, 15, "6. Teacher's ability to organise lectures", 1, 0, "L", 1);   // CHANGE THESE TO REPRESENT YOUR FIELDS 
$pdf->Cell(30, 7.5, "Excellent", 1, 0, "L", 1); 
$pdf->Cell(30, 7.5, "Satisfactory", 1, 0, "L", 1); 
$pdf->Cell(30, 7.5, "Inadequate", 1, 0, "L", 1); 
$pdf->Cell(30, 7.5, "-", 1, 0, "L", 1); 
$pdf->Cell(30, 7.5, "Blank", 1, 0, "L", 1); 
$pdf->setXY(195, 252.5);//location for displaying count values  
$ab1=mysql_query("SELECT COUNT(responseid) as cab1 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs6=9.25",$con);
if($ab1)
 {
    while($abrow1=mysql_fetch_assoc($ab1))
  {
	$pdf->Cell(30, 7.5, $abrow1['cab1'], 1, 0, "L", 1); 
	$a1 = $abrow1['cab1'];
  }
 }
$ab2=mysql_query("SELECT COUNT(responseid) as cab2 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs6=6.34125",$con);
if($ab2)
 {
    while($abrow2=mysql_fetch_assoc($ab2))
  {
	$pdf->Cell(30, 7.5, $abrow2['cab2'], 1, 0, "L", 1); 
	$a2 = $abrow2['cab2'];
  }
 }
$ab3=mysql_query("SELECT COUNT(responseid) as cab3 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs6=2.5",$con);
if($ab3)
 {
    while($abrow3=mysql_fetch_assoc($ab3))
  {
	$pdf->Cell(30, 7.5, $abrow3['cab3'], 1, 0, "L", 1); 
	$a3 = $abrow3['cab3'];
  }
 }
 $pdf->Cell(30, 7.5,"-", 1, 0, "L", 1); 

$ab4=mysql_query("SELECT COUNT(responseid) as cab4 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs6=3.1625",$con);
if($ab4)
 {
    while($abrow4=mysql_fetch_assoc($ab4))
  {
	$pdf->Cell(30, 7.5, $abrow4['cab4'], 1, 0, "L", 1); 
	$a4 = $abrow4['cab4'];
  }
 }
$pdf->setXY(45, 260);//location of titles 3
$pdf->Cell(150, 15, "7. Speed of presentation", 1, 0, "L", 1);   // CHANGE THESE TO REPRESENT YOUR FIELDS 
$pdf->Cell(30, 7.5, "Just Right", 1, 0, "L", 1); 
$pdf->Cell(30, 7.5, "Too Fast", 1, 0, "L", 1); 
$pdf->Cell(30, 7.5, "Too Slow", 1, 0, "L", 1); 
$pdf->Cell(30, 7.5, "-", 1, 0, "L", 1); 
$pdf->Cell(30, 7.5, "Blank", 1, 0, "L", 1); 
$pdf->setXY(195, 267.5);//location for displaying count values  
$s1=mysql_query("SELECT COUNT(responseid) as cs1 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs7=4.75",$con);
if($s1)
 {
    while($srow1=mysql_fetch_assoc($s1))
  {
	$pdf->Cell(30, 7.5, $srow1['cs1'], 1, 0, "L", 1); 
	$a1 = $srow1['cs1'];
  }
 }
$s2=mysql_query("SELECT COUNT(responseid) as cs2 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs7=1.34125",$con);
if($s2)
 {
    while($srow2=mysql_fetch_assoc($s2))
  {
	$pdf->Cell(30, 7.5, $srow2['cs2'], 1, 0, "L", 1); 
	$a2 = $srow2['cs2'];
  }
 }
$s3=mysql_query("SELECT COUNT(responseid) as cs3 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs7=1.19125",$con);
if($s3)
 {
    while($srow3=mysql_fetch_assoc($s3))
  {
	$pdf->Cell(30, 7.5, $srow3['cs3'], 1, 0, "L", 1); 
	$a3 = $srow3['cs3'];
  }
 }
$pdf->Cell(30, 7.5,"-", 1, 0, "L", 1); 
$s4=mysql_query("SELECT COUNT(responseid) as cs4 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs7=1.4",$con);
if($s4)
 {
    while($srow4=mysql_fetch_assoc($s4))
  {
	$pdf->Cell(30, 7.5, $srow4['cs4'], 1, 0, "L", 1); 
	$a4 = $srow4['cs4'];
  }
 }
$pdf->setXY(45, 275);//location of titles 3
$pdf->Cell(150, 15, "8. Does the teacher Encourage questioning?", 1, 0, "L", 1);   // CHANGE THESE TO REPRESENT YOUR FIELDS 
$pdf->Cell(30, 7.5, "Yes", 1, 0, "L", 1); 
$pdf->Cell(30, 7.5, "Sometimes", 1, 0, "L", 1); 
$pdf->Cell(30, 7.5, "No", 1, 0, "L", 1); 
$pdf->Cell(30, 7.5, "-", 1, 0, "L", 1); 
$pdf->Cell(30, 7.5, "Blank", 1, 0, "L", 1); 
$pdf->setXY(195, 282.5);//location for displaying count values  
$t1=mysql_query("SELECT COUNT(responseid) as ct1 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs8=6.875",$con);
if($t1)
 {
    while($trow1=mysql_fetch_assoc($t1))
  {
	$pdf->Cell(30, 7.5, $trow1['ct1'], 1, 0, "L", 1); 
	$a1 = $trow1['ct1'];
  }
 }
$t2=mysql_query("SELECT COUNT(responseid) as ct2 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs8=3.89375",$con);
if($t2)
 {
    while($trow2=mysql_fetch_assoc($t2))
  {
	$pdf->Cell(30, 7.5, $trow2['ct2'], 1, 0, "L", 1); 
	$a2 = $trow2['ct2'];
  }
 }
$t3=mysql_query("SELECT COUNT(responseid) as ct3 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs8=0.7375",$con);
if($t3)
 {
    while($trow3=mysql_fetch_assoc($t3))
  {
	$pdf->Cell(30, 7.5, $trow3['ct3'], 1, 0, "L", 1); 
	$a3 = $trow3['ct3'];
  }
 }
 $pdf->Cell(30, 7.5,"-", 1, 0, "L", 1); 
$t4=mysql_query("SELECT COUNT(responseid) as ct4 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs8=1.775",$con);
if($t4)
 {
    while($trow4=mysql_fetch_assoc($t4))
  {
	$pdf->Cell(30, 7.5, $trow4['ct4'], 1, 0, "L", 1); 
	$a4 = $trow4['ct4'];
  }
 }
$pdf->setXY(45, 290);//location of titles 3
$pdf->Cell(150, 15, "9. Behaviour of the teacher", 1, 0, "L", 1);   // CHANGE THESE TO REPRESENT YOUR FIELDS 
$pdf->Cell(30, 7.5, "Pleasant", 1, 0, "L", 1); 
$pdf->Cell(30, 7.5, "Indifferent", 1, 0, "L", 1); 
$pdf->Cell(30, 7.5, "Unpleasant", 1, 0, "L", 1); 
$pdf->Cell(30, 7.5, "-", 1, 0, "L", 1); 
$pdf->Cell(30, 7.5, "Blank", 1, 0, "L", 1); 
$pdf->setXY(195, 297.5);//location for displaying count values  
$b1=mysql_query("SELECT COUNT(responseid) as cb1 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs9=6.75",$con);
if($b1)
 {
    while($brow1=mysql_fetch_assoc($b1))
  {
	$pdf->Cell(30, 7.5, $brow1['cb1'], 1, 0, "L", 1); 
	$a1 = $brow1['cb1'];
  }
 }
$b2=mysql_query("SELECT COUNT(responseid) as cb2 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs9=2.7825",$con);
if($b2)
 {
    while($brow2=mysql_fetch_assoc($b2))
  {
	$pdf->Cell(30, 7.5, $brow2['cb2'], 1, 0, "L", 1); 
	$a2 = $brow2['cb2'];
  }
 }
$b3=mysql_query("SELECT COUNT(responseid) as cb3 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs9=1.27875",$con);
if($b3)
 {
    while($brow3=mysql_fetch_assoc($b3))
  {
	$pdf->Cell(30, 7.5, $brow3['cb3'], 1, 0, "L", 1); 
	$a3 = $brow3['cb3'];
  }
 }
 $pdf->Cell(30, 7.5,"-", 1, 0, "L", 1); 
$b4=mysql_query("SELECT COUNT(responseid) as cb4 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs9=1.9375",$con);
if($b4)
 {
    while($brow4=mysql_fetch_assoc($b4))
  {
	$pdf->Cell(30, 7.5, $brow4['cb4'], 1, 0, "L", 1); 
	$a4 = $brow4['cb4'];
  }
 }
$pdf->setXY(45, 305);//location of titles 3
$pdf->Cell(150, 15, "10. Sincerity of the teacher", 1, 0, "L", 1);   // CHANGE THESE TO REPRESENT YOUR FIELDS 
$pdf->Cell(30, 7.5, "Sincere", 1, 0, "L", 1); 
$pdf->Cell(30, 7.5, "Not Sincere", 1, 0, "L", 1); 
$pdf->Cell(30, 7.5, "Not Judgable", 1, 0, "L", 1); 
$pdf->Cell(30, 7.5, "-", 1, 0, "L", 1); 
$pdf->Cell(30, 7.5, "Blank", 1, 0, "L", 1); 
$pdf->setXY(195, 312.5);//location for displaying count values  
$si1=mysql_query("SELECT COUNT(responseid) as csi1 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs10=11.5",$con);
if($si1)
 {
    while($sirow1=mysql_fetch_assoc($si1))
  {
	$pdf->Cell(30, 7.5, $sirow1['csi1'], 1, 0, "L", 1); 
	$a1 = $sirow1['csi1'];
  }
 }
$si2=mysql_query("SELECT COUNT(responseid) as csi2 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs10=1.325",$con);
if($si2)
 {
    while($sirow2=mysql_fetch_assoc($si2))
  {
	$pdf->Cell(30, 7.5, $sirow2['csi2'], 1, 0, "L", 1); 
	$a2 = $sirow2['csi2'];
  }
 }
$si3=mysql_query("SELECT COUNT(responseid) as csi3 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs10=5.06375",$con);
if($si3)
 {
    while($sirow3=mysql_fetch_assoc($si3))
  {
	$pdf->Cell(30, 7.5, $sirow3['csi3'], 1, 0, "L", 1); 
	$a3 = $sirow3['csi3'];
  }
 }
 $pdf->Cell(30, 7.5,"-", 1, 0, "L", 1); 
$si4=mysql_query("SELECT COUNT(responseid) as csi4 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs10=4.025",$con);
if($si4)
 {
    while($sirow4=mysql_fetch_assoc($si4))
  {
	$pdf->Cell(30, 7.5, $sirow4['csi4'], 1, 0, "L", 1); 
	$a4 = $sirow4['csi4'];
  }
 }
$pdf->setXY(45, 320);//location of titles 3
$pdf->Cell(150, 15, "11. Overall teaching effectiveness of the teacher", 1, 0, "L", 1);   // CHANGE THESE TO REPRESENT YOUR FIELDS 
$pdf->Cell(30, 7.5, "Excellent", 1, 0, "L", 1); 
$pdf->Cell(30, 7.5, "Good", 1, 0, "L", 1); 
$pdf->Cell(30, 7.5, "Fair", 1, 0, "L", 1); 
$pdf->Cell(30, 7.5, "Poor", 1, 0, "L", 1); 
$pdf->Cell(30, 7.5, "Blank", 1, 0, "L", 1); 
$pdf->setXY(195, 327.5);//location for displaying count values  
$o1=mysql_query("SELECT COUNT(responseid) as co1 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs11=11.25",$con);
if($o1)
 {
    while($orow1=mysql_fetch_assoc($o1))
  {
	$pdf->Cell(30, 7.5, $orow1['co1'], 1, 0, "L", 1); 
	$a1 = $orow1['co1'];
  }
 }
$o2=mysql_query("SELECT COUNT(responseid) as co2 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs11=9.025",$con);
if($o2)
 {
    while($orow2=mysql_fetch_assoc($o2))
  {
	$pdf->Cell(30, 7.5, $orow2['co2'], 1, 0, "L", 1); 
	$a2 = $orow2['co2'];
  }
 }
$o3=mysql_query("SELECT COUNT(responseid) as co3 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs11=6.45625",$con);
if($o3)
 {
    while($orow3=mysql_fetch_assoc($o3))
  {
	$pdf->Cell(30, 7.5, $orow3['co3'], 1, 0, "L", 1); 
	$a3 = $orow3['co3'];
  }
 }
$o4=mysql_query("SELECT COUNT(responseid) as co4 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs11=1.5625",$con);
if($o4)
 {
    while($orow4=mysql_fetch_assoc($o4))
  {
	$pdf->Cell(30, 7.5, $orow4['co4'], 1, 0, "L", 1); 
	$a4 = $orow4['co4'];
  }
 }
$o5=mysql_query("SELECT COUNT(responseid) as co5 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs11=2.025",$con);
if($o5)
 {
    while($orow5=mysql_fetch_assoc($o5))
  {
	$pdf->Cell(30, 7.5, $orow5['co5'], 1, 0, "L", 1); 
	$a5 = $orow5['co5'];
  }
 }




$pdf->SetFont('Arial','U',17);
//$pdf->Cell(40,50,'Visiting Scheme');
//$pdf->SetFont('Arial','I',15);
$pdf->SetLeftMargin(35);
$pdf->SetFontSize(14);

 
$pdf->Output();

?>