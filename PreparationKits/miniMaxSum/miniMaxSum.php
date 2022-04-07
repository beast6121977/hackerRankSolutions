<?php
function miniMaxSum($arr) {
    $min = $arr[0];
    $max = $arr[0];
    $keyMin = 0;
    $keyMax = 0;

    foreach ($arr as $key=>$value)
    {
        if ($value < $min)
        {
            $keyMin = $key;
            $min = $value;
        }
        elseif ($value > $max)
        {
            $keyMax = $key;
            $max = $value;
        }
    }

    $copyForMin = $arr;

    unset($copyForMin[$keyMax]);
    unset($arr[$keyMin]);

    echo array_sum($copyForMin).' '.array_sum($arr);
}