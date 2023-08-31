<?php
echo "What your name?" . PHP_EOL;
$name = fgets(STDIN);

echo "Hello {$name}Nice to meet you!" . PHP_EOL;


echo"введіть перше значення" . PHP_EOL;
$first_num = fgets(STDIN);

echo"введіть наступне значення" . PHP_EOL;
$second_num = fgets(STDIN);

$sum = $first_num + $second_num;
$avr = ($first_num + $second_num)/2;

echo "Сумма чисел = {$sum}". PHP_EOL . "Середнє арефметичне число: {$avr}. PHP_EOL";