<?php
session_start();

if (isset($_POST['login'])) {

    $_SESSION['admin_mail'] = $_POST['email'];
    $_SESSION['admin_pass'] = $_POST['password'];

    $mail = $_POST['email'];
    $pass = $_POST['password'];

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pio";

    $conn = mysqli_connect("$host", "$username", "$password", "$dbname");

    $query = "SELECT * FROM users";
    $query_run_auth = mysqli_query($conn, $query);

    if (mysqli_num_rows($query_run_auth) > 0) {
        foreach ($query_run_auth as $row) {
            if ($row['email'] == $mail && $row['pass'] == $pass || $_SESSION['admin_mail'] == 'admin' && $_SESSION['admin_pass'] == '123') {
                header("Location: admin/index.php");
            } else {
                header("Location: index.php");
            }


            if (!$conn) {

                header("Location: index.php");
                die();
            }
        }
    }
}
