<?php

namespace App\Service\Structural\Facade;

use App\Service\Structural\Facade\Services\BasketService;
use App\Service\Structural\Facade\Services\PaymentService;
use App\Service\Structural\Facade\Services\ProductStockService;
use App\Service\Structural\Facade\Services\UserMailService;

class FacadeService
{
    /**
     * @var PaymentService
     */
    private $paymentService;
    /**
     * @var ProductStockService
     */
    private $productStockService;
    /**
     * @var BasketService
     */
    private $basketService;
    /**
     * @var UserMailService
     */
    private $mailService;

    public function __construct(
                                PaymentService      $paymentService,
                                ProductStockService $productStockService,
                                BasketService       $basketService,
                                UserMailService     $mailService
    )
    {

        $this->paymentService = $paymentService;
        $this->productStockService = $productStockService;
        $this->basketService = $basketService;
        $this->mailService = $mailService;
    }

    /**
     * @return void
     */
    public function run(): void
    {
        $this->paymentService->pay();
        $this->productStockService->run();
        $this->basketService->clear();
        $this->mailService->sendMail();
    }
}
