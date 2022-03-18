<?php
    require '_head.php';
    require '../4/_navbar.php';
    require '../5/_alerts.php';
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
        <form action="add-ligne_POST.php" method="POST">
            <div class="form-group m-3">
                <label for="name">Nom de Ligne</label>
                <input type="text" name="name" class="form-control" id="formGroupExampleInput" required>
            </div>
            <div class="form-group m-3">
                <label for="terminus_a">Terminus A</label>
                <input type="text" name="terminus_a" class="form-control" id="formGroupExampleInput" required>
            </div>
            <div class="form-group m-3">
                <label for="terminus_b">Terminus B</label>
                <input type="text" name="terminus_b" class="form-control" id="formGroupExampleInput" required>
            </div>
            <button type="submit" class="btn btn-warning">Ajouter la ligne</button>
        </form>
</body>