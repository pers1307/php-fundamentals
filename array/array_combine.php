<?php

/**
 * Создаёт новый массив, используя один массив в качестве ключей, а другой для его значений
 */

$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];
$c = array_combine($a, $b);

print_r($c);
