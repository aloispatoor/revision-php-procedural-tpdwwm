<?php
    require '../7/_head.php';
    require '_sqlfetchSelect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 11</title>


</head>

<body>
    <h1>Exercice 11 : Affichage selon critères</h1>
    <p>A partir de la connexion réalisée à l'exercice 6 et des apprentissages des exercices précédents, utilisez un
        formulaire qui permet d'afficher les lignes de transports selon des critères (comprendre avec un select) qui
        permet de créer un filtre. (Vous pourrez créer arbitrairement le filtrage que vous voulez).</p>
    <small>Utilisez un système de bloc try/catch afin de réaliser vos opérations SQL.Sécurisez le tout avec des requêtes
        préparées.N'oubliez pas l'instruction WHERE pour sélectionner plus précisément</small>

    <div class="container">
        <select name="lignes" class="form-select m-3">
            <?php foreach ($lignes as $ligne) : ?>
            <option value="<?php echo $ligne['ligne_id'];?>">
                <?php echo $ligne['ligne_name']; ?>
            </option>
            <?php endforeach; ?>
        </select>
        <a href="../8/lignes.php" class="btn btn-warning">Voir les lignes</a>
    </div>
</body>

</html>