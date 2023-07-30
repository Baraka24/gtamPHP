<?php
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
                    $insertEquipe = mysqli_query($con, "insert into equipe(id,nom,description,contact,image) 
                    values(null,'" . $noms . "','" . $descriptionE . "','" . $contact . "','" . $fileDestinationE . "')");

                    if ($insertEquipe) {
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
