<?php

namespace App\Service\Behavioral\Observer\Repository;

use App\Service\Behavioral\Observer\Entity\User;

class UserRepository
{
    /**
     * @param User $user
     * @return void
     */
    public function save(User $user): void
    {
        echo sprintf(
            "User %s saved ....",
            $user->getName()
        );
    }
}
