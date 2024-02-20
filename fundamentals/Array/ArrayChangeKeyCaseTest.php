<?php

namespace Fundamentals\Array;

use PHPUnit\Framework\TestCase;

/**
 * Меняет регистр всех ключей в массиве
 */
class ArrayChangeKeyCaseTest extends TestCase
{
    public function testCaseUpperSuccess()
    {
        $expected = ["FIRST" => 1, "SECOND" => 4];
        $input = ["FirSt" => 1, "SecOnd" => 4];

        $this->assertSame(
            $expected,
            array_change_key_case($input, CASE_UPPER),
            'Привести ключи к верхнему регистру'
        );
    }

    public function testCaseLowerSuccess()
    {
        $expected = ["first" => 1, "second" => 4];
        $input = ["FirSt" => 1, "SecOnd" => 4];

        $this->assertSame(
            $expected,
            array_change_key_case($input),
            'Привести ключи к верхнему регистру'
        );
    }

    public function testKeyIsEmpty()
    {
        $expected = ["first" => 1, "" => 4];
        $input = ["FirSt" => 1, "" => 4];

        $this->assertSame(
            $expected,
            array_change_key_case($input),
            'Один из ключей пустой'
        );
    }

    public function testKeyIsNumber()
    {
        $expected = [100 => 1, "first" => 4];
        $input = [100 => 1, "FirSt" => 4];

        $this->assertSame(
            $expected,
            array_change_key_case($input),
            'Один из ключей это число'
        );
    }
}
