<?php

namespace App\Service\Structural\Adapter\Repository;

class MysqlRepository implements IMysqlProcesses
{
    public function startTransaction(): void
    {
        echo "Mysql transaction started... ";
    }

    public function query(): void
    {
        echo "Mysql query worked... ";
    }

    public function endTransaction(): void
    {
        echo "Transaction ended... ";
    }
}
