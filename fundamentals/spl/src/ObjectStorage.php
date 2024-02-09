<?php
/**
 * Created by PhpStorm.
 * User: yuri
 * Date: 06.11.18
 * Time: 19:18
 */

namespace spl;

use spl\wrappers\IntWrapper;

/**
 * Позволяет хранить в себе объекты и на основе хеша определять
 * имеет ли массив уже такой объект или нет
 *
 * Но, также позволяет и проводить ассоциации между
 * Объектами и данными.
 * Это по сути ассоциативный массив, но ключом является объект.
 *
 * Class ObjectStorage
 * @package spl
 */
class ObjectStorage
{
    public function run()
    {
        $storage = new \SplObjectStorage();

        $q1  = new IntWrapper(1, '');
        $q11 = new IntWrapper(1, '1');
        $q2  = new IntWrapper(2, '');
        $q3  = new IntWrapper(3, '');
        $q4  = new IntWrapper(4, '');

        $storage->attach($q1);
        $storage->attach($q2);
        $storage->attach($q3);

        $storage->attach($q4);
        $storage->detach($q4);

        echo 'ObjectStorage: ' . "\n";
        echo 'q11: ' . ($storage->contains($q11) ? 'YES' : 'NO') . "\n";
        echo 'q1: ' . ($storage->contains($q1) ? 'YES' : 'NO') . "\n";
        echo 'Hash q1: ' . $storage->getHash($q1) . "\n";
        echo 'Hash q2: ' . $storage->getHash($q2) . "\n";

        /**
         * Можно не только просто хранить классы,
         * но и ассоциировать их с данными
         */
        $storage[$q1] = ['test'];
        $storage->offsetSet($q3, ['qwerty']);
        // Вернет просто 1
        echo 'Offset $q3: ' . print_r($storage->offsetGet($q3)) . "\n";

        /**
         * Значения это именно классы!
         */
        for($storage->rewind(); $storage->valid(); $storage->next()){
            echo 'Key: ' . $storage->key() . "\n";
            echo 'Current: ' . print_r($storage->current()) . "\n";
            echo 'Info: ' . print_r($storage->getInfo()) . "\n";
        }
    }
}