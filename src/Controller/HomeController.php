<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Service\WelcomeMessage;

class HomeController extends AbstractController{

    private WelcomeMessage $message;

    public function __construct(WelcomeMessage $message)
    {
        $this->message = $message;
    }

    public function index(): Response {
        $message = $this->message->welcome();
        return $this->render("home/index.html.twig", [
            "message" => $message
        ]);
    }

    public function properIndex(): Response {
        $message = $this->message->properWelcome();
        return $this->render("home/index.html.twig", [
            "message" => $message
        ]);
    }

    public function products(): Response {
        $products = [
            ["name" => "Tastiera meccanica", "price" => 89.99],
            ["name" => "Mouse ergonomica", "price" => 45.00],
            ["name" => "Monitor 27", "price" => 299.59]
        ];

        return $this->render("home/products.html.twig", [
            "products" => $products
        ]);
    }
}