<?php
namespace Tests;

class ExampleFunctionalTest extends WebTestCase
{
    public function testIndex()
    {
        date_default_timezone_set('UTC');
        $client = $this->createClient();
        $crawl = $client->request('GET', '/');

        $this->assertTrue($client->getResponse()->isOk());
    }
}

