<?php

//1)рекурсия числа 6
function fact($x) {
if ($x === 0)
    { 
    return 1;
    }
else {
    return $x*fact($x-1);
  }
}
echo fact(6);

echo '<hr/>';


//2)при помощи рекурсии вывести на экран все элементы массива, с каждой новой строки, не зависимо от вложенности

$arr = [1,2,4,7,[255,26,25],
          [58, 52, 885], 
         [12,[58,69], 45, 58]];

function f($arr, $index = 0){
    
    if($arr && isset($arr)) {
        
         echo '<pre>';
         print_r($arr[$index++]).'<br/>';
         echo '</pre>';
        
            if (count($arr) > $index) {
            
                  f($arr, $index);
            
             }     
}
}
f($arr);

echo '<hr/>';

//3)Cоздать массив объектов класса Test(). В классе тест есть свойство $prise.
// Отсортировать объекты в массиве по возростанию свойста $prise


class Test {
    
    public $prise;
     
    public function __construct($prise){
        
        $this->prise = $prise;
       
    }
    
    public static function prise_sort($a, $b) {
        
        if($a == $b){
            return 0;
        } 
         return ($a < $b) ? -1 : 1;
    }
} 

$obj1 = new Test(5);
$obj2 = new Test(3);
$obj3 = new Test(9);
$obj4 = new Test(7);
$obj5 = new Test(1);

$array = [$obj1, $obj2, $obj3, $obj4, $obj5];

$callback = ["Test", "prise_sort"];
usort($array, $callback);  

foreach ($array as $item) {
    echo $item->prise . '<br/>';
}