<?php
/**
 * ua-parser
 *
 * Copyright (c) 2011-2012 Dave Olsen, http://dmolsen.com
 *
 * Released under the MIT license
 */
namespace UAParser\Test;

use ReflectionClass;
use UAParser\Exception\FileNotFoundException;

abstract class AbstractParserTest extends AbstractTestCase
{
    public function testCreateDefault(): void
    {
        $parserClassName = $this->getParserClassName();

        $this->assertInstanceOf($parserClassName, $parserClassName::create());
    }

    public function testCreateCustom(): void
    {
        $parserClassName = $this->getParserClassName();

        $this->assertInstanceOf(
            $parserClassName,
            $parserClassName::create(__DIR__.'/../resources/regexes.php')
        );
    }

    public function testCreateCustomWithInvalidFile(): void
    {
        $parserClassName = $this->getParserClassName();

        $this->setExpectedException(
            'UAParser\Exception\FileNotFoundException',
            'ua-parser cannot find the custom regexes file you supplied ("foo.php"). Please make sure you have the correct path.'
        );
        $parserClassName::create('foo.php');
    }

    public function testExceptionOnFileNotFoundInvalidDefault(): void
    {
        $parserClassName = $this->getParserClassName();

        $this->setExpectedException(
            FileNotFoundException::class,
            'Please download the "invalidFile" file before using ua-parser by running "php bin/uaparser ua-parser:update"'
        );

        $parserClassName::$defaultFile = 'invalidFile';
        $parserClassName::create();
    }

    public function testDefaultFileIsAbsolute(): void
    {
        $class = new ReflectionClass($this->getParserClassName());
        $method = $class->getMethod('getDefaultFile');
        $method->setAccessible(true);

        $this->assertStringNotContainsString('..', $method->invoke(null));
    }

    public function tearDown(): void
    {
        $parserClassName = $this->getParserClassName();

        $parserClassName::$defaultFile = null;
    }

    abstract protected function getParserClassName(): string;
}
