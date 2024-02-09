<?php
/**
 * Комбинаторный оператор сравнения
 * <=>
 */

echo 1 <=> 1; // 0
echo 1 <=> 2; // -1
echo 2 <=> 1; // 1

/**
 * В расчет берется код символов
 */
echo 'a' <=> 'a'; // 0
echo 'a' <=> 'b'; // -1
echo 'b' <=> 'a'; // 1

echo 'a' <=> 'aa';  // -1
echo 'zz' <=> 'aa'; // 1

echo [] <=> []; // 0
echo [1, 2, 3] <=> [1, 2, 3]; // 0
echo [1, 2, 3] <=> []; // 1
echo [1, 2, 3] <=> [1, 2, 1]; // 1
echo [1, 2, 3] <=> [1, 2, 4]; // -1

/**
 * Учитываются значение ключей объекта
 */
$a = (object) ['a' => 'b'];
$b = (object) ['a' => 'b'];
echo $a <=> $b; // -1

$a = (object) ['a' => 'c'];
$b = (object) ['a' => 'b'];
echo $a <=> $b; // 1

$a = (object) ['a' => 'b'];
$b = (object) ['b' => 'b'];
echo $a <=> $b; // 0

/**
 * Пример использования
 */
$numbers = [5, 9, 4, 6, 1, 7, 3, 2, 8];

function sortNumbers($param1, $param2)
{
    return $param1 <=> $param2;

    /*
    if ($param1 == $param2) {

        return 0;
    }

    if ($param1 > $param2) {

        return 1;
    } else {

        return -1;
    }
    */
}

usort($numbers, 'sortNumbers');

echo '<pre>';
print_r($numbers);
echo '</pre>';

$object = new \StdClass();
$object->wow = 'tu tu';

echo '<pre>';
print_r($object->wow);
echo '</pre>';
