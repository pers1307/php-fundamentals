<?php

/**
 * Применяет callback-функцию ко всем элементам указанных массивов
 */

/**
 * Пример #1 Пример использования array_map()
 */
function cube($n)
{
    return ($n * $n * $n);
}

$a = [1, 2, 3, 4, 5];
$b = array_map('cube', $a);
print_r($b);

/**
 * Пример #2 Использование array_map() вместе с лямбда-функцией
 */

$func = function(int $value): int {
    return $value * 2;
};

print_r(array_map($func, range(1, 5)));

// Или с PHP 7.4.0:

print_r(array_map(fn($value): int => $value * 2, range(1, 5)));

/**
 * Пример #3 Пример использования array_map(): обработка нескольких массивов
 */

function show_Spanish(int $n, string $m): string
{
    return "Число {$n} по-испански - {$m}";
}

function map_Spanish(int $n, string $m): array
{
    return [$n => $m];
}

$a = [1, 2, 3, 4, 5];
$b = ['uno', 'dos', 'tres', 'cuatro', 'cinco'];

$c = array_map('show_Spanish', $a, $b);
print_r($c);

$d = array_map('map_Spanish', $a , $b);
print_r($d);

/**
 * Пример #4 Выполнение zip операции с массивами
 */

$a = [1, 2, 3, 4, 5];
$b = ['one', 'two', 'three', 'four', 'five'];
$c = ['uno', 'dos', 'tres', 'cuatro', 'cinco'];

$d = array_map(null, $a, $b, $c);
print_r($d);

/**
    [0] => Array
    (
        [0] => 1
        [1] => one
        [2] => uno
    )
    [1] => Array
    (
        [0] => 2
        [1] => two
        [2] => dos
    )
 */

/**
 * Пример #5 null callback только с array
 */
$array = [1, 2, 3];
var_dump(array_map(null, $array));

/*
 array(3) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
}
 */

/**
 * Пример #6 Использование array_map() со строковыми ключами
 */

$arr = ['stringkey' => 'value'];
function cb1($a) {
    return [$a];
}
function cb2($a, $b) {
    return [$a, $b];
}
var_dump(array_map('cb1', $arr));
var_dump(array_map('cb2', $arr, $arr));
var_dump(array_map(null,  $arr));
var_dump(array_map(null, $arr, $arr));

/**
 * Пример #7 array_map() - ассоциативные массивы
 */

$arr = [
    'v1' => 'Первый выпуск',
    'v2' => 'Второй выпуск',
    'v3' => 'Третий выпуск',
];

// Примечание: До версии 7.4.0 вместо этого используйте более длинный синтаксис для анонимных функций.
$callback = fn(string $k, string $v): string => "$k - это $v";

$result = array_map($callback, array_keys($arr), array_values($arr));

var_dump($result);
