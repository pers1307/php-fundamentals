<?php

/**
 * Извлекает первый элемент массива
 */

$stack = ["orange", "banana", "apple", "raspberry"];
$fruit = array_shift($stack); // "orange"
print_r($stack); // ["banana", "apple", "raspberry"]
