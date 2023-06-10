<?php
    include_once('koneksi.php');
    $res = $mysqli->query("SELECT * FROM aksi");
    if($res->num_rows > 0){
        while($row = $res->fetch_assoc()){
            if($row['id'] == 1){
                $pendaftaran = $row['status_aksi'];
            } else if($row['id'] == 2){
                $edit_pendaftaran = $row['status_aksi'];
            }
        }
    }
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Setelan Pendaftaran</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Setelan Pendaftaran</li>
        </ol>
        <div class="container border border-1 rounded-4 p-4 mb-3">
            <form action="setelan-pendaftaran-admin-action.php" method="post">
                <div class="border border-1 rounded-4 p-4 mb-3">
                    <h5>Pendaftaran</h5>
                    <p>Tentukan apakah pendaftaran masih dibuka atau tidak</p>
                    <div class="form-check form-switch">
                        <input type="hidden" name="pendaftaran" value="0">
                        <input class="form-check-input" type="checkbox" role="switch" id="pendaftaran"
                            name="pendaftaran" <?php
                            if($pendaftaran == 1){
                            ?> checked <?php
                            }
                            ?> value="1" />
                        <label class="form-check-label" for="pendaftaran">OFF/ON</label>
                    </div>
                </div>
                <div class="border border-1 rounded-4 p-4 mb-3">
                    <h5>Edit Pendaftaran</h5>
                    <p>Tentukan apakah pendaftar diperbolehkan mengedit data atau tidak</p>
                    <div class="form-check form-switch">
                        <input type="hidden" name="edit-pendaftaran" value="0">
                        <input class="form-check-input" type="checkbox" role="switch" id="edit-pendaftaran"
                            name="edit-pendaftaran" <?php
                            if($edit_pendaftaran == 1){
                            ?> checked <?php
                            }
                            ?> value="1">
                        <label class="form-check-label" for="edit-pendaftaran">OFF/ON</label>
                    </div>
                </div>
                <input type="submit" value="Simpan" class="btn btn-primary">
            </form>
        </div>
    </div>
</main>