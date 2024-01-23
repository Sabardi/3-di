<?php
session_start();
include "database.php";

$db = new Database();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $level = $_POST['level'];

    // Panggil metode register
    if ($db->register($username, $password, $email, $level)) {
        // echo "Registration successful. You can now login.";
        // header("location: index.php");
        header("location: index.php");
        exit();
    } else {
        echo "Registration failed.";
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        $db->login($username, $password);
    } elseif (isset($_GET['logout'])) {
        $db->logout();
    }
}
?>