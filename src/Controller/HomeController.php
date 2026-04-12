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
}