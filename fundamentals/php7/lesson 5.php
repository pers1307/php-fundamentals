<?php
/**
 * return type declarations
 */

declare(strict_types = 1);

function returnIntValue(int $value): int {

    return $value + 1;
}
print(returnIntValue(5));