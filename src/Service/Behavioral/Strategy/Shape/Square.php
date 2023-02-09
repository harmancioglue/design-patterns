<?php

namespace App\Service\Behavioral\Strategy\Shape;

class Square extends BaseShape
{
    /** @var int */
    private $edge = 5;

    /**
     * @return int
     */
    public function getEdge(): int
    {
        return $this->edge;
    }

    /**
     * @param int $edge
     * @return $this
     */
    public function setEdge(int $edge): self
    {
        $this->edge = $edge;
        return $this;
    }
}
