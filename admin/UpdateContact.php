<?php
require 'security.php';
require_once('../includes/config.php');
$sql = "select * from contact where id='" . $_GET['id'] . "'";
$findUpdate = mysqli_query($con, $sql);
$row = mysqli_fetch_array($findUpdate);
$id = $row['id'];
if (isset($_POST['validateC'])) {
    $facebook = mysqli_real_escape_string($con, $_POST['facebook']);
    $whatsapp = $_POST['whatsapp'];
    $appel = $_POST['appel'];
    $gmail = $_POST['gmail'];
    $sql = "update contact set facebook='" . $facebook . "',whatsapp='" . $whatsapp . "',appel='" . $appel . "',gmail='" . $gmail . "'
    where id='" . $id . "'";
    $UpdateContact = mysqli_query($con, $sql);
    if ($UpdateContact) {
        $MsgSuccess = "Contact ajouté avec success";
        header('location:admin.php');
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
            Modifier Contact
        </center>
    </div>
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="username">Facebook</label>
                        <input class="form-control form-control-sm" placeholder="ex.https://web.facebook.com" type="text" name="facebook" value="<?= $row['facebook']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="username">Whatsapp</label>
                        <input class="form-control form-control-sm" placeholder="ex.+243..." type="text" name="whatsapp" value="<?= $row['whatsapp']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="username">Appel</label>
                        <input class="form-control form-control-sm" placeholder="ex.0993..." type="text" name="appel" value="<?= $row['appel']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="username">Gmail</label>
                        <input class="form-control form-control-sm" placeholder="ex.bkinywa24@gmail.com" type="text" name="gmail" value="<?= $row['gmail']; ?>" required>
                    </div>
                    <button class="btn btn-primary" name="validateC">Modifier</button>
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