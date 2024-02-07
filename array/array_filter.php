<?php

/**
 * Фильтрует элементы массива с помощью callback-функции
 */

function odd($var)
{
    // является ли переданное число нечётным
    return $var & 1;
}

function even($var)
{
    // является ли переданное число чётным
    return !($var & 1);
}

$array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$array2 = [6, 7, 8, 9, 10, 11, 12];

echo "Нечётные:\n";
print_r(array_filter($array1, "odd"));
echo "Чётные:\n";
print_r(array_filter($array2, "even"));

// **********************************************************

$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];
var_dump(
    array_filter($arr, function ($k) {
        return $k == 'b';
    }, ARRAY_FILTER_USE_KEY)
);

var_dump(
    array_filter($arr, function ($v, $k) {
        return $k == 'b' || $v == 4;
    }, ARRAY_FILTER_USE_BOTH)
);
