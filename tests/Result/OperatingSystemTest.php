<?php
/**
 * ua-parser
 *
 * Copyright (c) 2011-2012 Dave Olsen, http://dmolsen.com
 *
 * Released under the MIT license
 */
namespace UAParser\Test\Result;

use UAParser\Result\UserAgent;
use UAParser\Test\AbstractTestCase;

class OperatingSystemTest extends AbstractTestCase
{
    /** @var UserAgent */
    private $userAgent;

    public function setUp(): void
    {
        $this->userAgent = new UserAgent();
    }

    public function testBugWith0InVersion(): void
    {
        $this->userAgent->major = 0;
        $this->userAgent->minor = 0;
        $this->userAgent->patch = 0;

        $this->assertSame('0.0.0', $this->userAgent->toVersion());
        $this->assertSame('Other 0.0.0', $this->userAgent->toString());
    }
}
