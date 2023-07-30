<?php
if (isset($_POST['validateC'])) {
    $facebook = mysqli_real_escape_string($con, $_POST['facebook']);
    $whatsapp = $_POST['whatsapp'];
    $appel = $_POST['appel'];
    $gmail = $_POST['gmail'];
    $sql = "insert into contact(id,facebook,whatsapp,appel,gmail)
    values(null,'" . $facebook . "','" . $whatsapp . "','" . $appel . "','" . $gmail . "')";
    $InsertContact = mysqli_query($con, $sql);
    if ($InsertContact) {
        $MsgSuccess = "Contact ajouté avec success";
        header('location:admin.php');
    }
}
