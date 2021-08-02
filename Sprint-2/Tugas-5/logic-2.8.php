<?php

for ($y=1; $y<10; $y++) { 
    for ($x=1; $x<10; $x++) { 
        if ($y>$x && $x+$y<10 || $y<$x && $x+$y>10) {
            echo ("A");
        }
        elseif ($x==$y) {
            echo ($x*2-1);
        }elseif ($y+$x==10) {
            echo ($x*2-2);
        }else {
            echo ("_");
        }
    }
    echo ("\n");
}


?>