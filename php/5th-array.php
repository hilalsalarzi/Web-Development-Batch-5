<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>
<body>
    <?php 
    //indexed array
    $fruits= array("Apple", "Banana", "Orange", "Mango");
    echo $fruits[0];
    echo "<br>";
    // associative array
    $marks= array("Maths"=>90, "Science"=>80, "English"=>70);
    echo $marks["Maths"];
    foreach($marks as $valuerrr){
        echo "<br>";
        echo "Key is ".$keyhhh." and value is ".$valuerrr;
    }
    echo "<hr>";
foreach ($fruits as $index=>$values) {
    echo "<br>";
    echo "Index is ".$index." and value is ".$values;
    
}
    ?>
</body>
</html>