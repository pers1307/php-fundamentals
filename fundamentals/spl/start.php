<?php

require __DIR__ . '/vendor/autoload.php';

$doublyLinkedList = new \spl\DoublyLinkedList();
$doublyLinkedList->run();

$stack = new \spl\Stack();
$stack->run();

$queue = new \spl\Queue();
$queue->run();

$heap = new \spl\Heap();
$heap->run();

$priorityQueue = new \spl\PriorityQueue();
$priorityQueue->run();

$fixedArray = new \spl\FixedArray();
$fixedArray->run();

$objectStorage = new \spl\ObjectStorage();
$objectStorage->run();