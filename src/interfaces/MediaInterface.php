<?php

namespace Zyrass\TrainingPoo\interface;

interface MediaInterface
{
  public function list();
  public function detail(string $indexArray);
}
