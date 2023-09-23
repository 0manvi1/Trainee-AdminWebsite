<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="style.sheet">
</head>
<body>
    <h1><b>ADMIN</b></h1>
    <p><b>Please fill up the following details</b></p>
    <hr>
    <form action="http://localhost/manvi/admin1.php" method="post">

        <table>
            <tr>
              <th><label for="ProjectDetails" ><b>Enter Project Details:</b></label></th>
              <th><input type="text" name="ProjectDetails" placeholder="Project Details" class ="abc" required> <br></th>
           
            </tr>
            <tr>
              <td><label for="Dname" ><b>Enter Department:</b></Details></label></td>
              <td><input type="text" name="Dname" placeholder="Your Department" class ="abc" required> <br></td>
              
            </tr>
            <tr>
              <td><label for="Gname" ><b>Enter Guide Name:</b></Details></label></td>
              <td><input type="text" name="Gname" placeholder="Guide name" class ="abc" required> <br></td>
             
             
            </tr>

            <tr>
                <td><input type="submit" name="submit" placeholder="submit" class = "submit"></td> 
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

