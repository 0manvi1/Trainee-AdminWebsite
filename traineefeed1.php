<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Report</title>
</head>
<body>
 <form action="http://localhost/manvi/traineefeed.php" method="post"> 
    <h1><b>TRAINEE</b></h1> 
    <p>Please fill up the following details to get the Feedback Result.</p> 
    <hr>
    <br>
<table>

    <tr>
    <th><label for="Course name" >Course Name:</label></th>
    <th><input type="text" name="Cname" placeholder="Enter Course Name" class="name"></th>
    </tr>

    <tr>
    <th><label for="Guide name" >Guide Name:</label></th>
    <th><input type="text" name="Gname" placeholder="Enter Guide Name" class="name"></th>
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
    }</body>
</html>