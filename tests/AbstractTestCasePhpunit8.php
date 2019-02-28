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

abstract class AbstractTestCasePhpunit8 extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        if (method_exists($this, 'fcSetUp')) {
            $this->fcSetUp();
        }
    }

    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();
        if (method_exists(static::class, 'fcSetUpBeforeClass')) {
            static::fcSetUpBeforeClass();
        }
    }

    public function tearDown(): void
    {
        if (method_exists($this, 'fcTearDown')) {
            $this->fcTearDown();
        }
        parent::tearDown();
    }

    /**
     * Compatibility layer for PHPUnit 8 to support PHPUnit 4 code.
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
        $this->expectException($class);
        if (!empty($message)) {
            $this->expectExceptionMessage($message);
        }
        if ($exception_code !== NULL) {
            $this->expectExceptionCode($exception_code);
        }
    }
}
