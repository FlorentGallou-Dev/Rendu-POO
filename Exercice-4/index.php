<?php
    function loadClass($class){
        require $class . ".php";
    }
    spl_autoload_register("loadClass");

    $data = [
        "action" => "traitement.php",
        "method" => "POST",
        "submit" => "<input type='submit' value='Envoyer'>",
        "text" => [
            "firstName" => "text",
            "lastName" => "text"
        ]
    ];
?>

<h1>Exercice 4</h1>
<h2>La POO appliquée à un formulaire</h2>

<?php
    $form = new Form($data);
    echo $form->showForm();
?>