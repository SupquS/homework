<?php
$income = '123';
$total = 0;
//var_dump(isset($income));
for ($i = 0; $i <= strlen($income); $i++){
        $total += $income[$i];
}
echo $total;