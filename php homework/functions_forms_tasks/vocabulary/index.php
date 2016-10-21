<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vocabulary Edit Form</title>
</head>
<body>
<header>
    <h1>Vocabulary Edit Form</h1>
    <p>If you want to add/del/change a word - do it in the form below and then push the button <b>Save</b></p>
</header>
<?php
require 'config.php';
?>
<section>
<form action="vocabulary.php" method="post">
    <textarea name="save" cols="60" rows="30"><?php $message = vocabOutput() ?></textarea>
    <br>
    <input type="submit" value="Save!">
</form>
</section>
</body>
</html>