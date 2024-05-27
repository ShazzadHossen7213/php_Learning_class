<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Php</title>
</head>

<body>
<?php echo 'HELLO PHP'; ?> 
<?php 
$food = "pizza";
// $Food = "Pizza";
echo ' I love to eat' .$food . '<br>';
/*Shazzad Hossen*/
 $age = 10;
// $_age7 =10;
// $AGE = 10; 
echo 'My age is ' . $age . ' I read in Clas Two' . '<br>';
?>
<?php 
$x = 10;
$y = 20;

echo $x + $y . '<br>';
echo ($x + $y) . '<br>';
print $x + $y . '<br>';
print ($x + $y) . '<br>';

print $food;
$foods =print('Drinks');

echo $foods;
$name ='Shazzad'; // sring operation
$name ='Hossen';
$age  = 30;
$age1 = 30.2;
$religion =  true;
$people   = array('Apple', 'Banana', 'Plum');
$null = null;
var_dump($name);
var_dump($people);
var_dump($null);
class phone{
    var $model;
    function phoneModel ($number) {
        global $model;
        $model = $number;
        echo "This is $model <br>";
    }
}

$apple = new phone;
$apple-> phonemodel('iphpne 16');
$samsung = new phone;
$samsung-> phonemodel('s23 ultra');
$lg = new phone;
$lg->  phonemodel('upcomming');
?>
<?php

?>
</body>
</html>