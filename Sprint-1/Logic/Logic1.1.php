<?php

for ($y=1; $y<10; $y++){
    for ($x=1; $x<10; $x++){
        if ($y==$x){
            echo "*";
        }else{
            echo "_";
        }
    }
    echo "\n";
}
?>