<?php
   include("includes/header.php");
   include("includes/sidenav.php");
?>
<script  src="jquery.js"></script>
<script type="text/javascript">

function fetchsubject(a)
{ 
  console.log(a);
  $.post("getsub.php",{ key : a},
  function(data){
    $('#data').html(data);
  }); 
}
</script>
<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header" align="center"><span>Subject Allocation</span></h1>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-12">

   <form id="suballoc" action = "suballoc.php" method = "POST" enctype = "">
   <table  id="outer1" align="center" style="padding-top:40px">
    <br><br>
   <tr>
   		<td>
      <label>Semester:<span class="required">*</span></label>
   		<td></td>
      <td><select onchange="fetchsubject(this.value)" name="classid" class="form-control">
   		<option value="--select--">--select--</option>
   		<?php

	  		   $sql="select classid,semid from class_details where deptname in(select deptname from faculty_details where fid='$hodid')";
	   		  $r=mysql_query($sql,$con);
	   		  while($result=mysql_fetch_array($r))   {
		 		     echo '<option value="'.$result['classid'].'">'.$result['semid'].'</option>';
	   		  }
		  ?>	
      </select></td>
    </tr>
	
   <tr>
      <td>
   		<label>Subject :<span class="required">*</span></label>
      <td></td>
      <td>

        <div id ="data">
        <select name="subjectid" class="form-control">
   		<option value="--select--">--select--</option>
   		
   		</select>
</div>
    </td>
   </tr>

    <tr>
   		<td>
      <label>Faculty Name:<span class="required">*</span></label>
      <td></td>  
		  <td>
 <div id ="data2">
        <input list="name" autocomplete="off" name="name" class="form-control" type="text" onChange="fillname(this.value)"/> 		
   		<datalist id="name">
   		<option value="--select--">--select--</option>
   		<?php
      
          $l=mysql_query("select deptname from department where hod='$hodid'",$con) or die(mysql_error());
          $r=mysql_fetch_assoc($l);
          $dept=$r["deptname"];
   	  		$sql="select name from faculty_details where name like '$name%' and deptname='$dept'";   $r=mysql_query($sql,$con);
      		while($result=mysql_fetch_array($r)){     
		 		     echo '<option value="'.$result['name'].'">'.$result['name'].'</option>';
   			  }
		  ?>	
      </datalist></div></td></td>
    </tr>

    <tr>
      <td>
      <label>Faculty ID:<span class="required"></span></label>
      <td></td><td>
      <div id ="data1">
      <input list="fid" disabled="disabled" autocomplete="off" class="form-control" name="fid" type="text" />
      <datalist id="fid">
      <option value="--select--">--select--</option>
      <?php
	       $sql="select * from faculty_details where deptname='$dept'";
	       $r=mysql_query($sql,$con);
	       while($result=mysql_fetch_array($r)){
		        echo '<option value="'.$result['fid'].'">'.$result['fid'].'</option>';
	          echo  '<input  name="fid" type="hidden" value="'.$result['fid'].'"/>';
         }
	   ?>	
     </datalist></div></td>
  </tr>

  <tr>
      <td></td>
  		<td><input style="width:100px" id="submit" class="btn btn-primary" type="submit" value="submit" name="submit"/></td>           
  </tr>
  
  </table>
  </form>
</body>
</html>

<script src="jquery.js"></script>
<script type="text/javascript">
  function fillname(x)
    {
      $.post("load.php", { key:x },
      function(data) {
      $('#data1').html(data);
      });
    }

</script>