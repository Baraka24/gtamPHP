<?php
if (isset($_POST['validateR'])) {
    $fileNameR = $_FILES['fileR']['name'];
    $fileTmpR = $_FILES['fileR']['tmp_name'];
    $fileSizeR = $_FILES['fileR']['size'];
    $fileTypeR = $_FILES['fileR']['type'];
    $fileErrR = $_FILES['fileR']['error'];
    $fileExtR = explode(".", $fileNameR);
    $fileActualExtR = strtolower(end($fileExtR));
    $allowedExtR = array('jpg', 'jpeg', 'png');
    if (in_array($fileActualExtR, $allowedExtR)) {
        if ($fileErrR === 0) {
            if ($fileSizeR < 5000000000)/* 50mg */ {
                $fileNewNameR = uniqid("", true) . "." . $fileActualExtR;
                $fileDestinationR = 'img/' . $fileNewNameR;
                $uploadFileR = move_uploaded_file($fileTmpR, $fileDestinationR);
                if ($uploadFileR) {
                    $insertRealisations = mysqli_query($con, "insert into realisations(id,photo) 
                    values(null,'" . $fileDestinationR . "')");

                    if ($insertRealisations) {
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
