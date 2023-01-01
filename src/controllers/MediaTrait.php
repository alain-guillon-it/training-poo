<?php

namespace Zyrass\TrainingPoo\controllers;

use Zyrass\TrainingPoo\models\ActorModel;
use Zyrass\TrainingPoo\models\MovieModel;
use Zyrass\TrainingPoo\models\DirectorModel;
use Zyrass\TrainingPoo\models\SerieModel;

trait MediaTrait
{

  private array $_lastThreeMovies = [];
  private array $_lastThreeSeries = [];
  private array $_lastThreeActors = [];
  private array $_lastThreeDirectors = [];

  function getMovies(): array
  {
    $model = new MovieModel;
    return $model->getDatas();
  }

  function getSeries(): array
  {
    $model = new SerieModel;
    return $model->getDatas();
  }

  function getActors(): array
  {
    $model = new ActorModel;
    return $model->getDatas();
  }

  function getDirectors(): array
  {
    $model = new DirectorModel;
    return $model->getDatas();
  }

  function getLastThreeMovies(): array
  {
    $this->_lastThreeMovies = array_reverse($this->getMovies());
    return array_slice($this->_lastThreeMovies, 0, 3);
  }

  function getLastThreeSeries(): array
  {
    $this->_lastThreeSeries = array_reverse($this->getSeries());
    return array_slice($this->_lastThreeSeries, 0, 3);
  }

  function getLastThreeActors(): array
  {
    $this->_lastThreeActors = array_reverse($this->getActors());
    return array_slice($this->_lastThreeActors, 0, 3);
  }

  function getLastThreeDirectors(): array
  {
    $this->_lastThreeDirectors = array_reverse($this->getDirectors());
    return array_slice($this->_lastThreeDirectors, 0, 3);
  }
}
