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







?>


