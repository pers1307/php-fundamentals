<?php

/**
 * Проверяет, является ли данный array списком
 *
 * Определяет, является ли данный array списком. Массив (array) считается списком, если его ключи состоят из последовательных чисел от 0 до count($array)-1.
 */

array_is_list([]); // true
array_is_list(['apple', 2, 3]); // true
array_is_list([0 => 'apple', 'orange']); // true

// Массив начинается не с 0
array_is_list([1 => 'apple', 'orange']); // false

// Ключи массива не по порядку
array_is_list([1 => 'apple', 0 => 'orange']); // false

// Ключи массива не являются целыми числами
array_is_list([0 => 'apple', 'foo' => 'bar']); // false

// Непоследовательные ключи
array_is_list([0 => 'apple', 2 => 'bar']); // false
