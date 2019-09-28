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
	$title=$_POST['title'];
	$code=$_POST['code'];
	$url=$_POST['url'];
	  
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
		 }
			
	  
	$res="INSERT INTO `downloads`( `cat_id`,`title`, `code`, `url`, `image`) VALUES ( '$category' ,'$title' ,'$code' ,'$url','$photo')";
	   $sql=mysqli_query($con,$res);
	  //echo $sql;
//exit();
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
            Add Downloads</h1>
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
                 
                  <p><label>Title*</label>
         <input type="text" name="title" id="title" class="form-control required"/></p>
          
          <p><label>Code*</label>
         <input type="text" name="code" id="code" class="form-control required"/></p>
          
           <p><label>URL*</label>
         <input type="text" name="url" id="url" class="form-control required"/></p>  
          
           <p> <label>Icon*</label>
 				 <input type="file" name="photo" class="form-control required" /> </p>
      
        <p>
    		 <input type="submit" name="submit" value="submit" class="btn btn-primary"/></p>
             
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
		  
		         title: { 
                 required:"Enter your title"

               },
			    
                 code: { 
                 required:"Enter code",
               },
			   
			    url: { 
                 required:"Enter url",
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
