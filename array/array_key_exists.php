<?php

/**
 * Проверяет, присутствует ли в массиве указанный ключ или индекс
 */

$search_array = array('first' => 1, 'second' => 4);
if (array_key_exists('first', $search_array)) {
    echo "Массив содержит элемент 'first'.";
}

// isset() не возвращает true для ключей массива, указывающих на null, а array_key_exists() возвращает.
$search_array = array('first' => null, 'second' => 4);

// возвращает false
isset($search_array['first']);

// возвращает true
array_key_exists('first', $search_array);
