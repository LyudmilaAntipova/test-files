<?php

abstract class Machine
{
     public $x = 0;
     public $y = 0;
     
     abstract public function move($x, $y, $z);
}



class Car extends Machine
{
    public function move($x, $y, $z = 0)
    {
        $this->x = $x;
        $this->y = $y;
    }
}

class Tractor extends Machine
{
    public function move($x, $y, $z = 0)
    {
        $this->x = $x/2;
        $this->y = $y/2;
    }
}

class SportCar extends Machine
{
    public function move($x, $y, $z = 0)
    {
        $this->x = $x * 2;
        $this->y = $y * 2;
    }
}

class Plane extends Machine
{
    public $z = 0;
    public function move($x, $y, $z)
    {
        $this->x = pow($x, 2);
        $this->y = pow($y, 2);
        $this->z = pow($z, 2);
    }
}

$car = new Car();
$car->move(5, 10);

$tractor = new Tractor();
$tractor->move(5, 10);

$sportCar = new SportCar();
$sportCar->move(5, 10);

$plane = new Plane();
$plane->move(5, 10, 15);


echo '<pre>';

print_r($car);
print_r($tractor);
print_r($sportCar);
print_r($plane);

echo '</pre>';


echo '<hr/>';


abstract class Machines
{
     public $x = 0;
     public $y = 0;
    
     abstract public function move($x, $y, $z);
}



class Cars extends Machines
{
    public function move($x, $y, $z = 0)
    {
       $this->_calcSpeed($x, $y);
    }
    
    private function _calcSpeed($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}

class Tractors extends Machines
{
    public function move($x, $y, $z = 0)
    {
        $this->_calcSpeed($x, $y);
    }
    
    private function _calcSpeed($x, $y)
    {
        $this->x = $x / 2;
        $this->y = $y / 2;
    }
    
}

class SportCars extends Machines
{
    public function move($x, $y, $z = 0)
    {
        
        $this->_calcSpeed($x, $y);
    }
    
    private function _calcSpeed($x, $y)
    {
        $this->x = $x * 2;
        $this->y = $y * 2;
    }        
}

class Planes extends Machines
{
    public $z = 0;
    public function move($x, $y, $z)
    {
        $this->_calcSpeed($x, $y, $z);
        
    }
    
    private function _calcSpeed($x, $y, $z)
    {
        $this->x = pow($x, 2);
        $this->y = pow($y, 2);
        $this->z = pow($z, 2);
    }
}

$car = new Car();
$car->move(5, 10);

$tractor = new Tractor();
$tractor->move(5, 10);

$sportCar = new SportCar();
$sportCar->move(5, 10);

$plane = new Plane();
$plane->move(5, 10, 15);


echo '<pre>';

print_r($car);
print_r($tractor);
print_r($sportCar);
print_r($plane);

echo '</pre>';


