<?php
session_start();
require_once("../includes/config.php");
include 'adminActions/addAdmin.php';
include 'login.php';
?>
<!DOCTYPE html>
<html>

<head>
  <title>ConnexionGTAMAdministration</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <!-- Bootstrap core CSS -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <br><br>
    <br><br>
    <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
        <form method="POST">
          <?php
          if (isset($MessageSuccess)) {
            echo $MessageSuccess;
          }
          if (isset($MessageError)) {
            echo $MessageError;
          }
          ?>
          <img src="../carroussel/logoa.jpg" class="rounded-circle" width="100" title="Groupe des Techniciens Ajusteurs Mecaniciens(GTAM)">
          <span class="text-white h2">Authentification</span><br>
          <div class="input-group mb-3">
            <span class="input-group-text">@Nom d'utilisateur</span>
            <input type="text" class="form-control" name="Uid" required>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">@Mot de passe</span>
            <input type="password" class="form-control" name="pwd" required>
          </div>
          <div class="input-group mb-3">
            <button class="btn btn-primary" type="submit" name="submit">Se connecter</button>
          </div>
        </form>
        <div class="mb-3">
          <p class="text-white">Vous n'avez pas un compte?
            <a href="" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable">S'incrire</a>
          </p>
          <p class="text-center text-white">
            &copy;GTAM WELDING SERVICE 2021-<?php echo date('Y'); ?>|Tous les droits réservés|Devloppé par Baraka Kinywa.
          </p>
        </div>
      </div>
      <div class="col-2"></div>
    </div>

  </div>
  <div class="modal fade" id="exampleModalCenteredScrollable" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">S'inscrire</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" ariass-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST">
            <div class="mb-3">
              <label>Nom d'utilisateur</label>
              <input class="form-control form-control-sm" type="text" placeholder="Nom d'utilisateur" name="utilisateur" required>
            </div>
            <div class="mb-3">
              <label>Mot de passe</label>
              <input class="form-control form-control-sm" type="password" placeholder="mot de passe" name="motdepasse" required>
            </div>
            <div class="mb-3">
              <label>Mot de passe de confirmation</label>
              <input class="form-control form-control-sm" type="password" placeholder="mot de passe" name="motdepasseC" required>
            </div>
            <button type="submit" class="btn btn-primary" name="addAdmin">S'incrire</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
        </div>
      </div>
    </div>
  </div>


  <script src="../assets/js/dropdown.js"></script>
  <script src="../assets/js/jquery.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>

</body>

</html>