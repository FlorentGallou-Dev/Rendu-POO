<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercice chats</title>
    </head>

    <body>

        <h1>Liste des chats en base de données</h1>
        <ul>
            <?php foreach($cats as $cat): ?>
                <li><?php echo $cat->getName(); ?>, chat <?php echo $cat->getSex(); ?> de <?php echo $cat->getAge(); ?> ans au pelage <?php echo $cat->getColor(); ?>.</li>
            <?php endforeach ?>
        </ul>
        <h2>Enregistrer un nouveau chat</h2>

        <form action="" method="POST">
            <p><label>Nom : </label><input type="text" name="name"></p>
            <p><label>Age : </label><input type="number" name="age"></p>
            <p><label>Sexe : </label><input type="text" name="sex"></p>
            <p><label>Couleur : </label><input type="text" name="color"></p>
            <p><button type="submit" name="addCat">Envoyer</button></p>
        </form>
    </body>
</html>