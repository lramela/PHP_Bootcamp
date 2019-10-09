#!/usr/bin/php
<?php
   function ft_split($str) {
    $output = preg_split('/[\s]/', $str, NULL, PREG_SPLIT_NO_EMPTY);
    sort($output);
    return ($output);
} 
?>