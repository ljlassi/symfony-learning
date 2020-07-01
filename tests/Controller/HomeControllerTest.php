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

    /**
     * Response test for homepage, first test http response and then whether html is correct.
     */

    public function testHomepage() {
        $client = static::createClient();
        $client->request('GET', '/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $crawler = $client->request('GET', '/');
        $this->assertSelectorTextContains('html h2#add_product_h2', 'Add product');

    }

}
