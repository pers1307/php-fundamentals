<?php
/**
 * Created by PhpStorm.
 * User: yuri
 * Date: 06.11.18
 * Time: 19:18
 */

namespace spl;

/**
 * Упрощенно, штука выполняет авто сортировку элементов.
 * Но непонятно, как сделать кучу поврежденной.
 *
 * Class Heap
 * @package spl
 */
class Heap
{
    public function run()
    {
        $heap = new \SplMaxHeap();

        $heap->insert(8);
        $heap->insert(20);
        $heap->insert(66);
        $heap->insert(7);
        $heap->insert(3);

        echo 'isCorrupted: ' . ($heap->isCorrupted() ? 'YES' : 'NO') . "\n";

        /**
         * Важно, во время перебора элементы удаляются из кучи
         */
//        echo 'Heap: ' . "\n";
//        for($heap->rewind(); $heap->valid(); $heap->next()){
//            echo 'Key: ' . $heap->key() . "\n";
//            echo 'Current: ' . $heap->current() . "\n";
//        }

        echo 'isEmpty: ' . ($heap->isEmpty() ? 'YES' : 'NO') . "\n";

        echo $heap->top();
        echo 'isCorrupted: ' . ($heap->isCorrupted() ? 'YES' : 'NO') . "\n";
        echo $heap->extract();
        echo 'isCorrupted: ' . ($heap->isCorrupted() ? 'YES' : 'NO') . "\n";

        $heap2 = new \SplMaxHeap();

        $heap2->insert(['ret' => 2]);
        $heap2->insert(['ret3' => 10]);
        $heap2->insert(['ret4' => 3]);
        $heap2->insert(['ret5' => 6]);
        $heap2->insert(['ret6' => 5]);

        /**
         * В таком случае сортировка идет как попало
         */
        for($heap2->rewind(); $heap2->valid(); $heap2->next()){
            echo 'Key: ' . $heap2->key() . "\n";
            echo 'Current: ' . print_r($heap2->current()) . "\n";
        }
    }
}