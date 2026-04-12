<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 */
class Product{
    /** 
    * @ORM\Id
    * @ORM\GeneratedValue
    * @ORM\Column(type="integer")
    */
    private int $id;

    /**
    * @ORM\Column(type="string", length=255)
    * @Assert\NotBlank
    */
    private string $name;

    /**
    * @ORM\Column(type="decimal", precision=10, scale=2)
    * @Assert\Positive
    */
    private string $price;

    /**
    * @ORM\Column(type="text", nullable=true)
    */
    private ?string $description;

    /**
     * @ORM\Column(type="integer")
     * @Assert\PositiveOrZero
     */
    private int $stock;

    public function getId(): int { return $this->id; }

    public function getName(): string { return $this->name; }
    public function setName(string $name): void { $this->name = $name; }

    public function getPrice(): string { return $this->price; }
    public function setPrice(string $price): void { $this->price = $price; }

    public function getDescription(): ?string { return $this->description; }
    public function setDescription(?string $description): void { $this->description = $description; }

    public function getStock(): int {return $this->stock; }
    public function setStock(int $stock): void { $this->stock = $stock; }
}