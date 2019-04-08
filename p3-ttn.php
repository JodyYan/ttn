<?php

function getSum($num) {
    return ['sum' => $num * ($num + 1) / 2];
}

var_dump(getSum(5));
var_dump(getSum(10));
