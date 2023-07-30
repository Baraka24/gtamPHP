<?php
require_once('includes/config.php');
$sql = "select * from apropos";
$viewApropos = mysqli_query($con, $sql);
$row = mysqli_fetch_array($viewApropos);
