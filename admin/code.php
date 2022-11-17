<?php
session_start();

include('config/dbcon.php');

if (isset($_POST['adduser'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user_query = "INSERT INTO users (name,phone,email,password) VALUES ('$name','$phone','$email','$password')";

    $user_query_run = mysqli_query($conn, $user_query);

    if ($user_query_run) {
        $_SESSION['status'] = "User Added Successfully";
        header("Location: registered.php");
    } else {
        $_SESSION['status'] = "User Registration Failed";
        header("Location: registered.php");
    }
}

if (isset($_POST['update'])) {
    $user_id = $_POST['user_id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user_query = "UPDATE users SET name = '$name', phone = '$phone', email = '$email', password = '$password' WHERE id = '$user_id'";

    $query_run = mysqli_query($conn, $user_query);

    if ($query_run) {
        $_SESSION['status'] = "User Updated Successfully";
        header("Location: registered.php");
    } else {
        $_SESSION['status'] = "User Updating Failed";
        header("Location: registered.php");
    }
}

if (isset($_POST['delete'])) {
    $user_id = $_POST['user_id'];

    $user_query = "DELETE FROM users WHERE id = '$user_id' ";

    $dlt_query_run = mysqli_query($conn, $user_query);

    if ($dlt_query_run) {
        $_SESSION['status'] = "User Deleted Successfully";
        header("Location: registered.php");
    } else {
        $_SESSION['status'] = "User Deleting Failed";
        header("Location: registered.php");
    }
}
