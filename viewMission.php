<?php
$sql = "select * from mission";
$viewMission = mysqli_query($con, $sql);
$rowM = mysqli_fetch_array($viewMission);
