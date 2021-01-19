<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SimpleTest extends WebTestCase
{
    public function testSimple()
    {
        $this->assertEquals(200, 400 / 2);
    }

    public function testSimpleIndex()
    {
        $client = self::createClient();
        $client->request('GET', '/');
        $this->assertResponseIsSuccessful();
    }
}