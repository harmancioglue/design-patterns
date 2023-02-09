<?php

namespace App\Service\Behavioral\Specification\Specifications;

use App\Service\Behavioral\Specification\Account;
use App\Service\Behavioral\Specification\Contract\MoneyTransferSpecificationInterface;

class AccountEnoughBalanceSpecification implements MoneyTransferSpecificationInterface
{
    private const MINIMUM_LIMIT = 1000;

    public function isSatisfied(Account $account): bool
    {
        return $account->getBalance() >= self::MINIMUM_LIMIT;
    }
}
