<?php
class Auto
{
    public $driver;
    
    public function getDriver()
    {
        return $this->driver;
    }
    
    public function __construct(Driver $drv)
    {
        $this->driver = $drv;
    }
}

class Driver
{
    public $name;
    
    public function getName()
    {
        return $this->name;
    }
    
    public function __construct($name)
    {
        $this->name = $name;
    }
}


$driver = new Driver('Alex');
$auto = new Auto($driver);




$name = $auto->getDriver()->getName();





















