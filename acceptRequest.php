<?php

include 'hospital_conn.php';

$id = $_GET['id'];

$q = " UPDATE  emergencytable SET Request_Status = 1 WHERE id = $id";

mysqli_query($con, $q);

header('location:hospitalView.php');

?>