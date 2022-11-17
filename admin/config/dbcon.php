<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "pio";

$conn = mysqli_connect("$host", "$username", "$password", "$dbname");

if (!$conn) {

    header("Location: ../errors/db.php");
    die();
}
