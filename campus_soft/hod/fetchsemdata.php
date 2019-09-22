<table class="table table-hover table-bordered" >
     <tr>
        <th style="text-align: center;">ADMISSION NUMBER</th>
        <th style="text-align: center;">NAME</th>
        <th style="text-align: center;">CURRENT SEM</th>
        <th style="text-align: center;">NEXT SEM</th>
        <th style="text-align: center;">APPLICATION STATUS</th>
    </tr>

<?php
include("includes/dbopen.php");
    if(isset($_POST["key"])){
        $classid=$_POST["key"];
//reading registration details
        $resul=mysql_query("select reg_id,adm_no,classid,previous_sem,new_sem,apv_status from stud_sem_registration where classid='$classid'");
        while($dat=mysql_fetch_array($resul))   {
            $adm_no=$dat["adm_no"];
            $previous_sem=$dat["previous_sem"];
            $new_sem=$dat["new_sem"];
            $apv_status=$dat["apv_status"];
            $reg_id=$dat["reg_id"];

            $result1=mysql_query("select name from stud_details where admissionno='$adm_no'");

            while($dat=mysql_fetch_array($result1))     {
                $name=$dat["name"];
            }
?>

<tr align="center">       
        <td align="center"><?php  echo $adm_no;?></td>
        <td align="center"><?php  echo $name;?></td>
        <td align="center"><?php  echo $previous_sem;?></td>
        <td align="center"><?php  echo $new_sem; ?></td>
        
        <?php
           if($apv_status!="not approved")
                { ?>
                    <td><?php echo $apv_status;?></td>
                    <?php
           }
           else
                {
                ?>
                <td>
                    <div class="btn-group">
                        <a href="semregedit.php?id=<?php echo $reg_id; ?>&clsid=<?php echo $classid; ?>">verify</a>
                    </div>
                </td>
                <?php
                    }}
                ?>
    
</tr>

<?php
    }
?>
