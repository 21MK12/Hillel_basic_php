<?php
echo"введіть значення від 1 до нескінечності" . PHP_EOL;
$value = fgets(STDIN);
$massage = match ($value) {
    '1' => 'green',
    '2' => 'red',
    '3' => 'blue',
    '4' => 'brown',
    '5' => 'violet',
    '6' => 'black',
    default => 'white',
};
echo $massage . PHP_EOL;