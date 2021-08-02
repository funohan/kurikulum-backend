<?php
for ($y=1; $y<10; $y++){
    for ($x=1; $x<10; $x++){
        if ($y==$x || $x==9-($y-1) || $y==5 || $x==5){
            echo"*";
        }else{
            echo"_";
        }
    }
    echo"\n";
}