<?php
	include_once('koneksi.php');
	$nisn = $_SESSION['nisn'];
	$sql = "SELECT * FROM data_pendaftar WHERE nisn='$nisn'";
	$res = $mysqli->query($sql);
?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Pendaftaran</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Pendaftaran</li>
        </ol>

        <?php
$status_res = $mysqli->query("SELECT status_aksi FROM aksi WHERE id = 1");
if($status_res->fetch_column() == 0){
    echo("Pendaftaran telah ditutup");
} else {
if($res->num_rows > 0){
	echo("Data Anda ditemukan dalam database");
?>
        <br>
        <a href="cek-status.html">Cek status pendaftaran</a>
        <?php
} else {
?>

        <form action="form-pendaftaran-action.php" method="post" enctype="multipart/form-data"
            class="border border-1 rounded-4 p-4 mb-3">
            <div class="row">
                <div class="col-xl-4">
                    <div class="mb-3">
                        <label for="input-nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="input-nama" placeholder="Nama" name="nama" />
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="mb-3">
                        <label for="input-foto" class="form-label">Foto 3x4</label>
                        <input class="form-control" type="file" id="input-foto" name="foto" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4">
                    <div class="mb-3">
                        <label for="input-nisn" class="form-label">NISN</label>
                        <input type="text" class="form-control" id="input-nisn" placeholder="NISN" name="nisn" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4">
                    <div class="mb-3">
                        <label for="input-provinsi" class="form-label">Provinsi</label>
                        <input type="text" class="form-control" id="input-provinsi" placeholder="Provinsi"
                            name="provinsi" />
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="mb-3">
                        <label for="input-kabupaten" class="form-label">Kabupaten</label>
                        <input type="text" class="form-control" id="input-kabupaten" placeholder="Kabupaten"
                            name="kabupaten" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4">
                    <div class="mb-3">
                        <label for="input-kecamatan" class="form-label">Kecamatan</label>
                        <input type="text" class="form-control" id="input-kecamatan" placeholder="Kecamatan"
                            name="kecamatan" />
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="mb-3">
                        <label for="input-desa" class="form-label">Desa</label>
                        <input type="text" class="form-control" id="input-desa" placeholder="Desa" name="desa" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4">
                    <div class="mb-3">
                        <label for="input-kk" class="form-label">Kartu Keluarga</label>
                        <input class="form-control" type="file" id="input-kk" name="kk" />
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="mb-3">
                        <label for="input-ijazah" class="form-label">Ijazah</label>
                        <input class="form-control" type="file" id="input-ijazah" name="ijazah" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4">
                    <div class="mb-3">
                        <label for="input-rapor" class="form-label">Rapor</label>
                        <input class="form-control" type="file" id="input-rapor" name="rapor" />
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="mb-3">
                        <label for="input-rerata" class="form-label">Rerata Rapor</label>
                        <input type="text" class="form-control" id="input-rerata" placeholder="Rerata Rapor"
                            name="rerata" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4">
                    <div class="mb-3">
                        <input class="btn btn-primary" type="submit" />
                    </div>
                </div>
            </div>
        </form>
    </div>
</main>
<?php
	}
}
?>