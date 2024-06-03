<?php

namespace UAParser\Test\Util;

use Symfony\Component\Yaml\Yaml;
use UAParser\Test\AbstractTestCase;
use UAParser\Util\CodeGenerator;

class CodeGeneratorTest extends AbstractTestCase
{
    public function testCodeGeneratorScalarAndNull(): void
    {
        $cg = new CodeGenerator();

        $yamlString = <<<YML
user_agent_parsers:
  - regex: 'UaRegEx'

os_parsers:
  - regex: '(Windows 10)'
    os_replacement: 'Windows'
    os_v1_replacement: '10'

device_parsers:
  - regex: 'SomeDevice/'
    brand_replacement: 'Some'
    device_replacement: 'Device'
    model_replacement: null
YML;

        $expected = [
            'user_agent_parsers' => [[
                'regex' => 'UaRegEx',
            ]],
            'os_parsers' => [[
                'regex' => '(Windows 10)',
                'os_replacement' => 'Windows',
                'os_v1_replacement' => '10',
            ]],
            'device_parsers' => [[
                'regex' => 'SomeDevice/',
                'brand_replacement' => 'Some',
                'device_replacement' => 'Device',
                'model_replacement' => null,
            ]]
        ];

        $rawPhp = $cg->generateArray(Yaml::parse($yamlString));
        $evaluated = eval('return ' . $rawPhp);

        $this->assertSame($expected, $evaluated);
    }
}
