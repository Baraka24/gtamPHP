<?php

$sql = "select * from equipe";
$viewEquipe = mysqli_query($con, $sql);
$rowE = mysqli_fetch_array($viewEquipe);
