<?php
/**
 * ua-parser
 *
 * Copyright (c) 2011-2012 Dave Olsen, http://dmolsen.com
 *
 * Released under the MIT license
 */
namespace UAParser\Util\Logfile;

use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;
use UAParser\Exception\ReaderException;

abstract class AbstractReader implements ReaderInterface
{
    /** @var ReaderInterface[] */
    private static $readers = array();

    /**
     * @param string $line
     * @return ReaderInterface
     */
    public static function factory($line)
    {
        foreach (static::getReaders() as $reader) {
            if ($reader->test($line)) {
                return $reader;
            }
        }
    }

    private static function getReaders()
    {
        if (static::$readers) {
            return static::$readers;
        }

        static::$readers = static::getCustomReaders();
        static::$readers[] = new ApacheCommonLogFormatReader();

        return static::$readers;
    }

    public static function autoloadCustomReaders($clazz)
    {
        $parts = explode('\\', $clazz);
        $path = __DIR__.DIRECTORY_SEPARATOR.'Custom'.DIRECTORY_SEPARATOR.end($parts).'.php';
        if (is_file($path)) {
            require $path;
        }
    }

    private static function getCustomReaders()
    {
        $finder = Finder::create()->in(__DIR__.DIRECTORY_SEPARATOR.'Custom');
        array_map(array($finder, 'name'), array('*.php'));

        $readers = array();
        foreach ($finder as $file) {
            $clazz = __NAMESPACE__.'\\'.$file->getBasename('.php');
            $readers[] = new $clazz;
        }
	return $readers;
    }

    public function test($line)
    {
        $matches = $this->match($line);

        return isset($matches['userAgentString']);
    }

    public function read($line)
    {
        $matches = $this->match($line);

        if (!isset($matches['userAgentString'])) {
            throw ReaderException::userAgentParserError($line);
        }

        return $matches['userAgentString'];
    }

    protected function match($line)
    {
        if (preg_match($this->getRegex(), $line, $matches)) {
            return $matches;
        }

        return array();
    }

    abstract protected function getRegex();
}

spl_autoload_register(array('UAParser\Util\Logfile\AbstractReader','autoloadCustomReaders'));
