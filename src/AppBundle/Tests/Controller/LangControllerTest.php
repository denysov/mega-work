<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LangControllerTest extends WebTestCase
{
    public function testChange()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/change');
    }

}
