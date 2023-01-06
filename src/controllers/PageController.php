<?php

namespace Zyrass\TrainingPoo\controllers;

use Zyrass\TrainingPoo\interfaces\PageInterface;

abstract class PageController implements PageInterface
{
  /**
   * Define the attribute title
   *
   * @var string
   */
  protected string $_title;

  /**
   * Show the title page
   *
   * @return string
   */
  function getTitle(): string
  {
    return $this->_title;
  }

  /**
   * Edit the title page
   *
   * @param string $title
   * @return void
   */
  function setTitle(string $title): void
  {
    $this->_title = $title;
  }
}
