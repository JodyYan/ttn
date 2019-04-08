<?php

function bigTriangle($num)
{
    for ($i=0; $i<$num; $i++) {
        for ($j=0; $j<=$i; $j++) {
            echo '*';
        }
        echo "\n";
    }

    for ($i=$num-1; $i>0; $i--) {
        for ($j=0; $j<$i; $j++) {
            echo '*';
        }
        echo "\n";
    }
}

bigTriangle(3);
bigTriangle(5);
