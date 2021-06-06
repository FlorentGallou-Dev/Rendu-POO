<?php
function loadClass($class){
  require $class . '.php';
}
spl_autoload_register('loadClass');
?>

<h1>RENDUS POO</h1>
<h2>Ajouter des attributs</h2>
<h3>Exercice 1</h3>

<?php
    $customer = new Customer();
    var_dump($customer);
?>

<p>- La variable customer contient une instance vide de la classe Customer.</p><br>

<?php
    var_dump($customer);
?>

<p>- Maintenant que nous avons délaré l'attribut name dans la classe, l'objet customer contient name.</p><br>

<?php
    $customer2 = new Customer();
    var_dump($customer2);
?>

<p>- customer2 contient maintenant une instance de la classe Customer qui contient les attributs que nous venons de déclarer.<br>- L'aventage de déclarer les attributs dans la classe est que chaque objet hériteront de la class et donc de ses attributs.<br>- Typer un attribut permet de sécuriser le type de valeur qui sera enregistré dans l'attribut.</p><br>

<?php
    $customer->name = "Doe";
    $customer->firstname = "John";
    $customer->age = 42;
    $customer->payements = ["visa", "mastercard", "paypal"];
    var_dump($customer);
    $customer->name = 123;
    var_dump($customer);
?>

<p>- Le fait d'avoir typé l'attribut name en string transforme l'entier 123 en chaine de caractères.</p><br>

<h3>Exercice 2</h3>

<?php
    //$customer->name = strtoupper($customer->name);
    var_dump($customer);
    //$name = strtoupper($name);
?>


<p>- Nous ne pouvons pas passer des characteres numériques en majuscules.<br>- Nous devons forcément chercher l'attribut dans un objet donné, na variable name n'existe pas en dehors des objets customer ou de la classe Customer</p><br>

<?php
    $customer->firstname = strtoupper($customer->firstname);
    array_push($customer->payements, "cash");
    var_dump($customer);
?>

<p></p><br>