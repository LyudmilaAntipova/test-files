<?php
class Test {
 
    public $start = 4;
    
    public $year = 1990;
    
    function __isset($name)
    {
        echo 'Try to check variable "nonExistProp"';
    }
    
    //getter
    function getYear()
    {
        return $this->year;    
    }
    
    //setter
    function setYear($value)
    {
        $this->year = $value;
    }
}

$a = new Test();

//echo $a->year;
echo $a->getYear();

//$a->year = 2000;
$a->setYear(2000);

echo '<br />';
echo $a->getYear();


echo '<hr/>';



class Machine1
{
    public $year = 1990;
    public $color = 'white';
    
    function getYear()
    {
        return $this->year;
    }
    
    function getColor()
    {
        return $this->color;
    }
    
    function getMessage($name)
    {
        echo $name . 'From Machine1 <br />';
    }
    
}

class Auto extends Machine1
{
    public $type;
    public $engineType;
    
    function getType()
    {
        return $this->type;
    }
    
    function getEngineType()
    {
        return $this->engineType;
    }
    
    function getMessage()
    {
        echo parent::getMessage('Masha');
    }
}


$auto = new Auto();
echo $auto->getMessage();


echo '<hr/>';


class Machine2
{
    public $year = 1990;
    public $color = 'white';
    private $_distance = 10000;
    
    
    public function getYear()
    {
        return $this->year;
    }
    
    public function getColor()
    {
        return $this->color;
    }
    
    public function getMessage($name)
    {
        echo $name . 'From Machine <br />';
    }
    
    public function getDistance()
    {
        return $this->_distance;
    }        
    
}




class Auto2 extends Machine2
{
    public $type;
    public $engineType;
    
    public function getType()
    {
        return $this->type;
    }
    
    public function getEngineType()
    {
        return $this->engineType;
    }
    
    public function getMessage()
    {
        echo parent::getMessage('Masha');
    }
    
    public function getDistanceFromAuto()
    {
        return $this->_distance;
    }
}


//$machine = new Machine();
//echo $machine->getDistance();

//$auto = new Auto();
//echo $auto->getDistanceFromAuto();


$auto = new Auto2();
echo $auto->getDistance();


echo '<hr/>';




