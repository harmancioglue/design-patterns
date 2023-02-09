<?php

namespace App\Service\Creational\Prototype\Prototypes;

abstract class AbstractMoviePrototype
{
    /** @var string */
    protected $category;
    /** @var string */
    protected $name;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public abstract function setCategory();
    public abstract function __clone();
}
