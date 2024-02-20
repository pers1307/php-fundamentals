<?php

namespace Fundamentals\Array;

use PHPUnit\Framework\TestCase;

/**
 * Применяет заданную пользователем функцию к каждому элементу массива
 */
class ArrayWalkTest extends TestCase
{
    public function testSuccess()
    {
        $expected = ["d" => "dlemon", "a" => "aorange", "b" => "bbanana", "c" => "capple"];
        $input = ["d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple"];

        array_walk($input, static function (&$item, $key) {
            $item = "{$key}{$item}";
        });

        $this->assertSame(
            $expected,
            $input,
            'Простой перебор элементов с изменением'
        );
    }

    public function testOptionalUserdataParameterSuccess()
    {
        $expected = ["d" => "prefix_dlemon", "a" => "prefix_aorange", "b" => "prefix_bbanana", "c" => "prefix_capple"];
        $input = ["d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple"];
        $parameter = 'prefix_';

        array_walk($input, static function (&$item, $key, $prefix) {
            $item = "{$prefix}{$key}{$item}";
        }, $parameter);

        $this->assertSame(
            $expected,
            $input,
            'Перебор элементов с дополнительным параметром'
        );
    }
}
