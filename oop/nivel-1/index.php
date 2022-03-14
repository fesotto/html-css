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
        if($this->salary >= 6000){
         print $this->name . " pay taxes.";
         
        }else{
            print $this->name . " does not pay taxes.";
        }
        
    }
}

$juanjo = new Employee();
$juanjo->initialize("Juanjo", 5999);
$juanjo->taxesCheck();
echo '<br>';
$tina = new Employee();
$tina->initialize("Tina", 6001);
$tina->taxesCheck();

echo '<br>';
echo '<br>';

//Exercise -2
echo "Exercise -2";
echo '<br>';
echo '<br>';

class Shape{

    protected $width;
    protected $height;
    protected $area;
    private $title;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }


    public function printArea(){
       
        print $this->title;
        print $this->area;

    }

}

class Triangle extends Shape{
     
    public function __construct($width,$heigt,$title) {
        
        Shape::__construct($width,$heigt);
        $this->title = $title;

    }
    private function areaCalc()
    {
        
         return $this->area = ($this->width * $this->height) / 2;
    
    }

    public function showResult()
    {
        print $this->title;
        print$this->areaCalc();

    }
}

$tri = new Triangle(1.5,33,"Area Triangulo ");
$tri->showResult();
echo '<br>';


class Rectangle extends Shape{

    public function __construct($width,$heigt,$title) {
        
        Shape::__construct($width,$heigt);
        $this->title = $title;

    }
    private function areaCalc()
    {
        
         return $this->area = $this->width * $this->height;
    
    }


    public function showResult()
    {
        print $this->title;
        print $this->areaCalc();

    }

}

$rectangle = new Rectangle(1.5,33,"Area Rectangle  ");
$rectangle->showResult();