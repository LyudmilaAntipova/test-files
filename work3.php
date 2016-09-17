<?php
//заполнить массив квадратами чисел из первого массива
$mas = array(2, 4, 6, 8, 9);
$mas1 = array();
$count = count($mas);
for($i = 0; $i < $count; $i++)
{
    $mas1[] = $mas[$i] * $mas[$i];
}
echo '<pre>';
print_r($mas1);
echo '</pre>';

echo '<br />'; 

// с помощью foreach
$mas = array(2, 4, 6, 8, 9);
$mas1 = array();
foreach($mas as $key => $value){
$mas1[] = $value * $value;
}
echo '<pre>';
print_r($mas1);
echo '</pre>';

echo '<hr />';

//вывести слова, где буква о встречается 2 и более раз.
$mass = array('oracle','stroka', 'moloko', 'ololo');
$massiv = array();

$count = count($mass);

for($i = 0; $i < $count; $i++)
{
 $length = strlen($mass[$i]);

    for($j = 0, $n = 0; $j < $length; $j++)
    {
        if($mass[$i]{$j} === 'o')
        {
            $n++;
        }
        if($n > 1)
        {
            $massiv[] = $mass[$i];
            $n = 0;
            break;
        }
    }
 }

echo '<pre>';
print_r($massiv);
echo '</pre>';

//с помощью функции
$mass = array('oracle','stroka', 'moloko', 'ololo');
$massiv = array();

$pos1 = stripos($mystring1, $mass);


for($i = 0; $i < $count; $i++)
{
 $length = strlen($mass[$i]);

    for($j = 0, $n = 0; $j < $length; $j++)
    {
        if($mass[$i]{$j} === 'o')
        {
            $n++;
        }
        if($n > 1)
        {
            $massiv[] = $mass[$i];
            $n = 0;
            break;
        }
    }
 }

echo '<pre>';
print_r($massiv);
echo '</pre>';


$findme    = 'a';
$mystring1 = 'xyz';
$mystring2 = 'ABC';

$pos1 = stripos($mystring1, $findme);
$pos2 = stripos($mystring2, $findme);


if ($pos1 === false) {
    echo "Строка '$findme' не найдена в строке '$mystring1'";
}

if ($pos2 !== false) {
    echo "Нашел '$findme' в '$mystring2' в позиции $pos2";
}