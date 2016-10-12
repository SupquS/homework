<?php
for($b = 1; $b < 10; $b++){
    echo "<tr>" . PHP_EOL;
    for($a = 2; $a < 10; $a++){
        echo "<td>$a * $b = ".$a * $b."</td>" . PHP_EOL;
    }
    echo "</tr>" . PHP_EOL;
}