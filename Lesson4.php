<?php
// functions
$mas = array(1,2,3,4,5,6);

$var = 10;

if(   in_array($var, $mas)   ) {
    echo 'Exist!!!';
}
else {
    echo 'Not exist';
}

echo '<hr />';

$mas = array(1,2,3,4,5,6,7);

$result = array_chunk($mas, 3);


echo '<pre>';
print_r($result);
echo '</pre>';

echo '<hr />';

$mas = array(2,1,3,4,5,6,7, 1, 1, 2, 7);

$result = array_count_values($mas);


 

echo '<pre>';
print_r($result);
echo '</pre>';

echo '<hr />';

$mas = array_fill(100, 10, array(7,8,9));

echo '<pre>';
print_r($mas);
echo '</pre>';

echo '<hr />';

$mas1 = array(1, 2, 3, 4, 5);

$mas2 = array(4, 5, 6, 7, 8);



$result = array_diff($mas1, $mas2);


echo '<pre>';
print_r($result);
echo '</pre>';

echo '<hr />';

$mas1 = array(1, 2, 3, 4, 5);

$mas2 = array(4, 5, 6, 7, 8);

$result = array_intersect($mas1, $mas2);

echo '<pre>';
print_r($result);
echo '</pre>';

echo '<hr />';

$mas1 = array(1, 2, 'str4444'=> 3, 4, 5);

$result = array_key_exists('str', $mas1);

echo '<pre>';
var_dump($result);
echo '</pre>';

echo '<hr />';

$mas1 = array(1, 2, 3, 4, 5);

$result = array_pop($mas1);

echo '<pre>';
var_dump($result);
echo '</pre>';

echo '<pre>';
print_r($mas1);
echo '</pre>';

echo '<hr />';

$mas1 = array(1, 2, 3, 4, 5);

$result = array_push($mas1, 222, 555, 777, 888);

echo '<pre>';
var_dump($result);
echo '</pre>';

echo '<pre>';
print_r($mas1);
echo '</pre>';

echo '<hr />';

$mas1 = array(1, 2, 3, '2', '3', 5, 7, 8, 9, true);

$result = array_unique($mas1);

echo '<pre>';
print_r($mas1);
echo '</pre>';

echo '<pre>';
print_r($result);
echo '</pre>';