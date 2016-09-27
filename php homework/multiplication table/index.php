<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">

    <title>Multiplication Table</title>
</head>
<body>
<table>
    <thead>
    <tr>
        <th colspan="8">Multiplication Table</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th>2 Times Table</th>
        <th>3 Times Table</th>
        <th>4 Times Table</th>
        <th>5 Times Table</th>
        <th>6 Times Table</th>
        <th>7 Times Table</th>
        <th>8 Times Table</th>
        <th>9 Times Table</th>
    </tr>
    <?php
    for($b = 1; $b <= 9; $b++){
        $a = 2;
        $c = $a * $b;
        echo "<tr><td>"."$a * $b = $c"."</td>";
        for($a = 3; $a <= 9; $a++){
            $c = $a * $b;
            echo "<td>"."$a * $b = $c"."</td>";
        }
    }
    ?>
    </tbody>
</table>
</body>
</html>