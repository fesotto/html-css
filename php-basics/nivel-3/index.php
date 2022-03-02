
      <h1 style="text-align:center; margin:30px;">PHP Exercises Level 3</h1>

<?php 

//Exercise -1
echo "Exercise -1";

//Convert a tring to an array without blank spaces
function stringToArray($string){
      $string = str_replace(' ', '', $string);
      var_dump(str_split($string));
}
//stringToArray("any sentence will be an array with no spaces between letters");

echo '<br>';
echo '<br>';


//Exercise -2
echo "Exercise -2";
echo '<br>';

function repeate_values($array){
   $values = array_count_values($array);
       foreach ($values  as $key => $val) {
        $string_times = "times";
             if($val < 2){
               $string_times = "time";
             }
              
        echo "$key apperas $val $string_times in the array.<br>" ;    
      }
}
$my_array = array(12,43,66,21,56,43,43,78,78,100,43,43,43,21);
repeate_values($my_array);
echo '<br>';
echo '<br>';


//Exercise -3
echo "Exercise -3";
echo '<br>';


$array_int = array(10,20,30,40,50);

//Remove element from array by value
 function remove_by_value($array,$value){
    
      foreach($array as $v){
         if($value === $v){
            $array = array_diff($array, array($v));
         }
      }
      var_dump($array);
}

$val = 30;
var_dump($array_int);
remove_by_value($array_int,$val);

