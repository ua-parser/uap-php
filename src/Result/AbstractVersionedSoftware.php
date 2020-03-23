<?php
/**
 * ua-parser
 *
 * Copyright (c) 2011-2013 Dave Olsen, http://dmolsen.com
 * Copyright (c) 2013-2014 Lars Strojny, http://usrportage.de
 *
 * Released under the MIT license
 */
namespace UAParser\Result;

abstract class AbstractVersionedSoftware extends AbstractSoftware
{
    /** @return string */
    abstract public function toVersion(): string;

    /** @return string */
    public function toString(): string
    {
        return implode(' ', array_filter(array($this->family, $this->toVersion())));
    }

    /**
     * @param string ...$args
     * @return string
     */
    protected function formatVersion(?string ...$args): string
    {
        return implode('.', array_filter($args, 'is_numeric'));
    }
}
