<?php

if (isset($_POST['Report'])) {
   

$link = mysqli_connect("localhost", "root", "", "manvi");
$Dname = $_POST['Dname'];
$Gname = $_POST['Gname'];
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM admin WHERE Department='$Dname' && GuideName='$Gname'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th><b>Id</b></th>";
                echo "<th><b>GuideName</b></th>";
                echo "<th><b>Deparment</b></th>"; 
                echo "<th><b>ProjectDetails</b></th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['Id'] . "</td>";
                echo "<td>" . $row['GuideName'] . "</td>";
                echo "<td>" . $row['Department'] . "</td>";
                echo "<td>" . $row['ProjectDetails'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
}

?>
