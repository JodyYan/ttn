<?php

function isAllEven(array $arr)
{
    foreach ($arr as $a) {
        if ($a % 2 == 1) {
            return false;
        }
    }

    return true;
}

var_dump(isAllEven([1, 3, 5, 7]));
var_dump(isAllEven([1, 2, 3, 4]));
var_dump(isAllEven([2, 4, 6, 8]));
