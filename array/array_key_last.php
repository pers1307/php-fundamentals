<?php

/**
 * Получает последний ключ массива
 */

$array = ['a' => 1, 'b' => 2, 'c' => 3];

$firstKey = array_key_last($array);

var_dump($firstKey); // 'c'
