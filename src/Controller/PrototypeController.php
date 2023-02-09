<?php

namespace App\Controller;

use App\Service\Creational\Prototype\PrototypeService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PrototypeController
{

    /**
     * @Route("/prototype")
     *
     * @param PrototypeService $prototypeService
     * @return Response
     */
    public function index(PrototypeService $prototypeService): Response
    {
        $prototypeService->saveMovies();

        return new Response();
    }
}
