<!doctype>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 1</title>
</head>
<body>
<?php

if (!empty($_POST)) {
    $keys = array_flip(['msg1', 'msg2']);
    $data = array_intersect_key($_POST, $keys);
    $data = array_filter($data);

    if (count($data) < 2) {
        echo 'Not enough input data. Please, fill both texareas.';
        exit;
    }

    $result = getCommonWords(
        $data['msg1'],
        $data['msg2']
    );
    var_dump($result);
}

    function getCommonWords($msg1, $msg2)
    {
        $aWords = explode(' ', $msg1);
        $bWords = explode(' ', $msg2);

        return array_intersect($aWords, $bWords);
    }
?>
<form action="1.php" method="post">
    <div>
        <textarea name="msg1" placeholder="Your message 1"></textarea>
    </div>
    <div>
        <textarea name="msg2" placeholder="Your message 2"></textarea>
    </div>
    <div>
        <input type="submit" name="submit" value="Go!">
    </div>
</form>
</body>
</html>