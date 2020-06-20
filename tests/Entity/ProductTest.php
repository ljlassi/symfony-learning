<?php


namespace App\Tests\Entity;

use App\Entity\Product;
use PHPUnit\Framework\TestCase;

/**
 * Class ProductTest
 * @package App\Tests\Entity
 *
 * Unit testing for Product Entity
 *
 */


class ProductTest extends TestCase
{

    /**
     * Test setName method and see if the set name matches
     */

    public function testSetName() {
        $product = new Product();
        $test_name = "Testituote";
        $product->setName($test_name);
        $this->assertEquals($test_name, $product->getName());
    }

    /**
     * Test setPrice method and see if the prices match
     */

    public function testSetPrice() {
        $product = new Product();
        $test_price = 665;
        $product->setPrice($test_price);
        $this->assertEquals($test_price, $product->getPrice());
    }

}