<?php

namespace App\Service\Behavioral\Strategy\Strategies;

use App\Service\Behavioral\Strategy\Contract\CalculateAreaInterface;
use App\Service\Behavioral\Strategy\Shape\BaseShape;

class SquareCalculateAreaStrategy implements CalculateAreaInterface
{
    public function calculateArea(BaseShape $shape): int
    {
        return $shape->getEdge() * $shape->getEdge();
    }
}
