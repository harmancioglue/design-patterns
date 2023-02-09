<?php

namespace App\Service\Creational\Prototype\Prototypes;

class FunMovie extends AbstractMoviePrototype
{
    private const CATEGORY = 'fun';

    public function setCategory()
    {
        $this->category = self::CATEGORY;
    }

    public function __clone(){}
}
