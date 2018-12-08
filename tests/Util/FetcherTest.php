<?php
/**
 * ua-parser
 *
 * Copyright (c) 2011-2012 Dave Olsen, http://dmolsen.com
 *
 * Released under the MIT license
 */
namespace UAParser\Util;

use PHPUnit_Framework_TestCase as AbstractTestCase;
use UAParser\Util\Fetcher;

/**
 * @group online
 */
class FetcherTest extends AbstractTestCase
{
    public function testFetchSuccess()
    {
        $fetcher = new Fetcher();
        $this->assertInternalType('string', $fetcher->fetch());
    }

    public function testFetchError()
    {
        $url = "https://raw.githubusercontent.com/ua-parser/uap-core/master/regexes.yaml";
        $fetcher = new Fetcher(
            stream_context_create(
                array(
                    'ssl' => array(
                        'verify_peer'              => true,
                        Fetcher::getPeerNameKey()  => 'invalid.com',
                    )
                )
            )
        );

        $this->setExpectedException(
            'UAParser\Exception\FetcherException',
            'Could not fetch HTTP resource "'.$url.'": file_get_contents('.$url.'): failed to open stream: operation failed'
        );

        $fetcher->fetch();
    }
}
