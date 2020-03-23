<?php
/**
 * ua-parser
 *
 * Copyright (c) 2011-2012 Dave Olsen, http://dmolsen.com
 *
 * Released under the MIT license
 */
namespace UAParser\Exception;

use InvalidArgumentException as BaseInvalidArgumentException;

class InvalidArgumentException extends BaseInvalidArgumentException
{
    public static function oneOfCommandArguments(string ...$args): self
    {
        return new static(
            sprintf('One of the command arguments "%s" is required', implode('", "', $args))
        );
    }
}
