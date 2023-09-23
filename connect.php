<?php
   session_start();

   $conn = new mysqli("localhost","root","","manvi");

//checking if the submit button is clicked

   if(isset($_POST['submit'])){
      $username = $_POST['username'];
      $password = $_POST['password'];
      //$password = sha1($password);
      $usertype = $_POST['usertype'];
      echo $username;
   //   echo $password;
      $sql = "SELECT * FROM user WHERE username=? AND password=? AND user=?";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("sss",$username,$password,$usertype);
      $stmt->execute();
      $result = $stmt->get_result();
      $row = $result->fetch_assoc();

      session_regenerate_id();
      $_SESSION['username'] = $username ;
      $_SESSION['password'] = $password ;
      $_SESSION['role'] = $usertype;
      //session_write_close();

      
     //$result = mysqli_query($conn,"SELECT * FROM user WHERE username='$username' AND password='$password'");
     
      if(($result->num_rows==1 ) &&  ($_SESSION['role']=="Admin")){
        header("location:admin.php");
      }
      else if(( $result->num_rows==1)&& ($_SESSION['role']=="Trainee")){
         //$_SESSION['username'] = $username ;
        header("location:trainee.php");
      }
     else{
        echo "<script>alert('Username or Password Incorrect!')</script>";
      }
   }
?>