<?php
    require '_head.php';
    require '_navbar.php';
    require '../../5/_alerts.php';
?>

<body>
    <div class="container">
        <div class="card-header pb-0 text-left bg-transparent">
            <?php if($alert) : ?>
                <div class="alert alert-<?php echo $type; ?>" role="alert">
                    <?php echo $message; ?>
                </div>
            <?php endif; ?>
        </div>
        <form action="../app/App.php" method="POST">
            <div class="form-group m-3">
                <label for="constructor">Marque*</label>
                <input type="text" name="constructor" class="form-control placeholder="Nissan" required>
            </div>
            <div class="form-group m-3">
                <label for="modele">Modèle*</label>
                <input type="text" name="modele" class="form-control" placeholder="Micra" required>
            </div>
            <div class="form-group m-3">
                <label for="color">Couleur*</label>
                <input type="text" name="color" class="form-control" placeholder="Rouge" required>
            </div>
            <div class="form-group m-3">
                <label for="km">Kilomètrage*</label>
                <input type="text" name="km" class="form-control" placeholder="20000" required>
            </div>
            <div class="form-group m-3">
                <label for="release_date">Date de sortie*</label>
                <input type="date" name="release_date" class="form-control" placeholder="01/01/2014" required>
            </div>
            <div class="form-group m-3">
                <label for="price">Prix*</label>
                <input type="text" name="price" class="form-control" placeholder="2000€" required>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter le véhicule</button>
        </form>
    </div>
</body>