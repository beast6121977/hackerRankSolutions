<?php
/**
 * There is a large pile of socks that must be paired by color.
 * Given an array of integers representing the color of each sock,
 * determine how many pairs of socks with matching colors there are.
 * Example: ar = [1,2,1,2,1,3,2];
 *
 * @param $n
 * @param $ar
 * @return false|float|int
 */
function sockMerchant($n, $ar) {
    $colors = [];
    $pairs = 0;
    foreach ($ar as $color) {
        if (isset($colors[$color])) {
            $colors[$color]++;
        } else {
            $colors[$color] = 1;
        }
    }

    foreach($colors as $search)
    {
        $pairs+= ($search % 2 == 0) ? $search/2 : floor($search/2);
    }

    return $pairs;
}