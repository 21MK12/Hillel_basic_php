<?php
function area_of_the_square(int|float $num1){
    $sum = $num1 * $num1 * M_PI . PHP_EOL;
    return "Площа кола: " .$sum;
}
echo(area_of_the_square(5));

function square($num1){
    return 'Квадрат числа ' . $num1 . ' = ' . $num1 * $num1 . PHP_EOL;
}
echo square(3);

function test($num1){
    $res = $num1++ .PHP_EOL;
    return 'Змінює число: '. $num1. ' на ' . $res;
}


echo(test(1));