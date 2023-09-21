<?php
fibonacci(10);
function fibonacci($n) {
    $a = 0;
    $b = 1;
    $r = 0; // Определяем переменную с результатом
    for ($i = 0; $i < $n; $i++) {
        $r = $a + $b;
        $a = $b;
        $b = $r;
        echo $r.' ';
    }
}