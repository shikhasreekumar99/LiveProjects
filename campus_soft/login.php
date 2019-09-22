<?php
include("header.php");
include("connection.php");
if(isset($_POST['login']))
{

 $uname=$_POST['username'];
 $pwd=$_POST['password'];

 $r=mysql_query("select usertype from login where username='$uname' and password='$pwd'",$con) or die(mysql_error());
 $n=mysql_num_rows($r);
 
 //echo  mysql_error();
 if($n == 1 )
 {
 
$_SESSION['logid']=$uname;

  $row=mysql_fetch_array($r);
  if ($row['usertype']=="admin")
  {
   $_SESSION['adminid']=$uname;
   $_SESSION['utype']=$row['usertype'];
   echo "<script>alert('Logged In Successfully')</script>";
   echo "<script>window.location.href='Admin/'</script>";
 }
 elseif ($row['usertype']=="student")
 {
   $x=mysql_query("select admissionno from stud_details where email='$uname' or mobile_phno='$uname'",$con);
   $y=mysql_num_rows($x);
   if($y == 1 )
   {
    $ro=mysql_fetch_array($x);
    $_SESSION['admissionno']=$ro['admissionno'];
    $_SESSION['studid']=$uname;
    $_SESSION['utype']=$row['usertype'];
    echo "<script>alert('Logged In Successfully')</script>";
    echo "<script>window.location.href='Student/'</script>";
  }

 }

 elseif ($row['usertype']=="office")
 {
  $_SESSION['officeid']=$uname;
  $_SESSION['utype']=$row['usertype'];
  //header("Location: office/dash_home.php");
/*  echo "<!--<script>alert('Logged In Successfully')</script>-->";
*/  echo "<script>window.location.href='Office/dash_home.php'</script>";
 }
 elseif ($row['usertype']=="hod")
 {
   $x=mysql_query("select fid from faculty_details where email='$uname' or phoneno='$uname'",$con);
   $y=mysql_num_rows($x);
   if($y == 1 )
   {
    $ro=mysql_fetch_array($x);
    $_SESSION['fid']=$ro['fid'];
    $_SESSION['hodid']=$uname;
    $_SESSION['utype']=$row['usertype'];
  echo "<script>alert('Logged In Successfully')</script>";
        echo "<script>window.location.href='hod/dash_home.php'</script>";
  }
 }
elseif ($row['usertype']=="staff")
{
  $x=mysql_query("select fid from faculty_details where email='$uname' or phoneno='$uname'",$con);
  $y=mysql_num_rows($x);
  if($y == 1 )
  {
   $ro=mysql_fetch_array($x);
   $_SESSION['fid']=$ro['fid'];
   $_SESSION['staffadvisorid']=$uname;
   $_SESSION['utype']=$row['usertype'];
   //header("Location: home.php");
   echo "<script>alert('STAFF ADVISOR')</script>";
 }

}
elseif ($row['usertype']=="pgdean")
{
  $x=mysql_query("select fid from faculty_details where email='$uname' or phoneno='$uname'",$con);
  $y=mysql_num_rows($x);
  if($y == 1 )
  {
   $ro=mysql_fetch_array($x);
   $_SESSION['fid']=$ro['fid'];
   $_SESSION['pgdeanid']=$uname;
   $_SESSION['utype']=$row['usertype'];
   //header("Location: home.php");
   echo "<script>alert('PGDEAN')</script>";
 }

}
elseif ($row['usertype']=="ugdean")
{
  $x=mysql_query("select fid from faculty_details where email='$uname' or phoneno='$uname'",$con);
  $y=mysql_num_rows($x);
  if($y == 1 )
  {
   $ro=mysql_fetch_array($x);
   $_SESSION['fid']=$ro['fid'];
   $_SESSION['ugdeanid']=$uname;
   $_SESSION['utype']=$row['usertype'];
   //header("Location: home.php");
   echo "<script>alert('UGDEAN')</script>";
 }

}
elseif ($row['usertype']=="faculty")
{
  $x=mysql_query("select fid from faculty_details where email='$uname' or phoneno='$uname'",$con);
  $y=mysql_num_rows($x);
  if($y == 1 )
  {
   $ro=mysql_fetch_array($x);
   $_SESSION['fid']=$ro['fid'];



   $_SESSION['facultyid']=$uname;
   $_SESSION['utype']=$row['usertype'];
      //header("Location: home.php");
   echo "<script>alert('FACULTY')</script>";

 }
}
elseif ($row['usertype']=="parent")
{
  $x=mysql_query("select parentid from parent where guard_email='$uname' or guard_contactno='$uname'",$con);
  $y=mysql_num_rows($x);
  if($y == 1 )
  {
   $ro=mysql_fetch_array($x);
   $_SESSION['parentid']=$ro['parentid'];
   $_SESSION['pid']=$uname;
   $_SESSION['utype']=$row['usertype'];
  //header("Location: home.php");
  echo "<script>alert('PARENT')</script>";
 }
}
elseif ($row['usertype']=="principal")
{
  $x=mysql_query("select fid from faculty_details where email='$uname' or phoneno='$uname'",$con);
  $y=mysql_num_rows($x);
  if($y == 1 )
  {
   $ro=mysql_fetch_array($x);
   $_SESSION['fid']=$ro['fid'];

   $_SESSION['principalid']=$uname;
   $_SESSION['utype']=$row['usertype'];
   //header("Location: home.php");
   echo "<script>alert('PRINCIPAL')</script>";

 }

}
}
else
echo "<script>alert('Incorrect username or password')</script>";
}
?>
<html>
<head>
<style>
 td
 {
   padding:0 15px 0 15px;
   padding-top: 10px;
   padding-bottom: 10px;

 }
 
 </style>
<title>
Login
</title>
</head>
<body>
  <center>
<h1> Login </h1>
</center>
<br>
<center>
<form id="login" method="post">
<table>
<tr>
<td>
E-mail
</td>
<td>
<input type="text" name="username" class="form-control" placeholder="E-mail/Mob-no" required pattern="^[A-Za-z0-9@.\s]{2,50}$" title="Text contains only AlphaNumeric ,Space ,@ and Period" maxlength="50"/>
</td>
</tr>
<tr>
<td>
Password
</td>
<td>
<input type="password" name="password" class="form-control" placeholder="Password" required pattern="^[A-Za-z0-9@.\s]{2,50}$" title="Text contains only AlphaNumeric ,Space ,@ and Period" maxlength="50" /> 
</td>
</tr>
<tr>
<td>
</td>
<td>
<input type="submit" class="btn btn-primary"  name="login" value= "Login"/>
</td>
</tr>
</table>
</center>
</form>
</body>
</html>
<?php include("footer.php"); ?>
