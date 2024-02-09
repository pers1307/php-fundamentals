<?php
/**
 * Created by PhpStorm.
 * User: yuri
 * Date: 06.11.18
 * Time: 19:18
 */

namespace spl;

/**
 * Умеет по сути все тоже самое что и двухсвязный список,
 * только название более подходящее
 *
 * Class Queue
 * @package spl
 */
class Queue
{
    public function run()
    {
        $list = new \SplQueue();

        $list->push('first');
        $list->push('second');
        $list->push('third');
        $list->push(4);
        $list->push(5);
        $list->push(6);
        $list->push(7);

        echo 'top: ' . $list->top() . "\n";
        echo 'bottom: ' . $list->bottom() . "\n";
        echo 'count: ' . $list->count() . "\n";
        echo 'isEmpty: ' . ($list->isEmpty() ? 'YES' : 'NO') . "\n";
        echo 'offsetExists: ' . ($list->offsetExists(5) ? 'YES' : 'NO') . "\n";
        echo 'offsetGet: ' . $list->offsetGet(3) . "\n";

        // Спокойно вставляем элемент в середину массива
        $list->add(3, 'op op');

        /**
         * Перебирает все элементы в прямом порядке
         */
        echo 'Queue: ' . "\n";
        for($list->rewind(); $list->valid(); $list->next()){
            echo 'Key: ' . $list->key() . "\n";
            echo 'Current: ' . $list->current() . "\n";
        }

        echo 'pop: ' . $list->pop() . "\n";
    }
}