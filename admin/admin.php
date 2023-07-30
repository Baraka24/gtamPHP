<?php
require 'security.php';
include 'adminActions/addApropos.php';
include '../viewApropos.php';
include '../viewMission.php';
include 'adminActions/addMission.php';
include '../viewObjectifs.php';
include 'adminActions/addObjectif.php';
include 'adminActions/addEquipe.php';
include '../fetchEquipe.php';
include 'adminActions/addParternaires.php';
include '../fetchParternaires.php';
include 'adminActions/addRealisations.php';
include '../fetchRealisations.php';
include 'adminActions/addContact.php';
include '../viewContact.php';
include '../viewServices.php';
include 'adminActions/addServices.php';
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.82.0">
  <title>GTAM admistration</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">



  <!-- Bootstrap core CSS -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="dashboard.css" rel="stylesheet">
</head>

<body>

  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">GTAM</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="" aria-label="Search" disabled>
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="logout.php">Se déconnecter</a>
      </li>
    </ul>
  </header>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active h4" aria-current="page" href="" disabled>
                <span data-feather="home"></span>
                <span class="text-black" style="color:black;">Utilisateur:</span>
                <?= $_SESSION['userName']; ?>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#apropos">
                <span data-feather="file"></span>
                Apropos
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#mission">
                <span data-feather="shopping-cart"></span>
                Mission
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">
                <span data-feather="users"></span>
                Services&Solutions
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#objectif">
                <span data-feather="users"></span>
                Objectifs
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#equipe">
                <span data-feather="bar-chart-2"></span>
                Notre equipe
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#parternaires">
                <span data-feather="layers"></span>
                Nos parternaires
              </a>
              <a class="nav-link" href="#realisations">
                <span data-feather="layers"></span>
                Nos réalisations
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">
                <span data-feather="layers"></span>
                Nos contacts
              </a>
            </li>
          </ul>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span><?php echo date('d/m/Y'); ?></span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>
          <!-- <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Current month
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Last quarter
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Social engagement
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Year-end sale
              </a>
            </li>
          </ul> -->
        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Gtam Administration</h1>
          <div class="btn-toolbar mb-2 mb-md-0">

          </div>
        </div>
        <!--Section apropos start-->

        <div class="container">
          <center>
            <h3 id="apropos">Apropos</h3>
          </center>
          <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="username">Description</label>
              <input class="form-control form-control-sm" type="text" name="description" required>
            </div>
            <div class="mb-3">
              <label for="username">Contenu</label>
              <textarea name="contenu" id="" class="form-control form-control-sm" required></textarea>
            </div>
            <div class="mb-3">
              <label for="username">Image</label>
              <input class="form-control form-control-sm" type="file" name="file" required>
            </div>
            <button class="btn btn-primary" name="validate">Publier</button>
          </form>
          <div class="row">
            <center>
              <h2>Section Apropos</h2>
            </center>
            <div class="table-responsive">
              <table class="table table-striped table-sm">
                <thead>
                  <tr class="text-center">
                    <th>Description</th>
                    <th>Contenu</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?= $row['description']; ?></td>
                    <td><?= $row['contenu']; ?></td>
                    <td>
                      <a href="UpdateApropos.php?id=<?= $row['id']; ?>"><button class="btn btn-warning">Modifier</button></a>
                      <hr>
                      <a href="adminActions/deleteApropos.php?id=<?= $row['id']; ?>"><button class="btn btn-danger" onclick="confirm('Etes vous sûr de vouloir supprimer?')">Supprimer</button></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <hr>

        <!--Section apropos end-->

        <!--Section mission start-->

        <div class="container">
          <center>
            <h3 id="mission">Mission</h3>
          </center>
          <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="username">Description</label>
              <input class="form-control form-control-sm" type="text" name="descriptionM" required>
            </div>
            <div class="mb-3">
              <label for="username">Contenu</label>
              <textarea name="contenuM" id="" class="form-control form-control-sm" required></textarea>
            </div>
            <div class="mb-3">
              <label for="username">Image</label>
              <input class="form-control form-control-sm" type="file" name="fileM" required>
            </div>
            <button class="btn btn-primary" name="validateM">Publier</button>
          </form>
          <div class="row">
            <center>
              <h2>Section mission</h2>
            </center>
            <div class="table-responsive">
              <table class="table table-striped table-sm">
                <thead>
                  <tr class="text-center">
                    <th>Description</th>
                    <th>Contenu</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?= $rowM['description']; ?></td>
                    <td><?= $rowM['contenu']; ?></td>
                    <td>
                      <a href="Updatemission.php?id=<?= $rowM['id']; ?>"><button class="btn btn-warning">Modifier</button></a>
                      <hr>
                      <a href="adminActions/deletemission.php?id=<?= $rowM['id']; ?>"><button class="btn btn-danger" onclick="confirm('Etes vous sûr de vouloir supprimer?')">Supprimer</button></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <hr>

        <!--Section mission end-->

        <!--Section objectif start-->

        <div class="container">
          <center>
            <h3 id="objectif">Objectif</h3>
          </center>
          <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="username">Description</label>
              <input class="form-control form-control-sm" type="text" name="descriptionO" required>
            </div>
            <div class="mb-3">
              <label for="username">Contenu</label>
              <textarea name="contenuO" id="" class="form-control form-control-sm" required></textarea>
            </div>
            <div class="mb-3">
              <label for="username">Image</label>
              <input class="form-control form-control-sm" type="file" name="fileO" required>
            </div>
            <button class="btn btn-primary" name="validateO">Publier</button>
          </form>
          <div class="row">
            <center>
              <h2>Section Objectif</h2>
            </center>
            <div class="table-responsive">
              <table class="table table-striped table-sm">
                <thead>
                  <tr class="text-center">
                    <th>Description</th>
                    <th>Contenu</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?= $rowO['description']; ?></td>
                    <td><?= $rowO['contenu']; ?></td>
                    <td>
                      <a href="Updateobjectif.php?id=<?= $rowO['id']; ?>"><button class="btn btn-warning">Modifier</button></a>
                      <hr>
                      <a href="adminActions/deleteobjectif.php?id=<?= $rowO['id']; ?>"><button class="btn btn-danger" onclick="confirm('Etes vous sûr de vouloir supprimer?')">Supprimer</button></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <hr>

        <!--Section objectif end-->

        <!--Section equipe start-->

        <div class="container">
          <center>
            <h3 id="equipe">Notre Equipe</h3>
          </center>
          <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="username">Noms</label>
              <input class="form-control form-control-sm" type="text" name="noms" required>
            </div>
            <div class="mb-3">
              <label for="username">Description</label>
              <textarea name="descriptionE" id="" class="form-control form-control-sm" required></textarea>
            </div>
            <div class="mb-3">
              <label for="username">Contact</label>
              <input class="form-control form-control-sm" placeholder="ex.+243..." type="text" name="contact" required>
            </div>
            <div class="mb-3">
              <label for="username">Image</label>
              <input class="form-control form-control-sm" type="file" name="fileE" required>
            </div>
            <button class="btn btn-primary" name="validateE">Publier</button>
          </form>
          <div class="row">
            <center>
              <h2>Section Equipe</h2>
            </center>
            <div class="table-responsive">
              <table class="table table-striped table-sm">
                <thead>
                  <tr class="text-center">
                    <th>Noms</th>
                    <th>Description</th>
                    <th>Contact</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  while ($rowE = mysqli_fetch_array($viewEquipe)) {
                  ?>
                    <tr>
                      <td><?= $rowE['nom']; ?></td>
                      <td><?= $rowE['description']; ?></td>
                      <td><?= $rowE['contact']; ?></td>
                      <td>
                        <a href="UpdateEquipe.php?id=<?= $rowE['id']; ?>"><button class="btn btn-warning">Modifier</button></a>
                        <hr>
                        <a href="adminActions/deleteEquipe.php?id=<?= $rowE['id']; ?>"><button class="btn btn-danger" onclick="confirm('Etes vous sûr de vouloir supprimer?')">Supprimer</button></a>
                      </td>
                    </tr>
                  <?php
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <hr>

        <!--Section equipe end-->

        <!--Section partenaires start-->

        <div class="container">
          <center>
            <h3 id="parternaires">Notre partenaires</h3>
          </center>
          <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="username">Logo</label>
              <input class="form-control form-control-sm" type="file" name="fileP" required>
            </div>
            <button class="btn btn-primary" name="validateP">Publier</button>
          </form>
          <div class="row">
            <center>
              <h2>Section Partenaires</h2>
            </center>
            <div class="table-responsive">
              <table class="table table-striped table-sm">
                <thead>
                  <tr class="text-center">
                    <th>Logo</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  while ($rowP = mysqli_fetch_array($viewParternaires)) {
                  ?>
                    <tr>
                      <td><img src="<?= $rowP['logo']; ?>" alt="" width="150"></td>
                      <td>
                        <a href="UpdatePartenaires.php?id=<?= $rowP['id']; ?>"><button class="btn btn-warning">Modifier</button></a>
                        <hr>
                        <a href="adminActions/deletePartenaires.php?id=<?= $rowP['id']; ?>"><button class="btn btn-danger" onclick="confirm('Etes vous sûr de vouloir supprimer?')">Supprimer</button></a>
                      </td>
                    </tr>
                  <?php
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <hr>

        <!--Section parternaires end-->
        <!--Section realisations start-->

        <div class="container">
          <center>
            <h3 id="realisations">Nos realisations</h3>
          </center>
          <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="username">Photo</label>
              <input class="form-control form-control-sm" type="file" name="fileR" required>
            </div>
            <button class="btn btn-primary" name="validateR">Publier</button>
          </form>
          <div class="row">
            <center>
              <h2>Section Realisations</h2>
            </center>
            <div class="table-responsive">
              <table class="table table-striped table-sm">
                <thead>
                  <tr class="text-center">
                    <th>Photo</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  while ($rowP = mysqli_fetch_array($viewRealisations)) {
                  ?>
                    <tr>
                      <td><img src="<?= $rowP['photo']; ?>" alt="" width="150"></td>
                      <td>
                        <a href="UpdateRealisations.php?id=<?= $rowP['id']; ?>"><button class="btn btn-warning">Modifier</button></a>
                        <hr>
                        <a href="adminActions/deleteRealisations.php?id=<?= $rowP['id']; ?>"><button class="btn btn-danger" onclick="confirm('Etes vous sûr de vouloir supprimer?')">Supprimer</button></a>
                      </td>
                    </tr>
                  <?php
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <hr>

        <!--Section realisations end-->

        <!--Section services start-->

        <div class="container">
          <center>
            <h3 id="services">Nos services</h3>
          </center>
          <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="username">Service</label>
              <textarea name="service" id="" class="form-control form-control-sm" required></textarea>
            </div>
            <div class="mb-3">
              <label for="username">Solution</label>
              <textarea name="solution" id="" class="form-control form-control-sm" required></textarea>
            </div>
            <button class="btn btn-primary" name="validateSS">Publier</button>
          </form>
          <div class="row">
            <center>
              <h2>Section Service</h2>
            </center>
            <div class="table-responsive">
              <table class="table table-striped table-sm">
                <thead>
                  <tr class="text-center">
                    <th>Service</th>
                    <th>Solution</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?= $rowSS['service']; ?></td>
                    <td><?= $rowSS['solution']; ?></td>

                    <td>
                      <a href="UpdateService.php?id=<?= $rowSS['id']; ?>"><button class="btn btn-warning">Modifier</button></a>
                      <hr>
                      <a href="adminActions/deleteSErvice.php?id=<?= $rowSS['id']; ?>"><button class="btn btn-danger" onclick="confirm('Etes vous sûr de vouloir supprimer?')">Supprimer</button></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <hr>

        <!--Section services end-->

        <!--Section contact start-->

        <div class="container">
          <center>
            <h3 id="contact">Nos contact</h3>
          </center>
          <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="username">Facebook</label>
              <input class="form-control form-control-sm" placeholder="ex.https://web.facebook.com" type="text" name="facebook" required>
            </div>
            <div class="mb-3">
              <label for="username">Whatsapp</label>
              <input class="form-control form-control-sm" placeholder="ex.+243..." type="text" name="whatsapp" required>
            </div>
            <div class="mb-3">
              <label for="username">Appel</label>
              <input class="form-control form-control-sm" placeholder="ex.0993..." type="text" name="appel" required>
            </div>
            <div class="mb-3">
              <label for="username">Gmail</label>
              <input class="form-control form-control-sm" placeholder="ex.bkinywa24@gmail.com" type="text" name="gmail" required>
            </div>
            <button class="btn btn-primary" name="validateC">Publier</button>
          </form>
          <div class="row">
            <center>
              <h2>Section contact</h2>
            </center>
            <div class="table-responsive">
              <table class="table table-striped table-sm">
                <thead>
                  <tr class="text-center">
                    <th>Facebook</th>
                    <th>Whatsapp</th>
                    <th>Appel</th>
                    <th>Gmail</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?= $rowC['facebook']; ?></td>
                    <td><?= $rowC['whatsapp']; ?></td>
                    <td><?= $rowC['appel']; ?></td>
                    <td><?= $rowC['gmail']; ?></td>
                    <td>
                      <a href="UpdateContact.php?id=<?= $rowC['id']; ?>"><button class="btn btn-warning">Modifier</button></a>
                      <hr>
                      <a href="adminActions/deleteContact.php?id=<?= $rowC['id']; ?>"><button class="btn btn-danger" onclick="confirm('Etes vous sûr de vouloir supprimer?')">Supprimer</button></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <hr>

        <!--Section contact end-->
      </main>
    </div>
  </div>


  <script src="../assets/js/bootstrap.bundle.min.js"></script>

  <script src="../assets/js/dropdown.js"></script>
  <script src="../assets/js/jquery.js"></script>

  <script src="dashboard.js"></script>
</body>

</html>