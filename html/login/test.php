<?php 
   session_start();
   if (!isset($_SESSION['username']) && !isset($_SESSION['id'])) {  

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "mamvi";

$conn = mysqli_connect($username, $password, $usertype, $manvi);

if (!$conn) {
	echo "Connection Failed!";
	exit();
}
 }
    ?>
