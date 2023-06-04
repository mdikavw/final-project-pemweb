<?php
    include_once('koneksi.php');
    $nama = $_POST['nama'];
    $nisn = $_POST['nisn'];
    $provinsi = $_POST['provinsi'];
    $kabupaten = $_POST['kabupaten'];
    $kecamatan = $_POST['kecamatan'];
    $desa = $_POST['desa'];
    $rerata = $_POST['rerata'];
    $target_dir_kk = 'files-kk/';
    $target_dir_ijazah = 'files-ijazah/';
    $target_dir_rapor = 'files-rapor/';
    $target_dir_foto = 'files-foto/';
    $filename_kk =  $nisn . '_kk.' . pathinfo($_FILES['kk']['name'], PATHINFO_EXTENSION);
    $filename_ijazah =  $nisn . '_ijazah.' . pathinfo($_FILES['ijazah']['name'], PATHINFO_EXTENSION);
    $filename_rapor = $nisn . '_rapor.' . pathinfo($_FILES['rapor']['name'], PATHINFO_EXTENSION);
    $filename_foto = $nisn . '_foto.' . pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
    if(isset($_POST['edit-pendaftaran'])){
        if(move_uploaded_file($_FILES['kk']['tmp_name'], $target_dir_kk . $filename_kk)){
            echo "File upload successful";
        } else {
            echo "File upload error";
        }
    
        if(move_uploaded_file($_FILES['ijazah']['tmp_name'], $target_dir_ijazah . $filename_ijazah)){
            echo "File upload successful";
        } else {
            echo "File upload error";
        }
    
        if(move_uploaded_file($_FILES['rapor']['tmp_name'], $target_dir_rapor . $filename_rapor)){
            echo "File upload successful";
        } else {
            echo "File upload error";
        }
        
        if(move_uploaded_file($_FILES['foto']['tmp_name'], $target_dir_foto . $filename_foto)){
            echo "File upload successful";
        } else {
            echo "File upload error";
        }
        $sql = "UPDATE data_pendaftar SET
        nisn = '$nisn',
        nama = '$nama',
        provinsi = '$provinsi',
        kabupaten = '$kabupaten',
        kecamatan = '$kecamatan',
        desa = '$desa',
        nama_file_kk = '$filename_kk',
        nama_file_ijazah = '$filename_ijazah',
        rerata = '$rerata',
        nama_file_rapor = '$filename_rapor'
        ";
        $res = $mysqli->query($sql);
        if($res){
            echo "Upload successful";
        } else {
            echo "Upload error";
        }
        header('Location: cek-status.html');
    }
    
    if(isset($_POST['hapus-kk'])){
        if($mysqli->query("UPDATE data_pendaftar SET nama_file_kk = NULL WHERE nisn='$nisn'") === TRUE){
            echo("Record updated");
            if(unlink('files-kk/'.$kk)){
                echo("File deleted");
            };
        }
        header('Location: edit-pendaftaran.html');
    }
    if(isset($_POST['hapus-ijazah'])){
        if($mysqli->query("UPDATE data_pendaftar SET nama_file_ijazah = NULL WHERE nisn='$nisn'") === TRUE){
            echo("Record updated");
            if(unlink('files-ijazah/'.$ijazah)){
                echo("File deleted");
            };
        }
        header('Location: edit-pendaftaran.html');
    }
    if(isset($_POST['hapus-rapor'])){
        if($mysqli->query("UPDATE data_pendaftar SET nama_file_rapor = NULL WHERE nisn='$nisn'") === TRUE){
            echo("Record updated");
            if(unlink('files-rapor/'.$rapor)){
                echo("File deleted");
            };
        }
        header('Location: edit-pendaftaran.html');
    }
    if(isset($_POST['hapus-foto'])){
        if($mysqli->query("UPDATE data_pendaftar SET nama_file_foto = NULL WHERE nisn='$nisn'") === TRUE){
            echo("Record updated");
            if(unlink('files-foto/'.$foto)){
                echo("File deleted");
            };
        }
        header('Location: edit-pendaftaran.html');
    }
?>