<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <!-- <link rel="stylesheet" href="styles.css"> -->
</head>
<body>
    <!-- <div class="container"> -->
    <h1><b>TRAINEE</b></h1>
    <p><b>Please fill up the following details</b></p>
        <hr>
        <form action = "http://localhost/manvi/trainee1.php" method="post">

            <table>
                <tr>
                  <td><label for="name" >Trainee Name:</label></td>
                  <td><input type="text" name="name" placeholder="Enter Your Name" class="abc"></td>
                 
                </tr>
                <tr>
                  <td><label for="clg" >College Name:</label></td>
                  <td><input type="text" name="clg" placeholder="Enter Your College" class="abc"></td>
                  
                </tr>
                <tr>
                  <td> <label for="course" >Course Name:</label></td>
                  <td> <input type="text" name="course" placeholder="Enter Your Course" class="abc"></td>
                
                </tr>
                <tr>
                    <td> <label for="dept" >Department Name:</label></td>
                    <td> <input type="text" name="dept" placeholder="Enter Your Department" class="abc"></td>
                  
                  </tr>
                  <tr>
                    <td> <label for="guide" >Guide Name:</label></td>
                    <td> <input type="text" name="guide" placeholder="Enter Your guide" class="abc"></td>
                  
                  </tr>
                  <tr>
                    <td>  <input type="submit" name="submit" placeholder="Submit" class="submit"></td>
                    
                  </tr>
              </table>


        </form>
    
</body>

<style>
*{
    margin:0px;
    padding:0px;
    box-sizing: 100%;
   
}
body{
    background-color: rgb(217, 201, 231);
    margin:10px 30px;
}
p{
     margin:15px 5px;
     
}
.abc{
    margin:5px 30px;
}
.submit{
  margin:5px 0px;
}
</style>  
</html>