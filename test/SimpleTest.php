<?php

/**
 * @see https://phpunit.de/manual/current/en/writing-tests-for-phpunit.html
 */
class SimpleTest extends PHPUnit_Framework_TestCase {

    public function testHelloWorld() {
        $this->assertTrue(true);
        $this->assertFalse(true, 'Should be false!');
    }

}
