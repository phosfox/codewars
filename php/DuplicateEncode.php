<?php

/**
 * Created by PhpStorm.
 * User: Constantin
 * Date: 20.02.2019
 * Time: 21:23
 */

class DuplicateEncode
{
    public function duplicate_encode(string $word){
        $splitWord = str_split(strtolower($word));
        $wordHashMap = array_count_values($splitWord);
        $retStr = '';

        foreach ($splitWord as $chr) {
            if ($wordHashMap[$chr] > 1) {
                $retStr .= ')';
            } else {
                $retStr .= '(';
            }
        }
    return $retStr;
    }
}