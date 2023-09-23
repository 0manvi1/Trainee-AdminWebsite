<?php
//if (isset($_POST['Submit'])) {
$conn = mysqli_connect("localhost", "root", "", "manvi");

// Check connection
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

// Taking all 3 values from the form data(input)
$ProjectDetails = $_REQUEST['ProjectDetails'];
$Dname = $_REQUEST['Dname'];
$Gname = $_REQUEST['Gname'];

// We are going to insert the data into our admin table
$sql = "INSERT INTO admin VALUES ('','$ProjectDetails','$Dname','$Gname')";

// Check if the query is successful
if(mysqli_query($conn, $sql)){
    echo "<h3>Data stored in a database successfully.";

    //echo nl2br("\n$first_name\n $last_name\n "
        //. "$gender\n $address\n $email");
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
//}
?>      	