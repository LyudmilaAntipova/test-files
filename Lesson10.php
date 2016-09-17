<?php
// функция принимает объекты только данного класса
 class Test3
{
    
}

$obj = new Test3();
$var = 'str';


function getProp(Test3 $arr)
{
    
}

// запретить клонирование: сделать метод приватным

//class Test1
//{
//    private function __clone(){}        
//}
//
//
//
//$a = new Test1();
//$b = clone $a; - так уже нельзя сделать

echo '<hr/>';


// использовать объект, как функцию:

class Test2
{
    public function __invoke($param)
    {
        echo 'Hello, ' . $param;
    }
    
    public function __toString()
    {
        return 'Hello';
    }
}



$a = new Test2();

$a('Alex');


echo '<hr/>';


// исключения:

$a = 0;

class MyException extends Exception 
{
    
}

try {

    if($a == 0) {
        throw new Exception('Error', 35);
    }
    if($a == 35) {
        throw new MyException('Error', 35);
    }
}

catch(MyException $e)
{
    echo $e->getMessage() . ' timeout' . '<br />';
}
catch(Exception $e)
{
    echo $e->getMessage() . ' connected' . '<br />';
}


echo '<hr/>';


$c = function ($param){
    echo $param;
};

$c(5);


echo '<hr/>';


//callback функция: 

$arr = [2,4,5,6,7,8]; 
 array_walk($arr, 
        function (&$val){
            $val = $val * $val;
        }
);

echo '<pre>';
print_r($arr);
echo '</pre>';



$arr = [2,4,5,6,7,8];

$a = function (&$val){
            $val = $val * $val;
        };

array_walk($arr, $a);
        
echo '<pre>';
print_r($arr);
echo '</pre>';


echo '<hr/>';




$c = 100;

$a = function ($a, $b) use ($c)
{
    echo $a . ' ' . $b . ' ' . $c;
};

$a(10, 50);


echo '<hr/>';



// singleton
// идея singleton: возвращать один и тот-же объект
class Test
{
    private static $_instance;
    
    public static function getInstance() {
        if(self::$_instance === NULL) {
            self::$_instance = new Test();
            return self::$_instance;
        }
        else {
            return self::$_instance;
        } 
    }
    
    private function __construct()
    {
        
    }
    
    private function __clone()
    {
        
    }
}

$obj = Test :: getInstance();

$obj2 = clone $obj;


if($obj === $obj2)
{
    echo 'Same object';
}
else {
    echo 'Different object';
}

//порождающие шаблоны возвращают объекты
//поведенческие шаблоны помогают выбрать нужный поведенческий алгоритм