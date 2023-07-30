<?php
require 'security.php';
require_once('../../includes/config.php');
$sql = "delete from equipe where id='" . $_GET['id'] . "'";
$deleteEquipe = mysqli_query($con, $sql);
if ($deleteEquipe) {
    header('location:../admin.php');
}
