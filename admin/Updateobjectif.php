<?php
require 'security.php';
require_once('../includes/config.php');
$sql = "select * from objectif where id='" . $_GET['id'] . "'";
$findUpdate = mysqli_query($con, $sql);
$row = mysqli_fetch_array($findUpdate);
$id = $row['id'];
if (isset($_POST['validate'])) {
    $description = mysqli_real_escape_string($con, nl2br(htmlspecialchars($_POST['description'])));
    /* $fichier=$_POST['file']; */
    $contenu = mysqli_real_escape_string($con, nl2br(htmlspecialchars($_POST['contenu'])));
    $fileName = $_FILES['file']['name'];
    $fileTmp = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileType = $_FILES['file']['type'];
    $fileErr = $_FILES['file']['error'];
    $fileExt = explode(".", $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowedExt = array('jpg', 'jpeg', 'png');
    if (in_array($fileActualExt, $allowedExt)) {
        if ($fileErr === 0) {
            if ($fileSize < 5000000000)/* 50mg */ {
                $fileNewName = uniqid("", true) . "." . $fileActualExt;
                $fileDestination = 'img/' . $fileNewName;
                $uploadFile = move_uploaded_file($fileTmp, $fileDestination);
                if ($uploadFile) {
                    $insertAp = mysqli_query($con, "update objectif set description='" . $description . "',contenu='" . $contenu . "',image='" . $fileDestination . "' where id= '" . $id . "'");

                    if ($insertAp) {
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
    <title>UpdateObjecti</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>

<body>
    <div class="row bg-dark text-white fixed-top">
        &nbsp&nbsp&nbsp&nbspGTAM
        <center class="btn btn-secondary">
            Modifier Contenu Objectif
        </center>
    </div>
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="username">Description</label>
                        <input class="form-control form-control-sm" type="text" name="description" value="<?= $row['description']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="username">Contenu</label>
                        <textarea name="contenu" id="" class="form-control form-control-sm" required><?= $row['contenu']; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="username">Image</label>
                        <input class="form-control form-control-sm" type="file" name="file" required>
                    </div>
                    <button class="btn btn-primary" name="validate">Modifier</button>
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