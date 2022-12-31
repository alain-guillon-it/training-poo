<?php

namespace Zyrass\TrainingPoo\interfaces;

interface MediaInterface
{
  public function list();
  public function detail(string $indexArray);
}
