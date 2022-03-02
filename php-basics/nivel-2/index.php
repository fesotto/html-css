      <h1 style="text-align:center; margin:30px;">PHP Exercises Level 2</h1>

<?php 

//Exercise -1
echo "Exercise -1";

//Function echoes sum of 2 variables, if values are equals doubles it.
function sum($x,$y)
{
    echo ($x == $y) ? ($x + $y) * 2 : $x + $y;
 
}

//Exercise -1
echo "Exercise -2";

//Given a string, make te last charachter first, and the first last. 
function replace($string)
{ 
    $first = $string[0];
    $last = substr($string, -1, 1);
   
    if(strlen($string) > 1){
      $string = substr_replace($string, $first, -1 ,strlen($string));
      $string = substr_replace($string, $last, 0 ,1);
      
      echo $string;
    }else{
        echo $string;
    }
    
} 
