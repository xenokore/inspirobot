<?php

namespace Xenokore\Inspirobot\Tests;

use Xenokore\Inspirobot\Inspirobot;

use PHPUnit\Framework\TestCase;

class InspirobotTest extends TestCase
{
    public function testGenerateUrl()
    {
        $url = Inspirobot::generateUrl();
        $this->assertIsString($url);
        $this->assertTrue(\filter_var($url, FILTER_VALIDATE_URL) !== false);
    }
}
