請寫出一個名為reverseTriangle的function，功能如下：給一個數字，印出靠右的三角型。
reverseTriangle(3);
  *
 **
***
reverseTriangle(5);
    *
   **
  ***
 ****
*****

<?php
function reverseTriangle($x){
    for ($i=1;$i<=$x;$i++) {
        for ($j=$x;$j>$i;$j--){
            echo ' ';
        }
        for ($k=1;$k<=$i;$k++) {
            echo '*';
        }
    echo "\n";
    }
}

reverseTriangle(5);
