<?php

/**
 *
 * An avid hiker keeps meticulous records of their hikes. During the last hike that took exactly steps steps, for every step
 * it was noted if it was an uphill, U, or a downhill, D step. Hikes always start and end at sea level, and each step up or down
 * represents a 1 unit change in altitude. We define the following terms:
 *
 * - A mountain is a sequence of consecutive steps above sea level, starting with a step up from sea level and ending with a step down to sea level.
*  - A valley is a sequence of consecutive steps below sea level, starting with a step down from sea level and ending with a step up to sea level.
* Given the sequence of up and down steps during a hike, find and print the number of valleys walked through.
 * Example: steps = [DDUUUUDD];
 *
 * @param $steps
 * @param $path
 * @return int
 */
function countingValleys($steps, $path) {

    $level = 0;
    $valley = 0;
    $result = 0;

    for ($i = 0; $i < $steps; $i++)
    {
        switch ($path[$i])
        {
            case 'U':
                $level++;
                if ($level == 0 && $valley){
                    $result++;
                    $valley = false;
                }
                break;

            case 'D':
                if ($level == 0) {
                    $valley = true;
                }
                $level--;
                break;
        }
    }

    return $result;
}