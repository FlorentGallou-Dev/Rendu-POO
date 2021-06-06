<?php
function loadClass($class){
  require $class . '.php';
}
spl_autoload_register('loadClass');
$data = [
  "nom" => "Rouen",
  "departement" => "Nomandie"
];
?>

<h1>Exercice 2</h1>
<h2>Utiliser le constructeur d'objets</h2>

<?php
    $ville = new City($data);

    echo "<p>" . $ville->getNom() . "</p>";
    echo "<p>" . $ville->getDepartement() . "</p>";

?>