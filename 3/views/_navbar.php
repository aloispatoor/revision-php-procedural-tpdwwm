<nav class="navbar navbar-light bg-dark p-3">
  <form class="form-inline">
  <?php if($_SESSION['user']) : ?>
    <a href="?logout" class="btn btn-outline-danger" type="button">Se déconnecter</a>
  <?php else : ?>
    <a href="signUp.php" class="btn btn-outline-primary" type="button">S'inscrire</a>
    <a href="signIn.php" class="btn btn-outline-primary" type="button">Se connecter</a>
  <?php endif;?>
  </form>
</nav>