<?php
namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ControlloerTest extends WebTestCase {
    public function testHomePage () {
        $client = static::createClient();
        $client->request('GET', '');
        $this->assertResponseStatusCodeSame(200);
    }

}