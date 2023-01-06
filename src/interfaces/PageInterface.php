<?php

namespace Zyrass\TrainingPoo\interfaces;

interface PageInterface
{
  /**
   * Return the Title
   *
   * @return string
   */
  public function getTitle(): string;

  /**
   * Edit the Title
   *
   * @param string $title
   * @return void
   */
  public function setTitle(string $title): void;
}
