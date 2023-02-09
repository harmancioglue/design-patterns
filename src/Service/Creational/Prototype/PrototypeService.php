<?php

namespace App\Service\Creational\Prototype;

use App\Service\Creational\Prototype\Prototypes\FunMovie;
use App\Service\Creational\Prototype\Prototypes\HorrorMovie;
use App\Service\Creational\Prototype\Repository\MovieRepository;

class PrototypeService
{
    /*** @var MovieRepository */
    private $movieRepository;

    public function __construct(MovieRepository $movieRepository)
    {
        $this->movieRepository = $movieRepository;
    }

    public function saveMovies()
    {
        $funMovie = new FunMovie();
        $funMovie->setName("Bad Boys");

        $horrorMovie = new HorrorMovie();
        $horrorMovie->setName("The Hill Have Eyes");

        $clonedFunMovie = clone $funMovie;
        $clonedFunMovie->setName("Mr. Popper's Penguins");

        $clonedHorrorMovie = clone $horrorMovie;
        $clonedHorrorMovie->setName("Pet Sematary");

        $this->movieRepository->save($funMovie);
        $this->movieRepository->save($horrorMovie);
        $this->movieRepository->save($clonedFunMovie);
        $this->movieRepository->save($clonedHorrorMovie);
    }
}
