<?php
/**
 * ua-parser
 *
 * Copyright (c) 2011-2012 Dave Olsen, http://dmolsen.com
 *
 * Released under the MIT license
 */
namespace UAParser\Test\Result;

use UAParser\Result\OperatingSystem;
use UAParser\Test\AbstractTestCase;

class UserAgentTest extends AbstractTestCase
{
    /** @var OperatingSystem */
    private $operatingSystem;

    public function setUp(): void
    {
        $this->operatingSystem = new OperatingSystem();
    }

    public function testBugWith0InVersion(): void
    {
        $this->operatingSystem->major = 0;
        $this->operatingSystem->minor = 0;
        $this->operatingSystem->patch = 0;
        $this->operatingSystem->patchMinor = 0;

        $this->assertSame('0.0.0.0', $this->operatingSystem->toVersion());
        $this->assertSame('Other 0.0.0.0', $this->operatingSystem->toString());
    }
}
