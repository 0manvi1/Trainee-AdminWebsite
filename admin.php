<?php
session_start();


//echo "<p style='padding:20px;font: size 40px;'><b> HEY </b>".$_SESSION['username']. "</p>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Admin Dashboard</h1>
<hr>
    <div class="container">

        
        <hr>
        <br><br>
        <div class="box1">
     
        <input type="button" value="Admin Details" onclick="window.open('http://localhost/manvi/adminDetail.php')" />
        
        </div>
        <div class="box2">
        
        <input type="button" value="Admin Feedback" onclick="window.open('http://localhost/manvi/adminfeed1.php')" />
        </div>
        <div class="box3">
       
        <input type="button" value="Logout" onclick="window.open('file:///C:/Users/HP/Desktop/html/Homepage/homepage.html')" />
        </div>
    </div>

<style>
.mycss{
    padding:30px;

}
</style>

<style>
*{
    margin:0px;
    padding:0px;
    box-sizing: 100%;
   
}
body{
    background-color: rgb(217, 201, 231);
}
h1 {
    padding:30px;
    text-align: center;
    font: size 80px;

}
.container{
    display:flex;
    justify-content:center;
    align-items:center;
    
}
.box1, .box2, .box3{
    padding:30px;
    margin:30px;
}

/* .container p{
     
     display: inline;
     padding: 150px;
     gap: 20px;
     font-style: oblique;
     font-size: large;
     margin:3px;
     
} */
input{
    width:110px;
    height:40px;
    border: 2px solid black ;
}
</style>

</body>
</html>
