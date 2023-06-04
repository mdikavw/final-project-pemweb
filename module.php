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
    } 
    else{
        include('pages/beranda.php');
    };
?>