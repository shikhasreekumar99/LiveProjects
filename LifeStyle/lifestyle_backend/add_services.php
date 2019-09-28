<?php 
require_once('db.php');
$msg=$msg1="";
if(!isset($_SESSION['login'])){
	header('Location: index.php');
	exit;
	
}

if(isset($_POST['submit']))
  { 

     
	  $title=$_POST['title'];
	 
	
	$query="INSERT INTO `services`( `title`) VALUES ('$title')";
	
	 $sql=mysqli_query($con,$query);
	
	if($sql)
	
	$msg="Inserted successfully";
	else
	$msg1="Error";


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
     

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Add Service</h1>
          <ol class="breadcrumb">
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
            
          
 <script src="plugins/ckeditor/ckeditor.js"></script>              
              
             <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
             <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
      <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <script>
  $(function() {
            $( "#datepicker-13" ).datepicker({dateFormat:'yy/mm/dd'});
         
         });
  </script>
            
                <form name="add_form" method="post" action="" id="add_form">
                
                  <p><label> Title*</label>
                    <textarea name="title" id="title" class="form-control required"></textarea></p>
    	
    	 
    		 <input type="submit" name="submit" value="submit" class="btn btn-primary"/>
             
              <span style="color:red" id="spcsname"><?= $msg; ?> </span>
                    <span style="color:red" id="spcsname"><?= $msg1; ?> </span>
                 
                 
                </form>
              </div>
            </div>
            
         
        </section>
        
        <!-- /.content -->
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
                 required:"Enter your Title"

               },
			    
		 
			   
	    },
		
		
    });

});

</script>

    <?php require_once('footer.php');?>
  
  
  

</body>
</html>
