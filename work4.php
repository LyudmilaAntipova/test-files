<?php
//вывести элементы по возростанию, отсортировать
$massiv = array(65, 1, 54, 21, 36, 98 ,87);

$count = count($massiv);

for ($i = 0; $i < $count; $i++)
{
    for ($j = $i + 1; $j < $count; $j++ )
    {     
    if($massiv[$i] > $massiv[$j])
      {
       $c = $massiv[$i];
       $massiv[$i] = $massiv[$j];
       $massiv[$j] = $c;
       }
    }
}
echo '<pre>';
print_r($massiv);
echo '</pre>';

echo '<br />';

//с помощью функции
$massiv = array(65, 1, 54, 21, 36, 98 ,87);
sort($massiv);
echo '<pre>';
print_r($massiv);
echo '</pre>';

echo '<hr />';

//вывести колличество гласных и согласных букв с помощью массива.
$mas = array(
    array('metallist','barcelona','milan'),
    array('arsenal','bavariya','chelsi'),
    array('liverpool','manchester'));

$arrayVowel = array('a','e','i','u','o','y');

$countVowelArray = count($arrayVowel);

$countLetterVowel = 0;

$countLetterConsonant = 0;

$count = count($mas);

//$res = [];

$result = array(array($countLetterVowel, $countLetterConsonant),
                array($countLetterVowel, $countLetterConsonant),
                array($countLetterVowel, $countLetterConsonant));

for($s = 0; $s < count($result); $s++)
{
	for($v = 0; $v < count($result[$s]); $v++){
	}
    }

for($i = 0; $i < $count; $i++){
    
    $count2 = count($mas[$i]);
    
  for($j = 0; $j < $count2; $j++){
      
$count3  = strlen($mas[$i][$j]);
  
    for($n = 0; $n < $count3; $n++){
  
     for($k = 0; $k < $countVowelArray; $k++){
         
         if( $mas[$i][$j][$n] == $arrayVowel[$k]){
             
             $countLetterVowel++;
             
             $result[$s][$v]= $countLetterVowel;
                  
             break;
         }
        else {
            if($k == $countVowelArray - 1){
                
             $countLetterConsonant++;
             
             $result[$s][$v] = $countLetterConsonant;
             
            }
         }
      }
    }
  }
}
 $result= array(array('Vowel'=> $countLetterVowel, 'Consonant' => $countLetterConsonant));
echo '<pre>';	 
print_r($result); 
echo '</pre>';


