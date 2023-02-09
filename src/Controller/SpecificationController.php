<?php

namespace App\Controller;

use App\Service\Behavioral\Specification\Context;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SpecificationController
{
    /**
     * @param Context $context
     * @return void
     * @Route("/specification")
     */
    public function index(Context $context): Response
    {
        $context->transfer();
        return new Response();
    }
}
