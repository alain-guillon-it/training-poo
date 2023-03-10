<?php

namespace Zyrass\TrainingPoo\controllers;

use Zyrass\TrainingPoo\interfaces\MediaInterface;

class ActorsController extends PageController implements MediaInterface
{
  use MediaTrait;

  protected string $_title = "Actors";

  function list(): array
  {
    return $this->getActors();
  }

  function detail(string $indiceArray): array
  {
    return $this->getActors()[$indiceArray];
  }
}
