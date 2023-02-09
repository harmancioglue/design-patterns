<?php

namespace App\Controller;

use App\Service\Behavioral\Strategy\Context;
use App\Service\Behavioral\Strategy\Shape\Rectangular;
use App\Service\Behavioral\Strategy\Shape\Square;
use App\Service\Behavioral\Strategy\Strategies\RectangularCalculateAreaStrategy;
use App\Service\Behavioral\Strategy\Strategies\SquareCalculateAreaStrategy;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StrategyController
{
    /**
     * @param Request $request
     * @return void
     * @Route("/strategy/{shape}")
     */
    public function index(Request $request): Response
    {
        $shape = $request->get('shape');

        $validShapes = ['rectangular', 'square'];

        if (null === $shape || false === in_array($shape, $validShapes)) {
            return new JsonResponse([
                'response' => 'Enter valid shape: rectangular or square'
            ]);
        }

        switch ($shape) {
            case 'rectangular' :
                $shapeObj = new Rectangular();
                $strategy = new RectangularCalculateAreaStrategy();
                break;
            case 'square' :
                $shapeObj = new Square();
                $strategy = new SquareCalculateAreaStrategy();
                break;
            default:break;
        }

        $context = new Context($strategy);
        $response = $context->calculate($shapeObj);

        return new JsonResponse([
            'response' => $response
        ]);
    }
}
