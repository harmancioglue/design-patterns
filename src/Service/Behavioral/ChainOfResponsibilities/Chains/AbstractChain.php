<?php

namespace App\Service\Behavioral\ChainOfResponsibilities\Chains;

use App\Service\Behavioral\ChainOfResponsibilities\User;

class AbstractChain
{
    /** @var self */
    private $next;

    /**
     * @param AbstractChain $next
     * @return $this
     */
    public function addNext(self $next): self
    {
        $this->next = $next;
        return $next;
    }

    /**
     * @param User $user
     * @return bool
     */
    public function handle(User $user): bool
    {
        return null !== $this->next ? $this->next->handle($user) : true;
    }
}
