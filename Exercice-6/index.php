<?php
    require "model/entity/cat.php";
    require "model/chatManager.php";

    $chatManager = new chatManager();

    if(!empty($_POST) && isset($_POST["addCat"])){
        echo "ici";
        $cat = new Cat($_POST);
        var_dump($cat);
        $chatManager->addCat($cat);
    }
    echo "la";

    //Nous récupérons les personnes depuis la BDD
    $cats = $chatManager->getCats();
    var_dump($cats);
    
    require "view/indexView.php";
?>