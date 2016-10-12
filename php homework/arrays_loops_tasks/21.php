<?php
$show = '';
for($i = 1; $i <= 9; $i++){
    for($a = 0; $a < $i; $a++){
        $show .= $i;
    }
    echo $show . '<br>';
    $show = '';
    $a = 0;
}