<?php

echo "введіть текст" . PHP_EOL ;
$some_text = fgets(STDIN);
$dir = __DIR__;
$file_path = "$dir/test.txt";
$file_size = filesize($file_path);

$file = fopen($file_path, 'a+');
fwrite($file, $some_text);
fclose($file);

$file = fopen($file_path, 'r');
//$content = fread($file, $file_size);
//fclose($file);
if ($line = $some_text){
    echo 'Останнє ввкдкнк значення: ' . $line . PHP_EOL;

}
fclose($file);

