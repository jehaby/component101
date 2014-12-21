<?php

$filename = 'file.csv';

if (($handle = fopen($filename, 'r')) !== FALSE) {

    while (($line = fgets($handle)) !== FALSE) {
        echo 'wtf';
        var_dump($line);
        var_dump(explode($line, ','));
        var_dump(str_getcsv($line, ','));
    }

    fclose($handle);
}
