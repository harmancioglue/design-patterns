<?php

namespace App\Service\Behavioral\ChainOfResponsibilities\Chains;

use App\Service\Behavioral\ChainOfResponsibilities\User;

class ActiveChain extends AbstractChain
{
    /**
     * @param User $user
     * @return bool
     * @throws \Exception
     */
    public function handle(User $user): bool
    {
        if (true === $user->isActive()) {
            return parent::handle($user);
        }

        throw new \Exception("User should be active");
    }
}
