<?php

if (isset($_POST['Report'])) {
   

$link = mysqli_connect("localhost", "root", "", "manvi");
$Cname = $_POST['Cname'];
$Gname = $_POST['Gname'];
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM persons WHERE CourseName='$Cname' && GuideName='$Gname'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Id</th>";
                echo "<th>TraineeName</th>";
                echo "<th>CourseName</th>";
                echo "<th>CollegeName</th>";
                echo "<th>DeparmentName</th>"; 
                echo "<th>GuideName</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['Id'] . "</td>";
                echo "<td>" . $row['TraineeName'] . "</td>";
                echo "<td>" . $row['CourseName'] . "</td>";
                echo "<td>" . $row['CollegeName'] . "</td>";
                echo "<td>" . $row['DeparmentName'] . "</td>";
                echo "<td>" . $row['GuideName'] . "</td>";
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
