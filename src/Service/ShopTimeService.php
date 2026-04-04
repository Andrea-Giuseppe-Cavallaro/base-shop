<?php

namespace App\Service;

use DateTimeImmutable;

class ShopTimeService{
    private string $hour;

    public function __construct(?DateTimeImmutable $hour = null){
        $this->hour = ($hour ?? new DateTimeImmutable())->format("H");
    }

    public function getHour(): string { return $this->hour; }
}