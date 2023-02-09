<?php

namespace App\Service\Behavioral\Strategy;

use App\Service\Behavioral\Strategy\Contract\CalculateAreaInterface;
use App\Service\Behavioral\Strategy\Shape\BaseShape;

class Context
{
    /** @var CalculateAreaInterface */
    private $strategy;

    public function __construct(CalculateAreaInterface $calculateAreaStrategy)
    {
        $this->strategy = $calculateAreaStrategy;
    }

    public function calculate(BaseShape $baseShape): int
    {
        return $this->strategy->calculateArea($baseShape);
    }
}
