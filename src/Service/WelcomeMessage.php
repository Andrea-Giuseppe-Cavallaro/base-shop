<?php

namespace App\Service;

use App\Service\ShopTimeService;

class WelcomeMessage{
    private ShopTimeService $hour;

    public function __construct(ShopTimeService $hour){
        $this->hour = $hour;
    }

    public function welcome(): string {
        $hour = $this->hour->getHour();
        return "Welcome everyone it's $hour";
    }

    public function properWelcome(): string {
        $hour = $this->hour->getHour();
        if($hour < "12"){
            return "Good morning, it's $hour";
        } else if($hour > "20"){
            return "Good evening, it's $hour";
        } else {
            return "Good afternoon, it's $hour";
        }
    }
}