<?php
echo time().'<br />';
echo microtime(true).'<br />';
echo date("Y-m-d H:i:s").'<br />';

echo '<pre>';
print_r(getdate(1234567890));
echo '</pre>';

echo '<hr />';

$x = mktime(0, 0, 0, 2, 15, 1978);
echo '<pre>';
print_r(getdate($x));
echo '</pre>';

echo '<hr />';

 function foo(){
     echo 'Hello!';
 }
 $str = "foo";
 $str();
 
 echo '<hr />';
 
 print 2 + print 1;
 
 echo '<hr />';
 
 print 2 +strlen("hello");
 
  echo '<hr />'; 
  
 echo  __FILE__  ;
 
 echo '<hr />'; 
 
 echo  __DIR__  ;
 
 echo '<hr />'; 
 
