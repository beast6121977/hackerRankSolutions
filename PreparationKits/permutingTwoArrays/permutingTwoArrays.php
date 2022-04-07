<?php
/**
 * There are two n-element arrays of integers, A and B.
 * Permute them into some A` and B` such that the relation A`[i]+B`[i]>=k holds
 * for all i where 0 <= i < n.
 *
 * There will be q queries consisting of A, B, and k.
 * For each query, return YES if some permutation A`, B` satisfying the relation exists.
 * Otherwise, return NO.
 *
 * @param $k
 * @param $A
 * @param $B
 * @return string
 */
function twoArrays($k, $A, $B) {
    $findPair = true;
    $sizeB = count($B);

    sort ($A);
    rsort($B);

    foreach ($A as $key=>$itemA)
    {
        for ($i = $key; $i < $sizeB; $i++)
        {
            if (($B[$i] + $itemA)>=$k){
                $value = $B[$i];
                $B[$i] = $B[$key];
                $B[$key] = $value;
                $findPair = true;
                break;
            }
            else {
                $findPair = false;
            }
        }

        if(!$findPair) break;
    }

    return ($findPair)?'YES':'NO';

}