<?php

namespace App\Service\Behavioral\Strategy\Shape;

class Rectangular extends BaseShape
{
    /** @var int */
    private $shortEdge = 4;
    /** @var int */
    private $longEdge = 5;

    /**
     * @return int
     */
    public function getShortEdge(): int
    {
        return $this->shortEdge;
    }

    /**
     * @param int $shortEdge
     * @return $this
     */
    public function setShortEdge(int $shortEdge): self
    {
        $this->shortEdge = $shortEdge;
        return $this;
    }

    /**
     * @return int
     */
    public function getLongEdge(): int
    {
        return $this->longEdge;
    }

    /**
     * @param int $longEdge
     * @return $this
     */
    public function setLongEdge(int $longEdge): self
    {
        $this->longEdge = $longEdge;
        return $this;
    }

}
