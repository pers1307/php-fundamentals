<?php

/**
 * Меняет регистр всех ключей в массиве
 */

$input_array = ["FirSt" => 1, "SecOnd" => 4];
print_r(array_change_key_case($input_array, CASE_UPPER));
print_r(array_change_key_case($input_array));
