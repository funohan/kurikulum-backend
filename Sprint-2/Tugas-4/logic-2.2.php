<?php

for ($y=1; $y<10; $y++){
    for ($x=1; $x<10; $x++){
        if ($x==9-($y-1)){
            $hasil = ($x*2-2);
            echo "$hasil";
        }else{
            echo " ";
        }
    }
    echo "\n";
}

?>
