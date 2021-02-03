<?php
/**
 * Created by PhpStorm.
 * User: Constantin
 * Date: 20.02.2019
 * Time: 15:32
 */

class Alphabet_Position
{
    function doAlphabet_position(string $s): string
    {
        $alphabet = '_abcdefghijklmnopqrstuvwxyz';
        $retStr = '';

        foreach (str_split(strtolower($s)) as $chr) {
            if (strpos($alphabet, $chr)) {
                $retStr .= strpos($alphabet, $chr);
                $retStr .= ' ';
            }
        }

        return trim($retStr);
    }
}