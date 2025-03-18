<?php
session_start();
include('config.php');

if(isset($_POST['name'] && isset($_POST['email']) && isset($_POST['password']))) {
    $name = trim($_POST['name'];)
    $email = trim($_POST['email'];)
    $password = trim($_POST['password'];)

    sql = "SELECT * FROM user_data WHERE name = ? AND email = ? AND password = ?";
    $stml = $conn->prepare($sql);
    $stml->bind_param("sss", $name, $email, $password);
    $stml->execute();
    $rs = $stml->get_result();

    if ($row = mysqli_fetch_assoc($rs)) {
        if (password_verify($password, $row['password'])) {
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
            $_SESSION['success'] = "login finish";

            header("location: #");
            exit();
        } else {
            header("location: index.php");
            exit();
        }
    } else {
        header("location: index.php");
            exit();
    }
} else {
    header("location: index.php");
            exit();
}
?>