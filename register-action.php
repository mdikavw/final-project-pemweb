<?php
    include_once('koneksi.php');
    $nisn = $_POST['nisn'];
    $password = $_POST['password'];

    $sql = "INSERT INTO akun VALUES ('$nisn', '$password')";
    $exec = $mysqli->query($sql);
    if($exec){
        header('Location: login.php');
    } else {
        echo "Error";
    }
?>