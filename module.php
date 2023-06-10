<?php
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    } else {
        $page = '';
    }
    if($page == 'home'){
        include('pages/beranda.php');
    } else if($page == 'form-pendaftaran'){
        include('pages/form-pendaftaran.php');
    } else if($page == 'edit-pendaftaran'){
        include('pages/edit-pendaftaran.php');
    } else if($page == 'cek-status'){
        include('pages/cek-status.php');
    } else if($page == 'peringkat'){
        include('pages/peringkat.php');
    } else if($page == 'beranda-admin'){
        include('pages/beranda-admin.php');
    } else if($page == 'cek-pendaftaran-admin'){
        include('pages/cek-pendaftaran-admin.php');
    } else if($page == 'setelan-pendaftaran-admin'){
        include('pages/setelan-pendaftaran-admin.php');
    } else if($page == 'edit-data-peserta'){
        include('pages/edit-data-peserta.php');
    }
    else{
        if($_SESSION['nisn'] != 'admin'){
            include('pages/beranda.php');
        } else {
            include('pages/beranda-admin.php');
        }
    };
?>