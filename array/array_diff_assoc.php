<?php

/**
 * Вычисляет расхождение массивов с дополнительной проверкой индекса
 */

$array1 = ["a" => "green", "b" => "brown", "c" => "blue", "red"];
$array2 = ["a" => "green", "yellow", 1 => "red"];
$result = array_diff_assoc($array1, $array2);
print_r($result);
