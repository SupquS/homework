<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Таблица умножения</title>
</head>
<body>
<table border="1" cellspacing="1" cellpadding="5">
    <thead>
    <tr>
        <th>Таблица умножения </th>
    </tr>
    </thead>
    <tbody>
        <?php
        for($a = 2; $a <= 9; $a++){
            for($b = 1; $b <=9; $b++){
                $c = $a * $b;
                echo "<tr><td>$a * $b = $c</td></tr>";
            }
        }
        ?>
    </tbody>
</table>
</body>
</html>