<?php
//Cookie
$visitCounter = 0;
if (isset($_COOKIE["visitCounter"])) {
    $visitCounter = $_COOKIE["visitCounter"];
}
$visitCounter++;

$lastVisit = '';
if (isset($_COOKIE["lastVisit"])) {
    $lastVisit = date( "d-m-Y H-i-s", $_COOKIE["lastVisit"]);
}

setcookie("visitCounter", $visitCounter);
setcookie("lastVisit", time());

if($visitCounter == 1) {
    echo 'Первое посещение';
}
else {
    echo "Вы зашли к нам $visitCounter раз";
    echo '<br/>';
    echo "Последнее посещение: $lastVisit";
}

echo '<hr/>';

//Session
session_start();
$visitor = 0;
if(!isset($_SESSION['visitor'])){
    $_SESSION['visitor'] = 0;
} 
$_SESSION['visitor']++;

if($_SESSION['visitor'] == 1) {
    echo 'Первое посещение';
}
else {
    $visitor = $_SESSION['visitor'];
    echo "Вы зашли к нам $visitor раз";
    echo '<br/>';
}