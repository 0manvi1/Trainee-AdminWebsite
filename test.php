<?php 
session_start();
include "dbconn.php";
  if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['usertype'])){


    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
  

      $username = test_input($_POST['username']);
      $password = test_input($_POST['password']);
      $usertype = test_input($_POST['usertype']);

      $sql = "SELECT * FROM user WHERE username= '$username' AND password='$password' ";

      $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
        	// the user name must be unique
        	$row = mysqli_fetch_assoc($result);
        
            if ($row['password'] === $password && $row['user'] == $usertype) {
        	
        		$_SESSION['id'] = $row['id'];
        		$_SESSION['usertype'] = $row['user'];
         		$_SESSION['username'] = $row['username'];

            //  if($result->num_rows==1 && $_SESSION['usertype']=="Admin"){
            //   header("location:trainee.html");
            // }

        		header("Location: homepage.php");

         	}
         
             else {
          		header("Location: login1.html?error=Incorect User name or password");
             }
        }else {
          header("Location: login1.html?error=Incorect User name or password");
        }
	
//  else { 	
//     header("Location: just.php");
//  }
  }

//  ?>