<?php
require 'security.php';
require_once('../includes/config.php');
$sql = "select * from servicessolutions where id='" . $_GET['id'] . "'";
$findUpdate = mysqli_query($con, $sql);
$row = mysqli_fetch_array($findUpdate);
$id = $row['id'];
if (isset($_POST['validateSS'])) {
    $service = mysqli_real_escape_string($con, $_POST['service']);
    $solution = mysqli_real_escape_string($con, $_POST['solution']);
    $sql = "update servicessolutions set service='" . $service . "',solution='" . $solution . "' where id ='" . $id . "'";
    $UpdateService = mysqli_query($con, $sql);
    if ($UpdateService) {
        $MsgSuccess = "Service ajouté avec success";
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
            Modifier Services & Solutions
        </center>
    </div>
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="username">Service</label>
                        <textarea name="service" id="" class="form-control form-control-sm" required><?= $row['service']; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="username">Solution</label>
                        <textarea name="solution" id="" class="form-control form-control-sm" required><?= $row['service']; ?></textarea>
                    </div>
                    <button class="btn btn-primary" name="validateSS">Modifier</button>
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