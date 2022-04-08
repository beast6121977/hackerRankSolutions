<?php
/**
 * Given a square matrix, calculate the absolute difference
 * between the sums of its diagonals.
 *
 * @param $arr
 * @return float|int
 */
function diagonalDifference($arr) {
    $rightSum = 0;
    $leftSum = 0;
    $count = count($arr) - 1;

    for ($i = 0; $i<=$count; $i++)
    {
        $rightSum+= $arr[$i][$i];
        $leftSum+= $arr[$count-$i][0+$i];
    }

    return abs($leftSum - $rightSum );

}