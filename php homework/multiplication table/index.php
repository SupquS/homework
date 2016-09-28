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
    for($b = 1; $b < 10; $b++){
        echo "<tr>\r\n";
			for($a = 2; $a < 10; $a++){
				echo "<td>$a * $b = ".$a * $b."</td>\r\n";
        }
		echo "</tr>\r\n";
    }
    ?>
    </tbody>
</table>
</body>
</html>