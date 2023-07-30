<?php
if (isset($_POST['validateSS'])) {
    $service = mysqli_real_escape_string($con, $_POST['service']);
    $solution = mysqli_real_escape_string($con, $_POST['solution']);
    $sql = "insert into servicessolutions(id,service,solution)
    values(null,'" . $service . "','" . $solution . "')";
    $InsertService = mysqli_query($con, $sql);
    if ($InsertService) {
        $MsgSuccess = "Service ajouté avec success";
        header('location:admin.php');
    }
}
