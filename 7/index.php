<?php
    require '_head.php';
    require '../4/_navbar.php';
?>

<body>
    <h1>Exercice 7 : Ajout simple à la BDD</h1>
    <p>A partir de la connexion réalisée à l'exercice 6 et des apprentissages des exercices précédents, utilisez un
        formulaire pour ajouter des nouvelles lignes de transport dans la base de données. Vous pourrez vous inspirer du
        réseau de transports de votre choix.</p>
    <small>Utilisez un système de bloc try/catch afin de réaliser vos opérations SQL.Sécurisez le tout avec des requêtes
        préparées.</small>
    <p><b>Bonus : Ajoutez des messages d'erreur dans le système pour renforcer l'expérience utilisateur</b></p>

    <a href="add-ligne.php" class="btn btn-success">Ajouter une ligne</a>
</body>

</html>