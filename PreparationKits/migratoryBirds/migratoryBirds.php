<?php
/**
 * Given an array of bird sightings where every element represents a bird type id,
 * determine the id of the most frequently sighted type. If more than 1 type has been
 * spotted that maximum amount, return the smallest of their ids.
 *
 * @param $arr
 * @return int|mixed|string|null
 */
function migratoryBirds($arr) {
    $birdsIds = packArray($arr);
    $amountMax = 0;
    $selectedBirdId = null;

    foreach ($birdsIds as $birdId => $amount) {
        if ($amount > $amountMax) {
            $amountMax = $amount;
            $selectedBirdId = $birdId;
        } elseif ($amount == $amountMax) {
            $selectedBirdId = ($birdId > $selectedBirdId) ? $selectedBirdId : $birdId;
        }
    }

    return $selectedBirdId;
}

function packArray(array $array)
{
    $pack = [];
    foreach ($array as $item) {
        if (isset($pack[$item])) {
            $pack[$item]++;
        } else {
            $pack[$item] = 1;
        }
    }

    return $pack;
}
