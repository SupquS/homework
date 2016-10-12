<?php
$week = array('Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Воскресенье');
$today = 'Понедельник';
foreach($week as $days){
    if($days === $today){
        echo "<i>$days</i>" . '<br>';
    } else {
        echo $days . '<br>';
    }
}