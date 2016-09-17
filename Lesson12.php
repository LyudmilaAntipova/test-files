<?php

class Model
{
    public static $table = 'parent';
  
    public static function getTable()
    {
        return static::$table;
    }
}

class User extends Model
{
   public static $table = 'child';
}

echo User::getTable();



abstract class K
{
    public $year = 78;
    
    abstract public function test();
    
    public function getYear()
    {
        return $this->year;
    }        
            
}

class L extends K
{
    public function test()
    {
        echo 'Hello';
    }
}

$obj = new L();
echo $obj->getYear() . '<br />';
$obj->test();

echo '<hr/>';

interface A
{
    const COLOR = 'red';
    public function testA();
}

interface B
{
    const YEAR = 2015;
    public function testB();
}


interface C extends A, B
{
    
    
    //public function testA();
    //public function testB();
    public function testC();
}

interface D {
    public function testD();
}


interface E {
    public function testD();
}


abstract class F
{
    abstract public function testF();
    
    public function testG()
    {
        echo 'TestG<br />';
    }        
}


class Test extends F implements C,D,E 
{
    public function testA()
    {
        echo 'TestA<br />';
    }
    public function testB()
    {
        echo 'TestB<br />';
    }
    public function testC()
    {
        echo 'TestC<br />';
    }
    public function testD()
    {
        echo 'TestD<br />';
    }
    public function testF()
    {
        echo 'TestF<br />';
    }
//    public function testG()
//    {
//        echo 'TestG<br />';
//    }
}


$test = new Test();
$test->testA();
$test->testB();