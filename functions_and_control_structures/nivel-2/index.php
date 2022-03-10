<h1 style="text-align:center; margin:30px;">Functions & Control Structures Level 1</h1>

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



