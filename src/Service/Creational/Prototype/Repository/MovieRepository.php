<?php

namespace App\Service\Creational\Prototype\Repository;

use App\Service\Creational\Prototype\Prototypes\AbstractMoviePrototype;

class MovieRepository
{
    /**
     * @param AbstractMoviePrototype $movie
     * @return string
     */
    public function save(AbstractMoviePrototype $movie): void
    {
        //real world database save
        echo sprintf("Movie %s saved to database ...", $movie->getName());
    }
}
