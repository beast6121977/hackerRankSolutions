<?php

/**
 * Вам задана строка s, состоящая из пробелов и латинских букв.
 * Строка называется панграммой, если она содержит каждую из 26 латинских букв хотя бы раз.
 * Определите является ли строка s панграммой.
 *
 * We promptly judged antique ivory buckles for the next prize -> pangram
 * We promptly judged antique ivory buckles for the prize -> not pangram
 *
 * @param $s
 * @return string
 */
function pangrams($s) {
    $s = str_replace(' ', '', mb_strtolower($s));

    $result = [];
    for ($i = 0; $i < strlen($s); $i++) {
        if (isset($result[$s[$i]])) {
            $result[$s[$i]]++;
        } else {
            $result[$s[$i]] = 1;
        }
    }

    return (count($result) < 26) ? 'not pangram' : 'pangram';
}
