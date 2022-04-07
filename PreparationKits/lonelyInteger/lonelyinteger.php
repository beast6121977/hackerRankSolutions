<?php
/**
 * Given an array of integers, where all elements but one occur twice, find the unique element.
 * @param $a
 * @return false|int|string
 */
function lonelyinteger($a) {
    $items = [];
    foreach ($a as $item)
    {
        if (isset($items[$item]))
        {
            $items[$item]++;
        }
        else{
            $items[$item] = 1;
        }
    }

    return array_search(1, $items);
}