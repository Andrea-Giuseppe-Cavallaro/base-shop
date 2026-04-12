<?php

namespace App\Service;

use Psr\Log\LoggerInterface;

class Product{

    private string $name;
    private float $price;
    private ?string $description;
    private int $stock;
    private LoggerInterface $logger;

    public function __construct(
        string $name, 
        float $price, 
        ?string $description, 
        int $stock, 
        LoggerInterface $logger
        )
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->stock = $stock;
        $this->logger = $logger;

        $this->logger->info("new product created", [
            "name" => $name,
            "price" => $price,
            "description" => $description,
            "stock" => $stock,
        ]);
    }

    public function describe(): string {
        $message = $this->name . 
            " cost " . 
            $this->price . 
            "description: " . 
            $this->description . 
            "in stock: " . 
            $this->stock;
        return $message;
    }
}