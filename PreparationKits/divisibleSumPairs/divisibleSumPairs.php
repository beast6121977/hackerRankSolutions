<?php
function divisibleSumPairs($n, $k, $ar) {
    $amount = 0;
    foreach ($ar as $key=>$value)
    {
        for ( $j = $key+1; $j < $n; $j++)
        {
            $amount += (($value + $ar[$j])%$k == 0)?1:0;
        }
    }

    return $amount;

}