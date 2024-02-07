<?php

/**
 * Вычисляет расхождение массивов, сравнивая ключи
 */

$array1 = ['blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4];
$array2 = ['green' => 5, 'yellow' => 7, 'cyan' => 8];

// происходит как бы вычитание из массива $array1 массива $array2
var_dump(array_diff_key($array1, $array2));

/**
 * array(3) {
 * ["blue"]=>
 * int(1)
 * ["red"]=>
 * int(2)
 * ["purple"]=>
 * int(4)
 * }
 */

$array3 = ['blue' => 6, 'yellow' => 7, 'mauve' => 8];
var_dump(array_diff_key($array1, $array2, $array3));

/**
 * array(2) {
 * ["red"]=>
 * int(2)
 * ["purple"]=>
 * int(4)
 * }
 */
