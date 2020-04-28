<?php
/**
 * ua-parser
 *
 * Copyright (c) 2011-2013 Dave Olsen, http://dmolsen.com
 * Copyright (c) 2013-2014 Lars Strojny, http://usrportage.de
 *
 * Released under the MIT license
 */

namespace UAParser;

use UAParser\Exception\FileNotFoundException;

abstract class AbstractParser
{
    /** @var string */
    public static $defaultFile;

    /** @var array */
    protected $regexes = array();

    public function __construct(array $regexes)
    {
        $this->regexes = $regexes;
    }

    /**
     * Create parser instance
     *
     * Either pass a custom regexes.php file or leave the argument empty and use the default file.
     * @throws FileNotFoundException
     */
    public static function create(?string $file = null): self
    {
        return $file ? static::createCustom($file) : static::createDefault();
    }

    /** @throws FileNotFoundException */
    protected static function createDefault(): self
    {
        return static::createInstance(
            static::getDefaultFile(),
            [FileNotFoundException::class, 'defaultFileNotFound']
        );
    }

    /** @throws FileNotFoundException */
    protected static function createCustom(string $file): self
    {
        return static::createInstance(
            $file,
            [FileNotFoundException::class, 'customRegexFileNotFound']
        );
    }

    private static function createInstance(string $file, callable $exceptionFactory): self
    {
        if (!file_exists($file)) {
            throw $exceptionFactory($file);
        }

        static $map = [];
        if (!isset($map[$file])) {
            $map[$file] = include $file;
        }

        return new static($map[$file]);
    }

    protected static function tryMatch(array $regexes, string $userAgent): array
    {
        foreach ($regexes as $regex) {
            $flag = $regex['regex_flag'] ?? '';
            if (preg_match('@'.$regex['regex'].'@'.$flag, $userAgent, $matches)) {

                $defaults = array(
                    1 => 'Other',
                    2 => null,
                    3 => null,
                    4 => null,
                    5 => null,
                );

                return array($regex, $matches + $defaults);
            }
        }

        return array(null, null);
    }

    protected static function multiReplace(array $regex, string $key, ?string $default, array $matches): ?string
    {
        if (!isset($regex[$key])) {
            return self::emptyStringToNull($default);
        }

        $replacement = preg_replace_callback(
            '|\$(?P<key>\d)|',
            static function ($m) use ($matches) {
                return $matches[$m['key']] ?? '';
            },
            $regex[$key]
        );

        return self::emptyStringToNull($replacement);
    }

    private static function emptyStringToNull(?string $string): ?string
    {
        $string = trim($string);

        return $string === '' ? null : $string;
    }

    protected static function getDefaultFile(): string
    {
        return static::$defaultFile ?: dirname(__DIR__).'/resources'.DIRECTORY_SEPARATOR.'regexes.php';
    }
}
