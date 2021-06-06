<?php
    function loadClass($class) {
        require $class . '.php';
    }
    spl_autoload_register('loadClass');

    $data = [
        "firstName" => "Lucien",
        "lastName" => "Probacchi",
        "adress" => "42, rue du petit Mitron - 42012 Magratéa"
    ];
?>

<h1>Exercice 3</h1>
<h2>Pratiquer les objets</h2>

<?php
    $person1 = new Person($data);
    echo "<p>" . $person1->getCoord() . "</p>";
?>