<?php

function plusMinus($arr) {

    $pos = 0;
    $neg = 0;
    $zero = 0;

    $amount = count($arr);

    for ($i=0; $i<$amount; $i++)
    {
        if ($arr[$i]>0)
        {
            $pos++;
        }
        elseif($arr[$i]< 0)
        {
            $neg++;
        }
        else
        {
            $zero++;
        }
    }

    echo number_format($pos/$amount, 6, '.','').PHP_EOL;
    echo number_format($neg/$amount, 6, '.','').PHP_EOL;
    echo number_format($zero/$amount, 6, '.','').PHP_EOL;

}
