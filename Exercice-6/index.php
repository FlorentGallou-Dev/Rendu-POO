<?php
    require "model/entity/cat.php";
    require "model/chatManager.php";

    $chatManager = new chatManager();

    if(!empty($_POST) && isset($_POST["addCat"])){
        $cat = new Cat($_POST);
        $chatManager->addCat($cat);
    }

    //Nous récupérons les personnes depuis la BDD
    $cats = $chatManager->getCats();
    
    require "view/indexView.php";
?>