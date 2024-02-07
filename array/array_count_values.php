<?php

/**
 * Подсчитывает количество вхождений каждого отдельного значения в массиве
 */

$array = [1, "hello", 1, "world", "hello"];
print_r(array_count_values($array));
