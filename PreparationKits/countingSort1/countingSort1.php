<?php
/**
 * Alternative Sorting
 * Another sorting method, the counting sort, does not require comparison.
 * Instead, you create an integer array whose index range covers the entire
 * range of values in your array to sort. Each time a value occurs in the
 * original array, you increment the counter at that index. At the end,
 * run through your counting array, printing the value of each non-zero valued index
 * that number of times.
 *
 * @param $arr
 * @return array
 */
function countingSort($arr) {

    $result = array_fill(0, 100, 0);

    for($i = 0; $i < count($arr); $i++)
    {
        $result[$arr[$i]]++;
    }

    return $result;
}