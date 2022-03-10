<h1 style="text-align:center; margin:30px;">Functions $ Control Structures Level 1</h1>

<?php 

//Exercise -1
echo "Exercise -1";
echo '<br>';


//returns number being even or odd
function even($n)
{
   if($n % 2 === 0){
       echo $n . " is even";
   }else{
      echo  $n . " is odd";
   }
 
}

even(105);
echo '<br>';
even(50);

echo '<br>';
echo '<br>';


//Exercise -2
echo "Exercise -2";
echo '<br>';


//cheating in count to 10
function countToTen()
{
   for($i = 0; $i <= 10; $i +=2){
       if($i == 0){
           continue;
       }
       echo $i;
   }
}
countToTen();

echo '<br>';
echo '<br>';


//Exercise -3
echo "Exercise -3";
echo '<br>';


//cheating in counting any number
function countToNumber($n)
{
   for($i = 0; $i <= $n; $i ++){
       if($i == 0){
           continue;
       }
       echo $i;
   }
}
countToNumber(35);

echo '<br>';
echo '<br>';


//Exercise -4
echo "Exercise -4";
echo '<br>';


//cheating in counting any number with default parameter
function countDefault($n = 10)
{
   for($i = 0; $i <= $n; $i ++){
       if($i == 0){
           continue;
       }
       echo $i;
   }
}

countDefault();
countDefault(45);

echo '<br>';
echo '<br>';



//Exercise -5
echo "Exercise -5";
echo '<br>';


//Student grade
function grade($number)
{ 
    $result =  ($number * 1000) / 100;
    
  if($result <= 33){
    echo "Not aproved";
  }elseif($result <= 44){
    echo "Third division";
  }elseif($result <= 59){
    echo "Second division";
  }else{
    echo "First division";
  }
 
}

grade(6.8);
echo '<br>';
grade(3.0);

echo '<br>';
echo '<br>';


//Exercise -6
echo "Exercise -6";
echo '<br>';


//Student grade
function isBitten()
{ 
   $p = mt_rand(0,1);

   if($p){
       echo "bitten";
   }else{
       echo "not bitten";
 }
 
}
isBitten();

echo '<br>';
echo '<br>';




