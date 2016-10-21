<?php

const VOCAB = "censornet.txt";

/**
 * Redirects users to a URL.
 *
 * @param string $url URL for redirect.
 *
 * @return void
 */
function redirect($url)
{
    header('Location: ' . $url);
    exit;
}

function openFileToRead()
{
    $file = file(VOCAB);
    array_walk($file, function (&$item) {
        $item = trim($item, "\r\n");
    });
    return array_filter($file);
}

function vocabOutput()
{
    foreach(openFileToRead() as $item)
    {
        $items = $item . PHP_EOL;
        echo $items;
    }
}

function saveToFile($save)
{
    $handle = fopen(VOCAB, 'w');
    $result = fwrite($handle, $save . PHP_EOL);
    fclose($handle);
    return !empty($result);
}