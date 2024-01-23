<?php
session_start();
include "database.php";

$db = new Database();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $db->login($username, $password);
} elseif (isset($_GET['logout'])) {
    $db->logout();
}


?>
