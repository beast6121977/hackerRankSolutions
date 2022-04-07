<?php

/**
 * Letters in some of the SOS messages are altered by cosmic radiation during transmission.
 * Given the signal received by Earth as a string, s, determine how many letters of the SOS
 * message have been changed by radiation.
 *
 * Example: s='SOSTOT'
 *
 * @param $s
 * @return int
 */
function marsExploration($s) {
    $len = strlen($s);
    $modal = 3;
    $needle = 'SOS';
    $damageMessages = 0;

    for ($i = 0; $i < $len; $i+=$modal ) {

        $substr = mb_strcut($s, $i, $modal);

        if ($substr != $needle)
        {
            for ($j=0; $j<$modal; $j++)
            {
                $damageMessages+=($substr[$j]!=$needle[$j])?1:0;
            }
        }
    }

    return $damageMessages;
}