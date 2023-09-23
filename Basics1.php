<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basics1</title>
</head>
<body>
    <?php
    $age = 34;
    if($age>=18){
        echo "You can go to the party";
    }
    else if($age>60){
        echo "You may rest at home";
    }
    else{
        echo "You may not go to the party";
    }
   echo "<br>";
    //Array
    $languages = array("python","c++","php");
    //echo $languages;-->it will produce an error due to string to int conversion
    echo $languages[0];//it will print the item at 0th index
    //while loop
    $a = 0;
    while($a<10){
        echo "<br>The value of $a is: ";
        echo $a;
        $a++;
    }
    $i = 0;
    while($i<count($languages)){
        echo "<br>The content present at index ".$i;
        echo $languages[$i];
        $i++;

    }
    foreach($languages as $values){//it is helpfull in iterating in an array. 
        echo "<br>The value using foreach loop is ";
        echo $values;
    }
    //Function
    function print_number($number){
        echo "<br>Your number is ";
        echo $number;
    }
    print_number(5);//calling the function.
    //strings
    $str = "This is a string";
    echo $str;
    $lenn = strlen($str);//this in built function gives the length of the string.
    echo "<br>The length of the string is: ".$lenn;//dot is the string concatenation operator.
    echo "<br>The number of words in the string is: ".str_word_count($str);//this function print the words present in string
    echo "<br>The reverse string is: ".strrev($str);
    echo "<br>The search for is in this string is: ".strpos($str,"is");//returns the position of is iin string.
    echo "<br>The replaced string is: ".str_replace("This","It",$str);
    *


    ?>
</body>
</html>