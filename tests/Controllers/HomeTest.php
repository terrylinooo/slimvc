<?php

namespace Tests\Controllers;

class Home extends BaseTestCase
{
    /**
     * Test Homepage
     */
    public function testHome()
    {
        $response = $this->runApp('GET', '/');

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertContains('Slimvc', (string)$response->getBody());
        $this->assertNotContains('Test', (string)$response->getBody());
    }
}