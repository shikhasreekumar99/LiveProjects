<?php
include("header.php");
$tp_no = $_SESSION['acc'];
?>

    <div class="container">
      <h2>ACADEMIC DETAILS</h2><br>
      <form id="form1" name="form1" method="post" action="" enctype="multipart/form-data" class="sear_frm" >
        <?php
 include "dboperation.php";
      $obj3=new dboperation();
      $query3="SELECT * FROM temp WHERE temp_no = '$tp_no' ";
      $result3=$obj3->selectdata($query3);
      $row=$obj3->fetch($result3);
      $co=$row['courseid'];
// include "dboperation.php";
if (isset($_REQUEST['button']))
{
    $csem=$_POST['cur_sem'];
    $score=$_POST['score'];
    $rlno=$_POST['roll_num'];
    $rnk=$_POST['rank_no'];
    $qta=$_POST['quota'];
    $scl1=$_POST['school_1'];
    $rgno1=$_POST['reg_no_yr_1'];
    $brd1=$_POST['board_1'];
    $pc1=$_POST['p_1'];
    $scl2=$_POST['school_2'];
    $rgno2=$_POST['reg_no_yr_2'];
    $brd2=$_POST['board_2'];
    $pc2=$_POST['p_2'];
    $scl3=$_POST['school_3'];
    $rgno3=$_POST['reg_no_yr_3'];
    $brd3=$_POST['board_3'];
    $pc3=$_POST['p_3'];
    $chnc=$_POST['no_chance'];
    $nalast=$_POST['name_last'];
    $tot=$_POST['total'];
    $cname=$_POST['c_name'];
    $lst=$_POST['last'];


    $obj=new dboperation();
//   $q="UPDATE stud_details SET  entry_sem = '$csem', rollno = '$rlno', rank = '$rnk', quota = '$qta', school_1 = '$scl1', regno_1 = '$rgno1', board_1 = '$brd1', percentage_1 = '$pc1', school_2 = '$scl2', regno_2 = '$rgno2', board_2 = '$brd2', percentage_2 = '$pc1', no_chance1 = '$chnc', gate_score = '$score' WHERE admissionno = '$tp_no' ";
   $q="UPDATE temp SET  entry_sem = '$csem', rollno = '$rlno', rank = '$rnk', quota = '$qta', school_1 = '$scl1', regno_1 = '$rgno1', board_1 = '$brd1', percentage_1 = '$pc1', school_2 = '$scl2', regno_2 = '$rgno2', board_2 = '$brd2', percentage_2 = '$pc1',school_3 = '$scl3',  board_3 = '$brd3', no_chance1 = '$chnc', gate_score = '$score', degree_course = '$cname', degree_regno = '$rgno3', degree_marks = '$tot', degree_percent = '$pc3', last_institution = '$lst' WHERE temp_no = '$tp_no' ";


  $obj->Ex_query($q);

   $_SESSION['acc']=$tp_no;
   echo "<script>location.href='applicationform.php'</script>";


}

?>

 <div class="form-row">
          <div class="form-group col-sm-6">
      <label for="cur_sem">Admiting Semester</label>
      <select id="cur_sem" name="cur_sem" class="form-control" required="">
        <option selected>Choose...</option>
        <?php
/* $obj3=new dboperation();
  $query3="SELECT * FROM temp WHERE temp_no = '$tp_no' ";
  $result3=$obj3->selectdata($query3);
  $row=$obj3->fetch($result3);
  $co=$row[1]; */
    $count=1;
  /*$obj4=new dboperation();
  // $query4="SELECT * FROM sem1 WHERE sem_id <=(SELECT no_of_semesters FROM courses WHERE course= '$co') ";
  $query4="SELECT * FROM sem1 ";
  $result4=$obj4->selectdata($query4);
  while($row=$obj4->fetch($result4)) */
  while($count<=5)
  {
    if($count%2!=0)
    {
  ?>
                        <!--<option><?php echo "$row[1]"; ?></option>-->
            <?php echo "<option value=".$count.">".$count."</option>"?>
                        <?php
              }
              $count=$count+1;
              }
              ?>
       </select>
      </div>
      <div class="form-group col-sm-6">
      <label for="score">Gate Score</label>
         <?php



      if($co == 'MCA')
        { 
           echo "<input type='text'  class='form-control' id='score' name='score' placeholder='Not applicable' disabled>";
        }
            else
            { 
               echo "<input type='text'  class='form-control' id='score' name='score' placeholder='Score' >";
        }

      ?>
     
