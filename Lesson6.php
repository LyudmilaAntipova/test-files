<?php
//колличество посещений через куки
if(isset($_COOKIE['count'])) {
    setcookie('count', ++$_COOKIE['count']);
    echo $_COOKIE['count'];
}
else {
    setcookie('count', 1);
    echo 1;
}

echo '<br/>';


//колличество посещений через сессии
session_start();
if(isset($_SESSION['count'])) {
   $_SESSION['count'] += 1; 
}
else {
   $_SESSION['count']  = 1;
}
echo $_SESSION['count'];