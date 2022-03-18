<?php
    require '_head.php';
    require '_navbar.php';
    require '../app/_sqlfetchCars.php';
?>

<body>
    <div class="container-fluid m-4">
        <h1>Nos véhicules</h1>
        <table class="table">
        <thead>
            <tr>
                <th scope="col">Marque</th>
                <th scope="col">Modèle</th>
                <th scope="col">Couleur</th>
                <th scope="col">Kilométrage</th>
                <th scope="col">Date de sortie</th>
                <th scope="col">Prix</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cars as $car) : ?>
            <tr>
                <th><?php echo $car['constructor'];?></th>
                <td><?php echo $car['modele'];?></td>
                <td><?php echo $car['color'];?></td>
                <td><?php echo $car['km'];?></td>
                <td><?php echo $car['release_date'];?></td>
                <td><?php echo $car['price'];?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </div>
</body>