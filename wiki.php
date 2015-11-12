<?php

if (isset($_GET['content'])) {
    $content = $_GET['content'];
    file_put_contents('wiki.txt', $content);
}

if (file_exists('wiki.txt')) {
    $content = file_get_contents('wiki.txt');
} else {
    $content = '(no content)';
}

$safe_content = htmlentities($content);
echo $safe_content;
?>
