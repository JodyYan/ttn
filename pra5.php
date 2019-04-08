<?php
function isEven($n)
{
    if ($n%2==0) {
        return true;
    }
    return false;
}

function triangle($x)
{
    if (isEven($x)) {
        echo 'error';
        return;
    }

    for ($i=1; $i<=$x; $i=$i+2) {
        for ($j=1; $j<=$i; $j++) {
            echo '*';
        }
        echo "\n";
    }
}
triangle(3);
triangle(5);
