請寫出一個名為bigTriangle的function，功能如下：給一個數字，印出大的三角型。
bigTriangle(3);
*
**
***
**
*

bigTriangle(5);
*
**
***
****
*****
****
***
**
*


<?php
function bigTriangle($x)
{
    for ($i=1;$i<=$x;$i++){
        for ($j=1;$j<=$i;$j++){
            echo '*';
        }
    echo "\n";
    }

    for ($k=2;$k<=$x;$k=$k+1){
        for ($l=$x;$l>=$k;$l=$l-1){
            echo '*';
        }
    echo "\n";
    }
}

bigTriangle(3);
