<?php
require 'security.php';
require_once('../includes/config.php');
$sql = "select * from parternaires where id='" . $_GET['id'] . "'";
$findUpdate = mysqli_query($con, $sql);
$row = mysqli_fetch_array($findUpdate);
$id = $row['id'];
$logo = $row['logo'];
if (isset($_POST['validateE'])) {
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
                    $UpdateEquipe = mysqli_query($con, "update parternaires set logo=  '" . $fileDestinationE . "' where id= '" . $id . "'");

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
            Modifier Logo Parternaire
        </center>
    </div>
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3 text-center">
                        <img src="<?= $logo; ?>" width="150">
                    </div>
                    <div class="mb-3">
                        <label for="username">Logo</label>
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