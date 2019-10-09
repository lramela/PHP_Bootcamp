#!/usr/bin/php
<?php
    if ($argc == 2)
    {
        $str = preg_replace("/[ ]+/", ' ', $argv[1]);
        $trimmed = trim($str, ' ');
        echo $trimmed . "\n";
    }    
?>