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

    /**
     * THIS TEST FAILS, gives null for some reason, I'm working on it.
     */

    public function testCreateProduct() : void {
        $client = static::createClient();
        $crawler = $client->request('GET', '/new/product');

        //$crawler = $client->submitForm('add_product_submit', ['product_name' => 'test_product', 'product_price' => 100]);

        $form = $crawler->selectButton('add_product_submit')->form();
        $form['product_name'] = 'test_product';
        $form['product_price'] = '100';

// submit that form
        $crawler = $client->submit($form);

        $response = $client->getResponse()->getStatusCode();
        $this->assertEquals(200, $response);
    }

}