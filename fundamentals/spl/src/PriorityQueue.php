<?php
/**
 * Created by PhpStorm.
 * User: yuri
 * Date: 06.11.18
 * Time: 19:18
 */

namespace spl;

/**
 * Позволяет задавать кучу с приоритетом.
 * Наивысший приоритет выходит первым
 *
 * Class PriorityQueue
 * @package spl
 */
class PriorityQueue
{
    public function run()
    {
        $queue = new \SplPriorityQueue();

        $queue->insert('A', 1);
        $queue->insert('B', 5);
        $queue->insert('C', 10);
        $queue->insert('D', 6);
        $queue->insert('E', 1);
        $queue->insert('F', 5);
        $queue->insert('G', 10);

        $queue->setExtractFlags($queue::EXTR_BOTH);

        echo 'PriorityQueue: ' . "\n";
        for($queue->rewind(); $queue->valid(); $queue->next()){
            echo 'Key: ' . $queue->key() . "\n";
            echo 'Current: ' . print_r($queue->current()) . "\n";
        }

        echo 'isCorrupted: ' . ($queue->isCorrupted() ? 'YES' : 'NO') . "\n";
    }
}