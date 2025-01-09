<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 4: Functions </title>
</head>
<body>
   <?php 
   //function definition
//    function sayHello(){
//        echo "Hello World!";

//    }
    //function call
    $mytestvar= 9;
    function add($num1=3, $num2=8){
        global $mytestvar;
        $plus= $num1 + $num2+$mytestvar;
        return $plus;
    }
  echo  add();
  echo "<br>";
  echo  add(9,50);
//   Anonymous Functions
  $sayHello= function(){
      echo "Hello World!";
    };
    $sayHello();
echo "<hr>";
   ?> 
</body>
</html>