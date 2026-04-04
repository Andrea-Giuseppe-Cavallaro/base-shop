<?php

namespace App\Service\Product;

use Psr\Log\LoggerInterface;

class Product{

    private string $name;
    private float $price;
    private LoggerInterface $logger;

    public function __construct(string $name, float $price, LoggerInterface $logger)
    {
        $this->name = $name;
        $this->price = $price;
        $this->logger = $logger;

        $this->logger->info("new product created", [
            "name" => $name,
            "price" => $price,
        ]);
    }

    public function describe(): string {
        $message = $this->name . " cost " . $this->price;
        return $message;
    }
}