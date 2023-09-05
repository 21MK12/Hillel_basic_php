<?php
//hello world
//echo "Hello world!". PHP_EOL;

//create variables
//$variable = 1;
//echo $variable . PHP_EOL;
//
//$full_price = 11;
//echo $full_price . PHP_EOL;

//Типи данних
//true = 1
//false = 0
//$first = true;
//$second = false;
//
//echo $first . PHP_EOL;
//var_dump($second);

//$first = 5.0;
//var_dump($first);

//$var = (bool) '5';
//
//var_dump($var);

//echo"введіть перше значення" . PHP_EOL;
//$first = fgets(STDIN);
//
//echo"введіть наступне значення" . PHP_EOL;
//$second = fgets(STDIN);
//
//$result = $first + $second;
//echo $result . PHP_EOL;

//$string1 = "Test1 23123";
//echo mb_strpos($string1,3) . PHP_EOL;

//$a = 2;
//$b = 3;
//$y = true;
//$x = false;
//$d = null;
//
//$result = ($a && $b)
// echo var_dump($a && $b) . PHP_EOL;

//$language = "en";
// if ($language ==='ua') {
//     echo 'Hello UA' . PHP_EOL;
//
// }elseif($language === 'en'){
//     echo "Hello Eng" . PHP_EOL;
//
// } else if ($language === 'esp'){
//     echo "Hello Esp" . PHP_EOL;
//
// } else{
//     echo 'Just Hello';
// }

//$language = "ua";
//if ($language === "ua") {
//    $massage = 'Hello' . PHP_EOL;
//} else {
//    $massage = "Привіт" . PHP_EOL;
//}
//
//$result = trim($massage) .PHP_EOL;
//echo $result;
//$language = 'ua';
//switch ($language){
//    case 'ua':
//        $massage ='Привіт'; break;
//    case 'en':
//        $massage ='Hello'; break;
//    default:
//        $massage ='Just hello'; break;
//}
//echo $massage . PHP_EOL;

//$language = 'ua';
//$massage = match ($language) {
//    'ua' => 'Привіт',
//    'en' => 'Hello',
//    default => 'Just hello',
//};
//echo $massage . PHP_EOL;

$array = [1=>'elem1',33=>'elem2', 2=>'elem3'];
$array[] = 'elem4';
var_dump($array) .PHP_EOL;
?>