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
        <form action="../app/SignUp_POST.php" method="POST">
            <div class="form-group m-3">
                <label for="email">Email*</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group m-3">
                <label for="username">Nom d'utilisateur*</label>
                <input type="text" name="username" class="form-control"  required>
            </div>
            <div class="form-group m-3">
                <label for="password">Mot de passe*</label>
                <input type="password" name="password" class="form-control"  required>
            </div>
            <div class="form-group m-3">
                <label for="password2">Confirmer le mot de passe*</label>
                <input type="password" name="password2" class="form-control"  required>
            </div>
            <button type="submit" class="btn btn-primary">S'inscrire</button>
        </form>
    </div>
</body>