<?php

include('Message.php');
class Account extends Message 
{
    private $name;
    private $givenName;
    private $balance;

    /*
       For testing withdraw and deposit only let name and givenName as default empty
       to avoid errors in class initialization
    */
    public function __construct($name = " ", $givenName = " ")
    {
        $this->name = $name;
        $this->givenName = $givenName;
        $this->balance = 0;
    }

   public function withdraw($amount)
    {
        
        $this->message("Valor de reintegro ${$amount}.", 'success');
        $this->balance -= $amount;
    }

    public function deposit($amount)
    {
        $this->message("Desposito del valor ${$amount} realizado correctamente.", 'success');
        return $this->balance += $amount;
    }

  
    public function getBalance()
    {
        return $this->balance;
    }

    public function getName()
    {
        return $this->name + $this->givenName;
    }


    public function validateWidthdraw($value)
    { 
        //repeated code
        if(!isset($value) || trim($value) === ''){
        return  $this->message("Por favor introduce un valor", 'warning'); 
          }
          
        
        if ($value > $this->balance) {
            $this->message('No funds.','warning');
            return;
        }

        if ($value <= 0) {
            $this->message('Cantidad tiene que ser maior que 0.', 'warning');
            return;
         }


         $this->withdraw($value);
        
    }
    

    public function validateDeposit($value)
    {
         //repeated code
        if(!isset($value) || trim($value) === ''){
            return  $this->message("Por favor introduce un valor", 'warning'); 
       }
       
        if ($value <= 0) {
            $this->message('Cantidad tiene que ser maior que 0.', 'warning');
            return;
         }

         $this->deposit($value);
        
    }

    
}
