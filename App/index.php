<?php
session_start();
if (isset($_SESSION['user'])) {
    echo "Welcome, " . $_SESSION['user']['name'] . "! <a href='logout.php'>Logout</a>";
} else {
    echo "<a href='login.php'>Login</a> | <a href='register.php'>Register</a>";
}
?>