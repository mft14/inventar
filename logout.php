<?php
session_start(); // Step 1: Start Session

session_destroy(); // Step 2: Destroy Session
setcookie('loggedin', '', time() - 3600, '/');

header("Location: login.php"); // Step 3: Redirect to Login Page
?>
