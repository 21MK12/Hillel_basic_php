<?php


function calculate(int $num1, int $num2, ?closure $func = null): int
{
    if (isset($func)) {
        $result = $func($num1 * $num2);
        return "Результат обчислення: " . $result . PHP_EOL;
    }
    return $num1 * $num2 . PHP_EOL;
}

var_dump(calculate(10, 11));
