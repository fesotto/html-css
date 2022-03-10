<h1 style="text-align:center; margin:30px;">Functions & Control Structures Level 3</h1>

<?php

//Exercise -1
echo "Exercise -1";
echo '<br>';
echo '<br>';

//Apply criba d'Eratóstenes 

function erastostenes($limit)
{
    $base = 2; 
 
    for ($i = $base; $i <= $limit; $i++) {
          $nDiv = 0; 
        for ($n = 1; $n <= $i; $n++) 
        {
            if ($i % $n == 0) 
            {
                $nDiv = $nDiv + 1; 
            }
        }
        if ($nDiv == 2 or $i == 1) 
        {
            print $i;
        }
    }

}
erastostenes(100);
