<?php


namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Class HomeControllerTest
 * @package App\Tests\Controller
 *
 * Functional test for home controller.
 *
 */

class HomeControllerTest extends WebTestCase
{

    public function testHomepage() {
        $client = static::createClient();
        $client->request('GET', '/');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }


}