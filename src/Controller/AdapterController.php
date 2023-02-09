<?php

namespace App\Controller;

use App\Service\Structural\Adapter\AdapterService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdapterController
{
    /**
     * @Route("/adapter/{database}")
     *
     * @return void
     */
    public function index(Request $request, AdapterService $service): Response
    {
        $service->run($request->get('database'));

        return new Response();
    }
}
