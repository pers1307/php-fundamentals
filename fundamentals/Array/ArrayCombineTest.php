<?php

namespace Fundamentals\Array;

use PHPUnit\Framework\TestCase;
use ValueError;

/**
 * Создаёт новый массив, используя один массив в качестве ключей, а другой для его значений
 */
class ArrayCombineTest extends TestCase
{
    public function testSuccess()
    {
        $expected = ['green' => 'avocado', 'red' => 'apple', 'yellow' => 'banana'];
        $keys = ['green', 'red', 'yellow'];
        $values = ['avocado', 'apple', 'banana'];

        $this->assertSame(
            $expected,
            array_combine($keys, $values)
        );
    }

    public function testKeysAndValuesnotEqual()
    {
        $expected = ['green' => 'avocado', 'red' => 'apple', 'yellow' => 'banana'];
        $keys = ['green', 'red', 'yellow'];
        $values = ['avocado', 'apple'];

        $this->expectException(ValueError::class);

        $this->assertSame(
            $expected,
            array_combine($keys, $values)
        );
    }
}
