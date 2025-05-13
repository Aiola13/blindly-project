<?php

class stackzone
{
  private array $categories = [];

  public function __construct(array $defaultCategories = ['soins', 'pokeballs', 'objets_clés', 'CT'])
  {
    foreach ($defaultCategories as $cat) {
      $this->categories[$cat] = [];
    }
  }

  public function addObj(string $category, Item $item): void
  {
    if (!isset($this->categories[$category])) {
      $this->categories[$category] = [];
    }
}
}
