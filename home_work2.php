<?php
echo"введіть перше значення" . PHP_EOL;
$first = fgets(STDIN);

echo"введіть наступне значення" . PHP_EOL;
$second = fgets(STDIN);

$result = $first + $second;
echo $result . PHP_EOL;