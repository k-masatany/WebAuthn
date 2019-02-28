<?php

use KMasatany\WebAuthn\WebAuthnServiceProvider;
use PHPUnit\Framework\TestCase;

/**
 * Class WebAuthnServiceProviderTest
 * @package WebAuthnServiceProviderTest
 */
class WebAuthnServiceProviderTest extends TestCase
{

    /**
     * @test
     */
    public function testDummy()
    {
        $expected = 1234567890;
        $provider = new WebAuthnServiceProvider($expected);
        $actual = $provider->dummy();
        $this->assertEquals($expected, $actual);
    }
}
