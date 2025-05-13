<?php

// Classe Item simple
class StackObj
{
  public string $id;
  public string $name;

  public function __construct(string $id, string $name)
  {
    $this->id = $id;
    $this->name = $name;
  }
}

class Stackzone
{
  private array $categories = [];

  private array $icons = [
    'items' => 'fas fa-box-open',
    'pokeballs' => 'fas fa-baseball-ball',
    'medicines' => 'fas fa-prescription-bottle-alt',
    'berries' => 'fas fa-apple-alt',
    'mails' => 'fas fa-envelope',
    'tms_hms' => 'fas fa-compact-disc',
    'key_items' => 'fas fa-key',
    'battle_items' => 'fas fa-fist-raised',
    'free_space' => 'fas fa-inbox'
  ];

  public function __construct(array $defaultCategories = [
    'items' => 'Items',
    'pokeballs' => 'Pokéballs',
    'medicines' => 'Medicines',
    'berries' => 'Berries',
    'mails' => 'Mails',
    'tms_hms' => 'TMS / HMS',
    'key_items' => 'Key Items',
    'battle_items' => 'Battle Items',
    'free_space' => 'Free Space'
  ])
  {
    foreach ($defaultCategories as $key => $name) {
      $this->categories[$key] = [
        'name' => $name,
        'items' => []
      ];
    }
  }

  public function addObj(string $categoryKey, StackObj $item): void
  {
    if (!isset($this->categories[$categoryKey])) {
      $this->categories[$categoryKey] = [
        'name' => ucfirst(str_replace('_', ' ', $categoryKey)),
        'items' => []
      ];
    }
    $this->categories[$categoryKey]['items'][] = $item;
  }

  public function getCategories(): void
  {
    echo "<div>";
    echo "<h2>Liste des Catégories Inventaire</h2><hr>";

    foreach ($this->categories as $key => $data) {
      $iconClass = $this->icons[$key] ?? 'fas fa-question-circle';

      echo "<div class='category'>";
      echo "<div class='category-title'><i class='$iconClass'></i>{$data['name']}</div>";

      if (empty($data['items'])) {
        echo "<div class='item'>Aucun objet.</div>";
      } else {
        foreach ($data['items'] as $item) {
          echo "<div class='item'>- {$item->name} - (ID: {$item->id})</div>";
        }
      }

      echo "</div>";
    }
  }
}
?>

<html>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style-stackzone.css">
</head>

<body>
  <main>
    <?php
    $stackzone1 = new Stackzone();
    $stackzone1->addObj('pokeballs', new StackObj('poke01', 'Poké Ball'));
    $stackzone1->addObj('pokeballs', new StackObj('poke02', 'Master Ball'));
    $stackzone1->addObj('pokeballs', new StackObj('poke02', 'Super Ball'));
    $stackzone1->addObj('pokeballs', new StackObj('poke02', 'Hyper Ball'));
    $stackzone1->addObj('medicines', new StackObj('med01', 'Potion'));

    $stackzone1->getCategories();
    ?>
  </main>
</body>