<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variables</title>
</head>
<body>
    <h1>variables in php </h1>
    <?php
    $name = "John";
    $age = 25;
    $height = 5.8;
    $isMale = false; //true
    $salary = true;
    define('SITE_NAME', 'wwww/ My Website');
    echo $name;
    echo "<br>";
    echo $age;
    echo "<br>";
    echo SITE_NAME;
    $SITE_NAME = 'HELLL';
    echo "<br>";
    echo $SITE_NAME;
    echo $height;
     $intheight= (int)$height;
    echo "<br>";
    echo $isMale ? 'true' : 'false';
    echo "<br>";
    echo $intheight;
    echo "<br>";
    echo gettype($salary);
    echo "<br>";  
    // SWITCH STATMENT 
    $day = '5';
    switch($day){
        case '1':
            echo "Monday";
            break;
        case 2:
            echo "Tuesday";
            break;
        case 3:
            echo "Wednesday";
            break;
        case 4:
            echo "Thursday";
            break;
        case 5:
            echo "Friday";
            break;
        case 6:
            echo "Saturday";
            break;
        case 7:
            echo "Sunday";
            break;
        default:
            echo "Invalid Day";
    }
    echo "<br>";
    // foreach loop 
    $fruits = array('apple', 'banana', 'mango', 'orange');
    foreach($fruits as $fruitww){
        echo $fruitww;
        echo "<br>";
    }
    // now i want to show index of array
    foreach($fruits as $key => $fruit){
        echo $key;
        echo "<br>";
        echo $fruit;
        echo "<br>";
    }
    print_r($fruits);
    ?>

</body>
</html>