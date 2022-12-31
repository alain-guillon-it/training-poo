<?php

namespace Zyrass\TrainingPoo\controllers;

use Zyrass\TrainingPoo\interfaces\MediaInterface;

class RealisatorsController extends PageController implements MediaInterface
{

  use MediaTrait;

  protected string $_title = "Realisators Page";

  function list(): array
  {
    return $this->getRealisators();
  }

  function detail(string $indexArray)
  {
    return $this->_datas[$indexArray];
  }
}
