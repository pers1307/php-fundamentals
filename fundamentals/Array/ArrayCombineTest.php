<?php

namespace Fundamentals\Array;

require dirname(__FILE__, 3)
    . DIRECTORY_SEPARATOR . 'vendor'
    . DIRECTORY_SEPARATOR . 'autoload.php';

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

/**
 * Создаёт новый массив, используя один массив в качестве ключей, а другой для его значений
 */
class ArrayCombineTest extends TestCase
{
    #[DataProvider('provider')]
    public function test(array $keys, array $values, array $expected)
    {
        $this->assertSame(
            $expected,
            array_combine($keys, $values)
        );
    }

    public static function provider(): array
    {
        return [
            [['green', 'red', 'yellow'], ['avocado', 'apple', 'banana'], ['green' => 'avocado', 'red' => 'apple', 'yellow' => 'banana']],
        ];
    }
}
