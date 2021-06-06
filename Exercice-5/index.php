<?php
    require "model/clioModel.php";

    $clio1 = new ClioModel(3, 952354857);
    echo $clio1->showClioInfos();
 
    $clio2 = new ClioModel(3, 316524985);
    echo $clio2->showClioInfos();

    $clio3 = new ClioModel(5, 258465812);
    echo $clio3->showClioInfos();
?>