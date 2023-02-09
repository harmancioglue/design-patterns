<?php

namespace App\Service\Behavioral\Observer\Observers;

use SplSubject;

class NotificationObserver implements \SplObserver
{
    /**
     * @param SplSubject $subject
     * @return void
     */
    public function update(SplSubject $subject): void
    {
        echo sprintf(
            "Notification is sended to %s ....",
            $subject->user->getEmail()
        );
    }
}
