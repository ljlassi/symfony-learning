<?php


namespace App\Tests\Entity;

use App\Entity\Product;
use PHPUnit\Framework\TestCase;


class ProductTest extends TestCase
{

    public function testSetName() {
        $product = new Product();
        $test_name = "Testituote";
        $product->setName($test_name);
        $this->assertEquals($test_name, $product->getName());
    }

    public function testSetPrice() {
        $product = new Product();
        $test_price = 665;
        $product->setPrice($test_price);
        $this->assertEquals($test_price, $product->getPrice());
    }

}