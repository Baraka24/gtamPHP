<?php
require('../includes/config.php');
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
                    $insertAp = mysqli_query($con, "insert into apropos(id,description,contenu,image) 
                    values(null,'" . $description . "','" . $contenu . "','" . $fileDestination . "')");

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
