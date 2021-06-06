<?php
function loadClass($class){
  require $class . '.php';
}
spl_autoload_register('loadClass');
?>

<h1>RENDUS POO</h1>
<h2>Utiliser l'encapsulation</h2>
<h3>Exercice 1</h3>

<?php
  $student = new Student();
  // $student->name = "Timmy";
  // $student->age = 35;
  var_dump($student);
?>

<p>- Canger la portée de public à protected empèche la modification directe des attributs.<br>- Il manque le attribut ) modifier et le parametre attendu à la méthode.</p><br>

<?php
  $student->setName("Michel");
  $student->setAge(35);
  var_dump($student);
?>

<p>- En utilisant l'encapsulation par une méthode, définir une variable permet de controler le type de donnée et l'accès aux attributs.</p><br>

<h3>Exercice 2</h3>

<?php
  $student2 = new Student();
  $student2->setName("Bob");
  $student2->setAge(55);
  var_dump($student2);
?>

<p>- D'un point de vue données tout est bon, d'un point de vue logique humaine ces valeurs sont perchées.<br>- En PHP on peut utilier try catch pour verifier que tout fonctionne bien.<br>- Aucune erreur ne s'affiche :/</p><br>

<h3>Exercice 3</h3>

<?php
  // $book = new Book();
  // $book->setTitle("The rain");
  // $book->setPages(246);
  // var_dump($book);
?>

<p>- Si je n'utilise pas le constructeur, les lignes d'assignations se répètent.</p><br>

<?php
  $data = [
    "title" => "The rain",
    "pages" => 246,
  ];

  $book = new Book($data);
  var_dump($book);
  echo "<br>" . $book->getTitle() . " has " . $book->getPages() . " pages";
?>

<p>- Essayer d'afficher des attributs protected sans getter ne fonctionne pas.</p><br>