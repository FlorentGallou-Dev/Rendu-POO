<?php
    function loadClass($class){
        require $class . ".php";
    }
    spl_autoload_register("loadClass");

    $data = [
        "action" => "traitement.php",
        "method" => "POST",
        "submit" => "<div><input type='submit' value='Envoyer'></div>",
        "radio" => "<div>
                        <input type='radio' id='radio1' name='radio' value='val1' checked>
                        <label for='radio1'>Radio1</label>

                        <input type='radio' id='radio2' name='radio' value='val2'>
                        <label for='radio2'>Radio2</label>
                    </div>",
        "checkBox" => "<div>
                            <input type='checkbox' id='check1' name='male' checked>
                            <label for='check1'>Male</label>

                            <input type='checkbox' id='check2' name='female'>
                            <label for='check2'>Femelle</label>
                       </div>",
        "text" => [
            "firstName" => "text",
            "lastName" => "text"
        ]
    ];
?>

<h1>Exercice 4</h1>
<h2>La POO appliquée à un formulaire</h2>

<?php
    $form = new uppgradedForm($data);
    echo $form->showForm();
?>