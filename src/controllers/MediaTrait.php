<?php

namespace Zyrass\TrainingPoo\controllers;

use Zyrass\TrainingPoo\models\ActorModel;
use Zyrass\TrainingPoo\models\MovieModel;

trait MediaTrait
{
  function getMovies(): array
  {
    $model = new MovieModel;
    return $model->getDatas();
  }

  function getActors(): array
  {
    $model = new ActorModel;
    return $model->getDatas();
  }
}
