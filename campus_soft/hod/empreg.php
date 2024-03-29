<?php
	include("includes/header.php");
	include("includes/sidenav.php");
?>

<div id="page-wrapper">   
	            <div class="row"><div class="col-lg-12" >
                    <h1 class="page-header">Faculty Registration</h1>
             </div>


		<form id="addemp" action = "addemp.php" method = "POST" enctype = "multipart/form-data">
		<table  id="outer1" align="center" style="padding-top:40px">
				<tr>
					<td>Faculty_ID(KTU_ID): <span class="required">*</span></td>
					<td><input required="required" autocomplete="off" class="form-control" id="Text1" type="text" name="fid" style="text-transform:uppercase; width: 400px" /></td>					
				</tr>
				<tr>
					<td>Name: <span class="required">*</span></td>
					<td><input required="required" autocomplete="off" class="form-control" id="Text1" type="text" name="name" style="text-transform:uppercase; width: 400px" /></td>					
				</tr>
				<tr>
					<td>Department: <span class="required">*</span></td>
					<td><select name="deptname" class="form-control">
					<option value="--select--">--select--</option>
					<?php
 						$sql="select * from department";
						$r=mysql_query($sql,$con);
						while($result=mysql_fetch_array($r)){
							echo '<option value="'.$result['deptname'].'">'.$result['deptname'].'</option>';
						}
					?>
					</select>
					</td>
				</tr>
				<tr>
					<td>Phone No.: <span class="required">*</span></td>
					<td><input  class="form-control" autocomplete="off" maxlength="10" minlength="10" id="Text1" type="text" name="phoneno" style="width: 400px" /></td>					
				</tr>
				<tr>
					<td>Email: <span class="required">*</span></td>
					<td><input  class="form-control" autocomplete="off" maxlength="20" minlength="10"  id="Text1" type="text" name="email" style="width:400px;" /></td>					
				</tr>
				<tr>
					<td>Photo:*</td>
					<td><input type="file" name="file" id="image" class="form-control"></td>
					<td id="thumb-output"></td>					
				</tr>
				
				<tr align="center">
					<td><input style="width:200px" id="submit" class="btn btn-primary" type="submit" value="Register" name="submit"/></td>										
      			</tr>
      	</table>		
	  </form>
   </body>
   
   <script>
	$(document).ready(function(){
    $('#image').on('change', function(){ //on file input change
        if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
        {
            $('#thumb-output').html(''); //clear html of output element
            var data = $(this)[0].files; //this file data
            
            $.each(data, function(index, file){ //loop though each file
                if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                    var fRead = new FileReader(); //new filereader
                    fRead.onload = (function(file){ //trigger function on successful read
                    return function(e) {
                        var img = $('<img/>').addClass('thumb').attr('src', e.target.result)
						.width('100px')
           				.height('100px'); //create image element 
                        $('#thumb-output').append(img); //append image to output element
                    };
                    })(file);
                    fRead.readAsDataURL(file); //URL representing the file's data.
                }
            });
            
        }else{
            alert("Your browser doesn't support File API!"); //if File API is absent
        }
    });
});
</script>

<?php 
	include("includes/footer.php");
?>
    
