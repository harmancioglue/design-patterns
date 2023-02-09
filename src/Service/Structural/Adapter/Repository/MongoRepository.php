<?php

namespace App\Service\Structural\Adapter\Repository;

class MongoRepository implements IMongoProcess
{
    public function query(): void
    {
        echo "Mongo query run... ";
    }
}
