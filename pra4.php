<?php
function showDetail(array $x)
{
    foreach($x as $key => $value){
        echo $key . ': $' . $value . "\n";
    }
}
showDetail(['apple' => '30', 'banana' => '10', 'orange' => '20']);
