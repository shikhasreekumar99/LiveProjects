<?php

$link = mysqli_connect("localhost", "root", "", "rit");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

//....................................................................
 
if(isset($_REQUEST['add_no'])){
    
    $add_no = mysqli_real_escape_string($link, $_REQUEST['add_no']);
    $category=$_REQUEST['category'];
    $sql = "SELECT * FROM faculty_details WHERE $category LIKE '" . $add_no . "%'";
	//echo $sql;
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                
                echo "<p class='add_no'>" . $row[$category] . "</p>";
            }
           
            mysqli_free_result($result);
        } else{
            echo "<p>No matches found</p>";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}


//...................................................................................


 

mysqli_close($link);
?>