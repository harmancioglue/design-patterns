<?php

namespace App\Service\Structural\Decorator\Decorators;

class Cheese extends FoodDecorator
{
    const COST = 3;

    public function getCost(): int
    {
        return $this->foodItem->getCost() + self::COST;
    }
}
