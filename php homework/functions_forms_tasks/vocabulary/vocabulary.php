<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Your Vocabulary Page</title>
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="index.php">Edit the list of words</a></li>
        </ul>
    </nav>
<h1>List of words to be censored</h1>
</header>
<?php

require 'config.php';

if(empty ($_POST['save']))
{
    redirect('index.php');
}

$save = !empty($_POST['save'])? $_POST['save'] : null;
if (!$save) {
    redirect('index.php');
}

saveToFile($save);
echo $save; 
?>
</body>
</html>