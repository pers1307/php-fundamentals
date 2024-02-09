<?php
/**
 * Created by PhpStorm.
 * User: yuri
 * Date: 20.11.18
 * Time: 18:38
 */

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