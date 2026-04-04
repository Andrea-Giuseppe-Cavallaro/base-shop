<?php

namespace App\Service;

use Psr\Log\LoggerInterface;

class WelcomeMessage
{
    private LoggerInterface $logger;
    public function __construct(LoggerInterface $logger){
        $this->logger = $logger;
    }

    public function getMessage(): string {

        $message = "Welcome to my shop Andrea!";
        $this->logger->info("Generated welcome message", [
            "service" => self::class,
            "message" => $message
        ]);
        return $message;
    }
}