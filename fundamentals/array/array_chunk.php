<?php

/**
 * Разбивает массив на части
 */

$input_array = [1 => 'a', 2 => 'b', 3 => 'c', 4 => 'd', 5 => 'e'];
print_r(array_chunk($input_array, 2));
print_r(array_chunk($input_array, 2, true));
