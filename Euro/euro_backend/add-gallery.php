<?php 
ob_start();
require_once('db.php');

$message="";

	if(isset($_POST['submit'])){
	
	
		if(isset($_FILES["photo"])){
			
	    $image_info = getimagesize($_FILES["photo"]["tmp_name"]);
        $image_width = $image_info[0]; 
        $image_height = $image_info[1];
				
               	
             if ($_FILES["photo"]["error"] > 0)
                {
                 }
				 
				 elseif($image_width!=390){
					 
					 $message="Image width doesn't match . Please Choose images within in 390px width";
					 }
					 elseif($image_height!=250){
					 
					 $message="Image height doesn't match . Please Choose images within in 250px height";
					 }
				
              else 
                 {
                                
                $uploaddir = 'Image/'; 
				
              $file = basename($_FILES['photo']['name']);

                if($_FILES['photo']['name']) {
					
               $file = preg_replace('/\s+/', '_', $file);
				
              $rand = rand(0000,9999);

         if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploaddir . $rand . $file)) { 
                  
               $photo='Image/'. $rand . $file;
			   
			   $query=mysqli_query($con,"INSERT INTO `gallery` (`image`) VALUES ('$photo')");
	
               $message="<span style='color:green'>Successfully Added </span>";  
                  

        } else {
            echo "error in photo";
        }

				}
          }
                                
 
		}

	}
	
	
	
	
	
?> 

<?php
require_once('header.php');
?>

<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">Manage Gallery</h1>
  </div>
  <!-- /.col-lg-12 --> 
</div>
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading"> Add Gallery</div>
      
      <div class="col-lg-6" style="color:red;margin-left: 30%;">
                                          <?php echo $message;?> 
                                        </div>
      
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-6">
            <form role="form" name="" id="signup_form" action="" method="post" enctype="multipart/form-data">
            
              
              <div class="form-group">
              <label for="file">Image:(Choose images within 390 X 250 dimensions)</label>
           <input type="file" name="photo" id="file" class="form-control required" value="" ><br>
           </div>
  
         
              <button class="btn btn-default" id="branchbtn" name="submit" type="submit">Add </button>
            </form>
            
              

          </div>
          <!-- /.col-lg-6 (nested) -->
        </div>
        <!-- /.row (nested) --> 
      </div>
      <!-- /.panel-body --> 
    </div>
    <!-- /.panel --> 
  </div>
  <!-- /.col-lg-12 --> 
</div>
<?php
require_once('footer.php');
?>