<?php
    require '../7/_head.php';
    require '../4/_navbar.php';
    require '_sqlfetchLignes.php';
    require '../5/_alerts.php'
?>
<body>
    <div class="container m-3">
        <h1>Les lignes</h1>
        <div class="card-header pb-0 text-left bg-transparent">
            <?php if($alert) : ?>
                <div class="alert alert-<?php echo $type; ?>" role="alert">
                    <?php echo $message; ?>
                </div>
            <?php endif; ?>
        </div>
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
                <td><a class="btn btn-dark" href="../9/edit-lignes.php?id=<?php echo $ligne['ligne_id']; ?>">Modifier</a></td>
                <td>
                    <form action="../10/delete-ligne.php" method="post">
                        <input type="hidden" name="ligne_id" value="<?php echo $ligne['ligne_id']; ?>">
                        <input type="submit" class="btn btn-danger" value="Supprimer la ligne">
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        <a href="../7/add-ligne.php" class="btn btn-warning">Ajouter une ligne</a>
    </div>
</body>