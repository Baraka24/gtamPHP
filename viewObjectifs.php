<?php

$sql = "select * from objectif";
$viewObjectifs = mysqli_query($con, $sql);
$rowO = mysqli_fetch_array($viewObjectifs);
