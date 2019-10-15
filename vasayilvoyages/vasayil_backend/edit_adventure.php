<?php 
require_once('db.php');
$msg="";

if(!isset($_SESSION['login'])){
	header('Location: index.php');
	exit;
	
}
if(isset($_POST['submit']))
  {  
	$tab=$_POST['tab'];
	$tab1=$_POST['tab1'];
	$tab2=$_POST['tab2'];
	
	$res="UPDATE `adventure` SET tab='$tab' , tab1='$tab1' , tab2='$tab2' WHERE id='1' ";
	
			$sql=mysqli_query($con,$res);			
			if($sql)
	$msg="Sucessfully Updated";
		else
		echo "Error";
		
	  
	   if(isset($_FILES["photo"]))
    {
	   
          		    $uploaddir = 'Image/';

              $file = basename($_FILES['photo']['name']);

               if($_FILES['photo']['name']) {

               $file = preg_replace('/\s+/', '_', $file);

               $rand = rand(0000,9999);

                   if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploaddir . $rand . $file))
		             {
                       $photo='Image/'. $rand . $file;
	           
			     $res="UPDATE `adventure` SET image='$photo' WHERE id='1' ";
		         
				 $sql=mysqli_query($con,$res);

             	if($sql)
	            $msg="Sucessfully Updated";
	            else
	           $msg1="Error";
		      
					 
					 }
	         }
     }
		 
		 
	   if(isset($_FILES["photo1"]))
     {
	   
          
		     $uploaddir = 'Image/';

              $file = basename($_FILES['photo1']['name']);

               if($_FILES['photo1']['name']) {

               $file = preg_replace('/\s+/', '_', $file);

               $rand = rand(0000,9999);

                   if (move_uploaded_file($_FILES['photo1']['tmp_name'], $uploaddir . $rand . $file))
		           {
                   $photo1='Image/'. $rand . $file;
		           
	             $res="UPDATE `adventure` SET image1='$photo1' WHERE id='1' ";
		         
				 $sql=mysqli_query($con,$res);

             	if($sql)
	            $msg="Sucessfully Updated";
	            else
	             $msg1="Error";
		      
				   
				   }
	      }
    }
	  
	  
	    if(isset($_FILES["photo2"]))
         {
	   
        
		    $uploaddir = 'Image/';

              $file = basename($_FILES['photo2']['name']);

               if($_FILES['photo2']['name']) {

               $file = preg_replace('/\s+/', '_', $file);

               $rand = rand(0000,9999);

                 if (move_uploaded_file($_FILES['photo2']['tmp_name'], $uploaddir . $rand . $file))
		        {
                  $photo2='Image/'. $rand . $file;
		
	             $res="UPDATE `adventure` SET image2='$photo2' WHERE id='1' ";
		         
				 $sql=mysqli_query($con,$res);

             	if($sql)
	            $msg="Sucessfully Updated";
	            else
	           $msg1="Error";
		      
			   }
	 
	    }
       }
	 
  }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
   <?php require_once('header.php');?>
   
  </head>
  <!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
  <body class="skin-blue fixed">
 <!-- Site wrapper -->
    <div class="wrapper">
    
       <?php require_once('menu.php');?>
     
      </header>

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
      
      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Edit Adventure
          <!--  <small>Blank example to the fixed layout</small>-->
          </h1>
          <ol class="breadcrumb">
         
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
         
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
       
              <form name="form1" method="post" action=""  enctype="multipart/form-data">
              
              <?php
			  
			  $res="SELECT * FROM `adventure` WHERE id='1'";
			  $sql=mysqli_query($con,$res);
			  while($row=mysqli_fetch_array($sql))
			  {
				  ?>
             
   
 <p><label> Main*</label>
         <textarea type="text" name="tab" id="tab"   cols="80" class="ckeditor form-control required"><?php echo $row['tab'];?></textarea></p>
         
          
           <p> <label>Main IMAGE*</label>
            <p><img src="<?php echo $row['image'];?>" height="100" width="100"/></p>
         <input type="file" name="photo"  id="file" class="form-control" value="<?php echo $row['image'];?>"/></p>
                 
                   <p><label>Lakshadweep*</label>
         <textarea type="text" name="tab1" id="tab1"   cols="80" class="ckeditor form-control required"><?php echo $row['tab1'];?></textarea></p>
         
          
           <p> <label>IMAGE(for Lakshadweep)*</label>
            <p><img src="<?php echo $row['image1'];?>" height="100" width="100"/></p>
         <input type="file" name="photo1"  id="file" class="form-control" value="<?php echo $row['image1'];?>"/></p>
 				
                   <p><label> Maldives*</label>
         <textarea type="text" name="tab2" id="tab2"   cols="80" class="ckeditor form-control required"><?php echo $row['tab2'];?></textarea></p>
         
          
           <p> <label>IMAGE(for Maldives)*</label>
            <p><img src="<?php echo $row['image2'];?>" height="100" width="100"/></p>
         <input type="file" name="photo2"  id="file" class="form-control" value="<?php echo $row['image2'];?>"/></p>
 				
   
     
              <p>  <input type="submit" name="submit" value="Update" class="btn btn-primary"/>
                  </p>
                  <span style="color:green" ><?php echo $msg;    ?></span>
                  
                  <?php
			  }
				  ?>
                </form>
         <a href="view_news.php">   <button name="" type="" class="btn-primary">Back</button></a>

              </div>
            </div>
          
          </div><!-- /.box -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.0
        </div>
        <strong>Copyright &copy; 2014-2015.</strong> All rights reserved.
      </footer>
  </div><!-- ./wrapper -->
<script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
<script src="ckeditor/ckeditor.js"></script>
   <?php require_once('footer.php');?>
</body>
</html>
