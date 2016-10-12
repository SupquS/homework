<?php
for($b = 1; $b < 10; $b++){
    echo "<tr>\r\n";
    for($a = 2; $a < 10; $a++){
        echo "<td>$a * $b = ".$a * $b."</td>\r\n";
    }
    echo "</tr>\r\n";
}
?>