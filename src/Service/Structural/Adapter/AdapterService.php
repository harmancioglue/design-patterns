<?php

namespace App\Service\Structural\Adapter;

use App\Service\Structural\Adapter\Repository\MongoRepository;
use App\Service\Structural\Adapter\Repository\MysqlRepository;

class AdapterService
{
    public function run(string $database)
    {
        //imagine that all codes and process based on mongo...
        //there is lot complicated code
        //and there is new need for mysql and you do not want to touch the code too much
        //just implement adapter
        $repository = new MongoRepository();
        if ($database === 'mysql') {
            $repository = new MysqlAdapter(new MysqlRepository());
        }

        $repository->query();

    }
}
