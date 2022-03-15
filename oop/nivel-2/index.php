<h1 style="text-align:center; margin:30px;">PHP OOP Exercises Level 2</h1>

<?php

class PokerDice{
    
    private $dice = ["A","K","Q","A","7","8"];
    private $thrwonDice;    
    private $face;
    private static $totalThrows = 0;


    private function throw()
    {
       return $this->thrwonDice = array_rand($this->dice);   
    }
    public function shapeName()
    {
        echo $face = $this->dice[$this->throw()];
    }

    private function throwNtimes()
    { 
            $dice = new self();

            for($i = 0 ; $i < 5; $i++){
             $this->totalThrows[$i] = $dice->throw();
             self::$totalThrows++;
            }

            return self::$totalThrows;
           
    }

    public  function  getTotalThrows()
    {
       return $this->throwNtimes();
    }

}




