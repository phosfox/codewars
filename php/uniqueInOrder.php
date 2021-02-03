<?php
/**
 * Created by PhpStorm.
 * User: Constantin
 * Date: 13.02.2019
 * Time: 21:46
 */
function uniqueInOrder($iterable)
{
    if ($iterable === '') {
        return [];
    }
    $splitIter = is_string($iterable) ? $splitIter = str_split($iterable) : $iterable;

    $prev = null;
    $ret = [];
    foreach ($splitIter as $ele) {
        if ($prev !== $ele) {
            $ret[] = $ele;
            $prev = $ele;
        }
    }
    print_r($ret);
    return $ret;
}