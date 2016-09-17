<?php
$list = array(array(15, 33), array(-57, "cool", true), array(5.67, NULL, "ok"));
echo $list[1][0]."<hr />";

$mas = array(array(2, -5, 33), array(-57, "cool", false), array(77, NULL, "strong"));

for($i=0; $i<count($mas); $i++)
{
	for($j=0; $j<count($mas[$i]); $j++){
	 
    echo $mas[$i][$j]." "; 
	}
	echo "<br />";
}
echo"<hr />";

$listik = array(5, 58, -355, 685, -5544); //поиск максимального элем в массиве.

$max = $listik[0];

for ($i = 0; $i < count($listik); $i++) {

    if ($listik[$i] > $max) {
	$max = $listik[$i];}
    
}
echo $max."<br />";

// с помощью функции
$listik = array(5, 58, -355, 685, -5544);
echo max($listik);



