<?php

require ('../vendor/autoload.php');

class OtherTest extends PHPUnit_Framework_TestCase {
    public function testOtherTest() {
        $conditionMustBeTrue = (2 == 2);
        $this->assertTrue($conditionMustBeTrue, 'True is not true');
    }
}
