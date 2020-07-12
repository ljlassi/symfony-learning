<?php


namespace App\Entity;


class ProductForm
{

    private $id;
    private $name;
    private $price;

    public function setId(int $id) : void {
        $this->id = $id;
    }

    public function setName(String $name) : void {
        $this->name = $name;
    }

    public function setPrice(int $price) : void {
        $this->price = $price;
    }

    public function getId() : int {
        return $this->id;
    }

    public function getName() : string {
        return $this->name;
    }

    public function getPrice() : int {
        return $this->price;
    }

}