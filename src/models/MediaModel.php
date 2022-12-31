<?php

namespace Zyrass\TrainingPoo\models;

abstract class MediaModel
{
  function getDatas(): array
  {
    return $this->_datas;
  }
  function getDataByID(string $indexArray): array
  {
    return $this->_datas[$indexArray];
  }
}