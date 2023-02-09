<?php

namespace App\Service\Structural\Decorator;

use App\Service\Structural\Decorator\Decorators\Cheese;
use App\Service\Structural\Decorator\Decorators\Spicy;

class FoodService
{
    /**
     * @return void
     */
    public function init(): void
    {
        $baseFood = new BaseFood();
        $spicy = new Spicy($baseFood);
        $cheese = new Cheese($spicy);

        echo sprintf(
          "Food cost with extras is %d",
                 $cheese->getCost()
        );
    }
}
