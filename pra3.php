請寫出一個名為getSum的function，功能如下：給一個數字，回傳一個array，array當中只有一項，key固定為sum，value為總和的結果。

getSum(5); // [‘sum’=>15]
getSum(10); // [‘sum’=>55]

<?php
function getSum($a)
{
    $countI=0;
    for ($i=1;$i<=$a;$i++){
        $countI += $i;
    }
    $x=array('sum'=>$countI);
    return $x;
}
var_dump(getSum(5));
var_dump(getSum(10));


<?php

function getSum($num) {
    return ['sum' => $num * ($num + 1) / 2];
}

var_dump(getSum(5));
var_dump(getSum(10));
