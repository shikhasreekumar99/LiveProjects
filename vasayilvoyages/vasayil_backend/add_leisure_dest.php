<?php 
$message="";


require_once('db.php');
if(!isset($_SESSION['login'])){
	header('Location: index.php');
	exit;
	
}
if(isset($_POST['submit']))
{

	$leisure=$_POST['leisure'];
	$place=$_POST['place'];

		
			 $query=mysqli_query($con,"INSERT INTO `leisure_destination`( `cute_id`,`places`) VALUES ('$leisure','$place')");
			 
			
             
	if($query):
             $message="Successfully Inserted";  
			 //header('Location:view_products.php?s_id='.$service);  
    
	 else:
	  
    echo "error in produts";
	
	endif;
	
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

<style>
   .error{
	   color:#F00;}
   </style>
   

  </head>
  <!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
  <body class="skin-blue fixed">
 <!-- Site wrapper -->
    <div class="wrapper">
      
   
   <?php require_once('menu.php'); ?>
   
      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Add Leisure Destinations
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
        
         
                <form name="add_form"  id="add_form" method="post" action="" >
             
       
                
                 <label> Select Package*</label>
                 
                 <select name="leisure"  class="form-control required" > 

              <?php
			  	  $query = mysqli_query($con,"SELECT `cute_id`,`cute_leisure`  FROM `cute_leisure`  ");
                  while ($row = mysqli_fetch_array($query)) {
               ?>
               
               
         <option value="<?php echo $row['cute_id'];?>"><?=$row['cute_leisure']?></option>
         
  
               <?php
			    
                }
              ?>
              </select>
              
                 <p>
                  <label>Place*</label>
 				 <input type="text" name="place"  class="form-control required"/> </p>
                 
                 <p>
 				 <input type="submit" name="submit" value="submit" class="btn btn-primary" />
                 </p>
                 <p>
                 <span style="color:#F00"><?php echo $message;?></span>
                 
                 </p>
         </form>
         
         
           </div>
            </div>
          

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
           
		
			 
          messages:{
		  
			    
                 place: { 
                 required:"Enter the place",
  
			 },
			   
	    },
		
		
    });

});

</script>

     <?php require_once('footer.php');?>

</body>
</html>
