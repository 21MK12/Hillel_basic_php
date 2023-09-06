<?php
//echo"введіть значення від 1 до нескінечності" . PHP_EOL;
//$value = fgets(STDIN);
//$massage = match ($value) {
//    '1' => 'green',
//    '2' => 'red',
//    '3' => 'blue',
//    '4' => 'brown',
//    '5' => 'violet',
//    '6' => 'black',
//    default => 'white',
//};
//echo $massage . PHP_EOL;

$a = -0;
$b = '-0';
$c = true;
$d = 1.0;
$x = null;
$e = 'false';

var_dump($a == $b);
var_dump($a === $b);
var_dump($a === intval($b)). PHP_EOL;
echo('------------'). PHP_EOL;

var_dump($a === $c);
var_dump(floatval($a) === $b). PHP_EOL;
echo('------------'). PHP_EOL;

var_dump($c == $e);
var_dump($c === $e);
var_dump($c === boolval($e)) . PHP_EOL;
echo('------------'). PHP_EOL;

var_dump($c == $x);
var_dump($c === $x);
var_dump($c === boolval($x)). PHP_EOL;
echo('------------'). PHP_EOL;

var_dump($d == $b);
var_dump($d === $b);
echo('------------'). PHP_EOL;