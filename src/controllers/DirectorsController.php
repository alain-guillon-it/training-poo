<?php

namespace Zyrass\TrainingPoo\controllers;

use Zyrass\TrainingPoo\interfaces\MediaInterface;

class DirectorsController extends PageController implements MediaInterface
{

  use MediaTrait;

  protected string $_title = "Directors";

  function list(): array
  {
    return $this->getDirectors();
  }

  function detail(string $indexArray)
  {
    return $this->_datas[$indexArray];
  }
}
