<?php
    require '../7/_head.php';
    require '_sqlfetchLignes.php';
?>
<body>
    <div class="container-fluid m-4">
        <h1>Les lignes</h1>
        <table class="table">
        <thead>
            <tr>
                <th scope="col">Nom de la ligne</th>
                <th scope="col">Terminus A</th>
                <th scope="col">Terminus B</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lignes as $ligne) : ?>
            <tr>
                <th><?php echo $ligne['ligne_name'];?></th>
                <td><?php echo $ligne['terminus_a'];?></td>
                <td><?php echo $ligne['terminus_b'];?></td>
                <td><a class="btn btn-dark" href="">Modifier</a></td>
                <td><a class="btn btn-danger" href="">Supprimer</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        <a href="../7/add-ligne.php" class="btn btn-warning">Ajouter une ligne</a>
    </div>
</body>