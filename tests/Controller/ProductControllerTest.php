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
     * THIS TEST FAILS, gives null for product name for some reason, I'm working on it.
     */

    public function testCreateProduct() : void {
        $client = static::createClient();
        $crawler = $client->request('GET', '/new/product');

        //$crawler = $client->submitForm('add_product_submit', ['product_name' => 'test_product', 'product_price' => 100]);

        $buttonCrawlerNode = $crawler->selectButton('add_product_submit');
        $form = $buttonCrawlerNode->form();
        $form['product_name'] = 'testproduct';
        $form['product_price'] = 100;
        $client->submit($form);

        $response = $client->getResponse()->getStatusCode();
        $this->assertEquals(200, $response);
    }

}