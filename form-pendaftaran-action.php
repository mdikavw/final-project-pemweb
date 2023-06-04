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

    $sql = "INSERT INTO data_pendaftar VALUES(
        '$nisn', '$nama', '$provinsi', '$kabupaten', '$kecamatan', '$desa', '$filename_kk', '$filename_ijazah', '$rerata', '$filename_rapor', '$filename_foto', NOW()
    )";
    $res = $mysqli->query($sql);
    if($res){
        echo "Upload successful";
    } else {
        echo "Upload error";
    }
    header('Location: cek-status.html');
?>