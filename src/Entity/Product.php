<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Product
 * @package App\Entity
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 *
 */


class Product
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     *
     * @var int
     */

    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */

    private $name;

    /**
     * @ORM\Column(type="integer")
     *
     * @var int
     */

    private $price;


    public function getId() :int {
        return $this->id;
    }

    public function getName() :string {
        return $this->name;
    }

    public function getPrice() :int {
        return $this->getPrice();
    }


    public function setName(string $name) : self {
        $this->name = $name;
        return $this;
    }

    public function setPrice(int $price) : self {
        $this->price = $price;
        return $this;
    }


}