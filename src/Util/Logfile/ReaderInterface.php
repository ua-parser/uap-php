<?php
/**
 * ua-parser
 *
 * Copyright (c) 2011-2012 Dave Olsen, http://dmolsen.com
 *
 * Released under the MIT license
 */
namespace UAParser\Util\Logfile;

interface ReaderInterface
{
    /**
     * @param string $line
     * @return bool
     */
    public function test(string $line): bool;

    /**
     * @param string $line
     * @return string
     */
    public function read(string $line): string;
}
