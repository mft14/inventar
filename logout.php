<?php
session_start(); // Step 1: Start Session

session_destroy(); // Step 2: Destroy Session

header("Location: login.html"); // Step 3: Redirect to Login Page
?>
