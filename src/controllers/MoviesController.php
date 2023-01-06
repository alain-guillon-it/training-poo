<?php

namespace Zyrass\TrainingPoo\controllers;

use Zyrass\TrainingPoo\interfaces\MediaInterface;

class MoviesController extends PageController implements MediaInterface
{
  use MediaTrait;

  /**
   * Define the attribute title
   *
   * @var string
   */
  protected string $_title = "Movie";

  function list(): array
  {
    return $this->getMovies();
  }

  function detail(string $indiceArray): array
  {
    return $this->getMovies()[$indiceArray];
  }
}
