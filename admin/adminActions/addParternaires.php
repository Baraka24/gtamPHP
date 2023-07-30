<?php
if (isset($_POST['validateP'])) {
    $fileNameP = $_FILES['fileP']['name'];
    $fileTmpP = $_FILES['fileP']['tmp_name'];
    $fileSizeP = $_FILES['fileP']['size'];
    $fileTypeP = $_FILES['fileP']['type'];
    $fileErrP = $_FILES['fileP']['error'];
    $fileExtP = explode(".", $fileNameP);
    $fileActualExtP = strtolower(end($fileExtP));
    $allowedExtP = array('jpg', 'jpeg', 'png');
    if (in_array($fileActualExtP, $allowedExtP)) {
        if ($fileErrP === 0) {
            if ($fileSizeP < 5000000000)/* 50mg */ {
                $fileNewNameP = uniqid("", true) . "." . $fileActualExtP;
                $fileDestinationP = 'img/' . $fileNewNameP;
                $uploadFileP = move_uploaded_file($fileTmpP, $fileDestinationP);
                if ($uploadFileP) {
                    $insertParternaire = mysqli_query($con, "insert into parternaires(id,logo) 
                    values(null,'" . $fileDestinationP . "')");

                    if ($insertParternaire) {
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
