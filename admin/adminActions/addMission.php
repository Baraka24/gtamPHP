<?php
if (isset($_POST['validateM'])) {
    $descriptionM = mysqli_real_escape_string($con, nl2br(htmlspecialchars($_POST['descriptionM'])));
    /* $fichier=$_POST['file']; */
    $contenuM = mysqli_real_escape_string($con, nl2br(htmlspecialchars($_POST['contenuM'])));
    $fileNameM = $_FILES['fileM']['name'];
    $fileTmpM = $_FILES['fileM']['tmp_name'];
    $fileSizeM = $_FILES['fileM']['size'];
    $fileTypeM = $_FILES['fileM']['type'];
    $fileErrM = $_FILES['fileM']['error'];
    $fileExtM = explode(".", $fileNameM);
    $fileActualExtM = strtolower(end($fileExtM));
    $allowedExtM = array('jpg', 'jpeg', 'png');
    if (in_array($fileActualExtM, $allowedExtM)) {
        if ($fileErrM === 0) {
            if ($fileSizeM < 5000000000)/* 50mg */ {
                $fileNewNameM = uniqid("", true) . "." . $fileActualExtM;
                $fileDestinationM = 'img/' . $fileNewNameM;
                $uploadFileM = move_uploaded_file($fileTmpM, $fileDestinationM);
                if ($uploadFileM) {
                    $insertMission = mysqli_query($con, "insert into mission(id,description,contenu,image) 
                    values(null,'" . $descriptionM . "','" . $contenuM . "','" . $fileDestinationM . "')");

                    if ($insertMission) {
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
