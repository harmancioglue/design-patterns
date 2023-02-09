<?php

namespace App\Controller;

use App\Service\Structural\Decorator\FoodService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DecoratorController
{
    /**
     * @Route("/decorator")
     * @return void
     */
    public function index(FoodService $service): Response
    {
        $service->init();
        return new Response();
    }
}
