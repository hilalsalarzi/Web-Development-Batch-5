<?php 
echo "<h1>hello world hiii</h1>";
// echo "<br>";
echo "<h1>hello world hiii</h1>";
echo "<span>hello world hiii</span>";
echo "<br>";?>
<h1>hello</h1>
<?php
$name="hilal";
echo $name;
$inthlajdfasjf=44;
$intfloat=44.44;
echo $intfloat;
$bolian=true;
echo $bolian;
gettype($bolian);
echo gettype($bolian);
echo "<br>";
// i want declare array 
$myarray=array(1,2,3,4,5,6,7,8,9,10);
echo $myarray[9];
$a=13;
$b=10;
$c=$a/$b;
echo $c;
echo "<br>";
$d=(int)$c;
echo $d;
echo "<br>";
define('SITE_NAME', 'My Website');
echo SITE_NAME;
echo "<br>";
// if condition 
$age=19;
if(  $age!=60){
    echo "you are adult";
}

elseif($age==18){
    echo "you are 18";
}
else{
    echo "you are not adult";
}
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
// //  for loop 
// for($i=0; $i<10; $i++){
//     echo $i;
//     echo "<br>";
// }
//nested loop in for loop
for($i=1; $i<10; $i++){

    for($j=0; $j<2; $j++){
       
        echo "<br> inside <br>";
    }
    echo "round".$i."<br>";
}
echo "<hr>";
 echo "<br>";
 // while loop
    $i=0;
    while($i<10){
        echo $i;
        echo "<br>";
        $i++;
    }
    echo "<br>";
    // do while loop
    $i=11;
    do{
        echo $i;
        echo "<br>";
        $i++;
    }while($i<10);
    echo "<br>";
    // foreach loop
    $myarrycount=array(1,2,3,4,5,6,7,8,9,10);
   echo  count ($myarrycount);
echo "<br>";
    $fruits = array('apple', 'banana', 'mango', 'orange');
    foreach($fruits as $fruitww){
        echo $fruitww;
        echo "<br>";
    }
?>


