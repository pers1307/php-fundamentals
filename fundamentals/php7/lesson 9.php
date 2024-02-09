<?php
/**
 *  Наследование переменных из родительской области видимости
 */

// Сбросим message
$message = 'hello';

// Наследование по ссылке
$example = function () use (&$message) {

    var_dump($message);
};

$example();