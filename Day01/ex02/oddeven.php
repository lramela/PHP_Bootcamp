#!/usr/bin/php
<?php
    while (1)
    {
        echo "Enter a number: ";
        $fd = fopen('php://stdin', 'r');
        $input = fgets($fd);
        $trimed_input = rtrim($input, "\n");
        if (is_numeric($trimed_input))
        {
            if ($trimed_input % 2 == 0)
                echo "The number $trimed_input is even\n";
            else
                echo "The number $trimed_input is odd\n";
        }
        else if (feof($fd))
        {
            fclose($fd);
            exit;
        }
        else
            echo "'$trimed_input'"."is not a number\n";
        fclose($fd);
    }
?>