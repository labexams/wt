<?php
$link = mysqli_connect("localhost", "username", "password", "demo");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
} 
// Attempt select query execution
$sql = "SELECT * FROM registration";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";echo "<tr>";echo "<th>id</th>";echo "<th>first_name</th>";
echo "<th>phone_no</th>";
                echo "<th>email</th>";
	    echo "<th>gender</th>";
	    echo "<th>ADDRESS</th>";
	    echo "<th>Dob</th>";
	    echo "<th>lang</th>";
	    echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['first_name'] . "</td>";
                echo "<td>" . $row['phone_no'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
	    echo "<td>" . $row['gender'] . "</td>";
	    echo "<td>" . $row['address'] . "</td>";
	    echo "<td>" . $row['dob'] . "</td>";
	    echo "<td>" . $row['lang'] . "</td>";
               echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 // Close connection
mysqli_close($link);
?>

