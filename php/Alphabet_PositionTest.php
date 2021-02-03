<?php
/**
 * Created by PhpStorm.
 * User: Constantin
 * Date: 20.02.2019
 * Time: 15:33
 */

require_once 'Alphabet_Position.php';

class Alphabet_PositionTest extends PHPUnit_Framework_TestCase
{
    public function testFixed() {
        $alph = new Alphabet_Position();
        $this->assertSame('1 1 1 1', $alph->doAlphabet_position('aaaa'));
        $this->assertSame('20 8 5 19 21 14 19 5 20 19 5 20 19 1 20 20 23 5 12 22 5 15 3 12 15 3 11', $alph->doAlphabet_position('The sunset sets at twelve o\' clock.'));
        $this->assertSame('20 8 5 14 1 18 23 8 1 12 2 1 3 15 14 19 1 20 13 9 4 14 9 7 8 20', $alph->doAlphabet_position('The narwhal bacons at midnight.'));
    }
}
