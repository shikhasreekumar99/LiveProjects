<table width="50%"  class="table table-hover table-bordered">
   	<tr>
    	<th style="text-align: center;">ADMISSION NUMBER</th>
    	<th style="text-align: center;">NAME</th>
   		<?php
			include("includes/dbopen.php");
			if(isset($_POST["key"])){
					$classid=$_POST["key"];
					
					$re=mysql_query("select subjectid from subject_class where classid='$classid'");
       				 while($d=mysql_fetch_array($re)){
							$subjectid=$d["subjectid"];
						
    	?>
    	<th align="center">
   		   <?php 
                 echo $subjectid; 
            ?>
    	</th>
		<?php }} ?>
            
        <th style="text-align: center;">STATUS</th>
	</tr>

	<?php $st=1;
	   if(isset($_POST["key"])){
	       $classid=$_POST["key"];
		  $resul=mysql_query("select distinct(studid)from sessional_marks where classid='$classid' order by(studid)");
           while($dat=mysql_fetch_array($resul))
           	{
           		$studid=$dat["studid"];
				$re=mysql_query("select name from stud_details where admissionno='$studid'");
            	while($d=mysql_fetch_array($re))
                {
                   	$name=$d["name"];		
                }
	?>
	<tr>
		<td align="center"><?php echo $studid;?></td>
        <td align="center"><?php echo $name;?></td>
            <?php
                	$re=mysql_query("select subjectid from subject_class where classid='$classid'");
                	while($d=mysql_fetch_array($re))
                	{
                    	$subjectid=$d["subjectid"];
                    	$sessional_marks='--';
          				$result=mysql_query("select * from sessional_marks where classid='$classid' and studid='$studid' and subjectid='$subjectid' order by(subjectid)");
                		while($data=mysql_fetch_array($result))
                		{	
                    		$classid=$data["classid"];
                        //$studid=$data["studid"];
                    		$subid=$data["subjectid"];
                    		$data["sessional_marks"];
                    		$sessional_marks=$data["sessional_marks"];
            				$status=$data["status"];
                 			if($status=="Verified by staff advisor")
							{
                       			 $st=0;
                    		}}
							?>
					<td align="center"><?php /*echo $subjectid; echo " : ";*/ echo $sessional_marks;?></td>
                	   <?php
            			     }
                		if($st!=0)
                		  {
					   ?>
                    <td align="center"><?php echo $status;?></td>
                	<?php
                		}
                		else
						{
						 $st=1;
                	?>
                    <td align="center">
                    <div class="btn-group">
                    	<a href="sessedit.php?id=<?php echo $studid; ?>&clsid=<?php echo $classid; ?>">verify</a>
                    </div>
                    </td>
                	<?php
						}
                	?>
       		 </tr><br>       
			<?php
    			}}
    		?>
    </table> 
	</div>