請寫出一個名為isEven的function，功能如下：給一個數字如果該數字為偶數，則回傳true，如果該數字為奇數，則回傳false。

isEven(1) // 回傳 false
isEven(2) // 回傳 true

<?php

function isEven($r)
{
    $x = fmod($r, 2);
    if ($x==0) {
        return true;
    }

    if ($x==1) {
        return false;
    }
}

var_dump(isEven(1));
var_dump(isEven(2));
var_dump(isEven(3));


function isEven2($num)
{
    return $num % 2 == 0;
}


var_dump(isEven2(1));
var_dump(isEven2(2));
var_dump(isEven2(3));
