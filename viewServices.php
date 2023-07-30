<?php
$sql = "select * from servicessolutions";
$viewServives = mysqli_query($con, $sql);
$rowSS = mysqli_fetch_array($viewServives);
