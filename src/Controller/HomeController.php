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

        return new Response("
            <html>
                <body>
                    <p>$message</p>
                </body>
            </html>");
    }

    public function properIndex(): Response {
        $message = $this->message->properWelcome();
        return new Response(
            "<html>
                <body>
                    <p>$message</p>
                </body>
            </html>");
        
    }
}