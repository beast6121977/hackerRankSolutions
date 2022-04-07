<?php
/**
 * Two children, Lily and Ron, want to share a chocolate bar. Each of the squares has an integer on it.

Lily decides to share a contiguous segment of the bar selected such that:

The length of the segment matches Ron's birth month, and,
The sum of the integers on the squares is equal to his birth day.
Determine how many ways she can divide the chocolate.
 * @param $s
 * @param $d
 * @param $m
 * @return int
 */
function birthday($s, $d, $m) {
    $size = count($s);
    $count = 0;

    for ($i = 0; $i < $size; $i++) {
        $sub = array_slice($s, $i, $m);
        if (array_sum($sub) == $d) {
            $count++;
        }
    }

    return $count;
}