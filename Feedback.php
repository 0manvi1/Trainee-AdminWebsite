
<?php

//require 'config.php';
if(isset($_POST["submit"])){
    $Name = $_POST["name"];
    $Email = $_POST["email"];
    $Question1=$_POST['rate1'];
    $Question2=$_POST['rate1a'];
    $Question3=$_POST['rate1b'];
    $Question4=$_POST['rate1c'];
    $Question5=$_POST['rate1d'];
    
    // $Message = $_POST["Message"];
    $conn = new mysqli('localhost','root','','manvi');
    if($conn->connect_error){
        die('Connnection Filed : '.$conn->connection_error);
    }
    else{
        $stmt = $conn->prepare("insert into feedback(name,email,Question1,Question2,Question3,Question4,Question5)
        values(?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssss",$Name,$Email,$Question1,$Question2,$Question3,$Question4,$Question5);
        $stmt->execute();
        echo "Feedback Submitted Successfully!!";
        $stmt->close();
        $conn->close();
    }
}
   ?>
    

 