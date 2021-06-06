<?php
function loadClass($class){
  require $class . '.php';
}
spl_autoload_register('loadClass');
?>

<h1>Exercice 1</h1>
<h2>Travailler les propriétés et méthodes</h2>

<?php
    $ville = new City();
    $ville->setNom("Rouen");
    $ville->setDepartement("Normandie");
    echo "<p>" . $ville->getNom() . "</p>";
    echo "<p>" . $ville->getDepartement() . "</p>";
?>