<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserControllerTest extends WebTestCase
{
    public function testRegister()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/register'); 
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
    
    public function testLogin()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/login'); 
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

}
