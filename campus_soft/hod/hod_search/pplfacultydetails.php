<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Live MySQL Database Search</title>
<h1><center>FACULTY DETAILS</h1>
<style type="text/css">
table {
	   margin-top: 200px;
    border-collapse: collapse;
    border-spacing: 0;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
}
    width: 200%;
   /* border: 1px solid #ddd;*/
}

th, td {
    text-align: left;

</style>

</head>
</html>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "rit");



//..............................................................................

    $add_no=$_GET['id'];
    //$category=$_POST['category'];
    $sql = "SELECT * FROM faculty_details WHERE name='$add_no'";
	//echo $sql;
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
                                       
               echo "<table>";
   
			
            while($row = mysqli_fetch_array($result)){
				
			    echo '<tr><td><img src="data:image/jpeg;base64,'.base64_encode( $row['photo'] ).'" width="150" height="200"/></td></tr> ';
			       echo "<tr>";
                 echo "<tr><th>FACULTY ID</th><td>{$row['fid']}</td></tr>";
				  echo "<tr><th>NAME</th><td>{$row['name']}</td></tr>";
				   echo "<tr><th>DEPTNAME</th><td>{$row['deptname']}</td></tr>";
				    echo "<tr><th>PHONENO</th><td>{$row['phoneno']}</td></tr>";
					 echo "<tr><th>EMAIL</th><td>{$row['email']}</td></tr>";
				echo "</tr>";
            }
			echo "</table>"; 
            
            // Close result set
            mysqli_free_result($result);
        } else{
            echo "<p>No matches found</p>";
        }  
	}
	

?>