<h1 style="text-align:center; margin:30px;">Functions & Control Structures Level 2</h1>

<?php 

//Exercise -1
echo "Exercise -1";
echo '<br>';
echo '<br>';

//Show olimpic games years since 1960
function olimipcs()
{
  $since = date('Y', strtotime('-62 years'));
  $till = date('Y', strtotime('-6 years'));
    
  for($i = $since; $i <= $till; $i+=4){
      echo $i . '<br>';
  }

}

echo "Olimpic games since 1960";
echo '<br>';
olimipcs();
echo '<br>';
echo '<br>';

//Exercise -2
echo "Exercise -2";
echo '<br>';


//Phone call price
function toPay($minutes)
{ 
     $to_pay = 0;
     
     if($minutes <= 3){
      echo $to_pay += .10;
    }else{
      for($i = 4; $i <= $minutes; $i++){
         $to_pay += .05; 
      }
      echo  $to_pay + .10 ;
    }

   

}
toPay(10);
echo '<br>';
echo '<br>';


//Exercise -3
echo "Exercise -3";


//Calc chucherías
function chucheShoping($n, $name)
{ 
   
    switch ($name) {
      
       case 'chocolat':
            $price = 1;
           return  $price * $n;
            break;
        case 'chiclet':
            $price = .50;
           return  $price * $n;
            break;
        case 'candy':
            $price = 1.50;
           return  $price * $n;
            break;
   }
   
     
}
echo '<br>';
$totalCandy = 
chucheShoping(2,'candy') +
chucheShoping(4,'chiclet') +
chucheShoping(8,'chocolat') ;
echo $totalCandy;



