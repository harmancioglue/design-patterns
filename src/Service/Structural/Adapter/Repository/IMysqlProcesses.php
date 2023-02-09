<?php

namespace App\Service\Structural\Adapter\Repository;

interface IMysqlProcesses
{
    public function startTransaction(): void;
    public function query(): void;
    public function endTransaction(): void;

}
