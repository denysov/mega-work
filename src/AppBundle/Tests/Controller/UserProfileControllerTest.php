<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserProfileControllerTest extends WebTestCase
{
    public function testStub()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/stub');
        
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testDashboard()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/dashboard');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testEdit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/edit');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testEditresume()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/editResume');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testSavedresume()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/savedResume');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testJobs()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/jobs');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testFollowed()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/followed');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

}
