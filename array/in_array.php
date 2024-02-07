<?php

/**
 * Проверяет, присутствует ли в массиве значение
 */

$os = ["Mac", "NT", "Irix", "Linux"];
in_array("Irix", $os); // true


$a = [['p', 'h'], ['p', 'r'], 'o'];
if (in_array(['p', 'h'], $a)) {
    echo "'ph' найдено\n";
}
if (in_array(['f', 'i'], $a)) {
    echo "'fi' найдено\n";
}
if (in_array('o', $a)) {
    echo "'o' найдено\n";
}
