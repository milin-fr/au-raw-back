<?php
namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ControlloerTest extends WebTestCase {
    public function testHomePage () {
        $client = static::createClient();
        $client->request('GET', '/');
        $this->assertSelectorTextContains('.name', 'Strawberry Cheesecake');
        // $this->assertResponseStatusCodeSame(200);
    }

    public function testAdminPage () {
        $client = static::createClient();
        $client->request('GET', '/admin');
        $this->assertResponseRedirects();
    }

}