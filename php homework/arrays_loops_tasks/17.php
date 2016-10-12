<?php
$month = 'Сентябрь';
$arr = array('Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь');
foreach($arr as $value){
    if($value != $month){
        echo $value .'<br>';
    }else{
        echo "<b>$month</b>".'<br>';
    }
}