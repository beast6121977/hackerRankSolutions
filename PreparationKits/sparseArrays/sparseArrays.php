<?php

/**
 * There is a collection of input strings and a collection of query strings.
 * For each query string, determine how many times it occurs in the list of input strings.
 * Return an array of the results.
 *
 * @param $strings
 * @param $queries
 * @return array
 */
function matchingStrings($strings, $queries) {
    if (empty($queries))
    {
        return [];
    }

    if (empty($strings))
    {
        return array_fill(0, count($queries), 0);
    }

    $stringsArray = [];
    $result = array_fill(0, count($queries), 0);
    foreach ($strings as $string)
    {
        if (isset($stringsArray[$string]))
        {
            $stringsArray[$string]++;
        }
        else
        {
            $stringsArray[$string] = 1;
        }
    }

    foreach ($queries as $key=>$value)
    {
        if (isset($stringsArray[$value]))
        {
            $result[$key] = $stringsArray[$value];
        }
    }

    return $result;
}