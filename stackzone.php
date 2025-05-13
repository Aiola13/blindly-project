<?php
class StackObj
{
  protected int $_id;
  protected string $_name;
  protected string $_type;
  protected string $_desc;
  protected string $_effect;
  protected string $_sprites;
  protected bool $_stackable;
  protected bool $_consumable;
  protected bool $_usable;
  protected bool $_heldable;
  protected bool $_held_usable;

  public function __construct(int $arg1, string $arg2, string $arg3, string $arg4, string $arg5, string $arg6, bool $arg7, bool $arg8, bool $arg9, bool $arg10, bool $arg11)
  {
    $this->_id = $arg1;
    $this->_name = $arg2;
    $this->_type = $arg3;
    $this->_desc = $arg4;
    $this->_effect = $arg5;
    $this->_sprites = $arg6;
    $this->_stackable = $arg7;
    $this->_consumable = $arg8;
    $this->_usable = $arg9;
    $this->_heldable = $arg10;
    $this->_held_usable = $arg11;
  }

  public function getName(): string
  {
    return $this->_name;
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
      echo "<div class='category-title'><i class='$iconClass'></i> {$data['name']}</div>";

      if (empty($data['items'])) {
        echo "<div class='item'>Aucun objet.</div>";
      } else {
        $i = 1;
        foreach ($data['items'] as $item) {
          echo "<div class='item'>{$i} - {$item->getName()}</div>";
          $i++;
        }
      }

      echo "</div>";
    }

    echo "</div>";
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

    $stackzone1->addObj('pokeballs', new StackObj(1, 'Poké Ball', 'pokeball', 'Une Poké Ball standard.', 'Attrape un Pokémon.', 'poke_ball.png', true, false, true, false, false));
    $stackzone1->addObj('pokeballs', new StackObj(2, 'Master Ball', 'pokeball', 'Ne rate jamais sa cible.', 'Attrape automatiquement un Pokémon.', 'master_ball.png', true, false, true, false, false));
    $stackzone1->addObj('pokeballs', new StackObj(3, 'Super Ball', 'pokeball', 'Meilleure qu\'une Poké Ball.', 'Taux de capture amélioré.', 'super_ball.png', true, false, true, false, false));
    $stackzone1->addObj('pokeballs', new StackObj(4, 'Hyper Ball', 'pokeball', 'Encore meilleure.', 'Capture encore plus efficace.', 'ultra_ball.png', true, false, true, false, false));
    $stackzone1->addObj('medicines', new StackObj(5, 'Potion', 'medicine', 'Restaure 20 PV.', 'Soigne légèrement un Pokémon.', 'potion.png', true, true, true, false, false));

    $stackzone1->getCategories();
    ?>
  </main>
</body>

</html>