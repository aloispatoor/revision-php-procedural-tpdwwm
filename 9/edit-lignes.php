<?php
    require '../7/_head.php';
    require '_sqlfetchSingle.php';
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
        <form action="edit-lignes_POST.php" method="POST">
            <div class="form-group m-3">
                <label for="name"><?php echo $singleLigne['ligne_name']?></label>
                <input type="text" value="<?php echo $singleLigne['ligne_name']?>" name="name" class="form-control" id="formGroupExampleInput" required>
            </div>
            <div class="form-group m-3">
                <label for="terminus_a"><?php echo $singleLigne['terminus_a']?></label>
                <input type="text" name="terminus_a" value="<?php echo $singleLigne['terminus_a']?>" class="form-control" id="formGroupExampleInput" required>
            </div>
            <div class="form-group m-3">
                <label for="terminus_b"><?php echo $singleLigne['terminus_b']?></label>
                <input type="text" name="terminus_b" value="<?php echo $singleLigne['terminus_b']?>" class="form-control" id="formGroupExampleInput" required>
            </div>
            <input type="hidden" name="product_id" value="<?php echo $singleLigne['ligne_id']; ?>">
            <button type="submit" class="btn btn-warning">Modifier la ligne</button>
        </form>
</body>