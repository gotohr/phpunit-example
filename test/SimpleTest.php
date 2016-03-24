<?php

require ('../vendor/autoload.php');

/**
 * @see https://phpunit.de/manual/current/en/writing-tests-for-phpunit.html
 */
class SimpleTest extends PHPUnit_Framework_TestCase {

    public function testHelloWorld() {
        $this->assertTrue(true);
        $this->assertFalse(true, 'Should be false!');
    }

    /**
     * @test
     */
    public function withAnnotation() {
        $this->assertFalse(false, 'test with annotation fails!');
    }
}
