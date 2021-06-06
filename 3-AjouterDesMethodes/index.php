<?php
function loadClass($class){
  require $class . '.php';
}
spl_autoload_register('loadClass');
?>

<h1>RENDUS POO</h1>
<h2>Ajouter des méthodes</h2>
<h3>Exercice 1</h3>

<?php
    $bird = new Bird();
    $bird->type = "sparrow";
    $bird->color = "grey";
    $bird->age = 5;
    array_push($bird->areas, "europe", "north america", "asia");
    var_dump($bird);
?>

<p>- Oui, nous avons bien défini les valeurs aux attributs de l'objet bird.<br>- En l'état notre classe est représentative d'une liste d'oiseaux, mais on peut faire mieux.<br>- Ajouter une méthode à la classe donne la possiblité à toutes ses instances de l'appeller, la différence avec une fonction classique est qu'il faut passer par l'objet pour appeller la méthode.<br>- $this représente l'objet lui même et n'est appellable que dans l'objet dans lequel on travail.</p><br>

<?php
  echo "<p>" . $bird->fly("Paris") . "</p>";
?>

<h3>Exercice 2</h3>

<p>- La méthode __construct a des __ précédant son nom.</p><br>

<?php
  //$otherBird = new otherBird("sparrow");
?>

<p>- La méthode __construct est automatiquement appellée à la définition d'une nouvelle instance.<br>- Oui, à l'instanciation d'un nouvel objet, nous définissons des valeurs à ses attributs.</p><br>

<?php
  var_dump($otherBird);
?>

<p>- A l'instantiation déclanche le constructeur et initialise l'attribut type.<br>- $this représente l'objet actuel et $type représente l'attribut en général, $this->type représente l'attribut type de l'objet actuel.</p><br>

<?php
  $otherBird2 = new otherBird("sparrow", "white", 2, ["europe", "north america", "asia"]);
  var_dump($otherBird2);
?>

<p>- Le fait d'untiliser un tableau permet d'automatiser la définition des valeurs du tableau grace à array_push plutot que multiplier les lignes pour entrer chaque valeur.</p>