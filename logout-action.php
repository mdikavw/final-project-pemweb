<?php
    session_start();
    session_destroy();
    unset($_SESSION['nisn']);
    unset($_SESSION['status']);
    header('Location: login.php');
?>