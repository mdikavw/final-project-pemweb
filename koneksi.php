<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'ppdb';
    $mysqli = new mysqli($host, $username, $password, $db);

    if($mysqli->connect_error){
        echo "Failed to connect MySQL".$mysqli->connect_error."<br>";
        exit();
    } 
?>