<?php
    require '../7/_head.php';
?>

<body>
    <h1>Exercice 8 : Affichage des données de la BDD</h1>
    <p>A partir de la connexion réalisée à l'exercice 6 et des apprentissages des exercices précédents, affichez
        l'ensemble des lignes de transports disponibles dans votre base de données dans un tableau HTML. A chaque ligne
        de transport, il devra y avoir deux actions possibles dans le tableau, éditer et supprimer (Bien que non
        fonctionnelles).</p>
    <small>Il est peut-être temps de définir un mode de récupération par défaut des données par PDO afin d'éviter
        d'avoir un tableau doublé.</small>
    <p><b>Bonus : ajoutez un champ de recherche pour filtrer les résultats par leur nom (A l'aide de l'instruction LIKE
            %recherche% dans une requête SQL)</b></p>
    <a href="lignes.php" class="btn btn-warning">Consulter les lignes</a>
</body>

</html>