<?php
$mas = array(
             array('day' => 'night', 135, 'wind'),
             array(-7, 56, NULL, 8, true),
             array('city'=> 'Prague', 3, 55));

$a = file_put_contents('a.txt', serialize($mas));

var_dump($a);

echo '<hr/>';

$b = unserialize(file_get_contents('a.txt'));
echo '<pre>';
var_dump($b);
echo '<pre/>';