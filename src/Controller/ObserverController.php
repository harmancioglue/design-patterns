<?php

namespace App\Controller;

use App\Service\Behavioral\Observer\Observers\EmailObserver;
use App\Service\Behavioral\Observer\Observers\NotificationObserver;
use App\Service\Behavioral\Observer\UserService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ObserverController
{
    /**
     * @Route("/observer")
     * @return void
     */
    public function index(UserService $userService): Response
    {
        $userService
            ->attach(new EmailObserver())
            ->attach(new NotificationObserver());

        $userService->registerUser();

        return new Response();
    }
}
