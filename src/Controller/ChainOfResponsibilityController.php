<?php

namespace App\Controller;

use App\Service\Behavioral\ChainOfResponsibilities\UserService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChainOfResponsibilityController
{
    /**
     * @Route("/chain")
     *
     * @return void
     */
    public function index(UserService $userService): Response
    {
        $userService->userCanProceed();
        return new Response();
    }
}
