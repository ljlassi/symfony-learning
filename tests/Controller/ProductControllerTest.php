<?php


namespace App\Tests\Controller;


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProductControllerTest extends WebTestCase
{

    public function testListAllProducts() : void {
        $client = static::createClient();
        $client->request('GET', '/list/all/products');

        $response = $client->getResponse()->getStatusCode();

        $this->assertEquals(200, $response);
    }

}