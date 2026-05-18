<?php

function sumPositive(array $nums): int
{
    $sum = 0;

    foreach ($nums as $num) {
        if ($num > 0) {
            $sum += $num;
        }
    }

    return $sum;
}

echo sumPositive([1, 2, 3]);// Output: 6
echo sumPositive([-1, 2, -3, 4]);// Output: 6
echo sumPositive([]);// Output: 0

?>