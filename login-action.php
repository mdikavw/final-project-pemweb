<?php
    include_once('koneksi.php');
    session_start();
    $nisn = $_POST['nisn'];
    $password = $_POST['password'];
    

    $sql = "SELECT * FROM akun WHERE nisn = '$nisn' AND password = '$password'";
    $res = $mysqli->query($sql);

    if(mysqli_num_rows($res) > 0){
        $_SESSION['nisn'] = $nisn;
        $_SESSION['loggedIn'] = true;
        header('Location: index.php');
    } else {
        echo 'NISN atau password salah';
    }
?>