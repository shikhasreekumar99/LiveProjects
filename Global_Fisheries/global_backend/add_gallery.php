<?php 
require_once('db.php');
$msg=$msg1="";

if(!isset($_SESSION['login'])){
	header('Location: index.php');
	exit;
	
}
if(isset($_POST['submit']))
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
	
	  
	   if(isset($_FILES["photo"]))
{
	   
          $image_info = getimagesize($_FILES["photo"]["tmp_name"]);
		  //$image_width = $image_info[0];
      // $image_height = $image_info[1];
		    $uploaddir = 'Image/';

              $file = basename($_FILES['photo']['name']);

                if($_FILES['photo']['name']) {

               $file = preg_replace('/\s+/', '_', $file);

               $rand = rand(0000,9999);

         if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploaddir . $rand . $file))
		  {
               $photo='Image/'. $rand . $file;
		 }
			
	  
	$res="INSERT INTO `gallery`( `cat_id`,`trade`, `scientific`, `french`, `japanese`, `spanish`, `gear`, `peak`, `dist`, `area`,`image`) VALUES ( '$category','$trade','$scientific','$french','$japanese','$spanish','$gear','$peak','$dist','$area','$photo')";
	   $sql=mysqli_query($con,$res);
	
	if($sql)
	$msg="Inserted successfully";
	else
	$msg1="Error";
	  }
}
}
  
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
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
            Add Galary</h1>
          <ol class="breadcrumb">
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
                <form name="add_form" id="add_form" method="post" action="" enctype="multipart/form-data" >
                 
                 <label> Category*</label>
                 
                 <select name="category"  class="form-control required" > 

              <?php
			  	  $query = mysqli_query($con,"SELECT `cat_id`,`category`  FROM `category`  ");
                  while ($row = mysqli_fetch_array($query)) {
               ?>
               
               
         <option value="<?php echo $row['cat_id'];?>"><?=$row['category']?></option>
         
  
               <?php
			    
                }
              ?>
              </select>
              
                  <p><label> Trade Name*</label>
         <input type="text" name="trade" id="trade" class="form-control required"/></p>
         
          <p><label> Scientific Name*</label>
         <input type="text" name="scientific" id="scientific" class="form-control required"/></p>
         
          <p><label> French*</label>
         <input type="text" name="french" id="french" class="form-control"/></p>
         
          <p><label> Japanese*</label>
         <input type="text" name="japanese" id="japanese" class="form-control"/></p>
         
          <p><label> Spanish*</label>
         <input type="text" name="spanish" id="spanish" class="form-control"/></p>
         
          <p><label> Gear Used*</label>
         <input type="text" name="gear" id="gear" class="form-control required"/></p>
         
          <p><label>Peak Season*</label>
         <input type="text" name="peak" id="peak" class="form-control required"/></p>
         
          <p><label> Distribution*</label>
         <input type="text" name="dist" id="dist" class="form-control required"/></p>
         
         <p><label> Areas of Abundance*</label>
         <input type="text" name="area" id="area" class="form-control required"/></p>
         
          
         
           <p> <label> IMAGE*</label>
 				 <input type="file" name="photo" class="form-control required" /> </p>
      
        <p>
    		 <input type="submit" name="submit" value="submit" class="btn btn-primary"/>
             
              <span style="color:red" id="spcsname"><?= $msg; ?> </span>
                    <span style="color:red" id="spcsname"><?= $msg1; ?> </span>
                  </p>
                 
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
        <strong>Copyright &copy; 2014-2015 .</strong> All rights reserved.
      </footer>
  </div><!-- ./wrapper -->

 <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
   <script src="js/jquery.validate.js"></script>
    
 <script type="text/javascript">
$(document).ready(function(){

	
 $("#add_form").validate({
           
				
		  errorPlacement: function(error, element) {
			  
                    if (element.attr("name") == "message"){
                  
				          error.appendTo("#msg_error");
              
			        }else  {
                   
				           error.insertAfter(element);
                    }
             },
			 
			 
			 
          messages:{
		  
		         trade: { 
                 required:"Enter your trade"

               },
			  
			     scientific: { 
                 required:"Enter scientific name",
               },
			   
		     gear: { 
                 required:"Enter Gear",
               },
			   
			    peak: { 
                 required:"Enter peak seasons"

               },
			   
			   dist: { 
                 required:"Enter Distribution Area"

               },
			   
			   area: { 
                 required:"Enter Area of Abundance"

               },
			  
			     photo: { 
                 required:"Upload a photo",
               },
			 
			   
	    },
		
		
    });

});

</script>
   
    
 
    <?php require_once('footer.php');?>
</body>
</html>
