<?php
function breakingRecords($scores) {
    $minRecord = $scores[0];
    $maxRecord = $scores[0];
    $increase = 0;
    $decrease = 0;

    unset($scores[0]);

    foreach ($scores as $points)
    {
        if ($points > $maxRecord )
        {
            $increase++;
            $maxRecord = $points;
        }
        elseif ($points < $minRecord)
        {
            $decrease++;
            $minRecord = $points;
        }
    }

    return [$increase, $decrease];
}