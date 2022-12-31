<?php

namespace Zyrass\TrainingPoo\controllers;

use Zyrass\TrainingPoo\interfaces\MediaInterface;

class SeriesController extends PageController implements MediaInterface
{
  use MediaTrait;

  protected string $_title = "Series";

  function list(): array
  {
    return $this->getSeries();
  }

  function detail(string $indexArray)
  {
    return $this->_datas[$indexArray];
  }
}
