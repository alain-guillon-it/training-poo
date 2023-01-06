<?php

namespace Zyrass\TrainingPoo\controllers;

use Zyrass\TrainingPoo\interfaces\MediaInterface;

class SeriesController extends PageController implements MediaInterface
{
  use MediaTrait;

  /**
   * Define the attribute title
   *
   * @var string
   */
  protected string $_title = "Series";

  function list(): array
  {
    return $this->getSeries();
  }

  function detail(string $indexArray): array
  {
    return $this->getSeries()[$indexArray];
  }
}
