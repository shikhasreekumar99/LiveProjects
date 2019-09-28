<?php 
require_once('db.php');
$msg=$msg1="";
$fl=1;
$errtitle=$errdescipt=$errname=$errwebsite="";
if(!isset($_SESSION['login'])){
	header('Location: index.php');
	exit;
	
}
if(isset($_POST['submit']))
  {  
	$title=$_POST['title'];
	$descript=$_POST['descript'];
	$name=$_POST['name'];
	$website=$_POST['website'];
	//$image=$_POST['photo'];
	
	
	  if($title=="")
	  {
		$fl=0;
		$errtitle="Title cannot be blank";  
	  }
	  else
	  {
		$fl=1;
		$errtitle= "";  
	  }
	  
	   if($descript=="")
	  {
		$fl=0;
		$errdescipt="Description cannot be blank";  
	  }
	  else
	  {
		$fl=1;
		$errdescipt= "";  
	  }
	  
	   if($name=="")
	  {
		$fl=0;
		$errname="Name cannot be blank";  
	  }
	  else
	  {
		$fl=1;
		$errname= "";  
	  }
	  
	 
	   if($website=="")
	  {
		$fl=0;
		$errwebsite="Website cannot be blank";  
	  }
	  else
	  {
		$fl=1;
		$errwebsite= "";  
	  }
	   //if($image=="")
//	  {
//		$fl=0;
//		$errimg="Image cannot be blank";  
//	  }
//	  else
//	  {
//		$fl=1;
//		$errimg= "";  
//	  } 
	  
	   if(isset($_FILES["photo"]))
{
	    $fl=1;
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
			
	  
	  
	  if($fl==1)
	  {
		  
	
	$res="INSERT INTO `testimonals`( `title`, `description`, `name`, `website`, `image`) VALUES ( '$title','$descript' ,'$name' ,'$website','$photo')";
	   $sql=mysqli_query($con,$res);
	  //echo $sql;
//exit();
	if($sql==1)
	$msg="Inserted successfully";
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
            Add testimonals</h1>
          <ol class="breadcrumb">
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
                <form name="form1" method="post" action="" enctype="multipart/form-data" >
                 
                  <p><label>Add Title*</label>
         <input type="text" name="title" id="title" class="form-control"/></p>
          <span style="color:red" id="spaddress"><?= $errtitle; ?> </span> 
          
          <p><label>Add Description*</label>
           <textarea name="descript" id="descript" class="form-control"></textarea>
    	 <span style="color:red" id="spaddress"><?= $errdescipt; ?> </span>
          
          <p><label>Add Name*</label>
         <input type="text" name="name" id="name" class="form-control"/></p>
          <span style="color:red" id="spaddress"><?= $errname; ?> </span> 
          
           <p><label>Add Website*</label>
         <input type="text" name="website" id="website" class="form-control"/></p>
          <span style="color:red" id="spaddress"><?= $errwebsite; ?> </span> 
          
           <p> <label>SELECT IMAGE</label>
 				 <input type="file" name="photo" class="form-control" /> </p>
      
        <p>
    		 <input type="submit" name="submit" value="submit"/>
             
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
   
    
 
    <?php require_once('footer.php');?>
</body>
</html>
