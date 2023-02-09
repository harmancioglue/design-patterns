<?php

namespace App\Service\Structural\Decorator\Decorators;

class Spicy extends FoodDecorator
{
    const COST = 2;

    public function getCost(): int
    {
        return $this->foodItem->getCost() + self::COST;
    }
}
