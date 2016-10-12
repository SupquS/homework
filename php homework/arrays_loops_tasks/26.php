<?php
$arr = array();
$odd = 1;
$even = 1;

for($i = 0; $i <= 20; $i++){
    $arr[] = rand(1,20);
}

echo "<pre>";
print_r($arr);
echo "<pre>";

foreach($arr as $key => $value){
    if($key % 2 == 0 && $value > 0){
            $even *= $value;
        }else{
            $odd .= $value . '<br>';
    }
}
echo $even;
echo $odd;