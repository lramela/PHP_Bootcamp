
<?php
    function ft_is_sort($tab) {
        $i;
        $temp = $tab;
        sort($tab);
        foreach ($tab as $key=>$value)
        {
            if ($value != $temp[$key])
                return false;
        }
        return true;
    }
?>
