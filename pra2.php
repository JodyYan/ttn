請寫出一個名為isAllEven的function，功能如下：給一個數字的array，如果該array中所有的數字皆為偶數，則回傳true，否則回傳false。

isAllEven([1, 2, 3]); // false
isAllEven([2, 4, 6]); // true

<?php

function isAllEven(Array $arr)
{
    $a = 0;
    foreach ($arr as $x) {
        if (fmod($x, 2) != 0) {
            $a = $a+1;
        }
    }
    if ($a == 0) {
        return true;
    }

    return false;
}

var_dump(isAllEven([1, 3, 5, 7]));
var_dump(isAllEven([2, 4, 6, 8]));

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

//$test=array(2, 2, 2, 4);
//$a = 0;
//foreach ($test as $x) {
//    if(fmod($x,2) ==0){
//        //echo 'true';
//    }else{
//        //echo 'false';
//        $a = $a +1;
//    }
//}
//if($a==0){
//    echo 'true';
//}
//if($a>0){
//    echo 'false';
//}
