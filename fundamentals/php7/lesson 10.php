<?php
/**
 * Функция может вызвать себя для объекта
 */

class A {
    private $x = 1;
}

$getValue = function() {
    return $this->x;
};

// Pre PHP 7 code
$value = $getValue->bindTo(new A, 'A');
print($value());

// PHP 7 code
print($value->call(new A));
