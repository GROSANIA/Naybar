<?php
require_once 'action/connection.php';
session_start();
if (isset($_SESSION['UserID'])) {
    $name = $_SESSION['username'];
    $id = $_SESSION['UserID'];
} else {
    header('location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/universal.css">
    <link rel="stylesheet" href="asset/css/form.css">
    <title>NAYBAR</title>
</head>
<body>
    <header>
        <nav>
            <h1>NAYBAR</h1>
            <button class="nav-btn" onclick="linker3('opennav')">☰</button>
        </nav>
    </header>
    <div id="sidenav">
        <h2 onclick="linker('profile')">Profile</h2>
        <h2 onclick="linker('home')">Home</h2>
        <h2 onclick="linker('album')">Album</h2>
        <h2 class="logout" onclick="linker('logout')">Log Out</h2>
    </div>