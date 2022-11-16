<?php

session_start();
?>


<?php
include('variables.php');
if (isset($_POST['email'])  && isset($_POST['password'])) {
  foreach ($administrators as $user) {
    //Administrateurs trouvés
    if ($user['email'] == $_POST['email'] &&  $user['password'] == $_POST['password']) {

      //Enregistrement de l'email de l'utilisateur dans la session

      $_SESSION['LOGGED_USER'] = $user['email'];
    }
  }
} else {
}
?>
<?php
if (!isset($_SESSION['LOGGED_USER'])) :;

?>

  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row flex-grow">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo">
                <img src="assets/images/logo-dark.svg">
              </div>
              <h4>Salut ! soyez les bienvenu.</h4>
              <h6 class="font-weight-light">Connectez-vous pour continuer.</h6>
              <form class="pt-3" method="post" action="login.php">
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Adresse email" name="email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Mot de passe" name="password">
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit"><a>SE CONNECTER</a></button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">Rester connecter </label>
                  </div>
                  <a href="forgot-password.php" class="auth-link text-black">Mot de passe oublié ?</a>
                </div>


              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- content-wrapper ends -->
    </div>

    <!-- page-body-wrapper ends -->
  </div>

<?php else :; ?>


<?php endif ?>