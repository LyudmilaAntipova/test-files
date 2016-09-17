<?php

 class Test1 {
    
     public $a = 5; 
    
    function getA(){ 
        
        echo 'Hello world';
        
    }
    
}
 $test1 = new Test1();
 
 $test1-> getA();
 
 
 echo '<hr/>';
 
 
 
 class Test2 {
    
   public $height = 1.80;
   
   public $wight = 60;
   
   public $color;
   
   
   function getHeight() {
       
       return $this->height . ' ' . $this->wight;
   }
}

$b = new Test2();

$b->height =  2.2;

echo $b->getHeight();


echo '<hr/>';



class Test3 {
    
    function __construct()
    {
        echo 'Create object<br />';
    } 
}

$a = new Test3();
$b = new Test3();
$c = new Test3();


echo '<hr/>';


class Test4 {
 
    public $start = 4;
    
    function getA() {
        echo $this -> start;
    }
            
    function __construct() {
        echo 'Create object' . '<br />';
   }
   
   function __destruct() {
       
       echo 'Delite object'; ;
   }
    
}

$a = new Test4();
echo $a -> getA();

echo '<hr/>';

class Test5 {
 
    public $start = 4;
    
    function getA(){
        echo $this->start . '<br />';
    }
    
    function __call($name, $arguments) {
        echo '<pre>';
        print_r([$name, $arguments]);
        echo '</pre>';
        
        
    }
    
}

$a = new Test5();
$a->getB(1, 2, 'string');

echo '<hr/>';


class Test6 {
 
    public $start = 4;
    
    function getA(){
        echo $this->start . '<br />';
    }
    
    function __call($name, $arguments) {
        echo '<pre>';
        print_r([$name, $arguments]);
        echo '</pre>';
        echo '<br />';
    }
    
}

$a = new Test6();
$a->getB(1, 2, 'string');
$a->getC(3, 4, 'rtrtrtrt');


echo '<hr/>';


class Test7 {
 
    public $start = 4;
    //var $notExistProp = 100;
    
    function getA($param){
        echo $param . ' ' . $this->start . '<br />';
    }
    
    function __get($name) {
        echo $name;
    }
    
}

$a = new Test7();
echo $a->notExistProp;

echo '<hr/>';


class Test8 {
 
    public $start = 4;
    //var $notExistProp = 100;
    
    function __set($name, $value)
    {
        echo '<pre>';
        print_r([$name, $value]);
        echo '</pre>';
    }
    function __get($name)
    {
        echo '<pre>';
        print_r([$name]);
        echo '</pre>';
    }
    
}

$a = new Test8();
$a->nonExistProp = 56;

echo '<hr/>';

class Test9 {
 
    public $start = 4;
    //var $notExistProp = 100;
    
    function __isset($name)
    {
        echo 'Try to check variable "nonExistProp"';
    }    
    
}

$a = new Test9();
if(!isset($a->nonExistProp)) {
    echo 'Hello, world!';
}