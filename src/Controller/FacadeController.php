<?php

namespace App\Controller;

use App\Service\Structural\Facade\FacadeService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FacadeController
{
    /**
     * @Route("/facade")
     * @return void
     */
    public function index(FacadeService $facadeService): Response
    {
        $facadeService->run();
        return new Response();
    }
}
