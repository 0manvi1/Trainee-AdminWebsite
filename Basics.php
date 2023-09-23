<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "This is php" ?></title>
</head>
<body>

    <?php
    define('PI',3.14);//defining a constant ,it is a good practice to do it in the starting of php tag.
    //php is not case sensetive.
      echo "This line is displayed using php";
      //single line comment.
      /*
      This is a multiline comment
      */
      $variable = 34;//in php we do not need to explicitly declare the datatype.
      $variable1 = 34;
      echo "<br>";//printing new line.
      echo $variable+$variable1;
      //comparison operator
      echo "<br>";
      echo"The value of 1==5 is ";
      echo var_dump(1==5);//will give true or false
      //logical operator
      //and(&&), or(||), xor,!
      //datatypes(primary):string , integer, float, boolean, array, object
      echo "<br>";
      $ex = "This is a string";
      echo var_dump($ex);//var_dump is a function used to give info about variable.datatypes,length etcetra.
      //using the define keyword we can define a constant.
      echo "<br>";
      echo PI;
      echo "<br>";
      

    ?> 
    
</body>
</html>
