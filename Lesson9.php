<?php 

 class Machine
{
    public $year = 1983;
    public $color = 'red';
    private $_distance;
    private $_usage;
    
    public static $country = 'China';  
    
    
    public function getYear()
    {
        return $this->year;
    }
    
    protected function getColor()
    {
        return $this->color;
    }
    
    public static function getCountry()
    {
        return self ::$country;
    }        
    
}



class Auto extends Machine
{
    public $type;
    public $engineType;
    
    
    public function getType()
    {
        return $this->type;
    }
    
    public function getColor()
    {
        return $this->color . ' ' . $this->color;
    }  
}

echo Auto::$country;

echo Auto::getCountry();

$auto = new Auto();
echo $auto::$country;


Auto::$country = 'Japan';

echo Auto::getCountry();

Auto::COUNTRY == 'Germany';
echo Auto::COUNTRY;
//это константы



echo '<hr/>';


 abstract class Machines
{
    public $year = 1983;
    public $color = 'red';
    private $_quantity = 4;
    private $_quantitySpeed = 5;
    
    const COUNTRY = 'China';
    
    public function getYear()
    {
        return $this->year;
    }
    
    protected function getColor()
    {
        return $this->color;
    }
    
    public static function getCountry()
    {
        return self::$country;
    }
    
    public function getProperties()
    {
        return [
          'capacity' => $this->_getCapacity(),
          'color' => $this->color,
          'year' => $this->year  
        ];     
    }
    
    private function _getCapacity()
    {
        return $this->_quantity. ''. $this->_quantitySpeed;
    }        
    
}



class Autos extends Machines
{
    public $type;
    public $engineType;
    
    
    public function getType()
    {
        return $this->type;
    }
    
    public function getColor()
    {
        return $this->color . ' ' . $this->color;
    }  
}

$auto = new Autos();

print_r($auto->getProperties());


echo '<hr/>';


abstract class Machine1
{
    public $year = 1983;
    public $color = 'red';
    private $_quantity = 4;
    private $_quantitySpeed = 5;
    //public static $country = 'China';  
    
    const COUNTRY = 'China';
    
    public function getYear()
    {
        return $this->year;
    }
    
    protected function getColor()
    {
        return $this->color;
    }
    
    public static function getCountry()
    {
        return self::$country;
    }
    
    public function getProperties()
    {
        return [
          'capacity' => $this->_getCapacity(),
          'color' => $this->color,
          'year' => $this->year  
        ];    

            
        //return $this->color;
    }
    
    private function _getCapacity()
    {
        return $this->_quantity ;
    }        
    
}



class Auto1 extends Machine1
{
    public $type;
    public $engineType;
    
    
    public function getType()
    {
        return $this->type;
    }
    
    public function getColor()
    {
        return $this->color . ' ' . $this->color;
    }  
}

$auto = new Auto1();

print_r($auto->getProperties());


 