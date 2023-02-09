<?php

namespace App\Service\Behavioral\Strategy\Contract;

use App\Service\Behavioral\Strategy\Shape\BaseShape;

interface CalculateAreaInterface
{
    public function calculateArea(BaseShape $shape): int;
}
