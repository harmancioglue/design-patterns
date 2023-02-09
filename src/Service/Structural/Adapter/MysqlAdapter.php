<?php

namespace App\Service\Structural\Adapter;

use App\Service\Structural\Adapter\Repository\IMongoProcess;
use App\Service\Structural\Adapter\Repository\MysqlRepository;

class MysqlAdapter implements IMongoProcess
{
    /**
     * @var MysqlRepository
     */
    private $mysqlRepository;

    public function __construct(MysqlRepository $mysqlRepository)
    {
        $this->mysqlRepository = $mysqlRepository;
    }

    public function query(): void
    {
        $this->mysqlRepository->startTransaction();
        $this->mysqlRepository->query();
        $this->mysqlRepository->endTransaction();
    }
}
