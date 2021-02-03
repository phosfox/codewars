<?php

/**
 * Created by PhpStorm.
 * User: Constantin
 * Date: 25.02.2019
 * Time: 17:07
 */
class GCD
{
    public function convertFrac($lst): string
    {
        $commonDenArr = $this->commonDenominator($lst);
        $flatArr = [];

        foreach ($commonDenArr as $arr) {
            foreach ($arr as $tuple) {
                $flatArr[] = $tuple;
            }
        }

        $gcd = self::gcd_array($flatArr);

        $commonDenArr = $this->divideArrayBy($commonDenArr, $gcd);

        $retString = $this->arrayToString($commonDenArr);
        return $retString;
    }

    public function commonDenominator($arr): array
    {
        $arrCopy = $arr;
        foreach ($arr as $k => $kValue) {
            $denominator = $arr[$k][1];
            foreach ($arrCopy as $i => $iValue) {
                if ($k !== $i) {
                    $arrCopy[$i][0] *= $denominator;
                    $arrCopy[$i][1] *= $denominator;
                }
            }
        }
        return $arrCopy;
    }

    public static function gcd_ints($a, $b)
    {
        return ($a % $b) ? self::gcd_ints($b, $a % $b) : $b;
    }

    public static function gcd_array($arr, $a = 0): int
    {
        $b = array_pop($arr);
        return ($b === null) ? (int)$a : self::gcd_array($arr, self::gcd_ints($a, $b));
    }

    /**
     * @param $array
     * @param $div
     * @return array
     */
    public function divideArrayBy($array, $div): array
    {
        foreach ($array as $i => $iValue) {
            $array[$i][0] /= $div;
            $array[$i][1] /= $div;
        }

        return $array;
    }

    /**
     * @param $array
     * @return string
     */
    public function arrayToString($array): string
    {
        $retStr = '';
        foreach ($array as $arr) {
            $retStr .= '(';
            $retStr .= implode(',', $arr);
            $retStr .= ')';
        }
        return $retStr;
    }
}