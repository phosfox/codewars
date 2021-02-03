<?php
/**
 * Created by PhpStorm.
 * User: Constantin
 * Date: 13.02.2019
 * Time: 21:48
 */

require_once 'uniqueInOrder.php';
class UniqueTest extends PHPUnit_Framework_TestCase
{
    // test function names should start with "test"
    public function testSampleTest(): void {
        $this->assertSame(['A','B','C','D','A','B'], uniqueInOrder('AAAABBBCCDAABBB'));
        $this->assertSame([1,2,3], uniqueInOrder([1,2,2,3]));
        $this->assertSame([], uniqueInOrder(''));
    }

}
