<?php
/**
 * ua-parser
 *
 * Copyright (c) 2011-2012 Dave Olsen, http://dmolsen.com
 *
 * Released under the MIT license
 */
namespace UAParser\Test\Util;

use UAParser\Exception\FetcherException;
use UAParser\Test\AbstractTestCase;
use UAParser\Util\Fetcher;

/**
 * @group online
 */
class FetcherTest extends AbstractTestCase
{
    public function testFetchSuccess(): void
    {
        $fetcher = new Fetcher();

        $this->assertIsString($fetcher->fetch());
    }

    public function testFetchError(): void
    {
        $url = 'https://raw.githubusercontent.com/ua-parser/uap-core/master/regexes.yaml';
        $fetcher = new Fetcher(
            stream_context_create(
                [
                    'ssl' => [
                        'verify_peer' => true,
                        Fetcher::getPeerNameKey() => 'invalid.com',
                    ]
                ]
            )
        );

        $this->setExpectedException(
            FetcherException::class,
            'Could not fetch HTTP resource "'.$url.'": file_get_contents('.$url.'): failed to open stream: operation failed'
        );

        $fetcher->fetch();
    }
}
