<?php

namespace App\Service\Behavioral\Observer\Observers;

use SplSubject;

class EmailObserver implements \SplObserver
{
    /**
     * @param SplSubject $subject
     * @return void
     */
    public function update(SplSubject $subject): void
    {
        echo sprintf(
            "Email is sended to %s ....",
            $subject->user->getEmail()
        );
    }
}
