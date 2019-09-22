<?php
include("includes/header.php");
include("includes/sidenav.php");
include "includes/dboperation.php";
//include("includes/connection.php");
  $count=0;

   // $classid=$_SESSION["classid"];

?>

        
<div id="page-wrapper">
    
            <div class="row">
                <div class="col-lg-12" >
                    <h1 class="page-header">SEMESTER VERIFICATION
                     </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class="table-responsive">
<table   class="table table-hover table-bordered" >
     <tr>
        <th style="text-align: center;">ADMISSION NUMBER</th>
		 <th style="text-align: center;">APPLIED STATUS</th>
        <th style="text-align: center;">APPLIED DATE</th>
        <th style="text-align: center;">APPROVED STATUS</th>
        <th style="text-align: center;">APPROVED DATE</th>
        <th style="text-align: center;">CURRENT SEM</th>
        <th style="text-align: center;">NEXT SEM</th>
		<th style="text-align: center;">VIEW DETAILS</th>
		<th style="text-align: center;">OFFICE STATUS</th>
    </tr>



    
<?php

    $esql=mysql_query("select reg_id,adm_no,apl_status,apl_date,apv_status,apv_date,previous_sem,new_sem,office_status from stud_sem_registration");	
	while($dat=mysql_fetch_array($esql))
	{
    $adm_no=$dat["adm_no"];
	 $apl_status=$dat["apl_status"];
    $apl_date=$dat["apl_date"];  
	$apv_status=$dat["apv_status"];
    $apv_date=$dat["apv_date"];
	 $previous_sem=$dat["previous_sem"];	
	 $new_sem=$dat["new_sem"];
	  $office_status=$dat["office_status"];
	  $reg_id=$dat["reg_id"];
	 
   
?>
    <tr align="center">
       
        <td align="center"><?php  echo $adm_no;?></td>
		<td align="center"><?php  echo $apl_status;?></td>
        <td align="center"><?php  echo $apl_date;?></td>
        <td align="center"><?php  echo $apv_status;?></td>
        <td align="center"><?php  echo $apv_date; ?></td>
        <td align="center"><?php  echo $previous_sem;?></td>
        <td align="center"><?php  echo $new_sem; ?></td>
	   <td align="center"> <a href="semregpost.php?admission=<?php echo $adm_no?>" >VIEW </a></td>
		
        <?php
           if($apv_status!="Approved")
           { ?>
                <td><?php echo $apv_status;?></td>
            <?php
           }
		   elseif($office_status=="Approved by OFFICE"){
			
			   ?>
			   <td><?php echo $office_status;?></td>
		<?php
		   }
           else
           {
          ?>
        <td>
           <div class="btn-group">
            <a href="semregedit.php?id=<?php echo $reg_id; ?>">verify</a>
            </div>
        </td>
         <?php
            }
           ?>
 
    </tr>
<?php
	}
?>
</table> 
</div>
            <!-- /.row -->
            <div class="row">
                
        
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
