<?php
    require '_head.php';
    require '../app/_sqlfetchPeople.php';
    require '../app/_alerts.php';
?>
    <div class="container m-6">
        <h1>Tableau des personnes intégrée à la base de données</h1>
    </div>
    <div class="card-header pb-0 text-left bg-transparent">
        <?php if($alert) : ?>
            <div class="alert alert-<?php echo $type; ?>" role="alert">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>
    </div>
    <table class="table table-striped m-4">
        <thead>
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Genre</th>
            <th scope="col">Adresse</th>
            <th scope="col">Ville</th>
            <th scope="col">Code Postal</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($peoples as $people) : ?>
            <tr>
                <td><?php echo $people['name']; ?></td>
                <td><?php echo $people['surname']; ?></td>
                <td><?php echo $people['gender_id']; ?></td>
                <td><?php echo $people['address']; ?></td>
                <td><?php echo $people['city']; ?></td>
                <td><?php echo $people['postal_code']; ?></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
<div class="container m-6">
    <h1>Ajouter quelqu'un</h1>
    <form action="../app/add-people_post.php" method="POST">
        <div class="input-group mb-3">
            <label class="input-group-text" for="name">Nom*</label>
            <input class="form-control form-control-lg" type="text" name="name" placeholder="" required>
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" for="surname">Prénom*</label>
            <input class="form-control form-control-lg" type="text" name="surname" placeholder="" required>
        </div>
        <div class="col-6 mb-3">
            <label class="input-group-text" for="gender">Genre</label>
            <?php require '../app/_sqlfetchGenders.php'; ?>
            <?php foreach ($genders as $gender) : ?>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" value="<?php echo $gender['gender_id'];?>" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    <?php echo $gender['gender_name'];?>
                </label>
            </div>
            <?php endforeach;?>
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" for="address">Adresse</label>
            <input class="form-control form-control-lg" type="text" name="address" placeholder="">
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" for="city">Ville</label>
            <input class="form-control form-control-lg" type="text" name="city" placeholder="">
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" for="postal-code">Code Postal</label>
            <input class="form-control form-control-lg" type="text" name="postalcode" placeholder="">
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>