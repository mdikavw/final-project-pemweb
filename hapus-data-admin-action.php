<?php
    include_once('koneksi.php');
    session_start();
    $nisn = $_POST['nisn'];
    $filesQuery = "SELECT nama_file_kk, nama_file_ijazah, nama_file_rapor, nama_file_foto FROM data_pendaftar WHERE nisn='$nisn'";
    $files = $mysqli->query($filesQuery);
    if($files->num_rows > 0){
        while($row = $files->fetch_assoc()){
            $kk = $row['nama_file_kk'];
            $ijazah = $row['nama_file_ijazah'];
            $rapor = $row['nama_file_rapor'];
            $foto = $row['nama_file_foto'];
        }
    } else {
        echo("Files fetching gagal");
    }
    $sql = "DELETE FROM data_pendaftar WHERE nisn='$nisn'";
    $res = $mysqli->query($sql);
    if($res === TRUE){
        echo("Data deleted");
        if(unlink('files-kk/'.$kk)){
            echo("File deleted");
        } else {
            echo("File not deleted");
        }
        if(unlink('files-ijazah/'.$ijazah)){
            echo("File deleted");
        } else {
            echo("File not deleted");
        }
        if(unlink('files-rapor/'.$rapor)){
            echo("File deleted");
        } else {
            echo("File not deleted");
        }
        if(unlink('files-foto/'.$foto)){
            echo("File deleted");
        } else {
            echo("File not deleted");
        }
        
    } else {
        echo("Data not deleted");
    }
?>