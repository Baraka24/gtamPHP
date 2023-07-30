<?php
if (isset($_POST['validateO'])) {
    $descriptionO = mysqli_real_escape_string($con, nl2br(htmlspecialchars($_POST['descriptionO'])));
    /* $fichier=$_POST['file']; */
    $contenuO = mysqli_real_escape_string($con, nl2br(htmlspecialchars($_POST['contenuO'])));
    $fileNameO = $_FILES['fileO']['name'];
    $fileTmpO = $_FILES['fileO']['tmp_name'];
    $fileSizeO = $_FILES['fileO']['size'];
    $fileTypeO = $_FILES['fileO']['type'];
    $fileErrO = $_FILES['fileO']['error'];
    $fileExtO = explode(".", $fileNameO);
    $fileActualExtO = strtolower(end($fileExtO));
    $allowedExtO = array('jpg', 'jpeg', 'png');
    if (in_array($fileActualExtO, $allowedExtO)) {
        if ($fileErrO === 0) {
            if ($fileSizeO < 5000000000)/* 50mg */ {
                $fileNewNameO = uniqid("", true) . "." . $fileActualExtO;
                $fileDestinationO = 'img/' . $fileNewNameO;
                $uploadFileO = move_uploaded_file($fileTmpO, $fileDestinationO);
                if ($uploadFileO) {
                    $insertObjectif = mysqli_query($con, "insert into objectif(id,description,contenu,image) 
                    values(null,'" . $descriptionO . "','" . $contenuO . "','" . $fileDestinationO . "')");

                    if ($insertObjectif) {
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
