<?php
/**
 * ua-parser
 *
 * Copyright (c) 2011-2012 Dave Olsen, http://dmolsen.com
 *
 * Released under the MIT license
 */
namespace UAParser\Test\Util\Logfile;

use UAParser\Exception\ReaderException;
use UAParser\Test\AbstractTestCase;
use UAParser\Util\Logfile\ReaderInterface;

abstract class AbstractReaderTest extends AbstractTestCase
{
    /** @var ReaderInterface */
    protected $reader;

    /** @var string */
    protected $line;

    /** @var string */
    protected $userAgentString;

    /** @var string */
    protected $exampleLogFile;

    public function testTestEmptyLine(): void
    {
        $this->assertFalse($this->reader->test(''));
    }

    public function testTestRealLine(): void
    {
        $this->assertTrue($this->reader->test($this->line));
    }

    public function testReadEmptyLine(): void
    {
        $this->setExpectedException(
            ReaderException::class,
            'Cannot extract user agent string from line "invalid"'
        );
        $this->reader->read('invalid');
    }

    public function testReadRealLine(): void
    {
        $this->assertSame($this->userAgentString, $this->reader->read($this->line));
    }

    public function testReadingFile(): void
    {
        if (!$this->exampleLogFile) {
            $this->markTestSkipped('Try with your own log file');
        }

        foreach (file($this->exampleLogFile) as $line) {
            $this->assertTrue($this->reader->test($line));
            $this->assertGreaterThanOrEqual(1, strlen($this->reader->read($line)));
        }
    }
}
