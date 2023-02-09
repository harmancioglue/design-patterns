<?php

namespace App\Service\Behavioral\ChainOfResponsibilities;

class User
{
    public const ROLE_ADMIN = 'ROLE_ADMIN';
    public const SUPER_USER = 'SUPER_USER';

    /*** @var bool */
    private $login = false;
    /** @var string */
    private $role;
    /** @var bool */
    private $active;

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

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * @param string $role
     * @return $this
     */
    public function setRole(string $role): self
    {
        $this->role = $role;
        return $this;
    }

    /**
     * @return bool
     */
    public function isLogin(): bool
    {
        return $this->login;
    }

    /**
     * @param bool $login
     * @return $this
     */
    public function setLogin(bool $login): self
    {
        $this->login = $login;
        return $this;
    }
}
