<?php
/**
 * Created by PhpStorm.
 * User: Constantin
 * Date: 25.02.2019
 * Time: 17:08
 */
require_once 'GCD.php';


class GCDTest extends PHPUnit_Framework_TestCase
{
    private function revTest($actual, $expected)
    {
        $this->assertSame($expected, $actual);
    }

    public function testBasics()
    {
        $gcd = new GCD();

        $lst = [[1, 2], [1, 3], [1, 4]];
        $this->revTest($gcd->convertFrac($lst), "(6,12)(4,12)(3,12)");
        $lst = [[69, 130], [87, 1310], [3, 4]];
        $this->revTest($gcd->convertFrac($lst), "(18078,34060)(2262,34060)(25545,34060)");
        $lst = [];
        $this->revTest($gcd->convertFrac($lst), "");
        $lst = [[77, 130], [84, 131], [3, 4]];
        $this->revTest($gcd->convertFrac($lst), "(20174,34060)(21840,34060)(25545,34060)");
    }

    public function testGcd_Array(): void
    {
        $gcd = new GCD();
        $this->assertSame(2, $gcd->gcd_array([2, 4, 8, 6]));
        $this->assertSame(1, $gcd->gcd_array([3, 4, 5, 7]));
        $this->assertSame(5, $gcd->gcd_array([15, 5,25,55]));
    }
}
