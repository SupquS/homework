<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 3</title>
</head>
<body>
<form action="" method="post">
    <input type="number" name="word_length"><br>
    <input type="submit" value="Go!">
</form>
<?php
    if(empty($_POST['word_length'])) {
        exit;
}
    $maxLength = intval($_POST['word_length']);
    $file = '3.txt';
    $words = filterWordsFromFile($file, $maxLength);
    saveToFile($file, $words);
    $words = filterWordsFromFile($file, $maxLength);

function filterWordsFromFile($filename, $wordMaxLength) {
    $handler = fopen($filename, 'r');
    $words = [];
    while(($line = fgets($handler)) !== false) {
        $words[] = $line;
    }

    fclose($handler);
    $words = array_filter(
        $words,
        function($item) use ($wordMaxLength) {
            $item = trim($item, "\n");
            return mb_strlen($item) <= $wordMaxLength;
        }
        );
    return $words;
}
function saveToFile($filename, array $lines) {
    $data = implode('', $lines);
    file_put_contents($filename, $data);
}
?>
</body>
</html>