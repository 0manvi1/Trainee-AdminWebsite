<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>New Trainee Details</h2> 
        <hr>
        <form action="POST">

            <table>
                <tr>
                  <th><label for="name" >Trainee Name:</label></th>
                  <th><input type="text" name="name" placeholder="Enter Your Name" class="name"></th>
                 
                </tr>
                <tr>
                  <td><label for="clg" >College Name:</label></td>
                  <td><input type="text" name="clg" placeholder="Enter Your College" class="clg"></td>
                  
                </tr>
                <tr>
                  <td> <label for="course" >Course Name:</label></td>
                  <td> <input type="text" name="course" placeholder="Enter Your Course" class="course"></td>
                
                </tr>
                <tr>
                    <td> <label for="dept" >Department Name:</label></td>
                    <td> <input type="text" name="dept" placeholder="Enter Your Department" class="dept"></td>
                  
                  </tr>
                  <tr>
                    <td> <label for="clg" >Guide Name:</label></td>
                    <td> <input type="text" name="guide" placeholder="Enter Your guide" class="guide"></td>
                  
                  </tr>
                  <tr>
                    <td>  <input type="submit" name="submit" placeholder="Submit" class="submit"></td>
                    
                  </tr>
              </table>


        </form>
    </div>
</body>
</html>