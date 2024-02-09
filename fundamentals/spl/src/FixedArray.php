<?php
/**
 * Created by PhpStorm.
 * User: yuri
 * Date: 06.11.18
 * Time: 19:18
 */

namespace spl;

/**
 * Обычный массив, но с фиксированной длинной.
 * Индексы могут быть только целлочисленные значения.
 * При этом достигается более быстрая обработка массива.
 *
 * Class FixedArray
 * @package spl
 */
class FixedArray
{
    public function run()
    {
        $array = new \SplFixedArray(5);

        $array->setSize(10);

        $array[1] = 1;
        $array[2] = 1;
        $array[3] = 1;

        echo 'FixedArray: ' . "\n";

        /**
         * На выходе 10 элементов
         */
        for($array->rewind(); $array->valid(); $array->next()){
            echo 'Key: ' . $array->key() . "\n";
            echo 'Current: ' . $array->current() . "\n";
        }
    }
}