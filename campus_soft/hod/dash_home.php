<?php
    include("includes/header.php");
  include("includes/sidenav.php");
	   include("includes/dbopen.php");
    //faculty id from session
//READING FACULTY NAME AND DEPARTMENT
    $resul=mysqli_query($con,"select name,deptname from faculty_details where fid='$hodid'");
    while($dat=mysqli_fetch_array($resul))
    {
        $fname=$dat["name"];
        $fdeptname=$dat["deptname"];

    }
//reading class id from staff adviser   
//    $resul=mysql_query("select classid from class_details where deptname in(select deptname from department where hod='$hodid')");
  //  while($dat=mysql_fetch_array($resul))
    //{
      // $classid=$dat["classid"];
    //}
    //$_SESSION["classid"]=$classid;
?>
  
        
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><span style="font-weight:bold;">Welcome
                        <?php
                            $r=mysqli_query($con,"select name,deptname from faculty_details where fid='$hodid'");
                            while($d=mysqli_fetch_array($r))
                            {
                                $fname=$d["0"];            
                            }
                            echo $fname;
                        ?>
                        <br>
                    </span></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
  
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-edit fa-fw fa-2x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"></div>
                                    <div>Subject Allotment</div>
                                </div>
                            </div>
                        </div>
                        <a href="suballoc1.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                 
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-table fa-fw fa-2x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                    <?php
                                       // $resul=mysql_query("select studid,rollno from current_class where classid='$classid' order by(rollno)");
                                        //$re=mysql_num_rows($resul);
                                        // echo $re;
                                        ?> 
                                    </div>
                                    <div>Student Search</div>
                                </div>
                            </div>
                        </div>
                        <a href="search-form.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-table fa-fw fa-2x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                      <?php
      //                                   $re=mysql_query("select classid from class_details where deptname in(select deptname from department where hod='$hodid')");
        //        while($d=mysql_fetch_array($re))
          //      {
            //        $classid=$d["classid"];echo $classid;
                   
              //  }
                //$rel=mysql_query("select distinct(studid) from stud_sem_registration where classid='$classid' and status='not approved' order by(studid)");
           
       //    $r2=mysql_num_rows($rel);
         //                               echo $r2;
                        ?>
                                    </div>
                                    <div>Student Semester Registration</div>
                                </div>
                            </div>
                        </div>
                        <a href="sem_verification.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-table fa-fw fa-2x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"></div>
                                    <div>Attendance View</div>
                                </div>
                            </div>
                        </div>
                        <a href="attendance.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-bar-chart-o fa-fw fa-2x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                      <?php
                                        // $re=mysql_query("select subjectid from subject_class where classid='$classid'");
                //while($d=mysql_fetch_array($re))
                //{
//                    $subjectid=$d["subjectid"];
                   
  //              }
    //            $rel=mysql_query("select distinct(studid)from sessional_marks where classid='$classid' and status='Verified by staff advisor' order by(studid)");
           
      //      $r2=mysql_num_rows($rel);
        //                                 echo $r2;
            ?>

                                    </div>
                                    <div>Sessional Marks Verification</div>
                                </div>
                            </div>
                        </div>
                        <a href="sess_verification.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-table fa-fw fa-2x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                    <?php
                                       // $resul=mysql_query("select studid,rollno from current_class where classid='$classid' order by(rollno)");
                                        //$re=mysql_num_rows($resul);
                                        // echo $re;
                                        ?> 

                                    </div>
                                    <div>View Feedback</div>
                                </div>
                            </div>
                        </div>
                        <a href="">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
 
                 <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-table fa-fw fa-2x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                    <?php
                                       // $resul=mysql_query("select studid,rollno from current_class where classid='$classid' order by(rollno)");
                                        //$re=mysql_num_rows($resul);
                                        // echo $re;
                                        ?> 

                                    </div>
                                    <div>Parent Complaint</div>
                                </div>
                            </div>
                        </div>
                        <a href="response.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
               
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-edit fa-fw fa-2x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"></div>
                                    <div>Certificate</div>
                                </div>
                            </div>
                        </div>
                        <a href="cc/search_form.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                    
                        </div>
                        <!-- /.panel-heading -->
                       
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                   
                        <!-- /.panel-body -->
                      
                        <!-- /.panel-footer -->
                  </div>
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->   
<?php
    include("includes/footer.php");
?>