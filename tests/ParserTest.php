<?php
/**
 * ua-parser
 *
 * Copyright (c) 2011-2012 Dave Olsen, http://dmolsen.com
 *
 * Released under the MIT license
 */

namespace UAParser\Test;

use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;
use Symfony\Component\Yaml\Yaml;
use UAParser\Parser;

class ParserTest extends AbstractParserTest
{
    /** @var Parser */
    private $parser;

    /** @var Parser */
    private static $staticParser;

    public static function setUpBeforeClass(): void
    {
        static::$staticParser = Parser::create();
    }

    public function setUp(): void
    {
        $this->parser = static::$staticParser;
    }

    public static function getOsTestData(): array
    {
        $resources = Finder::create()
            ->files()
            ->path('tests')
            ->name('test_os.yaml')
            ->path('test_resources')
            ->name('additional_os_tests.yaml');

        return static::createTestData($resources);
    }

    public static function getUserAgentTestData(): array
    {
        $resources = Finder::create()
            ->files()
            ->path('tests')
            ->name('test_ua.yaml')
            ->path('test_resources')
            ->name('firefox_user_agent_strings.yaml')
            ->name('pgts_browser_list.yaml');

        return static::createTestData($resources);
    }

    public static function getDeviceTestData(): array
    {
        $resources = Finder::create()
            ->files()
            ->path('tests')
            ->name('test_device.yaml');

        return static::createTestData($resources);
    }

    public function testNoMatch(): void
    {
        $result = $this->parser->parse('unknown user agent');

        $this->assertSame('Other', $result->device->family);
        $this->assertSame('Other', $result->ua->family);
        $this->assertSame('Other', $result->os->family);
    }

    /** @dataProvider getDeviceTestData */
    public function testDeviceParsing($userAgent, array $jsUserAgent, $family, $major, $minor, $patch, $patchMinor, $brand, $model): void
    {
        $result = $this->parser->parse($userAgent, $jsUserAgent);

        $this->assertSame($family, $result->device->family);
        $this->assertSame($brand, $result->device->brand);
        $this->assertSame($model, $result->device->model);
    }

    /** @dataProvider getOsTestData */
    public function testOperatingSystemParsing($userAgent, array $jsUserAgent, $family, $major, $minor, $patch, $patchMinor): void
    {
        $result = $this->parser->parse($userAgent, $jsUserAgent);

        $this->assertSame($family, $result->os->family);
        $this->assertSame($major, $result->os->major);
        $this->assertSame($minor, $result->os->minor);
        $this->assertSame($patch, $result->os->patch);
        $this->assertSame($patchMinor, $result->os->patchMinor);
    }

    /** @dataProvider getUserAgentTestData */
    public function testUserAgentParsing($userAgent, array $jsUserAgent, $family, $major, $minor, $patch): void
    {
        $result = $this->parser->parse($userAgent, $jsUserAgent);

        $this->assertSame($family, $result->ua->family);
        $this->assertSame($major, $result->ua->major);
        $this->assertSame($minor, $result->ua->minor);
        $this->assertSame($patch, $result->ua->patch);
    }

    public function testToString(): void
    {
        $userAgentString = 'HbbTV/1.1.1 (;;;;;) firetv-firefox-plugin 1.1.20';
        $result = $this->parser->parse($userAgentString);

        $this->assertSame('HbbTV 1.1.1/FireHbbTV 1.1.20', $result->toString());
        $this->assertSame('HbbTV 1.1.1/FireHbbTV 1.1.20', (string) $result);

        $this->assertSame('HbbTV 1.1.1', $result->ua->toString());
        $this->assertSame('HbbTV 1.1.1', (string) $result->ua);
        $this->assertSame('1.1.1', $result->ua->toVersion());

        $this->assertSame('FireHbbTV 1.1.20', $result->os->toString());
        $this->assertSame('FireHbbTV 1.1.20', (string) $result->os);
        $this->assertSame('1.1.20', $result->os->toVersion());

        $this->assertSame($userAgentString, $result->originalUserAgent);
    }

    public function testToString_2(): void
    {
        $userAgentString = 'PingdomBot 1.4/Other Pingdom.com_bot_version_1.4_(http://www.pingdom.com/)';

        $result = $this->parser->parse($userAgentString);

        $this->assertSame('PingdomBot 1.4/Other', $result->toString());
        $this->assertSame('PingdomBot 1.4/Other', (string) $result);

        $this->assertSame('PingdomBot 1.4', $result->ua->toString());
        $this->assertSame('PingdomBot 1.4', (string) $result->ua);
        $this->assertSame('1.4', $result->ua->toVersion());

        $this->assertSame('Other', $result->os->toString());
        $this->assertSame('Other', (string) $result->os);
        $this->assertSame('', $result->os->toVersion());

        $this->assertSame($userAgentString, $result->originalUserAgent);
    }

    private static function createTestData(Finder $resources): array
    {
        $resourcesDirectory = realpath(__DIR__.'/../uap-core');
        $testData = array();

        /** @var $resource SplFileInfo */
        foreach ($resources->in($resourcesDirectory) as $resource) {
            $data = Yaml::parse(str_replace("\t", "", $resource->getContents()));
            foreach ($data['test_cases'] as $testCase) {
                $testData[] = static::createArguments($testCase, $resource);
            }
        }

        return $testData;
    }

    private static function createArguments(array $testCase, SplFileInfo $resource): array
    {
        return array(
            $testCase['user_agent_string'],
            isset($testCase['js_ua']) ? json_decode(str_replace("'", '"', $testCase['js_ua']), true) : array(),
            $testCase['family'],
            $testCase['major'] ?? null,
            $testCase['minor'] ?? null,
            $testCase['patch'] ?? null,
            $testCase['patch_minor'] ?? null,
            $testCase['brand'] ?? null,
            $testCase['model'] ?? null,
            $resource->getFilename()
        );
    }

    protected function getParserClassName(): string
    {
        return Parser::class;
    }
}
