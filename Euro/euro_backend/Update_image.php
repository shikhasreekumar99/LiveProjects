<?php 
require_once('db.php');
$message="";
if(isset($_POST['submit']))
{

$id=$_GET['id'];

	//	$id=$_POST['id'];  
       $image_info = getimagesize($_FILES["photo"]["tmp_name"]);

     $image_width = $image_info[0];

       $image_height = $image_info[1];

          /*   if ($_FILES["photo"]["error"] > 0)

                {
                 }

                       //  elseif($image_width!=1100){
// $message="Image width doesn't match . Please Choose images within in 1100px width";
//
                             }

              elseif($image_height!=350){

            $message="Image height doesn't match . Please Choose images within in 350px height";
                                                               }
              else

                 {                               
*/
                $uploaddir = 'Image/';

              $file = basename($_FILES['photo']['name']);

                if($_FILES['photo']['name']) {

               $file = preg_replace('/\s+/', '_', $file);

               $rand = rand(0000,9999);

         if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploaddir . $rand . $file)) {

               $photo='Image/'. $rand . $file;
		
			// $query=mysql_query("INSERT INTO `image`(`id`, `image_name`, `image`) VALUES ('','$file','$photo')")or die(mysql_error());
			//$res= mysql_query($query);

              $query=mysql_query("UPDATE `image` SET `image_name`='$file',`image`='$photo'  WHERE id='$id' ")or die(mysql_error());
			$res= mysql_query($query);

//if($res)
//{
             $message="<span style='color:green'>Successfully Updated </span>";    
//}
//else
//{
	  //$message="<span style='color:green'>error </span>";  
//	}
      }
     else 
{
    echo "error in photo";
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
    <?php require_once('header.php'); ?>
  </head>
  <!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
  <body class="skin-blue fixed">
 <!-- Site wrapper -->
    <div class="wrapper">
      
      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
      <?php require_once('menu.php'); ?>
  </header>
      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Add Image
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
          
                <form name="form1" method="post" action="" enctype="multipart/form-data">
                
                 <label for="file">SELECT A IMAGE</label>
           <input type="file" name="photo" id="file" />
           <input type="submit" name="submit" id="submit" value="Submit" /><?php  echo $message; ?>
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
  <?php require_once('footer.php'); ?>
   
</body>
</html>
