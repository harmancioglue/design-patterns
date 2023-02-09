<?php

namespace App\Service\Behavioral\Observer;

use App\Service\Behavioral\Observer\Entity\User;
use App\Service\Behavioral\Observer\Repository\UserRepository;
use SplObjectStorage;
use SplObserver;

class UserService implements \SplSubject
{
    /*** @var UserRepository */
    private $userRepository;
    /** @var SplObjectStorage */
    private $observers;
    /** @var User */
    public $user;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
        $this->observers = new SplObjectStorage();
    }

    /**
     * @return void
     */
    public function registerUser(): void
    {
        $user = (new User())
            ->setName("Owen")
            ->setEmail("owen@test.com");

        $this->user = $user;

        $this->userRepository->save($user);
        $this->notify();
    }

    /**
     * @param SplObserver $observer
     * @return $this
     */
    public function attach(SplObserver $observer): self
    {
        $this->observers->attach($observer);
        return $this;
    }

    /**
     * @param SplObserver $observer
     * @return $this
     */
    public function detach(SplObserver $observer): self
    {
        $this->observers->detach($observer);
        return $this;
    }

    /**
     * @return void
     */
    public function notify(): void
    {
        /** @var SplObserver $observer */
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

}
