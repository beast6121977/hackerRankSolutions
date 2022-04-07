<?php
function plusMinus($file, $fileOut)
{

    while (($string = fgets($file)) != false) {
        $stringParam = explode(';', $string);

        switch ($stringParam[0]) {
            case 'S':
                $string = modulS($stringParam[2], $stringParam[1]);
                break;

            case 'C':
                $string = modulC($stringParam[2], $stringParam[1]);
                break;
        }

        fwrite($fileOut, $string . "\n");
    }

    return $fileOut;
}

function modulS($string, $mode)
{
    switch ($mode) {
        case 'M':
            $string = str_replace(['(',')'], ['',''],$string);
            break;
    }
    return trim(mb_strtolower(preg_replace('/([a-zA-Z])(?=[A-Z])/', '$1 ', $string)));
}

function modulC($string, $mode)
{
    switch ($mode) {
        case 'V':
            $string = modulCV($string);
            break;

        case 'C':
            $string = ucwords($string);
            $stringWords = explode(' ', $string);
            $string = trim(implode('', $stringWords));
            break;

        case 'M':
            $string = modulCV($string) . '()';
            break;
    }

    return $string;
}

function modulCV($string)
{
    $stringWords = explode(' ', $string);

    for ($i = 1; $i < count($stringWords); $i++) {
        $stringWords[$i] = ucfirst($stringWords[$i]);
    }

    return trim(implode('', $stringWords));
}