<?php
error_reporting(0);
require('force_justify.php');
/*$cc_no="";
$adno="";
$name="Nithin Prasannan";
$dte="2016-08-21";
$completion="2016-07-24";
$course="Barch";
$specialization="Archetecture";
$university="Mahatma Gandhi University";
$month="April";
$character="Good"; */
if(isset($_POST['submit']))
{
	    $cc_no=$_POST['cc_no'];
		$adno=$_POST['adno'];
		$name=$_POST['name'];
		$dte=$_POST['dte'];
		$completion=$_POST['completion'];
		$course=$_POST['course'];
		$specialization=$_POST['specialization'];
		$university="APJ Abdul Kalam Technological University, Kerala";
		$month=$_POST['month']." ".$_POST['yearexam'];
		$character=$_POST['character'];
				
include "includes/dboperation.php";
$obj5=new dboperation();

        $ad_no_int = intval(substr($adno,4));         
	$query5="SELECT * FROM stud_details WHERE adm_no = '$adno' ";	
	$result5=$obj5->selectdata($query5);
	while($row=$obj5->fetch($result5))
	{
	 	$sex=("$row[3]");
	}
$issueyr=date('Y');
$issuedate=date('d/m/Y');

$obj=new dboperation();
$cc_no_temp = $cc_no."/".$issueyr;
//$q="INSERT INTO cc (cc_no,cc_no_int,cc_admn_no,cc_conduct) VALUES ('$cc_no', '$cc_no'."/".$issueyr, '$adno', '$character')";
$q="INSERT INTO `cc` (`cc_no`, `adm_no`, `chrctr`) VALUES ('$cc_no', '$adno', '$character')";
$obj->Ex_query($q); 

$pdf=new PDF();

$pdf->AddPage();
$pdf->Image('images/cc.jpg', 0, 0, $pdf->w, $pdf->h);

$pdf->SetTextColor(0,0,255);
$pdf->SetFont('Arial','B',18); 
$pdf->Text(38,46,"RAJIV GANDHI INSTITUTE OF TECHNOLOGY");
$pdf->SetTextColor(200,0,0);
$pdf->SetFont('Arial','',14);
$pdf->Text(40,52,"(Department of Technical Education, Government of Kerala)");
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','',12);
$pdf->Text(39,57,"Govt. Engineering College, Vellore (P.O), Pampady, Kottayam - 686501");
$pdf->Text(65,62,"Ph: 0481-2507783/2506153, Fax:0481 - 2506153");
$pdf->Text(75,67,"Email: info@rit.ac.in, Web:www.rit.ac.in");
$pdf->AddFont('OldeEnglish-Regular','','OLDE ENGLISH REGULAR.php');
$pdf->SetFont('OldeEnglish-Regular','',35);
$pdf->Text(47,96,"Course & Conduct Certificate");


$pdf->SetTextColor(255,0,0);
$pdf->SetFont('Arial','',12);
$issueyr=date('Y');
$pdf->Text(20,79,"No : ".$cc_no."/".$issueyr);

$pdf->Text(150,79,"Date : ".$issuedate);

//Set the interior cell margin to 1cm
$pdf->cMargin=15;
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Times','I',17); 

/* $pdf->Text(180,105,"0");
$pdf->Text(206,105,"0");
$pdf->Text(50,120,"22");
$a="This is to certify that ";
$b=strlen($a);
$c=strlen($name);
$d=$b+$c+35;
$e=180-$d;
$pdf->Text(30,120,"".$e);
 $pdf->Text($e,120,"This is to certify that "); */
 $pdf->SetXY(20,110);
 $pdf->Text(21,115," ");
 $pdf->Ln();
 $pdf->SetXY(5,115);
// $pdf->SetFont('Times','BI',15);
$pdf->SetFont('Times','I',17);
$pdf->MultiCell(190,6,"This is to certify that ",0,'C',0);
 $pdf->Ln();
$pdf->SetFont('Arial','B',18); 
$pdf->MultiCell(190,6,strtoupper($name),0,'C',0);
$pdf->SetFont('Times','I',17); 
 $pdf->SetXY(5,130);
 $pdf->Ln();
 if($sex == 'M')
 {
$pdf->MultiCell(190,10,"was a student of this institution from    ".$dte."   to   ".$completion." and he has completed the prescribed course of study in ".$course." - ",0,'J',0); 
}
else
 {
$pdf->MultiCell(190,10,"was a student of this institution from    ".$dte."   to   ".$completion." and she has completed the prescribed course of study in ".$course." - ",0,'J',0); 
 }
 $pdf->SetXY(0,158);
//$pdf->Ln();
$pdf->SetFont('Arial','B',16);
$pdf->MultiCell(210,15,strtoupper($specialization),0,'C',0); 
//$pdf->Ln();
$pdf->SetFont('Times','I',17); 
$pdf->MultiCell(190,10," and appeared for the Final Year Examination in Engineering conducted by ".$university." during ",0,'J',0);
$pdf->SetXY(30,193);
$pdf->SetFont('Times','B',16); 
$pdf->MultiCell(100,10,$month.".",0,'L',0);
$pdf->SetFont('Times','I',17); 

 if($sex == 'M')
 {
$pdf->MultiCell(190,20,"His conduct and character during the period were",0,'J',0); 
 }
 else
 {
$pdf->MultiCell(190,20,"Her conduct and character during the period were",0,'J',0); 
 }

$pdf->SetTextColor(6,107,20); 
$pdf->Text(148,214.9,$character.".");
$pdf->SetTextColor(0,0,0);  
$pdf->SetFont('Arial','',14);
	 
//$pdf->Text(30,250,"Date : ".$issuedate);

$pdf->Text(150,250,"Principal");


$pdf->Output();
}
?>
