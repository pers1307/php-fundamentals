<?php

namespace Fundamentals\Array;

use PHPUnit\Framework\TestCase;

/**
 * Проверяет, присутствует ли в массиве указанный ключ или индекс
 */
class ArrayKeyExistsTest extends TestCase
{
    public function testSuccess()
    {
        $key = 'first';
        $values = ['first' => 1, 'second' => 4];

        $this->assertSame(
            true,
            array_key_exists($key, $values)
        );
    }

    /**
     * isset() не возвращает true для ключей массива, указывающих на null, а array_key_exists() возвращает
     */
    public function testIssetKeyIsNull()
    {
        $key = 'first';
        $values = ['first' => null, 'second' => 4];

        $this->assertSame(
            false,
            isset($values[$key])
        );
    }

    public function testKeyIsNull()
    {
        $key = 'first';
        $values = ['first' => null, 'second' => 4];

        $this->assertSame(
            true,
            array_key_exists($key, $values)
        );
    }
}
