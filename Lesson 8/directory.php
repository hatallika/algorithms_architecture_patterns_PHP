<?php

if ($_GET['dir']) {
    $path = $_GET['dir'];
} else {
    $path = $_SERVER['DOCUMENT_ROOT'];
}

foreach (new DirectoryIterator($path) as $fileInfo) {
    if ($fileInfo->isDot()) continue;

    if($fileInfo->getType() == "dir") {
        echo "<a href='./?dir={$path}/{$fileInfo->getFilename()}'>{$fileInfo->getFilename()}</a></br>\n";

    } else {
        echo $fileInfo->getFilename() . "<br>\n";
    }
}
echo "<a href='#'>..</a></br>\n"; // не сделала ссылку назад



