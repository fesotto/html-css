<h1 style="text-align:center; margin:30px;">PHP Exercises Level 1</h1>

<?php 

//Exercise -1
echo "Exercise -1";
echo '<br>';
echo '<br>';


$a_integer = 5;
$a_double = 45.34;
$a_string = "String Example";
$a_boolean = true;

echo "Integer Variable: " . $a_integer . '<br>' ;

echo "Double Variable: " . $a_double . '<br>' ;

echo "String Variable: " . $a_string . '<br>' ;

echo "Boolean True Variable: " . $a_boolean . '<br>' ;
echo '<br>';
echo '<br>';


//Exercise -2
echo "Exercise -2";
echo '<br>';
echo '<br>';

$hello_variable = "Hello World!";
echo "Hello Variable: " .  $hello_variable . '<br>';

echo "Hello Variable To Upper: " . strtoupper($hello_variable) . '<br>';
echo "Hello Variable Char Length: " . strlen($hello_variable)  . '<br>';
echo "Hello Variable Reverse: " . strrev($hello_variable) . '<br>';

$curs_variable = "Aquest és el curs de PHP.";

echo $hello_variable . ' ' . $curs_variable;
echo '<br>';
echo '<br>';


//Exercise -3
echo "Exercise -3";
echo '<br>';
echo '<br>';

define('MY_NAME',"Jefferson Otto");

echo '<h1><strong>'. 
'My Name is: ' .
MY_NAME . 
'</strong></h1>';
echo '<br>';
echo '<br>';

//Exercise -4
echo "Exercise -4";
echo '<br>';
echo '<br>';

$x = 8;
$y = 6;

$n = 8.3;
$m = 6.2;

echo "X value: ". $x . '<br>';
echo "Y value: ". $y . '<br>';
echo '<br>';

$suma_x_y = $x + $y;
$rest_x_y = $x - $y;
$multiply_x_y = $x * $y;
$module_x_y = $x % $y;

echo "Adding  x y: " . $suma_x_y . '<br>';
echo "Resting  x y: " . $rest_x_y . '<br>';
echo "Mulyiplying  x y: " . $multiply_x_y . '<br>';
echo "Module  x y: " . $module_x_y . '<br>';
echo '<br>';
echo '<br>';

echo "N value: ". $n . '<br>';
echo "M value: ". $m . '<br>';
echo '<br>';

$suma_n_m = $n + $m;
$rest_n_m = $n - $m;
$multiply_n_m = $n * $m;
$module_n_m = $n % $m;

echo "Adding n m: " . $suma_n_m . '<br>';
echo "Resting n m: " . $rest_n_m . '<br>';
echo "Mulyiplying n m: " .$multiply_n_m . '<br>';
echo "Module n m: " . $module_n_m . '<br>';
echo '<br>';


$double = 2;

echo "Double x: " . $x * $double . '<br>';
echo "Double y: " . $y * $double . '<br>';
echo "Double n: " . $n * $double . '<br>';
echo "Double m: " . $m * $double . '<br>';
echo '<br>';

$total_sum = $x + $y + $n + $m;
echo "Total adding: " . $total_sum . '<br>';
$total_multiply = $x * $y * $n * $m;
echo "Total multiplying: " . $total_multiply . '<br>';
echo '<br>';
echo '<br>';


//Exercise -5
echo "Exercise -5";
echo '<br>';
echo '<br>';

$array_integer_1 = array(4,30,19,1,32);
$array_integer_2 = array(5,73,21);
$array_integer_2[] = 4;


$unic_array = array_merge($array_integer_1,$array_integer_2);
echo '<br>';
echo '<br>';

echo "Total size array: " . count($unic_array);
echo '<br>';
echo '<br>';


echo "Print all array elements: ";
print_r($unic_array) ;



?>


