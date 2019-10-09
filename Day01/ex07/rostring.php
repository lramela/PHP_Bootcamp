#!/usr/bin/php
<?php
$iter = 1;
$input = preg_split('/[\s]/', $argv[1], NULL, PREG_SPLIT_NO_EMPTY);
$len = count($input);
while ($iter < $len)
{
    echo "$input[$iter] ";
    $iter++;
}
echo "$input[0]"."\n";
?>