<?php
function loadClass($class){
  require $class . '.php';
}
spl_autoload_register('loadClass');
?>

<h1>RENDUS POO</h1>
<h2>Découvrir les classes</h2>
<h3>Exercice 1</h3>
<p>- On vient de créer la class Dog<br>- Le mot clé class sert à signifier à PHP que l'on créer un class.<br>- La classe que nous venons de créer porte le nom Dog<br>- Oui elle aurait pu porter un nom différent tant qu'elle reste claire.<br>- La casse en bonne pratique veut qu'un nom de classe commence par une majuscule.</p><br>
<p>- La fonction include permet également d'importer le contenu d'un fichier dans un autre fichier PHP mais ne rend pas l'importation du contenu du fichier obligatoire au déroulement de l'application.<br>- Maintenant nous pourrons accéder à la class Dog si désiré.</p>

<?php
    $dog1 = new Dog();
?>

<p>- Nous venons d'instancier l'objet dog1 issu de la classe Dog.</p><br>

<?php
    var_dump($dog1);
?>

<p>- Le var_dump sur dog1 nous dit que dog1 est un objet de la class Dog<br>- L'objet/instance dog1 dépend de la class Dog, mais la class Dog ne dépend pas l'objet dog1.</p><br>

<?php
    $dog2 = new Dog();
    var_dump($dog2);
?>

<p>- Le var_dump de dog2 nous dit que tout comme dog1, dog2 est une instance de la clas Dog.<br>- Ce qui différencie dog1 et dog2 est qu'ils ne sont pas la même instance bien que tout deux héritiers de la class Dog.</p><br>

<?php
    $dog3 = $dog2;
    var_dump($dog3);
?>

<p>- En créant la variable dog3 je lui attribue la valeur de dog2, dog3 est donc une copie de l'objet dog2 et contient les mêmes attributs que dog2<br>- dog3 rest une copie à un instant de l'objet dog2, la bonne pratique est de créer une nouvelle instance indépendante des autres, sinon on peut juste appeller l'objet dog2.</p><br>

<h3>Exercice 2</h3>

<?php
    $customer = new Customer();
    var_dump($customer);
?>

<p>- Le var_dump de customer donne un objet instancié de la class Customer, l'objet #3<br>- En l'état une instance vide d'une class vide ne sert à rien.</p><br>

<?php
    $customer->name = "Doe";
    var_dump($customer);
?>

<p>- Nous venons de déclarer et initialiser un attribut name à l'instance customer.<br>- L'équivalent en programmation native d'un attribut est une variable.</p><br>

<?php
    $customer->firstname = "John";
    $customer->age = 42;
    $customer->payements = ["visa", "mastercard", "paypal"];
    var_dump($customer);
?>

<p>- Maintenant, notre objet contient les attributs name, firstname, age et payements.<br>- Les types de données attendis pour des attributs sont les mêmes que pour les variables natives : texte, numériques ou booléens.</p><br>

<?php
    $customer2 = new Customer();
    var_dump($customer2);
?>

<p>- customer2 est une nouvelle instance de la classe Customer mais est indépendante de customer.<br>- Nous aurions du créer les attributs dans la classe directement pour que chaque instance attendent les mêmes attributs.</p><br>

<?php
    $customer->dog = $dog1;
    var_dump($customer);
?>

<p>- En définissant l'objet dog1 à l'attribut dog de l'objet customer, notre customer est maintenant lié à l'objet dog1, les changements de l'objet dog1 seront impacté dans l'attribut dog1 de l'objet customer comme dans la vrai vie.</p>