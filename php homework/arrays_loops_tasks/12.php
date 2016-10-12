<?php
$n = 1000;
$num = 0;
while($n > 50){
    $n /= 2;
    $num++;
}
    echo $n . '<br>';
    echo $num;
?>
<hr>
<?php
for($n = 1000, $num = 0; $n > 50; $n /= 2, $num++){}
    echo $n . '<br>';
    echo $num;
?>