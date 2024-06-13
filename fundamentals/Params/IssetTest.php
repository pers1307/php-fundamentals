<?php

namespace Fundamentals\Params;

use PHPUnit\Framework\TestCase;

class IssetTest extends TestCase
{
    public function testSuccess()
    {
        $input = "test";

        $this->assertSame(
            true,
            isset($input),
            'Isset один параметр'
        );
    }

    public function testSomeParamsSuccess()
    {
        $input = "test";
        $input2 = "test2";

        $this->assertSame(
            true,
            isset($input, $input2),
            'Isset два параметра'
        );
    }

    public function testSomeUnsetParamSuccess()
    {
        $input = "test";
        $input2 = "test2";
        unset($input2);

        $this->assertSame(
            false,
            isset($input, $input2),
            'Isset два параметра, один unset'
        );
    }

    public function testIntrestingStringSuccess()
    {
        $input = "test";

        $this->assertSame(
            true,
            isset($input[0.5]),
            'Isset интересный эксперимент со строкой'
        );
    }
}
