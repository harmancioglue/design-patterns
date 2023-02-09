<?php

namespace App\Service\Behavioral\ChainOfResponsibilities;

use App\Service\Behavioral\ChainOfResponsibilities\Chains\ActiveChain;
use App\Service\Behavioral\ChainOfResponsibilities\Chains\LoginChain;
use App\Service\Behavioral\ChainOfResponsibilities\Chains\RoleChain;

class UserService
{
    public function userCanProceed(): bool
    {
        $user = (new User())
            ->setActive(true)
            ->setLogin(true)
            ->setRole(User::SUPER_USER);

        $chain = (new ActiveChain())
            ->addNext(new LoginChain())
            ->addNext(new RoleChain());

        try {
            $state = $chain->handle($user);
            echo $state ? 'can proceed' : 'cannot proceed';
            return true;

        } catch (\Exception $exception) {
            echo 'cannot proceed';
            return false;
        }
    }
}
