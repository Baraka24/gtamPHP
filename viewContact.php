<?php
$sql = "select * from contact";
$viewContact = mysqli_query($con, $sql);
$rowC = mysqli_fetch_array($viewContact);
