<?php

// поменять местами значения в $а и $b
$a = 10;
$b = 20;

$b = [$a,$a = $b][0];

echo $a;
echo '<br />';
echo $b;

echo '<hr/>';

  function printArray($name)
{
    //$name = 'Металлист';
    echo 'О нас События Продукты Контакты <br />';
    echo '<br />';
    echo $name . ' - чемпион!<br /><br />';
}
$club = 'Динамо';
printArray($club);

echo '<hr />';

function printArray1($name = 'Спартак')
{
    //$name = 'Металлист';
    echo 'О нас События Продукты Контакты <br />';
    echo '<br />';
    echo $name . ' - чемпион!<br /><br />';
}

$club = 'Локомотив';
printArray1($club);

echo '<hr />';

 function sumParams($a, $b)
{
    return $a + $b;
}

$x = 5;
$y = 10;

$c = sumParams($x, $y);

echo $c + 3;

echo '<hr />';

 function sumParams1()
{
    $sum = 0;
    foreach(func_get_args() as $param) {
        $sum += $param;
    }
    return $sum;    
}

$x = 5;
$y = 10;
$z = 15;

$c = sumParams1($x, $y, $z, 56, 14);

var_dump($c);

echo '<hr />';

$mas1 = array(1,2,3,4);       
$mas2 = array(5,6,7,8);       
//$mas3 = array(9,10,11,12);

function mergeArray($arr1, $arr2)
{
    $resultArray = $arr1;
    foreach($arr2 as $value) {
        $resultArray[] = $value;
    }
    
    return $resultArray;
}


$result = mergeArray($mas1, $mas2);

echo '<pre>';
print_r($result);
echo '</pre>';

echo '<hr />';

$mas1 = array(1,2,3,4);       
$mas2 = array(5,6,7,8);       
$mas3 = array(9,10,11,12);       

function mergeArray1()
{
    $resultArray = array();
    
    $arrays = func_get_args();
    
    foreach($arrays as $array) {
        foreach ($array as $value) {
            $resultArray[] = $value;
        }
    }
    
    return $resultArray;

}

$result = mergeArray1($mas1, $mas3, $mas2);

echo '<pre>';
print_r($result);
echo '</pre>';

echo '<hr />';

$mas1 = array(1,2,3,4);       
$mas2 = array(5,6,7,8);       
$mas3 = array(9,10,11,12);       

function mergeArray2()
{
    $resultArray = array();
    
    foreach(func_get_args() as $array) {
        foreach ($array as $value) {
            $resultArray[] = $value;
        }
    }
    
    return $resultArray;

}

$result = mergeArray2($mas1, $mas3, $mas2);

echo '<pre>';
print_r($result);
echo '</pre>';

echo '<hr />';


 $mas1 = array(1,2,3,4);

function changeArray(&$arr)
{
    //$arr = $mas1;
    
    $arr[0] = 100;
   
}
changeArray($mas1);

echo '<pre>';
print_r($mas1);
echo '</pre>';