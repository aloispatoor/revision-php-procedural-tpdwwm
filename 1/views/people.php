<?php
    require '_head.php';
    require '../../5/_alerts.php';
?>

<body class="m-5">
<div class="card-header pb-0 text-left bg-transparent">
        <?php if($alert) : ?>
            <div class="alert alert-<?php echo $type; ?>" role="alert">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>
    </div>
    <h1>Exercice 1 : Identité</h1>
    <p>A l'aide d'un formulaire HTML et de PHP, affichez les données qu'un utilisateur aura rempli dans un formulaire
        via une requête POST SUR LA MEME PAGE</p>
    <small>Ne pas oublier de préparer le cas où les données sont non renseignées et/ou n'ont pas encore pu être
        remplies</small>
    
    <a href="add-people.php" class="btn btn-primary">Consulter</a>
</body>

</html>