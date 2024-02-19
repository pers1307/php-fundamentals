<?php

namespace spl\wrappers;

class IntWrapper
{
    protected $value;
    protected $string;

    /**
     * IntWrapper constructor.
     *
     * @param $value
     * @param $string
     */
    function __construct($value, $string)
    {
        $this->value  = $value;
        $this->string = $string;
    }
}
