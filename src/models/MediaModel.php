<?php

namespace Zyrass\TrainingPoo\models;

abstract class MediaModel
{
  /**
   * Return All Data
   *
   * @return array
   */
  function getDatas(): array
  {
    return $this->_datas;
  }
  function getDataByID(string $indexArray): array
  {
    return $this->_datas[$indexArray];
  }
}
