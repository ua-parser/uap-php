<?php
/**
 * ua-parser
 *
 * Copyright (c) 2011-2012 Dave Olsen, http://dmolsen.com
 *
 * Released under the MIT license
 */

namespace UAParser\Test\Util;

use PHPUnit\Framework\MockObject\MockObject;
use Symfony\Component\Filesystem\Filesystem;
use UAParser\Exception\FileNotFoundException;
use UAParser\Test\AbstractTestCase;
use UAParser\Util\Converter;

class ConverterTest extends AbstractTestCase
{
    /** @var Filesystem|MockObject */
    private $fs;

    /** @var Converter */
    private $converter;

    /** @var string */
    private $yamlFile;

    /** @var string */
    private $phpFile;

    /** @var string */
    private $php;

    public function setUp(): void
    {
        $this->fs = $this
            ->getMockBuilder(Filesystem::class)
            ->disableOriginalConstructor()
            ->disableOriginalClone()
            ->getMock();
        $this->converter = new Converter(sys_get_temp_dir(), null, $this->fs);
        $yaml = <<<EOS
group:
    - regex: "REGEX@"
      regex_flag: "i"
EOS;
        $this->yamlFile = sys_get_temp_dir().'/uaparser-'.time().'.yaml';
        file_put_contents($this->yamlFile, $yaml);

        $this->php = <<<EOS
<?php
return ['group' => [['regex' => '@REGEX\\\\@@i']]];

EOS;
        $this->phpFile = sys_get_temp_dir().'/regexes.php';
        touch($this->phpFile);
    }

    public function tearDown(): void
    {
        @unlink($this->yamlFile);
        @unlink($this->phpFile);
    }

    public function testExceptionIsThrownIfFileDoesNotExist(): void
    {
        $this->fs
            ->expects($this->once())
            ->method('exists')
            ->with('path/to/file')
            ->willReturn(false);

        $this->setExpectedException(
            FileNotFoundException::class,
            'File "path/to/file" does not exist'
        );
        $this->converter->convertFile('path/to/file');
    }

    public function testFileIsBackedUpIfExists(): void
    {
        $this->fs
            ->expects($this->at(0))
            ->method('exists')
            ->with($this->yamlFile)
            ->willReturn(true);

        $this->fs
            ->expects($this->at(1))
            ->method('exists')
            ->with($this->phpFile)
            ->willReturn(true);

        $this->fs
            ->expects($this->once())
            ->method('copy')
            ->with(
                $this->phpFile,
                $this->matchesRegularExpression('@/regexes-.{128}\.php@')
            )
            ->willReturn(true);

        $this->fs
            ->expects($this->once())
            ->method('dumpFile')
            ->with($this->phpFile, $this->php);

        $this->converter->convertFile($this->yamlFile);
    }

    public function testFileIsNotBackedUpIfHashesDoNotMatch(): void
    {
        file_put_contents($this->phpFile, $this->php);

        $this->fs
            ->expects($this->at(0))
            ->method('exists')
            ->with($this->yamlFile)
            ->willReturn(true);

        $this->fs
            ->expects($this->at(1))
            ->method('exists')
            ->with($this->phpFile)
            ->willReturn(true);

        $this->fs
            ->expects($this->never())
            ->method('copy');

        $this->fs
            ->expects($this->never())
            ->method('dumpFile');

        $this->converter->convertFile($this->yamlFile);
    }

    public function testFileIsNotBackedUp(): void
    {
        $this->fs
            ->expects($this->once())
            ->method('exists')
            ->with($this->yamlFile)
            ->willReturn(true);

        $this->fs
            ->expects($this->never())
            ->method('copy');

        $this->fs
            ->expects($this->once())
            ->method('dumpFile')
            ->with($this->phpFile, $this->php);

        $this->converter->convertFile($this->yamlFile, false);
    }
}
