<?php

namespace App\Service\Behavioral\Specification;

use App\Service\Behavioral\Specification\Contract\MoneyTransferSpecificationInterface;
use App\Service\Behavioral\Specification\Specifications\AccountActiveSpecification;
use App\Service\Behavioral\Specification\Specifications\AccountEnoughBalanceSpecification;

class Context
{
    /** @var MoneyTransferSpecificationInterface[] */
    private $specifications = [];

    public function __construct()
    {
        $this->specifications[] = new AccountActiveSpecification();
        $this->specifications[] = new AccountEnoughBalanceSpecification();
    }

    /**
     * @return void
     */
    public function transfer(): void
    {
        $account = (new Account())
            ->setActive(true)
            ->setBalance(2000);

        $state = true;
        /** @var MoneyTransferSpecificationInterface $specification */
        foreach ($this->specifications as $specification) {
            if (false === $specification->isSatisfied($account)) {
                $state = false;
                break;
            }
        }

        echo $state ? "Money transferred" : "Money could not transferred";
    }
}
