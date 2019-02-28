<?php
/**
 * ua-parser
 *
 * Copyright (c) 2011-2012 Dave Olsen, http://dmolsen.com
 *
 * Released under the MIT license
 */
namespace UAParser\Test;

use PHPUnit\Framework\TestCase;

abstract class AbstractTestCasePhpunit4 extends TestCase
{
    public function setUp()
    {
        parent::setUp();
        if (method_exists($this, 'fcSetUp')) {
            $this->fcSetUp();
        }
    }

    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();
        if (method_exists(get_called_class(), 'fcSetUpBeforeClass')) {
            static::fcSetUpBeforeClass();
        }
    }

    public function tearDown()
    {
        if (method_exists($this, 'fcTearDown')) {
            $this->fcTearDown();
        }
        parent::tearDown();
    }

    /**
     * Compatibility layer for PHPUnit 6+ to support PHPUnit 4 code.
     *
     * @param mixed $class
     *   The expected exception class.
     * @param string $message
     *   The expected exception message.
     * @param int $exception_code
     *   The expected exception code.
     */
    public function setExpectedException($class, $message = '', $exception_code = NULL)
    {
        if (method_exists($this, 'expectException')) {
            $this->expectException($class);
            if (!empty($message)) {
                $this->expectExceptionMessage($message);
            }
            if ($exception_code !== NULL) {
                $this->expectExceptionCode($exception_code);
            }
        } else {
            parent::setExpectedException($class, $message, $exception_code);
        }
    }

    public static function assertStringNotContainsString($needle, $haystack, $message = '')
    {
        parent::assertNotContains($needle, $haystack, $message);
    }

    public static function assertIsString($actual, $message = '')
    {
        parent::assertInternalType('string', $actual, $message);
    }
}
