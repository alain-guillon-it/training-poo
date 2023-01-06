<?php

namespace Zyrass\TrainingPoo\interfaces;

interface MediaInterface
{
  /**
   * Return a full datalist
   *
   * @return array
   */
  public function list(): array;

  /**
   * Return an ID from the list
   *
   * @param string $indexArray
   * @return array
   */
  public function detail(string $indexArray): array;
}