</div>
    </div>

  <div class="form-row">
    <div class="form-group col-sm-4">
      <label for="roll_num">Entrance Roll NO</label>
      <input type="text"  class="form-control" id="roll_num" name="roll_num" placeholder="Entrance roll no" required="">
    </div>
    <div class="form-group col-sm-4">
      <label for="rank_no">Entrance Rank</label>
      <input type="number" class="form-control" id="rank_no" name="rank_no" placeholder="Rank obtained" required="">
    </div>
        <div class="form-group col-sm-4">
      <label for="quota">Quota</label>
      <input type="text" class="form-control" id="quota" name="quota" placeholder="Quota" required="">
    </div>
  </div>
<br>
<h6>10th/S.S.L.C Details:</h6><br>
  <div class="form-row">
    <div class="form-group col-sm-4">
      <label for="school_1">Name of Institution</label>
      <input type="text"  class="form-control" id="school_1" name="school_1" placeholder="10th/s.s.l.c Institution" required="">
    </div>
    <div class="form-group col-sm-4">
      <label for="reg_no_yr_1">Register No & year of passing</label>
      <input type="text" class="form-control" id="reg_no_yr_1" name="reg_no_yr_1" placeholder="145556666,2018" required="">
    </div>
        <div class="form-group col-sm-4">
      <label for="p_1">percentage</label>
      <input type="number" class="form-control" id="p_1" name="p_1" placeholder="percentage obtained" required="">
    </div>
  </div>



    <div class="form-group">
      <label for="board_1">University/Board</label>
      <input type="text"  class="form-control" id="board_1" name="board_1" placeholder="Name of university/board" required="">
    </div>

<br>
<h6>H.S.E Details:</h6><br>
  <div class="form-row">
    <div class="form-group col-sm-4">
      <label for="school_2">Name of Institution</label>
      <input type="text"  class="form-control" id="school_2" name="school_2" placeholder="10th/s.s.l.c Institution" required="">
    </div>
    <div class="form-group col-sm-4">
      <label for="reg_no_yr_2">Register No & year of passing</label>
      <input type="text" class="form-control" id="reg_no_yr_2" name="reg_no_yr_2" placeholder="145556666,2018" required="">
    </div>
        <div class="form-group col-sm-4">
      <label for="p_2">percentage</label>
      <input type="number" class="form-control" id="p_2" name="p_2" placeholder="percentage obtained" required="">
    </div>
  </div>


   <div class="form-group">
      <label for="board_2">University/Board</label>
      <input type="text"  class="form-control" id="board_2" name="board_2" placeholder="Name of university/board" required="">
    </div>


 <br>
<h6>UG Details:</h6><br>
  <div class="form-row">
    <div class="form-group col-sm-4">
      <label for="school_3">Name of Institution</label>
      <input type="text"  class="form-control" id="school_3" name="school_3" placeholder="10th/s.s.l.c Institution" required="">
    </div>
    <div class="form-group col-sm-4">
      <label for="reg_no_yr_3">Register No & year of passing</label>
      <input type="text" class="form-control" id="reg_no_yr_3" name="reg_no_yr_3" placeholder="145556666,2018" required="">
    </div>
        <div class="form-group col-sm-4">
      <label for="p_3">percentage</label>
      <input type="number" class="form-control" id="p_3" name="p_3" placeholder="percentage obtained" required="">
    </div>
  </div>

 <div class="form-row">
          <div class="form-group col-sm-6">
      <label for="c_name">Course Studied</label>
      <input type="text"  class="form-control" id="c_name" name="c_name" placeholder="UG Course" required="">
    </div>
          <div class="form-group col-sm-6">
      <label for="board_3">University/Board</label>
      <input type="text"  class="form-control" id="board_3" name="board_3" placeholder="Name of university/board" required="">
    </div>
    
  </div>


  <div class="form-row">
    <div class="form-group col-sm-4">
      <label for="total">Total Mark</label>
      <input type="number"  class="form-control" id="total" name="total" placeholder="Total Mark obtained" >
    </div>
    <div class="form-group col-sm-4">
      <label for="no_chance">Chance Taken</label>
      <input type="number" class="form-control" id="no_chance" name="no_chance" placeholder="No of chance taken to qualify equivalent exam" required="">
    </div>
        <div class="form-group col-sm-4">
      <label for="last">Last Institution</label>
      <input type="text" class="form-control" id="last" name="last" placeholder="Name of last institution studied" required="">
    </div>
  </div>

<button type="submit" value="Submit" name="button" id="button" class="btn btn-primary">Submit</button>

    </form>
  </div>
 <?php
include("footer.php");
?>