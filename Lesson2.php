<?php
//соединить 2 массива
$mas1 = array (5, 6, 7, 8, 9);
$mas2 = array(-10, -20, -30, -40);


$mas3 = $mas1;

$count = count($mas2);
for($i = 0; $i < $count; $i++)
{
    $mas3[] = $mas2[$i];
}

echo '<pre>';
print_r($mas3);
echo '</pre>';


echo '<hr />';


//найти колличество счастливых билетов
$i = 0;
$sum = 0;
while($i < 1000000){

$result = "";
$zero = 6 - strlen($i);

for($zero; $zero > 0; $zero--){
$result .= 0;
}

$result .= $i;

$first = $result[0] + $result[1] + $result[2];
$second = $result[3] + $result[4] + $result[5];

if($first == $second){
    $sum+=1;
}

$i++;

}
 echo $sum. '- is a happy tickets!';

 
 