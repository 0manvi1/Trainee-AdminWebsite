
<?php

//require 'config.php';
if(isset($_POST["submit"])){
    $FullName = $_POST["name"];
    $Gender = $_POST["gender"];
    $Number = $_POST["number"];
    $Email = $_POST["email"];
    $Password = $_POST["Password"];
    $CheckPassword = $_POST["RePassword"];
    $conn = new mysqli('localhost','root','','manvi');
    $duplicate = mysqli_query($conn,"SELECT * FROM registration WHERE Email = '$Email'");
  
    if( mysqli_num_rows($duplicate)>0){
        echo'Email has already been used';
    }
    else{
        if($Password == $CheckPassword){
           $query = "INSERT INTO registration VALUES('','$FullName','$Gender','$Number','$Email','$Password')";
           mysqli_query($conn,$query);
           echo 'Registation Successful';     
        }
        else{
            echo 'Password does not matches';
        }
    }      
    
}

?>
 