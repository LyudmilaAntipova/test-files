<?php

$mas = array(
    34, 
    45,
    're', 
    array(33, 44),
    array(69, 56, 87));
//echo '<pre>';
//print_r($mas);
//echo '<pre>';
 
echo 'isset($a): '.isset($a).'<br />';

echo '<hr/>';

$num = 1;
while ($num < 5)
{
    echo $num.'<br />';
   $num++;
}

echo '<hr />';


$a = 'p';
$a++;
echo $a;
echo "$a";
++$a;
echo "$a";
$a+=1;
echo "$a";
echo print($a);

echo '<hr />';


$note = 3;
switch ($note) {
    default:
        echo "c";
     case 1:
         echo "a";
         break;
     case 2 :
         echo "b";
}

echo ' <hr/>';

list($value, $array_size) = 0 ? 1: array("2", "3");
echo $value;
echo '<hr/>';


$a = array();
$a[1] = $a[] = $a[2] = true;
print_r($a[1]);

echo '<hr />';     

$arr = array(1, 3, 5);

$count = count($arr);

if ($count == 0)
{
    echo "Массив пуст.";
}
 else {
    echo "Массив состоит из $count элементов.";
 }
 echo '<hr />';

 
 for ($i = 0; $i < 5; $i++)
 {
     if ($i == 2) break;
     print ++$i;
 }
 echo '<hr />';
 
 
 $a = array();
 $a[1] = $a[] = $a[2] = true;
 print_r($a);
 echo '<hr />';
 
 $a = array(1, 3, 5);
  $b = array(2, 4, 6);
  $b += $a;
  print_r($b);
  echo '<hr />';
 
 if (-1) print "True";
 else print "False";
 echo '<hr />';
 
 
 $str = '1234567890';
 echo $str[$str[1]] - $str[$str[3]] + $str[$str[3]];
 echo '<hr />';
 
 $a = 9;
 $a = $a+ (++$a);
 echo $a;
 echo '<hr />';
 
 
 