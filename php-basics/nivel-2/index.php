      <h1 style="text-align:center; margin:30px;">PHP Exercises Level 2</h1>

<?php 

//Exercise -1
echo "Exercise -1";

//Function echoes sum of 2 variables, if values are equals doubles it.
function sum($x,$y)
{
    echo ($x == $y) ? ($x + $y) * 2 : $x + $y;
 
}
