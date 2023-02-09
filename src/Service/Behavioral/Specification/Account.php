<?php

namespace App\Service\Behavioral\Specification;

class Account
{
    /** @var bool */
    private $active = false;
    /** @var int */
    private $balance;

    /**
     * @return int
     */
    public function getBalance(): int
    {
        return $this->balance;
    }

    /**
     * @param int $balance
     * @return $this
     */
    public function setBalance(int $balance): self
    {
        $this->balance = $balance;
        return $this;
    }

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->active;
    }

    /**
     * @param bool $active
     * @return $this
     */
    public function setActive(bool $active): self
    {
        $this->active = $active;
        return $this;
    }
}
