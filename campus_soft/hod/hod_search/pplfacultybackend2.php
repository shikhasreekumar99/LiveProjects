<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "rit");



//..............................................................................
if(isset($_POST['add_no']))
{
    $add_no=$_POST['add_no'];
    $category=$_POST['category'];
    $sql = "SELECT * FROM faculty_details WHERE $category='$add_no'";
	//echo $sql;
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            
                
                
                echo "<table>
   
			<tr>
			<th>ADMISSIONNO</th>
			<th>NAME</th>
			<th>DETAILS</th> 
			</tr>"; 
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>" . $row['fid'] . "</td>";
				echo "<td>" . $row['name'] . "</td>";	
                echo "<td> <a href=pplfacultydetails.php?id=".rawurlencode($row['name']).">View </a></td>";
				echo "</tr>";
            }
			echo "</table> <input type='submit' name='excel' value='Download Excel' style=' height: 35px' id='excel_btn'>"; 
            
            // Close result set
            mysqli_free_result($result);
        } else{
            echo "<p>No matches found</p>";
        }  
}
  
}

//........................................................................................................................



//.........................................................................................................................

mysqli_close($link);
?>