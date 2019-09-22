<?php
  include("dbopen.php");
  if(isset($_POST['login']))  {
  session_start();
  $uname=$_POST['username'];
  $pwd=$_POST['password'];
  $r=mysql_query("select usertype from login where username='$uname' and password='$pwd'",$con);
  $n=mysql_num_rows($r);
  if($n == 1 )  {
  $row=mysql_fetch_array($r);
  if ($row['usertype']=="admin")  {
    $r=mysql_query("select usertype from login where username='$uname' and password='$pwd'",$con);
    $_SESSION['adminid']=$uname;
    $_SESSION['utype']=$row['usertype'];
    echo "<script>alert('Admin')</script>";
    header("Location: ../dash_home.php");
  }
  elseif ($row['usertype']=="student")  {
    $_SESSION['studid']=$uname;
    $_SESSION['utype']=$row['usertype'];
   //header("Location: #");
    echo "<script>alert('student')</script>";
  //header("Location: link.php");
  }
  elseif ($row['usertype']=="office") {
    $_SESSION['officeid']=$uname;
    $_SESSION['utype']=$row['usertype'];
    //header("Location: #");
    echo "<script>alert('office')</script>";
  }
                                                               //hod login
  elseif ($row['usertype']=="hod")  {
      $x=mysql_query("select fid from faculty_details where email='$uname'or phoneno='$uname'",$con);
      $y=mysql_num_rows($x);
      if($y == 1 )  {
        $row=mysql_fetch_array($x);
        $_SESSION['fid']=$row['fid'];
        $_SESSION['hodid']=$uname;
        $_SESSION['utype']=$row['usertype'];
        header("Location:../dash_home.php");
        echo "<script>alert('HOD')</script>";
      }
      else         
         echo "<script>alert('Incorrect username or password')</script>";
   }
  elseif ($row['usertype']=="staff")  {
    $_SESSION['staffadvisorid']=$uname;
    $_SESSION['utype']=$row['usertype'];
  //header("Location: home.php");
    echo "<script>alert('staffadvisor')</script>";
  //header("Location: link.php");
  }
  elseif ($row['usertype']=="pgdean") {
    $_SESSION['pgdeanid']=$uname;
    $_SESSION['utype']=$row['usertype'];
    //header("Location: home.php");
    echo "<script>alert('pgdn')</script>";
  }
  elseif ($row['usertype']=="ugdean") {
    $_SESSION['ugdeanid']=$uname;
    $_SESSION['utype']=$row['usertype'];
    //header("Location: home.php");
    echo "<script>alert('ugdn')</script>";
  }
  elseif ($row['usertype']=="faculty")  {
    $x=mysql_query("select fid from faculty_details where email='$uname' or phoneno='$uname'",$con);
    $y=mysql_num_rows($x);
    if($y == 1 )  {
      $ro=mysql_fetch_array($x);
      $_SESSION['facultyid']=$ro['fid'];
    //$_SESSION['facultyid']=$uname;
      $_SESSION['utype']=$row['usertype'];
    //header("Location: home.php");
      echo "<script>alert('faculty')</script>";
      header("Location: link.php");
    }
  }
  elseif ($row['usertype']=="parent") {
    $_SESSION['parentid']=$uname;
    $_SESSION['utype']=$row['usertype'];
  //header("Location: home.php");
    echo "<script>alert('parent')</script>";
  }
  elseif ($row['usertype']=="principal")  {
    $_SESSION['principalid']=$uname;
    $_SESSION['utype']=$row['usertype'];
    //header("Location: home.php");
    echo "<script>alert('principal')</script>";
  }
}
else
  echo "<script>alert('Incorrect username or password')</script>";
}
?>

<html>
<head>
<title>  Login</title>
</head>
<body>
   <center>
      <h1> Login </h1>
   </center>
   <center>
   <form id="login" method="post">
   <table>
   <tr>
      <td>  Username</td>
      <td>
         <input type="text" name="username" placeholder="email or phoneno" required pattern="^[A-Za-z0-9@.\s]{2,50}$" title="Text contains only AlphaNumeric ,Space ,@ and Period" maxlength="50"/></br>
      </td>
   </tr>
   <tr>
      <td>   Password</td>
      <td>
         <input type="password" name="password" placeholder="password" required pattern="^[A-Za-z0-9@.\s]{2,50}$" title="Text contains only AlphaNumeric ,Space ,@ and Period" maxlength="50" /> </br>
      </td>
   </tr>
   <tr>
      <td></td>
      <td></td>
      <td>
         <input type="submit"  name="login" value= "Login"/>
      </td>
   </tr>
   </table>
   </center>
   </form>
</body>
</html>
