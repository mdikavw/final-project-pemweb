<?php
    include_once('koneksi.php');
    $pendaftaran = $_POST['pendaftaran'];
    echo($pendaftaran);
    $edit_pendaftaran = $_POST['edit-pendaftaran'];
    echo($edit_pendaftaran);
    $sukses = 0;
    if($mysqli->query("UPDATE aksi SET status_aksi = '$pendaftaran' WHERE id = 1")){
        $sukses = $sukses + 1;
    } else {
        $sukses = $sukses - 1;
    }
    if($mysqli->query("UPDATE aksi SET status_aksi = '$edit_pendaftaran' WHERE id = 2")){
        $sukses = $sukses + 1;
    } else {
        $sukses = $sukses - 1;
    }
    if($sukses == 2){
        header("Location: setelan-pendaftaran-admin.html");
    }
?>