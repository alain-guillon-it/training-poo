<?php

namespace Zyrass\TrainingPoo\interfaces;

interface PageInterface
{
  public function getTitle(): string;
  public function setTitle(string $title): void;
}
