<?php
/**
 * ua-parser
 *
 * Copyright (c) 2011-2012 Dave Olsen, http://dmolsen.com
 *
 * Released under the MIT license
 */
namespace UAParser\Util;

use UAParser\Exception\FetcherException;

class Fetcher
{
    private $resourceUri = 'https://raw.githubusercontent.com/ua-parser/uap-core/master/regexes.yaml';

    /** @var resource */
    private $streamContext;

    public function __construct($streamContext = null)
    {
        if (is_resource($streamContext) && get_resource_type($streamContext) === 'stream-context') {
            $this->streamContext = $streamContext;
        } else {
            // Since PHP 5.6, CN_match is deprecated
            $is56 = version_compare(PHP_VERSION, '5.6') === 1;
            $peerNameKey = $is56  ? 'peer_name' : 'CN_match';
            $peerName = $is56 ? 'raw.githubusercontent.com' : 'www.github.com';
            $this->streamContext = stream_context_create(
                array(
                    'ssl' => array(
                        'verify_peer'         => true,
                        'verify_depth'        => 10,
                        'cafile'              => __DIR__ . '/../../resources/ca-bundle.crt',
                        $peerNameKey          => $peerName,
                        'disable_compression' => true,
                    )
                )
            );
        }
    }

    public function fetch()
    {
        $level = error_reporting(0);
        $result = file_get_contents($this->resourceUri, null, $this->streamContext);
        error_reporting($level);

        if ($result === false) {
            $error = error_get_last();
            throw FetcherException::httpError($this->resourceUri, $error['message']);
        }

        return $result;
    }
}
