<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 5</title>
</head>
<body>

<?php
    function getDirectoryListing($dirName, $searchTerm) {
    if (!is_dir($dirName)) {
        trigger_error('Directory does not exist.', E_USER_WARNING);
        return null;
    }
    chdir($dirName);
    return glob("*{$searchTerm}*");
    }

    $list = getDirectoryListing('.', 'php');
    print_r($list);
?>

</body>
</html>