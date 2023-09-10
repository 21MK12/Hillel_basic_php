<?php
$array = [];
$length = 20;
//наповнення масиву
for($i = 0; $i <= $length; $i++){
    array_push($array, rand(1,50));
}
var_dump($array);
//мінімальне та максимальне значення масиву
$min = min($array);
$max = max($array);
var_dump($min);
var_dump($max);
//сортовка масиву
$sort = array_multisort($array);
var_dump($array);