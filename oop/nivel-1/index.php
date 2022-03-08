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
