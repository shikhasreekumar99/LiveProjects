<script  src="jquery.js"></script>
<script type="text/javascript">

function getsemdata(a)
{	
  console.log(a);
  $.post("fetchsessdata.php",{ key : a},
  function(data){
    $('#data').html(data);
  }); 
}
</script>

<?php
include("includes/header.php");
include("includes/sidenav.php");
//include("dbopen.php");
 // $count=0;
 //session_start();
 // $count=0;
	//$hodid=$_SESSION['hodid'];
	if(isset($_POST["clsid"])){
		$classid=$_POST["clsid"];		
	}
	if(isset($_POST['cid']))
	{		
		$clsid=$_POST['cid'];
	}
	else
		$clsid="";		
?>

    <?php
  //  $classid=$_SESSION["classid"];

?>

        
<div id="page-wrapper">
    <br><br>

    <label>Class:</label>
    <?php
        $s=mysql_query("select deptname from faculty_details where fid ='$hodid'",$con);
        $r = mysql_fetch_assoc($s);
        $deptname=$r["deptname"];

        $sql ="select distinct(classid) from class_details  where deptname='$deptname'";
        $result = mysql_query($sql);
    ?>
    <select name='clsid' id="clsid" onchange="getsemdata(this.value)">
    <option value =''>Select</option>

    <?php
        while ($row = mysql_fetch_array($result)) {
            if($row["classid"]==$clsid)
                echo '<option value="' . $row["classid"] .'" selected="selected">' . $row["classid"] .'</option>';
            else
                echo '<option value="' . $row["classid"] .'">' . $row["classid"] .'</option>';
        }
    echo "</select>";
    echo "<script>getsemdata('$clsid');</script>";
    ?>        

    <div class="row">
                <div class="col-lg-12" >
                    <h1 class="page-header">SESSIONAL MARK VERIFICATION
                     </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class="table-responsive">


	<div id="data">

    </div>

</div>
            <!-- /.row -->
    <!-- /#wrapper -->   

<?php
    include("includes/footer.php");
?>
