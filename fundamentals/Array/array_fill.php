<?php

/**
 * Заполняет массив значениями
 */

$a = array_fill(5, 6, 'banana');
print_r($a);

/**
 * Array
(
[5]  => banana
[6]  => banana
[7]  => banana
[8]  => banana
[9]  => banana
[10] => banana
)
 */

$a = array_fill(-2, 4, 'pear');
print_r($a);

/**
 * Array
(
[-2] => pear
[0] => pear
[1] => pear
[2] => pear
)
 */
