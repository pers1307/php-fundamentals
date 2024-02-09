<?php
/**
 * Created by PhpStorm.
 * User: yuri
 * Date: 06.11.18
 * Time: 19:18
 */

namespace spl;

/**
 * Двухсвязный список в котором элемент связан с
 * 2мя соседними элементами спереди и сзади
 *
 * Выгода: позволяет эффективно вставлять элементы в
 * середину списка, при этом не пересоздавая список,
 * как в случае с массивом
 *
 * Профит: Эффективная альтернатива обычному массиву
 * с точки зрения производительности
 *
 * Class DoublyLinkedList
 * @package spl
 */
class DoublyLinkedList
{
    public function run()
    {
        $list = new \SplDoublyLinkedList();

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

        for($list->rewind(); $list->valid(); $list->next()){
            echo 'Key: ' . $list->key() . "\n";
            echo 'Current: ' . $list->current() . "\n";
        }

        $this->mode($list);
        $this->LIFO($list);
    }

    /**
     * Удобно реализовывать стек
     * @param \SplDoublyLinkedList $list
     */
    protected function LIFO($list)
    {
        echo 'LIFO:' . "\n";
        echo $list->pop() . "\n";
        echo $list->pop() . "\n";
        echo $list->pop() . "\n";
        echo $list->pop() . "\n";
    }

    /**
     * С помощью мода, можно изменять направление прохождения массива,
     * что с легкостью
     * @param \SplDoublyLinkedList $list
     */
    protected function mode($list)
    {
        echo 'IT_MODE_LIFO: ' . "\n";
        // Так ещё можно удалять элементы из списка сразу после прохода
        //$list->setIteratorMode(\SplDoublyLinkedList::IT_MODE_LIFO | \SplDoublyLinkedList::IT_MODE_DELETE);
        $list->setIteratorMode(\SplDoublyLinkedList::IT_MODE_LIFO);
        for($list->rewind(); $list->valid(); $list->next()){
            echo 'Key: ' . $list->key() . "\n";
            echo 'Current: ' . $list->current() . "\n";
        }

        echo 'IT_MODE_FIFO: ' . "\n";
        $list->setIteratorMode(\SplDoublyLinkedList::IT_MODE_FIFO);
        for($list->rewind(); $list->valid(); $list->next()){
            echo 'Key: ' . $list->key() . "\n";
            echo 'Current: ' . $list->current() . "\n";
        }
    }
}