<?php

namespace App\Service\Structural\Decorator\Decorators;

abstract class FoodDecorator implements FoodDecoratorInterface
{
    /*** @var FoodDecoratorInterface */
    protected $foodItem;

    public function __construct(FoodDecoratorInterface $foodItem)
    {
        $this->foodItem = $foodItem;
    }

    abstract public function getCost(): int;
}
