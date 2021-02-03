<?php
/**
 * Created by PhpStorm.
 * User: Constantin
 * Date: 20.02.2019
 * Time: 21:35
 */

require_once 'DuplicateEncode.php';

class DuplicateEncodeTest extends PHPUnit_Framework_TestCase
{
    public function testBasics() {
        $dup = new DuplicateEncode();
        $this->assertSame('()()()', $dup->duplicate_encode('recede'));
        $this->assertSame(')())())', $dup->duplicate_encode('Success'), 'should ignore case');
        $this->assertSame('(((', $dup->duplicate_encode('din'));
        $this->assertSame('))))))', $dup->duplicate_encode('iiiiii'), 'duplicate-only-string');
        $this->assertSame(')))))(', $dup->duplicate_encode(' ( ( )'));
    }
}
