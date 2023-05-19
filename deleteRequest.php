<?php

include 'hospital_conn.php';

$id = $_GET['id'];

$q = " DELETE FROM `emergencytable` WHERE id = $id";

mysqli_query($con, $q);

header('location:hospitalView.php');

?>