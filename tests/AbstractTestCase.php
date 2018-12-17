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

abstract class AbstractTestCase extends TestCase
{
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
}
