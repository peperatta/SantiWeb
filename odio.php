<?php

$odio = $_POST["odio"];

$host = "192.168.30.23";
$dbname = "santiweb_db";
$username = "root";
$password = "";

mysqli_connect($host, $username, $password, $dbname);

$sql = "INSERT INTO odio(odio)
        VALUES (?)";

$stmt = mysqli_stmt_init($conn);

if ( mysqli_stmt_prepare($stmt, $sql)) {
    die("". mysqli_stmt_error($conn));
}

mysqli_stmt_bind_param($stmt, "s", $odio);

mysqli_stmt_execute($stmt);

echo"Mensaje Enviado.";