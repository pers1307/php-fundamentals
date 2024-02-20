<?php

namespace Fundamentals\Array;

use PHPUnit\Framework\TestCase;

/**
 * Фильтрует элементы массива с помощью callback-функции
 */
class ArrayFilterTest extends TestCase
{
    public function testSuccess()
    {
        $expected = [1 => 7, 3 => 9, 5 => 11];
        $input = [6, 7, 8, 9, 10, 11, 12];

        // является ли переданное число нечётным
        $oddFunction = fn($var) => $var & 1;

        $this->assertSame(
            $expected,
            array_filter($input, $oddFunction),
            'Фильтруем массив и оставляем только нечетные значения'
        );
    }

    public function testArrayFilterUseKeySuccess()
    {
        $expected = ['b' => 2];
        $input = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];

        $this->assertSame(
            $expected,
            array_filter($input, function ($k) {
                return $k == 'b';
            }, ARRAY_FILTER_USE_KEY),
            'Фильтруем массив по ключу'
        );
    }

    public function testArrayFilterUseBothSuccess()
    {
        $expected = ['b' => 2, 'd' => 4];
        $input = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];

        $this->assertSame(
            $expected,
            array_filter($input, function ($v, $k) {
                return $k == 'b' || $v == 4;
            }, ARRAY_FILTER_USE_BOTH),
            'Фильтруем массив по двум значениям'
        );
    }
}
