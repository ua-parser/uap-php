<?php
/**
 * ua-parser
 *
 * Copyright (c) 2011-2012 Dave Olsen, http://dmolsen.com
 *
 * Released under the MIT license
 */
namespace UAParser\Test;

use PHPUnit\Framework\TestCase;
use PHPUnit\Runner\Version;

if (class_exists('PHPUnit\Runner\Version') && version_compare(Version::id(), '8.0.0', '>=')) {
    class_alias('UAParser\Test\AbstractTestCasePhpunit8', 'UAParser\Test\AbstractTestCaseCompatibility');
} elseif (class_exists('PHPUnit\Runner\Version') && version_compare(Version::id(), '7.0.0', '>=')) {
    class_alias('UAParser\Test\AbstractTestCasePhpunit7', 'UAParser\Test\AbstractTestCaseCompatibility');
} else {
    class_alias('UAParser\Test\AbstractTestCasePhpunit4', 'UAParser\Test\AbstractTestCaseCompatibility');
}

abstract class AbstractTestCase extends AbstractTestCaseCompatibility
{
}
