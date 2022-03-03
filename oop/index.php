<?php

class Employee{
    
    private $name;
    private $salary;

    public function initialize($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function taxesCheck()
    {
        if($this->salary > 6000){
         echo $this->name . " pay taxes.";
         return;
        }
        echo $this->name . " does not pay taxes.";
    }

 
}

$mrJorge = new Employee();
$mrJorge->initialize("Jorge", 9000);
$mrJorge->taxesCheck();

echo '<br>';

$mrAstulfo = new Employee();
$mrAstulfo->initialize("Astulfo", 5999);
$mrAstulfo->taxesCheck();