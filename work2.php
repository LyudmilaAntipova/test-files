<?php

// вывести элементы в обратном поряке
$list1 = array(36, 58, 45, 85 ,69, 14, 32, 87);
$count1 = count($list1)-1;
for ($i = $count1; $i >=0; $i--)
{
    echo $list1[$i].'<br />';
}

echo '<br />';

//с помощью функции
$list1 = array(36, 58, 45, 85 ,69, 14, 32, 87);
$revers = array_reverse($list1);
print_r($revers);

echo '<hr />';

//вывести только четные элементы
$list2 = array(36, 58, 45, 85 ,69, 14, 32, 87);
$count2 = count($list2);
for ($i = 0; $i < $count2; $i++ )
{
    if($list2[$i] % 2 == 0)
    {
         echo $list2[$i].'<br />';
    }
    
}
echo '<br />';

//с помощью foreach
$list2 = array(36, 58, 45, 85 ,69, 14, 32, 87);

foreach($list2 as $key => $value) {
    if($list2[$key] % 2 == 0)
    {
         echo $list2[$key].'<br />';
    }
}

echo '<hr />';

//вывести только не четные элементы:

$list3 = array(36, 58, 45, 85 ,69, 14, 32, 87);
$count3 = count($list3);
for ($i = 0; $i < $count3; $i++ )
{
    if($list3[$i] % 2 !== 0)
    {
        
         echo $list3[$i].'<br />';
    }
    
}

echo '<br />';

//с помощью foreach
$list2 = array(36, 58, 45, 85 ,69, 14, 32, 87);

foreach($list3 as $key => $value) {
    if($list3[$key] % 2 !== 0)
    {
         echo $list3[$key].'<br />';
    }
}


echo '<hr />';


//вывести сумму элементов массива
$list4 = array(36, 58, 45, 85 ,69, 14, 32, 87);
$count4 = count($list4);
$sum = 0;
for ($i = 0; $i < $count4; $i++ )
{
    $sum += $list4[$i];
      
}
echo $sum;

echo '<br />';

//с помощью функции
$list4 = array(36, 58, 45, 85 ,69, 14, 32, 87);
echo array_sum($list4);