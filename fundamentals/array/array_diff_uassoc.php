<?php

/**
 * Вычисляет расхождение массивов с дополнительной проверкой индекса через пользовательскую callback-функцию
 */

function key_compare_func($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}

$array1 = ["a" => "green", "b" => "brown", "c" => "blue", "red"];
$array2 = ["a" => "green", "yellow", 1 => "red"];
$result = array_diff_uassoc($array1, $array2, "key_compare_func");
print_r($result);
