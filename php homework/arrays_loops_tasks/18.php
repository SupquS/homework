<?php

$week = array('Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Воскресенье');
foreach($week as $days){
    if($days != 'Суббота' && $days != 'Воскресенье'){
        echo $days . '<br>';
    } else {
        echo "<b>$days</b>" . '<br>';
    }
}