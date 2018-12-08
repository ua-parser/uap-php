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
    private $exceptionClass;
    private $exceptionMessage;

    protected function expectException($exceptionClass)
    {
        if (method_exists('parent', 'expectException')) {
            return parent::expectException($exceptionClass);
        }

        $this->exceptionClass = $exceptionClass;
        $this->setExpectedException($this->exceptionClass, $this->exceptionMessage);
    }

    protected function expectExceptionMessage($exceptionMessage)
    {
        if (method_exists('parent', 'expectExceptionMessage')) {
            return parent::expectExceptionMessage($exceptionMessage);
        }

        $this->exceptionMessage = $exceptionMessage;
        $this->setExpectedException($this->exceptionClass, $this->exceptionMessage);
    }

    /**
     * Polyfill to allow exception testing across PHPUnit 4 to PHPUnit 7.
     */
    public function fcExpectException($exception, $message = null)
    {
        if (method_exists($this, 'expectException')) {
            $this->expectException($exception);
            if ($message !== null) {
                $this->expectExceptionMessage($message);
            }
        } else {
            $this->setExpectedException($exception, $message);
        }
    }
}
