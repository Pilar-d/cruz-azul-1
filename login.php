<?php
session_start();
if ($_POST['user'] === "admin" && $_POST['pass'] === "admin123") {
    $_SESSION['admin_logged'] = true;
    header("Location: admin.php");
} else {
    header("Location: admin.php?error=1");
}
?>