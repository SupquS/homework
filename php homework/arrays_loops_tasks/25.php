<?php
$arr = array();
for ($i = 0; $i <= 10; $i++) {
    $arr[] = rand(0, 50);
}

echo "<pre>";
print_r($arr);
echo "<pre>";

$min = min($arr);
$max = max($arr);

foreach($arr as $key => $value){
    if($value == $min){
        $arr[$key] = $max;
    }
    if($value == $max){
        $arr[$key] = $min;
    }
}

echo "<pre>";
print_r($arr);
echo "<pre>";