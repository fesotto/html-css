  <h1 style="text-align:center; margin:30px;">PHP OOP Exercises Level 1</h1>

<?php

//Exercise -1
echo "Exercise -1";
echo '<br>';
echo '<br>';

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

//Exercise -2
echo "Exercise -2";
echo '<br>';
echo '<br>';

class Shape{

    protected $width;
    protected $height;
    protected $area;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }


    public function printArea(){
        echo $this->area;

    }

}

class Triangle extends Shape{
     
    private $title;
    
    public function __construct($width,$heigt,$title) {
        
        Shape::__construct($width,$heigt);
        $this->title = $title;

    }
    public function areaCalc()
    {
         echo $this->title;
         $this->area = ($this->width * $this->height) / 2;
    
    }
}

class Rectangle extends Shape{

    private $title;
    
    public function __construct($width,$heigt,$title) {
        
        Shape::__construct($width,$heigt);
        $this->title = $title;

    }
    public function areaCalc()
    {
         echo $this->title;
         $this->area = $this->width * $this->height;
    
    }

}


$t = new Triangle(6, 30, "Area Triangulo ");
$t->areaCalc();
$t->printArea();

echo '<br>';

$r = new Rectangle(3,50.5, "Area Rectangulo ");
$r->areaCalc();
$r->printArea();