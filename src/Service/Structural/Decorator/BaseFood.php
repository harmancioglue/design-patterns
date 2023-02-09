<?php

namespace App\Service\Structural\Decorator;

use App\Service\Structural\Decorator\Decorators\FoodDecoratorInterface;

class BaseFood implements FoodDecoratorInterface
{
    private const BASE_COST = 5;

    public function getCost(): int
    {
        return self::BASE_COST;
    }
}
