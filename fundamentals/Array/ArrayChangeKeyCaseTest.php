<?php

namespace Fundamentals\Array;

require dirname(__FILE__, 3)
    . DIRECTORY_SEPARATOR . 'vendor'
    . DIRECTORY_SEPARATOR . 'autoload.php';

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

/**
 * Меняет регистр всех ключей в массиве
 */
class ArrayChangeKeyCaseTest extends TestCase
{
    #[DataProvider('provider')]
    public function test(array $input, array $expected, int $case, string $message)
    {
        $this->assertSame(
            $expected,
            array_change_key_case($input, $case),
            $message
        );
    }

    public static function provider(): array
    {
        return [
            [["FirSt" => 1, "SecOnd" => 4], ["FIRST" => 1, "SECOND" => 4], CASE_UPPER, 'Привести ключи к верхнему регистру'],
            [["FirSt" => 1, "SecOnd" => 4], ["first" => 1, "second" => 4], CASE_LOWER, 'Привести ключи к нижнему регистру'],
        ];
    }
}
