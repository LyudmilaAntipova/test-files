<?php

$arr = array(35, 'Metal', 'key' => -15);

foreach($arr as $key => $value) {
    echo $key . ' => ' . $arr[$key] . '<br />';
}

echo '<hr />';

$mas = array(1,2,3,4,5,6);

$sum = 0;

foreach ($mas as $value) {
    $sum += $value;
}
echo $sum/count($mas);

echo '<hr />';

$mas1 = array(array(1,2,3,4,5,6),
             array(1,2,3,4,5,6));
foreach($mas1 as $value) {
    foreach ($value as $val) {
        echo $val . ' ';
    }
    echo '<br />';
}

echo '<hr />';

$val1 = 1;// переменные ссылки - ссылается на одну и туж е ячейку памяти.
$value = &$val1;

$value += 3;

echo $val1;

echo '<hr />';


$arr = array(1,2,3,4,5);

foreach($arr as $index => &$value) {
    $value += 3;
}
echo '<pre>';
print_r($arr);
echo '</pre>';