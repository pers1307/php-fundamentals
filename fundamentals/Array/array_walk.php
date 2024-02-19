<?php

/**
 * Применяет заданную пользователем функцию к каждому элементу массива
 */

$fruits = ["d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple"];

function test_alter(&$item1, $key, $prefix)
{
    $item1 = "$prefix: $item1";
}

function test_print($item2, $key)
{
    echo "$key. $item2\n";
}

echo "До ...:\n";
array_walk($fruits, 'test_print');

array_walk($fruits, 'test_alter', 'fruit');
echo "... и после:\n";

array_walk($fruits, 'test_print');

/**
 * Анонимная функция
 */

$elements = ['a', 'b', 'c'];
array_walk($elements, static function ($value, $key) {
    echo "{$key} => {$value}\n";
});
