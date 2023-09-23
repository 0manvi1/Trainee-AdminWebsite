<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Feddback</title>
</head>
<body>
<h1><b>ADMIN</b></h1>
    <form action="http://localhost/manvi/adminfeed.php" method="post">  
        <p><b>Please fill up the following details to get the Feedback Result.</b></p> 
        <hr>
        <br>
    <table>
    
        <tr>
        <th><label for="Department name" >Enter Deparment Name:</label></th>
        <th><input type="text" name="Dname" placeholder="Enter Deparment Name" class="name" required></th>
        </tr>
    
        <tr>
        <th><label for="Guide name" >Guide Name:</label></th>
        <th><input type="text" name="Gname" placeholder="Enter Guide Name" class="name" required></th>
        </tr>
        <tr>
        <th><button class="btn btn-primary" type="submit" name="Report" >Get Result</button></th>
        </tr>
    </form>   
    </table> 
    <style>
    *{
        margin:0px;
        padding:0px;
        box-sizing: 100%;
       
    }
    body{
        background-color: rgb(217, 201, 231);
        margin:15px 30px;
    }
    p{
        margin:5px 2px;
         
    }
    .name{
       margin:15px 30px;
    }
    </style>   
</body>
</html>