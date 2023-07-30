<?php
require 'security.php';
require_once('../../includes/config.php');
$sql = "delete from realisations where id='" . $_GET['id'] . "'";
$deleteApropos = mysqli_query($con, $sql);
if ($deleteApropos) {
    header('location:../admin.php');
}
