<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>

<?php
$colors = array('red','yellow','blue','gray','maroon','brown','green');
$col = rand(2,10);
$row = rand(2,10);
for ($i = 0; $i <= $row; $i++){
    echo '<tr>' . PHP_EOL;
    for($j = 0; $j <= $col; $j++){
        echo "<td style='background-color:" . $colors[rand(0,count($colors)-1)] . ";'> " . rand(0,1000) . "</td>";
    }
    echo '</tr>' . PHP_EOL;
}
?>

    </table>
</body>
</html>