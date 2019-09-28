<?php 
require_once('db.php');
$msg="";
if(!isset($_SESSION['login'])){
	header('Location: index.php');
	exit;
	
}
if(isset($_POST["submit"]))
{
	
	$category=$_POST['category'];
	$trade=$_POST['trade'];
	$scientific=$_POST['scientific'];
	$french=$_POST['french'];
	$japanese=$_POST['japanese'];
	$spanish=$_POST['spanish'];
	$gear=$_POST['gear'];
	$peak=$_POST['peak'];
	$dist=$_POST['dist'];
	$area=$_POST['area'];
	
	$id=$_POST['id'];	
	
	 
	  $uploaddir = 'Image/';

              $file = basename($_FILES['photo']['name']);

                if($_FILES['photo']['name']) {

               $file = preg_replace('/\s+/', '_', $file);

               $rand = rand(0000,9999);

         if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploaddir . $rand . $file)) {

               $photo='Image/'. $rand . $file;
	
     $res="UPDATE `gallery` SET `cat_id`='$category',`trade`='$trade',`scientific`='$scientific',`french`='$french',`japanese`='$japanese',`spanish`='$spanish',`gear`='$gear',`peak`='$peak',`dist`='$dist',`area`='$area',`image`='$photo' WHERE id=$id ";
	// echo $res;
	 //die();
			$sql=mysqli_query($con,$res);			
			if($sql)
			{
	$msg="Sucessfully Updated";
			}
		else
		{
		echo "Error";
		 }
				
//}
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
   <style>
   .error{
	   color:#F00;}
   </style>
   
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
            Edit Services
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
       
              <form name="edit_test" id="edit_test" method="post" action=""  enctype="multipart/form-data">
                 <?php
   
  $id=$_GET['id'];
  
  $data="SELECT * FROM `gallery` where `id`='$id'";
   
   $query=mysqli_query($con,$data);
   
foreach($query as $row)
	{
		?>
        
         <label> Category*</label>
                 
                 <select name="category"  class="form-control required" > 

              <?php
			  	  $query = mysqli_query($con,"SELECT `cat_id`,`category`  FROM `category`");
                  while ($row1 = mysqli_fetch_array($query)) {
               ?>
               
               
         <option value="<?php echo $row1['cat_id'];?>" <?php if($row1['cat_id']==$row['cat_id']){ echo "selected";} ?>>
		 <?=$row1['category']?>
         </option>
         
  
               <?php
			    
                }
              ?>
              </select>
              
                <p><label> Trade Name*</label>
         <input type="text" name="trade" id="trade" class="form-control required" value="<?php echo $row['trade'];?>"/></p>
         
          <p><label> Scientific Name*</label>
         <input type="text" name="scientific" id="scientific" class="form-control required" value="<?php echo $row['scientific'];?>"/></p>
         
          <p><label> French*</label>
         <input type="text" name="french" id="french" class="form-control required" value="<?php echo $row['french'];?>"/></p>
         
          <p><label> Japanese*</label>
         <input type="text" name="japanese" id="japanese" class="form-control required" value="<?php echo $row['japanese'];?>"/></p>
         
          <p><label> Spanish*</label>
         <input type="text" name="spanish" id="spanish" class="form-control required" value="<?php echo $row['spanish'];?>"/></p>
         
          <p><label> Gear Used*</label>
         <input type="text" name="gear" id="gear" class="form-control required" value="<?php echo $row['gear'];?>"/></p>
         
          <p><label>Peak Season*</label>
         <input type="text" name="peak" id="peak" class="form-control required" value="<?php echo $row['peak'];?>"/></p>
         
          <p><label> Distribution*</label>
         <input type="text" name="dist" id="dist" class="form-control required" value="<?php echo $row['dist'];?>"/></p>
         
         <p><label> Areas of Abundance*</label>
         <input type="text" name="area" id="area" class="form-control required" value="<?php echo $row['area'];?>"/></p>
    
          <p><label> Image*</label></p>
           <p><img src="<?php echo $row['image'];?>" height="100" width="100"/></p>
         <input type="file" name="photo"  id="file" class="form-control required" value="<?php echo $row['image'];?>"/></p>
         
              <p>  <input type="submit" name="submit" value="Update" class="btn btn-primary"/>
            <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
                  </p>
                  <span style="color:green" ><?php echo $msg; ?></span>
                  <?php
	}
	?>
                </form>

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
   <script src="js/jquery.validate.js"></script>
    
 <script type="text/javascript">
$(document).ready(function(){

	
 $("#edit_test").validate({
           
		
			 
          messages:{
		  
		         title: { 
                 required:"Enter a title",

               },
			    
                 
			 name: { 
                 required:"Enter a name",

               },
			    place: { 
                 required:"Enter a place",

               },
			    photo: { 
                 required:"Upload a image ",

               }
			   
	    }

   });

});

</script>
   <?php require_once('footer.php');?>
</body>
</html>
