<?php
require 'security.php';
require_once('../includes/config.php');
$sql = "select * from equipe where id='" . $_GET['id'] . "'";
$findUpdate = mysqli_query($con, $sql);
$row = mysqli_fetch_array($findUpdate);
$id = $row['id'];
if (isset($_POST['validateE'])) {
    $descriptionE = mysqli_real_escape_string($con, nl2br(htmlspecialchars($_POST['descriptionE'])));
    /* $fichier=$_POST['file']; */
    $noms = mysqli_real_escape_string($con, nl2br(htmlspecialchars($_POST['noms'])));
    $contact = htmlspecialchars($_POST['contact']);
    $fileNameE = $_FILES['fileE']['name'];
    $fileTmpE = $_FILES['fileE']['tmp_name'];
    $fileSizeE = $_FILES['fileE']['size'];
    $fileTypeE = $_FILES['fileE']['type'];
    $fileErrE = $_FILES['fileE']['error'];
    $fileExtE = explode(".", $fileNameE);
    $fileActualExtE = strtolower(end($fileExtE));
    $allowedExtE = array('jpg', 'jpeg', 'png');
    if (in_array($fileActualExtE, $allowedExtE)) {
        if ($fileErrE === 0) {
            if ($fileSizeE < 5000000000)/* 50mg */ {
                $fileNewNameE = uniqid("", true) . "." . $fileActualExtE;
                $fileDestinationE = 'img/' . $fileNewNameE;
                $uploadFileE = move_uploaded_file($fileTmpE, $fileDestinationE);
                if ($uploadFileE) {
                    $UpdateEquipe = mysqli_query($con, "update equipe set description='" . $descriptionE . "',contact='" . $contact . "',nom='" . $noms . "',image='" . $fileDestinationE . "' where id= '" . $id . "'");

                    if ($UpdateEquipe) {
                        header('location:admin.php');
                    } else {
                        echo "Failed to insert";
                    }
                }
            } else {
                echo "File size too big";
            }
        } else {
            echo "Error while uploading file";
        }
    } else {
        echo "Unsurpoted format";
    }
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UpdateMission</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>

<body>
    <div class="row bg-dark text-white fixed-top">
        &nbsp&nbsp&nbsp&nbspGTAM
        <center class="btn btn-secondary">
            Modifier Contenu Mission
        </center>
    </div>
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="username">Noms</label>
                        <input class="form-control form-control-sm" type="text" name="noms" value="<?= $row['nom']; ?>" required>
                    </div>
                    <div class=" mb-3">
                        <label for="username">Description</label>
                        <textarea name="descriptionE" id="" class="form-control form-control-sm" required><?= $row['description']; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="username">Contact</label>
                        <input class="form-control form-control-sm" placeholder="ex.+243..." type="text" name="contact" value="<?= $row['contact']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="username">Image</label>
                        <input class="form-control form-control-sm" type="file" name="fileE" required>
                    </div>
                    <button class="btn btn-primary" name="validateE">Modifier</button>
                </form>
                <hr>
                <a href="admin.php">
                    <button class="btn btn-danger">Annuler</button>
                </a>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
</body>

</html>