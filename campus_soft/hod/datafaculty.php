	<?php

include("includes/header.php");
include("includes/sidenav.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>
datasheet
</title>
</head>
<body>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Data Sheet</h1>
                    </div>
				</div>
<form method="post">

<?php
$tei = 0;
//if(isset($_POST["go"]))
//{
$subjectid=$_GET['subid'];
$ay=$_GET['ay'];
//echo $ay;
//echo $subjectid;
//current date
$acdyear=date("Y");
$prev=$acdyear-1;
$prev.="-". $acdyear; 

$result=mysql_query("SELECT COUNT(responseid) as cnt FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay'",$con);
if($result)
	{
    while($row=mysql_fetch_assoc($result))
  {
	  
	   ?>
	   <p>
<label>Number of students:</label>
<input type = "text" class="form-control" name = "nostudents" value='<?php echo $row['cnt']?>' disabled />
</div>
<?php
$n = $row['cnt'];
?>
</p>
<?php
  }     
 }
 ?>
 <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: middle;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
 <div class="row">
                <div class="col-lg-12">
			
	<div class=".col-sm-6 .col-md-5 .col-md-offset-2 .col-lg-6 .col-lg-offset-0">
<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
  <tr>
    <th rowspan="2">Question</th>
	 <th>1</th>
    <th>2</th>
	<th>3</th>
	<th>4</th>
	<th>5</th>
	<th rowspan="2">Index</th>
	<th rowspan="2">Out of 100</th>
  </tr>
<tr>
<th colspan="5">Count of Students</th>
</tr>
<tr>
<td>1.Knowledge of the teacher in the subject</td>
<td>
<?php
$kn1=mysql_query("SELECT COUNT(responseid) as ckn1 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs1=17.75",$con);
if($kn1)
 {
    while($krow1=mysql_fetch_assoc($kn1))
  {
	echo $krow1['ckn1'];
	$a1 = $krow1['ckn1'];
  }
 }
	?>  
</td>
<td>
<?php
$kn2=mysql_query("SELECT COUNT(responseid) as ckn2 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs1=14.125",$con);
if($kn2)
 {
    while($krow2=mysql_fetch_assoc($kn2))
  {
	echo $krow2['ckn2'];
	$a2 = $krow2['ckn2'];
  }
 }
	?>  
</td>
<td>
<?php
$kn3=mysql_query("SELECT COUNT(responseid) as ckn3 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs1=10.28125",$con);
if($kn3)
 {
    while($krow3=mysql_fetch_assoc($kn3))
  {
	echo $krow3['ckn3'];
	$a3 = $krow3['ckn3'];
  }
 }
	?>  
</td>
<td>
<?php
$kn4=mysql_query("SELECT COUNT(responseid) as ckn4 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs1=3.53125",$con);
if($kn4)
 {
    while($krow4=mysql_fetch_assoc($kn4))
  {
	echo $krow4['ckn4'];
	$a4 = $krow4['ckn4'];
  }
 }
	?>  
</td>
<td>
<?php
$kn5=mysql_query("SELECT COUNT(responseid) as ckn5 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs1=8",$con);
if($kn5)
 {
    while($krow5=mysql_fetch_assoc($kn5))
  {
	echo $krow5['ckn5'];
	$a5 = $krow5['ckn5']; 
  }
 }
	?>  
</td>
<td>
<?php
$i1 = ( ( $a1 * 17.75 ) + ( $a2 * 14.125) + ( $a3 * 10.28125) + ( $a4 * 3.53125) + ( $a5 * 8) ) / $n;
//$r1 = number_format((float)$i1, 2, '.', '');
echo $i1;
$tei = $tei + $i1;
?>
</td>
<td>
<?php
$out1 = ( $i1 * 100 ) / 17.75;
echo number_format((float)$out1, 2, '.', '');
//echo $out1;
?>
</td>
</tr>
<tr>
<td>2.Clarity and understandability of teachers explanations</td>
<td>
<?php
$cl1=mysql_query("SELECT COUNT(responseid) as ccl1 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs2=14.5",$con);
if($cl1)
 {
    while($clrow1=mysql_fetch_assoc($cl1))
  {
	echo $clrow1['ccl1'];
	$a1 = $clrow1['ccl1'];
  }
 }
	?>  
</td>
<td>
<?php
$cl2=mysql_query("SELECT COUNT(responseid) as ccl2 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs2=11.8125",$con);
if($cl2)
 {
    while($clrow2=mysql_fetch_assoc($cl2))
  {
	echo $clrow2['ccl2'];
	$a2 = $clrow2['ccl2'];
  }
 }
	?>  
</td>
<td>
<?php
$cl3=mysql_query("SELECT COUNT(responseid) as ccl3 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs2=8.1125",$con);
if($cl3)
 {
    while($clrow3=mysql_fetch_assoc($cl3))
  {
	echo $clrow3['ccl3'];
	$a3 = $clrow3['ccl3'];
  }
 }
	?>  
</td>
<td>
<?php
$cl4=mysql_query("SELECT COUNT(responseid) as ccl4 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs2='2.0125'",$con);
if($cl4)
 {
    while($clrow4=mysql_fetch_assoc($cl4))
  {
	echo $clrow4['ccl4'];
	$a4 = $clrow4['ccl4'];
  }
 }
	?>  
</td>
<td>
<?php
$cl5=mysql_query("SELECT COUNT(responseid) as ccl5 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs2=4.0875",$con);
if($cl5)
 {
    while($clrow5=mysql_fetch_assoc($cl5))
  {
	echo $clrow5['ccl5'];
	$a5 = $clrow5['ccl5'];
  }
 }
	?>  
</td>
<td>
<?php
$i2 = ( ( $a1 * 14.5 ) + ( $a2 * 11.8125) + ( $a3 * 8.1125) + ( $a4 * 2.0125) + ( $a5 * 4.0875) ) / $n;
//$r2 = number_format((float)$i2, 2, '.', '');
echo $i2;
$tei = $tei + $i2;
?>
</td>
<td>
<?php
$out2 = ( $i2 * 100 ) / 14.5;
echo number_format((float)$out2, 2, '.', '');
//echo $out2;
?>
</td>
</tr>
<tr>
<td>3.Teachers willingness to help</td>
<td>
<?php
$w1=mysql_query("SELECT COUNT(responseid) as cw1 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs3=7.5",$con);
if($w1)
 {
    while($wrow1=mysql_fetch_assoc($w1))
  {
	echo $wrow1['cw1'];
	$a1 = $wrow1['cw1'];
  }
 }
	?>  
</td>
<td>
<?php
$w2=mysql_query("SELECT COUNT(responseid) as cw2 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs3=5.7125",$con);
if($w2)
 {
    while($wrow2=mysql_fetch_assoc($w2))
  {
	echo $wrow2['cw2'];
	$a2 = $wrow2['cw2'];
  }
 }
	?>  
</td>
<td>
<?php
$w3=mysql_query("SELECT COUNT(responseid) as cw3 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs3=4.0375",$con);
if($w3)
 {
    while($wrow3=mysql_fetch_assoc($w3))
  {
	echo $wrow3['cw3'];
	$a3 = $wrow3['cw3'];
  }
 }
	?>  
</td>
<td>
<?php
$w4=mysql_query("SELECT COUNT(responseid) as cw4 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs3=1.125",$con);
if($w4)
 {
    while($wrow4=mysql_fetch_assoc($w4))
  {
	echo $wrow4['cw4'];
	$a4 = $wrow4['cw4'];
  }
 }
	?>  
</td>
<td>
<?php
$w5=mysql_query("SELECT COUNT(responseid) as cw5 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs3=2.2125",$con);
if($w5)
 {
    while($wrow5=mysql_fetch_assoc($w5))
  {
	echo $wrow5['cw5'];
	$a5 = $wrow5['cw5'];
  }
 }
	?> 	
</td>
<td>
<?php
$i3 = ( ( $a1 * 7.5 ) + ( $a2 * 5.7125) + ( $a3 * 4.0375) + ( $a4 * 1.125) + ( $a5 * 2.2125) ) / $n;
//$r3 = number_format((double)$i3, 2, '.', '');
echo $i3;
$tei = $tei + $i3;
?>
</td>
<td>
<?php
$out3 = ( $i3 * 100 ) / 7.5;
echo number_format((double)$out3, 2, '.', '');
//echo $out3;
?>
</td>
</tr>
<tr>
<td>4.Approximate % of classes not engaged by the teacher</td>
<td>
<?php
$en1=mysql_query("SELECT COUNT(responseid) as cen1 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs4=5.85",$con);
if($en1)
 {
    while($enrow1=mysql_fetch_assoc($en1))
  {
	echo $enrow1['cen1'];
	$a1 = $enrow1['cen1'];
  }
 }
	?>  
</td>
<td>
<?php
$en2=mysql_query("SELECT COUNT(responseid) as cen2 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs4=3.6625",$con);
if($en2)
 {
    while($enrow2=mysql_fetch_assoc($en2))
  {
	echo $enrow2['cen2'];
	$a2 = $enrow2['cen2'];
  }
 }
	?>  
</td>
<td>
<?php
$en3=mysql_query("SELECT COUNT(responseid) as cen3 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs4=1.9125",$con);
if($en3)
 {
    while($enrow3=mysql_fetch_assoc($en3))
  {
	echo $enrow3['cen3'];
	$a3 = $enrow3['cen3'];
  }
 }
	?>  
</td>
<td>
<?php
$en4=mysql_query("SELECT COUNT(responseid) as cen4 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs4=1.6375",$con);
if($en4)
 {
    while($enrow4=mysql_fetch_assoc($en4))
  {
	echo $enrow4['cen4'];
	$a4 = $enrow4['cen4'];
  }
 }
	?>  
</td>
<td></td>
<td>
<?php
$i4 = ( ( $a1 * 5.85 ) + ( $a2 * 3.6625) + ( $a3 * 1.9125) + ( $a4 * 1.6375) ) / $n;
//$r4 = number_format((double)$i4, 2, '.', '');
echo $i4;
$tei = $tei + $i4;
?>
</td>
<td>
<?php
$out4 = ( $i4 * 100 ) / 5.85;
echo number_format((double)$out4, 2, '.', '');
//echo $out4;
?>
</td>
</tr>
<tr>
<td>5.Whether the teacher dictates notes only without explanations</td>
<td>
<?php
$d1=mysql_query("SELECT COUNT(responseid) as cd1 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs5=4",$con);
if($d1)
 {
    while($drow1=mysql_fetch_assoc($d1))
  {
	echo $drow1['cd1'];
	$a1 = $drow1['cd1'];
  }
 }
	?>  
</td>
<td>
<?php
$d2=mysql_query("SELECT COUNT(responseid) as cd2 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs5=0.67375",$con);
if($d2)
 {
    while($drow2=mysql_fetch_assoc($d2))
  {
	echo $drow2['cd2'];
	$a2 = $drow2['cd2'];
  }
 }
	?>  
</td>
<td>
<?php
$d3=mysql_query("SELECT COUNT(responseid) as cd3 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs5=1.65",$con);
if($d3)
 {
    while($drow3=mysql_fetch_assoc($d3))
  {
	echo $drow3['cd3'];
	$a3 = $drow3['cd3'];
  }
 }
	?>  
</td>
<td></td>
<td></td>
<td>
<?php
$i5 = ( ( $a1 * 4 ) + ( $a2 * 0.67375) + ( $a3 * 1.65) ) / $n;
//$r5 = number_format((double)$i5, 2, '.', '');
echo $i5;
$tei = $tei + $i5;
?>
</td>
<td>
<?php
$out5 = ( $i5 * 100 ) / 4;
echo number_format((double)$out5, 2, '.', '');
//echo $out5;
?>
</td>
</tr>
<tr>
<td>6.Teachers ability to organize lectures</td>
<td>
<?php
$ab1=mysql_query("SELECT COUNT(responseid) as cab1 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs6=9.25",$con);
if($ab1)
 {
    while($abrow1=mysql_fetch_assoc($ab1))
  {
	echo $abrow1['cab1'];
	$a1 = $abrow1['cab1'];
  }
 }
	?>  
</td>
<td>
<?php
$ab2=mysql_query("SELECT COUNT(responseid) as cab2 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs6=6.34125",$con);
if($ab2)
 {
    while($abrow2=mysql_fetch_assoc($ab2))
  {
	echo $abrow2['cab2'];
	$a2 = $abrow2['cab2'];
  }
 }
	?>  
</td>
<td>
<?php
$ab3=mysql_query("SELECT COUNT(responseid) as cab3 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs6=2.5",$con);
if($ab3)
 {
    while($abrow3=mysql_fetch_assoc($ab3))
  {
	echo $abrow3['cab3'];
	$a3 = $abrow3['cab3'];
  }
 }
	?>  
</td>
<td>
<?php
$ab4=mysql_query("SELECT COUNT(responseid) as cab4 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs6=3.1625",$con);
if($ab4)
 {
    while($abrow4=mysql_fetch_assoc($ab4))
  {
	echo $abrow4['cab4'];
	$a4 = $abrow4['cab4'];
  }
 }
	?>  
</td>
<td></td>
<td>
<?php
$i6 = ( ( $a1 * 9.25 ) + ( $a2 * 6.34125) + ( $a3 * 2.5) + ( $a4 * 3.1625 ) ) / $n;
//$r6 = number_format((double)$i6, 2, '.', '');
echo $i6;
$tei = $tei + $i6;
?>
</td>
<td>
<?php
$out6 = ( $i6 * 100 ) / 9.25;
echo number_format((double)$out6, 2, '.', '');
//echo $out6;
?>
</td>
</tr>
<tr>
<td>7.Speed of presentation</td>
<td>
<?php
$s1=mysql_query("SELECT COUNT(responseid) as cs1 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs7=4.75",$con);
if($s1)
 {
    while($srow1=mysql_fetch_assoc($s1))
  {
	echo $srow1['cs1'];
	$a1 = $srow1['cs1'];
  }
 }
	?>  
</td>
<td>
<?php
$s2=mysql_query("SELECT COUNT(responseid) as cs2 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs7=1.34125",$con);
if($s2)
 {
    while($srow2=mysql_fetch_assoc($s2))
  {
	echo $srow2['cs2'];
	$a2 = $srow2['cs2'];
  }
 }
	?>  
</td>
<td>
<?php
$s3=mysql_query("SELECT COUNT(responseid) as cs3 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs7=1.19125",$con);
if($s3)
 {
    while($srow3=mysql_fetch_assoc($s3))
  {
	echo $srow3['cs3'];
	$a3 = $srow3['cs3'];
  }
 }
	?>  
</td>
<td>
<?php
$s4=mysql_query("SELECT COUNT(responseid) as cs4 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs7=1.4",$con);
if($s4)
 {
    while($srow4=mysql_fetch_assoc($s4))
  {
	echo $srow4['cs4'];
	$a4 = $srow4['cs4'];
  }
 }
	?>  
</td>
<td></td>
<td>
<?php
$i7 = ( ( $a1 * 4.75 ) + ( $a2 * 1.34125 ) + ( $a3 * 1.19125 ) + ( $a4 * 1.4 ) ) / $n;
//$r7 = number_format((double)$i7, 2, '.', '');
echo $i7;
$tei = $tei + $i7;
?>
</td>
<td>
<?php
$out7 = ( $i7 * 100 ) / 4.75;
echo number_format((double)$out7, 2, '.', '');
//echo $out7;
?>
</td>
</tr>
<tr>
<td>8.Does the teacher encourage questioning?</td>
<td>
<?php
$t1=mysql_query("SELECT COUNT(responseid) as ct1 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs8=6.875",$con);
if($t1)
 {
    while($trow1=mysql_fetch_assoc($t1))
  {
	echo $trow1['ct1'];
	$a1 = $trow1['ct1'];
  }
 }
	?>  
</td>
<td>
<?php
$t2=mysql_query("SELECT COUNT(responseid) as ct2 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs8=3.89375",$con);
if($t2)
 {
    while($trow2=mysql_fetch_assoc($t2))
  {
	echo $trow2['ct2'];
	$a2 = $trow2['ct2'];
  }
 }
	?>  
</td>
<td>
<?php
$t3=mysql_query("SELECT COUNT(responseid) as ct3 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs8=0.7375",$con);
if($t3)
 {
    while($trow3=mysql_fetch_assoc($t3))
  {
	echo $trow3['ct3'];
	$a3 = $trow3['ct3'];
  }
 }
	?>  
</td>
<td>
<?php
$t4=mysql_query("SELECT COUNT(responseid) as ct4 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs8=1.775",$con);
if($t4)
 {
    while($trow4=mysql_fetch_assoc($t4))
  {
	echo $trow4['ct4'];
	$a4 = $trow4['ct4'];
  }
 }
	?>  
</td>
<td></td>
<td>
<?php
$i8 = ( ( $a1 * 6.875 ) + ( $a2 * 3.89375 ) + ( $a3 * 0.7375 ) + ( $a4 * 1.775 ) ) / $n;
//$r8 = number_format((double)$i8, 2, '.', '');
echo $i8;
$tei = $tei + $i8;
?>
</td>
<td>
<?php
$out8 = ( $i8 * 100 ) / 6.875;
echo number_format((double)$out8, 2, '.', '');
//echo $out8;
?>
</td>
</tr>
<tr>
<td>9.Behavior of the teacher</td>
<td>
<?php
$b1=mysql_query("SELECT COUNT(responseid) as cb1 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs9=6.75",$con);
if($b1)
 {
    while($brow1=mysql_fetch_assoc($b1))
  {
	echo $brow1['cb1'];
	$a1 = $brow1['cb1'];
  }
 }
	?>  
</td>
<td>
<?php
$b2=mysql_query("SELECT COUNT(responseid) as cb2 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs9=2.7825",$con);
if($b2)
 {
    while($brow2=mysql_fetch_assoc($b2))
  {
	echo $brow2['cb2'];
	$a2 = $brow2['cb2'];
  }
 }
	?>  
</td>
<td>
<?php
$b3=mysql_query("SELECT COUNT(responseid) as cb3 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs9=1.27875",$con);
if($b3)
 {
    while($brow3=mysql_fetch_assoc($b3))
  {
	echo $brow3['cb3'];
	$a3 = $brow3['cb3'];
  }
 }
	?>  
</td>
<td>
<?php
$b4=mysql_query("SELECT COUNT(responseid) as cb4 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs9=1.9375",$con);
if($b4)
 {
    while($brow4=mysql_fetch_assoc($b4))
  {
	echo $brow4['cb4'];
	$a4 = $brow4['cb4'];
  }
 }
	?>  
</td>
<td></td>
<td>
<?php
$i9 = ( ( $a1 * 6.75 ) + ( $a2 * 1.27875 ) + ( $a3 * 2.7825 ) + ( $a4 * 1.9375 ) ) / $n;
//$r9 = number_format((double)$i9, 2, '.', '');
echo $i9;
$tei = $tei + $i9;
?>
</td>
<td>
<?php
$out9 = ( $i9 * 100 ) / 6.75;
echo number_format((double)$out9, 2, '.', '');
//echo $out9;
?>
</td>
</tr>
<tr>
<td>10.Sincerity of the teacher</td>
<td>
<?php
$si1=mysql_query("SELECT COUNT(responseid) as csi1 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs10=11.5",$con);
if($si1)
 {
    while($sirow1=mysql_fetch_assoc($si1))
  {
	echo $sirow1['csi1'];
	$a1 = $sirow1['csi1'];
  }
 }
	?>  
</td>
<td>
<?php
$si2=mysql_query("SELECT COUNT(responseid) as csi2 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs10=1.325",$con);
if($si2)
 {
    while($sirow2=mysql_fetch_assoc($si2))
  {
	echo $sirow2['csi2'];
	$a2 = $sirow2['csi2'];
  }
 }
	?>  
</td>
<td>
<?php
$si3=mysql_query("SELECT COUNT(responseid) as csi3 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs10=5.06375",$con);
if($si3)
 {
    while($sirow3=mysql_fetch_assoc($si3))
  {
	echo $sirow3['csi3'];
	$a3 = $sirow3['csi3'];
  }
 }
	?>  
</td>
<td>
<?php
$si4=mysql_query("SELECT COUNT(responseid) as csi4 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs10=4.025",$con);
if($si4)
 {
    while($sirow4=mysql_fetch_assoc($si4))
  {
	echo $sirow4['csi4'];
	$a4 = $sirow4['csi4'];
  }
 }
	?>  
</td>
<td></td>
<td>
<?php
$i10 = ( ( $a1 * 11.5 ) + ( $a2 * 1.325 ) + ( $a3 * 5.06375 ) + ( $a4 * 4.025 ) ) / $n;
//$r10 = number_format((double)$i10, 2, '.', '');
echo $i10;
$tei = $tei + $i10;
?>
</td>
<td>
<?php
$out10 = ( $i10 * 100 ) / 11.5;
echo number_format((double)$out10, 2, '.', '');
//echo $out10;
?>
</td>
</tr>
<tr>
<td>11.Overall teaching effectiveness of the teacher</td>
<td>
<?php
$o1=mysql_query("SELECT COUNT(responseid) as co1 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs11=11.25",$con);
if($o1)
 {
    while($orow1=mysql_fetch_assoc($o1))
  {
	echo $orow1['co1'];
	$a1 = $orow1['co1'];
  }
 }
	?>  
</td>
<td>
<?php
$o2=mysql_query("SELECT COUNT(responseid) as co2 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs11=9.025",$con);
if($o2)
 {
    while($orow2=mysql_fetch_assoc($o2))
  {
	echo $orow2['co2'];
	$a2 = $orow2['co2'];
  }
 }
	?>  
</td>
<td>
<?php
$o3=mysql_query("SELECT COUNT(responseid) as co3 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs11=6.45625",$con);
if($o3)
 {
    while($orow3=mysql_fetch_assoc($o3))
  {
	echo $orow3['co3'];
	$a3 = $orow3['co3'];
  }
 }
	?>  
</td>
<td>
<?php
$o4=mysql_query("SELECT COUNT(responseid) as co4 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs11=1.5625",$con);
if($o4)
 {
    while($orow4=mysql_fetch_assoc($o4))
  {
	echo $orow4['co4'];
	$a4 = $orow4['co4'];
  }
 }
	?>  
</td>
<td>
<?php
$o5=mysql_query("SELECT COUNT(responseid) as co5 FROM mainfeedback WHERE subjectid='$subjectid' and acdyear='$ay' and qs11=2.025",$con);
if($o5)
 {
    while($orow5=mysql_fetch_assoc($o5))
  {
	echo $orow5['co5'];
	$a5 = $orow5['co5'];
  }
 }
	?>  
</td>
<td>
<?php
$i11 = ( ( $a1 * 11.25 ) + ( $a2 * 9.025 ) + ( $a3 * 6.45625 ) + ( $a4 * 1.5625 ) + ( $a5 * 2.025 ) ) / $n;
//$r11 = number_format((double)$i11, 2, '.', '');
echo $i11;
$tei = $tei + $i11;
?>
</td>
<td>
<?php
$out11 = ( $i11 * 100 ) / 11.25;
echo number_format((double)$out11, 2, '.', '');
//echo $out11;
?>
</td>
</tr>
</table>
<h3><label>Teaching effectiveness index:</label>
<?php
$final=($tei*100)/99.975;
?>
<input type = "text" name = "totalindex"  class="form-control" value ='<?php echo $tei ?>' disabled align="right"/>
</div>
<div class="form-group">
<label>Out of 100:</label>
<input type = "text" name = "outof100" class="form-control" value ='<?php echo $final ?>' disabled align="right"/>
</div>
</h3>
 </form>
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
<br>
<br>
<?php
include("includes/footer.php");
?>