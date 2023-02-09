<?php

namespace App\Service\Creational\Prototype\Prototypes;

class HorrorMovie extends AbstractMoviePrototype
{
    private const CATEGORY = 'horror';

    public function setCategory()
    {
        $this->category = self::CATEGORY;
    }

    public function __clone(){}
}
