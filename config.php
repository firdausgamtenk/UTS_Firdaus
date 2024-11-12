<?php

$server = "localhost";
$username = "root";
$password = "";
$nama_database = "db_uts_5057";

$sambung = mysqli_connect($server, $username, $password, $nama_database);
if (!$sambung) {
    die("eror gaes:" . mysqli_connect_error());
}

?>