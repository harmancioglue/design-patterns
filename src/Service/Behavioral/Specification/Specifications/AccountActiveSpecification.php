<?php

namespace App\Service\Behavioral\Specification\Specifications;

use App\Service\Behavioral\Specification\Account;
use App\Service\Behavioral\Specification\Contract\MoneyTransferSpecificationInterface;

class AccountActiveSpecification implements MoneyTransferSpecificationInterface
{
    /**
     * @param Account $account
     * @return bool
     */
    public function isSatisfied(Account $account): bool
    {
        return $account->isActive();
    }
}
