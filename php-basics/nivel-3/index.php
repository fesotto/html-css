
      <h1 style="text-align:center; margin:30px;">PHP Exercises Level 3</h1>

<?php 

//Exercise -1
echo "Exercise -1";

//Convert a tring to an array without blank spaces
function stringToArray($string)
{
      $string = str_replace(' ', '', $string);
      var_dump(str_split($string));
}
stringToArray("any sentence will be an array with no spaces between letters");


