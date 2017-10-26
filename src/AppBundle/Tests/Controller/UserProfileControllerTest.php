<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserProfileControllerTest extends WebTestCase
{
    public function testStub()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/stub');
    }

    public function testDashboard()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/dashboard');
    }

    public function testEdit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/edit');
    }

    public function testEditresume()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/editResume');
    }

    public function testSavedresume()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/savedResume');
    }

    public function testJobs()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/jobs');
    }

    public function testFollowed()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/followed');
    }

}
