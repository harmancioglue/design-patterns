<?php

namespace App\Service\Behavioral\Specification\Contract;

use App\Service\Behavioral\Specification\Account;

interface MoneyTransferSpecificationInterface
{
    public function isSatisfied(Account $account): bool;
}
