<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Service\WelcomeMessage;

class HomeController extends AbstractController
{
    private WelcomeMessage $welcomeMessage;
    public function __construct(WelcomeMessage $welcomeMessage)
    {
        $this->welcomeMessage = $welcomeMessage;
    }

    public function index(): Response
    {
        $message = $this->welcomeMessage->getMessage();
        return new Response("<html><body><h1>$message</h1></body></html>");
    }
}