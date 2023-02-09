<?php

namespace App\Service\Behavioral\ChainOfResponsibilities\Chains;

use App\Service\Behavioral\ChainOfResponsibilities\User;

class RoleChain extends AbstractChain
{
    private const ROLES = [
        User::ROLE_ADMIN,
        User::SUPER_USER,
    ];

    /**
     * @param User $user
     * @return bool
     * @throws \Exception
     */
    public function handle(User $user): bool
    {
        if (true === in_array($user->getRole(), self::ROLES)) {
            return parent::handle($user);
        }

        throw new \Exception("User should have valid role");
    }
}
