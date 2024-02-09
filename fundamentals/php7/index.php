<?php
/**
 * Трейты
 * Альтернатива множественному наследованию
 */

class Animal {
    public function roar() {
        echo "Makes animal sounds";
    }
}

trait Cat {
    public function roar() {
        echo "Meowww";
    }
}

trait BigCat {
    public function kill() {
        echo "Kill an animal";
    }
}

class Tiger extends Animal {
    use Cat;
    use BigCat;
}

$tiger = new Tiger;
$tiger->roar();
$tiger->kill();