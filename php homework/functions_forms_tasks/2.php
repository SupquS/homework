<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task 2</title>
</head>
<body>
<?php
$msg = '';
$words = [];
if (!empty($_POST['msg'])){
    $msg = $_POST['msg'];
    $words = str_word_count($msg, 1);

    usort($words, 'compareWords');
    $words = array_slice($words, 0, 3);
}
    function compareWords($a, $b) {
        $lengthA = strlen($a);
        $lengthB = strlen($b);
        if ($lengthA > $lengthB) {
            return 0;
        }

        return ($lengthA > $lengthB) ? -1 : 1;
    }

?>
<form action="" method="post">
    <textarea name="msg" cols="30" rows="5"><?= $msg ?></textarea>
    <br>
    <input type="submit" value="Go!">
</form>
<pre>
    <?php print_r($words); ?>
    </pre>
</body>
</html>