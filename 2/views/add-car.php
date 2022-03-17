<?php
    require '_head.php';
    require '_navbar.php';
?>

<body>
    <div class="container">
        <form action="../app/App.php" method="POST">
            <div class="form-group m-3">
                <label for="constructor">Marque*</label>
                <input type="text" name="constructor" class="form-control" id="formGroupExampleInput" placeholder="Nissan" required>
            </div>
            <div class="form-group m-3">
                <label for="modele">Modèle*</label>
                <input type="text" name="modele" class="form-control" id="formGroupExampleInput2" placeholder="Micra" required>
            </div>
            <div class="form-group m-3">
                <label for="color">Couleur*</label>
                <input type="text" name="color" class="form-control" id="formGroupExampleInput2" placeholder="Rouge" required>
            </div>
            <div class="form-group m-3">
                <label for="km">Kilomètrage*</label>
                <input type="text" name="km" class="form-control" id="formGroupExampleInput2" placeholder="20000" required>
            </div>
            <div class="form-group m-3">
                <label for="release_date">Date de sortie*</label>
                <input type="date" name="release_date" class="form-control" id="formGroupExampleInput2" placeholder="01/01/2014" required>
            </div>
            <div class="form-group m-3">
                <label for="price">Prix*</label>
                <input type="text" name="price" class="form-control" id="formGroupExampleInput2" placeholder="2000€" required>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter le véhicule</button>
        </form>
    </div>
</body>