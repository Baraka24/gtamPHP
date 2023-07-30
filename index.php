<?php
include 'viewApropos.php';
include 'viewMission.php';
include 'viewObjectifs.php';
include 'fetchEquipe.php';
include 'fetchParternaires.php';
include 'fetchRealisations.php';
include 'viewContact.php';
include 'viewServices.php';
?>
<!DOCTYPE html>
<html>

<head>
  <title>GTAM Welding Service</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- Bootstrap  CSS -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <!--lien pour se referer aux icones-->
  <link rel="stylesheet" type="text/css" href="assets/font/bootstrap-icons.css">
</head>

<body>
  <!--navbar start-->
  <nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="carroussel/logoa.jpg" class="rounded-circle" width="100" title="Groupe des Techniciens Ajusteurs Mecaniciens(GTAM)">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white" href="#apropos">A Propos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#mission">Notre Mission</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#services">Nos Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#objectifs">Nos objectifs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#equipe">Notre équipe</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen">
              Nos réalisations
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#contact">Contactez-nous</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--navbar end-->

  <!--caroussel start-->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
      <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="carroussel/picture-3.jpg" class="d-block w-100" alt="...">
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>AU SERVICE:</h1>
            <p style="font-weight: bold; color: white; background: #524f4e;">
              Pour toute fabrication mécanique(portes et portails métalliques, porte coulissante); mise en place d'un système automatique, conception des sites web;...
            </p>
            <p>
              <!--a class="btn btn-lg btn-success bi bi-whatsapp" href="https://wa.me/+243973919818" role="button"-->

            </p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="carroussel/picture-2.jpg" class="d-block w-100" alt="...">
        <div class="container">
          <div class="carousel-caption">
            <h1>GTAM POUR TOUS:</h1>
            <p style="font-weight: bold; color: lightgray;">
              Dans vos industries vous avez besoin de réaliser vos travaux. N'hesistez pas de nous contacter.Nous sommes là pour vous.
            </p>
            <p>
              <!--a class="btn btn-lg btn-primary bi bi-facebook" href="https://web.facebook.com/pages/?category=your_pages&ref=bookmarks" role="button"-->


            </p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="carroussel/picture-1.jpg" class="d-block w-100" alt="...">
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>GTAM SERVICE</h1>
            <p>
              Très prêts pour vous offrir un travail de qualité dans toutes vos activités techniques.
            </p>
            <p>
              <!--a class="btn btn-lg btn-danger bi bi-envelope" href="mailto:gtamweldingsevice@gmail.com" role="button"-->
            </p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>
  <br>
  <!--caroussel end-->
  <!--page content start-->
  <div class="container">
    <!--first line start-->
    <div class="row">
      <div class="col-md-5" id="apropos">
        <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" src="admin/<?php echo $row['image']; ?>" alt="">
      </div>
      <div class="col-md-7">
        <h2 class="text-center"><?php echo $row['description']; ?></h2>
        <p class="lead">

          <span title="Le Groupe des Techniciens Ajusteurs Mecaniciens"><?php echo $row['contenu']; ?></span>

        </p>
      </div>
    </div>
    <!--first line end-->
    <!--second line start-->
    <div class="row">
      <div class="col-md-7" id="mission">
        <h2 class="text-center"><?= $rowM['description']; ?></h2>
        <p class="lead">
          <?= $rowM['contenu']; ?><br>
          <a href="#noscontacts">Cliquer ici pour nous contacter</a><br>
        </p>
      </div>
      <div class="col-md-5">
        <img class="img-fluid" src="admin/<?= $rowM['image']; ?>" alt="" role="img">
      </div>
    </div>
    <!--second line end-->
    <br>
    <!--third line start-->
    <div class="row" style="color: rgb(211,211,211); font-size: 20px; font-weight: bold;">
      <div class="col-md-7" id="services">
        <h2 class="featurette-heading text-center bg-dark">
          <span class="text-warning">GTAM</span>
          <span class="text-white">Services
            <a href="#" class="bi bi-stars text-warning"></a>
          </span>
        </h2>
        <p class="lead" style="margin: 20px 50px 10px 50px; font-weight: bold;color:#000;">
          <?= $rowSS['service']; ?>
        </p>
        <center>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen">
            Voir nos réalisations
          </button>
        </center>
        <br>
      </div>
      <div class="col-md-5">
        <h2 class="featurette-heading text-center bg-dark">
          <a href="#" class="bi bi-wrench"></a>
          <span class="text-white">Solutions</span>
          <span class="text-white">
            créatives
            <a href="#" class="bi bi-snow text-danger"></a>
          </span>
        </h2>
        <p class="lead" style="margin: 20px 50px 0px 50px; font-weight: bold;color:#000;">
          <?= $rowSS['solution']; ?>
        </p>
      </div>
    </div>
    <!--third line end-->
    <!--fourth line start-->
    <div class="row" id="objectifs">
      <div class="col-md-7">
        <h2 class="text-center"><?= $rowO['description']; ?></h2>
        <p class="lead">
          <?= $rowO['contenu']; ?>
        </p>
      </div>
      <div class="col-md-5">
        <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="" src="admin/<?= $rowO['image']; ?>">
      </div>
    </div>
    <!--fourth line end-->
    <!--fifth line start-->
    <h2 class="text-center" id="equipe">Notre Equipe:</h2>
    <hr>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3 text-center">
      <!--member--->
      <?php
      while ($rowE = mysqli_fetch_array($viewEquipe)) {
      ?>
        <div class="col">
          <img class="rounded-circle" src="admin/<?= $rowE['image']; ?>" width="140" height="140" alt="barakakinywa">
          <h2><?= $rowE['nom']; ?></h2>
          <p><?= $rowE['description']; ?></p>
          <p><a class="btn btn-success bi bi-whatsapp" href="https://wa.me/<?= $rowE['contact']; ?>" role="button">Contactez</a></p>
        </div>
      <?php
      }
      ?>

    </div>
    <hr>
    <!--fifth line end-->
    <!--sixth line start-->
    <div class="row">
      <!--parternaires start-->
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <strong>Voir nos paternaires</strong>
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body text-center">
              <p>
                <?php
                while ($rowP = mysqli_fetch_array($viewParternaires)) {
                ?>
                  <img src="admin/<?= $rowP['logo']; ?>" width="150">
                <?php
                }
                ?>

              </p>
            </div>
          </div>
        </div>
      </div>
      <!--parternaires end-->
    </div>
    <!--sixth line end-->
    <br>
  </div>
  <div class="container-fluid">
    <div class="row">
      <h3 class="text-center" id="contact">Contactez-nous:</h3><br><br>
      <p class="text-center">
        <a href="<?= $rowC['facebook']; ?>" class="bi bi-facebook btn-primary btn-lg"></a>&nbsp
        <a href="https://wa.me/<?= $rowC['whatsapp']; ?>" class="bi bi-whatsapp btn-success btn-lg"></a>&nbsp
        <a href="tel:<?= $rowC['appel']; ?>" class="bi bi-telephone-outbound btn-success btn-lg"></a>&nbsp
        <a href="mailto:<?= $rowC['gmail']; ?>" class="bi bi-envelope-fill btn-danger btn-lg"></a>
      </p>
      <p class="text-center">
        &copy;GTAM WELDING SERVICE 2021-<?php echo date('Y'); ?>|Tous les droits réservés|Devloppé par Baraka Kinywa.
        <a href="#" class=" bi bi-arrow-up-circle-fill">Retour à haut de page</a>
      </p>
    </div>
  </div>
  <!--my modal-->
  <div class="modal fade" id="exampleModalFullscreen" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title h4" id="exampleModalFullscreenLabel">Réalisations GTAM</h5>
          <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">
          <div class="row">
            <?php
            while ($rowP = mysqli_fetch_array($viewRealisations)) {
            ?>
              <div class="col-lg-3">
                <img src="admin/<?= $rowP['photo']; ?>" width="250" height="150" class="img-fluid rounded">
              </div>
            <?php
            }
            ?>


          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
          </div>
        </div>
      </div>
    </div>
    <!--page content end-->


    <script src="assets/js/dropdown.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>