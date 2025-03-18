<?php
session_start();
include('config.php');

if(isset($_POST['name'] && isset($_POST['email']) && isset($_POST['password']))) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    sql = "SELECT * FROM user_data WHERE name = ? AND email = ? AND password = ?";
    $stml = $conn->prepare($sql);
    $stml->bind_param("sss", $name, $email, $password);
    $stml->execute();
    $rs = $stml->get_result();
}
?>